"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.pitch = pitch;
exports.default = _default;

var _path = _interopRequireDefault(require("path"));

var _loaderUtils = _interopRequireDefault(require("loader-utils"));

var _NodeTemplatePlugin = _interopRequireDefault(require("webpack/lib/node/NodeTemplatePlugin"));

var _NodeTargetPlugin = _interopRequireDefault(require("webpack/lib/node/NodeTargetPlugin"));

var _LibraryTemplatePlugin = _interopRequireDefault(require("webpack/lib/LibraryTemplatePlugin"));

var _SingleEntryPlugin = _interopRequireDefault(require("webpack/lib/SingleEntryPlugin"));

var _LimitChunkCountPlugin = _interopRequireDefault(require("webpack/lib/optimize/LimitChunkCountPlugin"));

var _NormalModule = _interopRequireDefault(require("webpack/lib/NormalModule"));

var _schemaUtils = require("schema-utils");

var _CssDependency = _interopRequireDefault(require("./CssDependency"));

var _utils = require("./utils");

var _loaderOptions = _interopRequireDefault(require("./loader-options.json"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const pluginName = 'mini-css-extract-plugin';

function hotLoader(content, context) {
  const accept = context.locals ? '' : 'module.hot.accept(undefined, cssReload);';
  return `${content}
    if(module.hot) {
      // ${Date.now()}
      var cssReload = require(${_loaderUtils.default.stringifyRequest(context.context, _path.default.join(__dirname, 'hmr/hotModuleReplacement.js'))})(module.id, ${JSON.stringify({ ...context.options,
    locals: !!context.locals
  })});
      module.hot.dispose(cssReload);
      ${accept}
    }
  `;
}

function pitch(request) {
  const options = _loaderUtils.default.getOptions(this) || {};
  (0, _schemaUtils.validate)(_loaderOptions.default, options, {
    name: 'Mini CSS Extract Plugin Loader',
    baseDataPath: 'options'
  });
  const loaders = this.loaders.slice(this.loaderIndex + 1);
  this.addDependency(this.resourcePath);
  const childFilename = '*';
  const publicPath = typeof options.publicPath === 'string' ? options.publicPath === '' || options.publicPath.endsWith('/') ? options.publicPath : `${options.publicPath}/` : typeof options.publicPath === 'function' ? options.publicPath(this.resourcePath, this.rootContext) : this._compilation.outputOptions.publicPath;
  const outputOptions = {
    filename: childFilename,
    publicPath
  };

  const childCompiler = this._compilation.createChildCompiler(`${pluginName} ${request}`, outputOptions);

  new _NodeTemplatePlugin.default(outputOptions).apply(childCompiler);
  new _LibraryTemplatePlugin.default(null, 'commonjs2').apply(childCompiler);
  new _NodeTargetPlugin.default().apply(childCompiler);
  new _SingleEntryPlugin.default(this.context, `!!${request}`, pluginName).apply(childCompiler);
  new _LimitChunkCountPlugin.default({
    maxChunks: 1
  }).apply(childCompiler);
  childCompiler.hooks.thisCompilation.tap(`${pluginName} loader`, compilation => {
    const normalModuleHook = typeof _NormalModule.default.getCompilationHooks !== 'undefined' ? _NormalModule.default.getCompilationHooks(compilation).loader : compilation.hooks.normalModuleLoader;
    normalModuleHook.tap(`${pluginName} loader`, (loaderContext, module) => {
      if (module.request === request) {
        // eslint-disable-next-line no-param-reassign
        module.loaders = loaders.map(loader => {
          return {
            loader: loader.path,
            options: loader.options,
            ident: loader.ident
          };
        });
      }
    });
  });
  let source;
  const isWebpack4 = childCompiler.webpack ? false : typeof childCompiler.resolvers !== 'undefined';

  if (isWebpack4) {
    childCompiler.hooks.afterCompile.tap(pluginName, compilation => {
      source = compilation.assets[childFilename] && compilation.assets[childFilename].source(); // Remove all chunk assets

      compilation.chunks.forEach(chunk => {
        chunk.files.forEach(file => {
          delete compilation.assets[file]; // eslint-disable-line no-param-reassign
        });
      });
    });
  } else {
    childCompiler.hooks.compilation.tap(pluginName, compilation => {
      compilation.hooks.processAssets.tap(pluginName, () => {
        source = compilation.assets[childFilename] && compilation.assets[childFilename].source(); // Remove all chunk assets

        compilation.chunks.forEach(chunk => {
          chunk.files.forEach(file => {
            compilation.deleteAsset(file);
          });
        });
      });
    });
  }

  const callback = this.async();
  childCompiler.runAsChild((err, entries, compilation) => {
    const assets = Object.create(null);
    const assetsInfo = new Map();

    for (const asset of compilation.getAssets()) {
      assets[asset.name] = asset.source;
      assetsInfo.set(asset.name, asset.info);
    }

    const addDependencies = dependencies => {
      if (!Array.isArray(dependencies) && dependencies != null) {
        throw new Error(`Exported value was not extracted as an array: ${JSON.stringify(dependencies)}`);
      }

      const identifierCountMap = new Map();
      let lastDep;

      for (const dependency of dependencies) {
        if (!dependency.identifier) {
          // eslint-disable-next-line no-continue
          continue;
        }

        const count = identifierCountMap.get(dependency.identifier) || 0;

        this._module.addDependency(lastDep = new _CssDependency.default(dependency, dependency.context, count));

        identifierCountMap.set(dependency.identifier, count + 1);
      }

      if (lastDep) {
        lastDep.assets = assets;
        lastDep.assetsInfo = assetsInfo;
      }
    };

    if (err) {
      return callback(err);
    }

    if (compilation.errors.length > 0) {
      return callback(compilation.errors[0]);
    }

    compilation.fileDependencies.forEach(dep => {
      this.addDependency(dep);
    }, this);
    compilation.contextDependencies.forEach(dep => {
      this.addContextDependency(dep);
    }, this);

    if (!source) {
      return callback(new Error("Didn't get a result from child compiler"));
    }

    let locals;
    const esModule = typeof options.esModule !== 'undefined' ? options.esModule : true;
    const namedExport = esModule && options.modules && options.modules.namedExport;

    try {
      const originalExports = (0, _utils.evalModuleCode)(this, source, request); // eslint-disable-next-line no-underscore-dangle

      exports = originalExports.__esModule ? originalExports.default : originalExports;

      if (namedExport) {
        Object.keys(originalExports).forEach(key => {
          if (key !== 'default') {
            if (!locals) {
              locals = {};
            }

            locals[key] = originalExports[key];
          }
        });
      } else {
        locals = exports && exports.locals;
      }

      let dependencies;

      if (!Array.isArray(exports)) {
        dependencies = [[null, exports]];
      } else {
        dependencies = exports.map(([id, content, media, sourceMap]) => {
          const module = (0, _utils.findModuleById)(compilation, id);
          return {
            identifier: module.identifier(),
            context: module.context,
            content: Buffer.from(content),
            media,
            sourceMap: sourceMap ? Buffer.from(JSON.stringify(sourceMap)) : // eslint-disable-next-line no-undefined
            undefined
          };
        });
      }

      addDependencies(dependencies);
    } catch (e) {
      return callback(e);
    }

    const result = locals ? namedExport ? Object.keys(locals).map(key => `\nexport const ${key} = ${JSON.stringify(locals[key])};`).join('') : `\n${esModule ? 'export default' : 'module.exports ='} ${JSON.stringify(locals)};` : esModule ? `\nexport {};` : '';
    let resultSource = `// extracted by ${pluginName}`;
    resultSource += this.hot ? hotLoader(result, {
      context: this.context,
      options,
      locals
    }) : result;
    return callback(null, resultSource);
  });
} // eslint-disable-next-line func-names


function _default() {}
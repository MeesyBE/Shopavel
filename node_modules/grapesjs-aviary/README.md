# GrapesJS Aviary

Add the [Aviary Image Editor](https://aviary.com/) on Image Components in GrapesJS

[Demo](http://grapesjs.com/demo.html)

## Summary

* Plugin name: `gjs-aviary`
* Commands
  * `image-editor` Open the Image Editor
* Options:
  * `key` Aviary's API Key. The editor will work with any not empty string,
    images are just stored temporarily
  * `onApply` `[default: null]` By default, GrapesJS takes the modified image (hosted on AWS) and
    adds it to the Asset Manager. If you need some custom logic (eg. add watermark,
    upload the image on your servers) you can use custom 'onApply' function
    ```js
    onApply: function(url, filename, imageModel) {
      var newUrl = ...;
      editor.AssetManager.add({src: newUrl, name: filename});
      imageModel.set('src', newURL); // Update the image component
    }
    ```
  * `getFilename` `[default: null]` Customize the naming strategy
    ```js
    getFilename: function(model) {
      var name = model.get('src').split('/').pop();
      return Date.now() + '_' + name.slice(-15);
    }
    ```
  * `closeOnApply` `[default: true]` Close the image editor on apply
  * `config` `[default: {}]` Aviary's [configuration object](https://creativesdk.adobe.com/docs/web/#/articles/imageeditorui/index.html)


## Download

* `npm i grapesjs-aviary`



## Usage

```html
<link href="path/to/grapes.min.css" rel="stylesheet"/>
<script src="//feather.aviary.com/imaging/v3/editor.js"></script>
<script src="path/to/grapes.min.js"></script>
<script src="path/to/grapesjs-aviary.min.js"></script>

<div id="gjs"></div>

<script type="text/javascript">
  var editor = grapesjs.init({
      container : '#gjs',
      plugins: ['gjs-aviary'],
      pluginsOpts: {
        'gjs-aviary': {/* ...options */}
      }
  });
</script>
```



## Development

Clone the repository

```sh
$ git clone https://github.com/artf/grapesjs-aviary.git
$ cd grapesjs-aviary
```

Install it

```sh
$ npm i
```

The plugin relies on GrapesJS via `peerDependencies` so you have to install it manually (without adding it to package.json)

```sh
$ npm i grapesjs --no-save
```

Start the dev server

```sh
$ npm start
```



## License

BSD 3-Clause

@php
  $title = "Page: (".$page->id.") - ".$page->page_name;
@endphp
@extends('pages.editor.layout', [
  'title' => $title,
  'subtitle' => 'Edit pages',
  'view' => 'full'
])
@section('content')


      @livewire('pages.editor', ['page' => $page, 'id' => $page->id])
      <div id="editor" class="h-full" style="height:auto">
      </div>
      <div class="panel__top">
          <div class="panel__basic-actions"></div>
      </div>
      <div class="editor-row">
        <div class="editor-canvas">
          <div id="gjs">...</div>
        </div>
        <div class="panel__right">
          <div class="layers-container"></div>
        </div>
      </div>
      <div id="blocks"></div>
@stop

@php
  // dd($page->content)
@endphp

@section('script')

  <script type="text/javascript">

  var editor = grapesjs.init({
    container : '#editor',
    plugins: ["gjs-blocks-basic", "gjs-preset-webpage"],
    pluginsOpts: {
      "gjs-blocks-basic": {
      }
    },
    components: '{!! addslashes($page->content->page_content ?? "") !!}',
    style: "{{ $page->content->page_style ?? "* {box-sizing: border-box;}body {margin: 0;}" }}",
    canvas: {
       styles: ['https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css'],
   },
    blockManager: {
        blocks: [
          {
            id: 'section', // id is mandatory
            label: '<b>Section</b>', // You can use HTML/SVG inside labels
            attributes: { class:'gjs-block-section' },
            content: `<section>
              <h1>This is a simple title</h1>
              <div>This is just a Lorem text: Lorem ipsum dolor sit amet</div>
            </section>`,
          }, {
            id: 'text',
            label: 'Text',
            content: '<div data-gjs-type="text">Insert your text here</div>',
          }, {
            id: 'image',
            label: 'Image',
            // Select the component once it's dropped
            select: true,
            // You can pass components as a JSON instead of a simple HTML string,
            // in this case we also use a defined component type `image`
            content: { type: 'image' },
            // This triggers `active` event on dropped components and the `image`
            // reacts by opening the AssetManager
            activate: true,
          }
        ]
      },
  });
  //
  window.addEventListener('load', (event) => {
    editor.setComponents("{!! addslashes($page->content->page_content ?? "") !!}");
    editor.setStyle("{{ $page->content->page_style ?? "* {box-sizing: border-box;}body {margin: 0;}" }}");
    // editor.store();
    //
    window.livewire.emit('set:pageContentHtmlTemp', editor.getHtml())
    window.livewire.emit('set:pageContentStyleTemp', editor.getCss())
  });

  editor.on('storage:start', () => {
    window.livewire.emit('set:pageContentHtmlTemp', editor.getHtml())
    window.livewire.emit('set:pageContentStyleTemp', editor.getCss())
  });


  </script>


@stop

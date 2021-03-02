<div class="">
  <div class="flex bg-gray-600">
    <button wire:click="updateContentPage()" class="m-4 px-4 py-2 bg-pink-800 hover:bg-pink-700 rounded text-white font-bold"
            name="button">
            Save</button>
  </div>
    {{-- <div class="flex flex-row p-2 h-full">

        @include('pages.editor.sidebar')

        <div class="w-4/5 ml-4 flex bg-white ">
            <div class="flex flex-col min-w-full p-4">
                <div class="editor-view h-3/4 min-w-full">



                    {!! $pageContentHtml !!}






                </div>
                <div class=" min-w-full">
                    <textarea name="name" rows="8" cols="80">
                    {{ $pageContentJson }}
                    </textarea>
                </div>

            </div>

        </div>
    </div> --}}


    <textarea id="html" wire:model="pageContentHtmlTemp" name="html" rows="1" cols="80" class="hidden">
      {!! $page->content->page_content ?? "" !!}
    </textarea>
    <textarea id="css" wire:model="pageContentStyleTemp" name="css" rows="1" cols="80" class="hidden">
      {{ $page->content->page_style ?? "" }}
    </textarea>

</div>

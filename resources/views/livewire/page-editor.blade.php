<div class="">
  <div class="flex bg-gray-600">
    <a href="{{ route('pages.index') }}">
      <button class="m-4 px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded text-white font-bold"
              name="button">
              Cancel
      </button>
    </a>
    <button wire:click="updateContentPage()"
            class="m-4 px-4 py-2 bg-pink-800 hover:bg-pink-700 rounded text-white font-bold"
            name="button">
            Save
    </button>

    <button wire:click="pageSettings()"
            class="m-4 px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded text-white font-bold"
            name="button">
            Settings
    </button>
  </div>



  @if ($showPageSettings)
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div  class="fixed z-10 inset-0 overflow-y-auto ">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!--
              Background overlay, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" >
                <div class="absolute inset-0 bg-gray-500 opacity-75"  @click="pageSettings = false"></div>
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                Update page settings
                            </h3>
                            <div class="mt-2">
                              <form class="min-w-full" action="{{ route('pages.save', $page->id) }}" method="POST" id="SavePage">
                                @csrf()
                                <div class="form-group">
                                    <label for="">Page title </label>
                                    <input name="page_name" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $page->page_name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="">URL key </label>
                                    <input name="page_url_key" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $page->slug->slug_request ?? "" }}" />
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                    <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded-md ml-4 inline-flex items-center" form="SavePage">
                        Save
                    </button>
                    <button wire:click="{{$showPageSettings = false}}" class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded-md ml-4 inline-flex items-center" form="SavePage">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
  @endif


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

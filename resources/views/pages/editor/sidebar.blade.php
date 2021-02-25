<div x-data="{ pageSettings: false, addItem: false }" class="flex flex-col justify-between w-1/5 bg-white">
    <div class="w-full page-sidebar-header bg-gray-200 p-4">
        <a href="{{ route('pages.index') }}">
            <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                Close
            </button>
        </a>
        <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center" form="SavePage">
            Save
        </button>
    </div>
    <div class="w-full page-sidebar-items h-full bg-gray-800 text-white p-4 h-200">
        @foreach ($pageContentArray['items'] as $topItems)
          @if (isset($topItems['item']))
            <div class="page-obj-item hover:bg-gray-700 p-1">
                <span class="material-icons align-middle"> arrow_right </span>
                <span class="page-obj-title align-middle"> {{ print_r($topItems['item']['name']) }} </span>
            </div>
          @endif
        @endforeach

        <div class="bg-indigo-800 rounded px-4 py-2 mt-4" @click="addItem = !addItem">
          <span class="material-icons align-middle"> add </span>
          <span class="page-obj-title align-middle"> Add item </span>
        </div>
    </div>

    <div class="w-full page-sidebar-footer bg-gray-200 p-4">
        <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center">
            <span class="material-icons" x-on:click="pageSettings = !pageSettings">settings</span>
        </button>
    </div>



    @include('pages.editor.settings')


    <div x-show="addItem" class="fixed z-10 inset-0 overflow-y-auto ">
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
                <div class="absolute inset-0 bg-gray-500 opacity-75"  @click="addItem = false"></div>
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
            <div  class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                Add item
                            </h3>


                            <div class="flex flex-row mt-2">


                              <button class="w-20 h-20 border rounded p-4" wire.click="addDiv">
                                  <span>
                                    Div
                                  </span>
                              </button>

                              <div class="w-20 h-20 border rounded p-4 ml-4">
                                  <span>
                                    Text
                                  </span>
                              </div>


                            </div>


                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                </div>
            </div>
        </div>
    </div>



</div>

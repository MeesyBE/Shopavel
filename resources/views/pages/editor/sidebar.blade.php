<div x-data="{ pageSettings: false }" class="flex flex-col justify-between w-1/5 bg-white">
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
        <div class="page-obj-item hover:bg-gray-700 p-1">
            <span class="material-icons align-middle"> arrow_right </span>
            <span class="page-obj-title align-middle"> Items </span>
        </div>

    </div>

    <div class="w-full page-sidebar-footer bg-gray-200 p-4">
        <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center">
            <span class="material-icons" x-on:click="pageSettings = !pageSettings">settings</span>

        </button>


    </div>




<!-- This example requires Tailwind CSS v2.0+ -->
<div x-show="pageSettings" class="fixed z-10 inset-0 overflow-y-auto ">
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
        <div @click="pageSettings = true" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                            Deactivate account
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
                                <input name="url_key" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $page->page_url_key }}" />
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
                <button type="button"  x-on:click="pageSettings = false"
                  class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
</div>

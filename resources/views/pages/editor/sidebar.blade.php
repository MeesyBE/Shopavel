<div x-data="{ pageSettings: false, addItem: @entangle('addItem') }" class="flex flex-col justify-between w-1/5 bg-white">
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
    <div class="w-full page-sidebar-items h-full bg-gray-800 text-white p-4 h-200" >
      @include('pages.editor.sidebarItem', ['items' => $pageContentArray['items']])
    </div>


    <div class="w-full page-sidebar-footer bg-gray-200 p-4">
        <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center">
            <span class="material-icons" x-on:click="pageSettings = !pageSettings">settings</span>
        </button>
    </div>



    @include('pages.editor.settings')



    @include('pages.editor.allitems')



</div>

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
    <div class="w-full page-sidebar-items h-full bg-gray-800 text-white p-4 h-200" wire:sortable="updateItemOrder">
      @if (isset($pageContentArray['items'][0]))
        @foreach ($pageContentArray['items'] as $topItems)
          @if (isset($topItems['item']))
            <div class="flex page-obj-item hover:bg-gray-700 p-1 w-full" wire:sortable.item="{{ $topItems['item']['index'] }}" wire:key="item-{{ $topItems['item']['index'] }}">
              <p class="w-1/8">
                <span class="material-icons align-middle text-sm" wire:sortable.handle> menu </span>
              </p>
              <div class="flex w-3/4">
                <span class="material-icons align-middle" > arrow_right </span>
                <span class="flex flex-row page-obj-title align-middle"> <span class="text-xs text-gray-200 align-middle text-middle bg-gray-700 p-1 rounded-md mr-2">{{ $topItems['item']['type'] }}</span> {{ $topItems['item']['name'] }} </span>
              </div>
              <p class="w-1/4 text-right">
                <span class="material-icons align-middle text-sm  float-right"> settings </span>
              </p>
            </div>
          @endif
        @endforeach
      @endif

        <div class="bg-indigo-800 rounded px-4 py-2 mt-4" x-on:click="addItem = !addItem">
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



    @include('pages.editor.allitems')



</div>

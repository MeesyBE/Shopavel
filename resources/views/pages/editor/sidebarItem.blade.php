@if (isset($items[0]))
  <div x-data="{ dropdownStates: @entangle('dropdownStates') }" wire:sortable="updateItemOrder">
    @foreach ($items as $item)
        @if (isset($item['item']))
                <div wire:sortable.item="{{ $item['item']['index'] }}" wire:key="item-{{ $item['item']['index'] }}">
                  <div class="flex flex-row page-obj-item bg-gray-800 hover:bg-gray-700 p-1 w-full" >
                      <p class="w-1/8">
                          <span class="material-icons align-middle text-sm" wire:sortable.handle> menu </span>
                      </p>
                      <div class="flex w-3/4">
                          <span x-show="!dropdownStates.{{ $item['item']['type'].$item['item']['index'] }}" class="material-icons align-middle" x-on:click.prevent="dropdownStates.{{ $item['item']['type'].$item['item']['index'] }} = true"> arrow_right </span>
                          <span x-show="dropdownStates.{{ $item['item']['type'].$item['item']['index'] }}" class="material-icons align-middle" x-on:click.prevent="dropdownStates.{{ $item['item']['type'].$item['item']['index'] }} = false"> arrow_drop_down </span>
                          <span class="flex flex-row page-obj-title align-middle"> <span class="text-xs text-gray-200 align-middle text-middle bg-gray-700 p-1 rounded-md mr-2">{{ $item['item']['type'] }}</span> {{ $item['item']['name'] }} </span>
                      </div>
                      <p class="w-1/4 text-right">
                          <span class="material-icons align-middle text-sm  float-right"> settings </span>
                      </p>
                  </div>
                  {{-- x-show="dropdownStates.{{ $item['item']['type'].$item['item']['index'] }}" --}}
                  <div x-show="dropdownStates.{{ $item['item']['type'].$item['item']['index'] }}" class="w-full bg-indigo-900" >
                      <div class="ml-4">
                          item
                          @include('pages.editor.sidebarItem', ['items' => $item['item']['children']])

                      </div>
                  </div>
                </div>


        @endif
    @endforeach
  </div>
@endif
<div class="flex bg-indigo-800 rounded px-4 py-2 mt-4 w-full" x-on:click="addItem = !addItem">
    <span class="material-icons align-middle"> add </span>
    <span class="page-obj-title align-middle"> Add item </span>
</div>



{{-- @if (isset($topItems['item']['children'][0]))
<div wire:sortable-group.item-group="{{ $topItems['item']['index'] }}">
@foreach ($topItems['item']['children'] as $children)
<div wire:key="item-{{ $children['item']['index'] }}" wire:sortable-group.item="{{ $children['item']['index'] }}">
    {{ $children['item']['name'] }}
</div>
@endforeach
</div>
@endif --}}

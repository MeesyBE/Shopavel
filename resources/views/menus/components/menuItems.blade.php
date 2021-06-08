@foreach ($items as $menuItem)
  <div class="ml-4 mb-4 flex flex-col border rounded w-full" wire:key="{{ $menuItem['id'] }}" x-data="{ openItem{{$menuItem['id']}}: false }">
    <div class="flex flex-row">
      <div class="flex w-1/4 m-4">
        <p class="font-bold text-base">
          {{ $menuItem['menu_item_name'] }}
        </p>
      </div>
      <div class="flex w-1/4 m-4">
        {{ $menuItem['menu_item_parent_id'] }}
      </div>
      <div class="flex w-1/6 m-4">
        <button class="border rounded px-4 py-2" x-on:click.prevent="openItem{{$menuItem['id']}} = !openItem{{$menuItem['id']}}">Edit</button>
        <button class="border rounded px-4 py-2" wire:click="deleteMenuItem({{ $menuItem['id'] }})">Delete</button>
      </div>
    </div>
    <div x-show="openItem{{ $menuItem['id'] }}" class="flex flex-row w-full">
        <div class="w-1/4 m-4">
          <input class="border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800"
          wire:model="menuItemsSave.{{ $menuItem['id'] }}.menu_item_name"  type="text" value="{{ $menuItem['menu_item_name'] }}" />

        </div>
        <div class="w-1/4 m-4">
          <select class="border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800"
          wire:model="menuItemsSave.{{ $menuItem['id'] }}.menu_item_parent_id"  type="text" value="{{ $menuItem['menu_item_name'] }}">

            <option value="0" @if ($menuItem['menu_item_parent_id'] == 0) selected="selected" @endif> - </option>

            @foreach ($menuItemsAll as $menuItemParent)
              @if ($menuItem['id'] !=  $menuItemParent->menu_item_parent_id)
                <option value="{{ $menuItemParent->id }}" class="py-1"
                @if ($menuItemParent->id == $menuItem['menu_item_parent_id'])
                  selected="selected"
                @endif >
                  {{ $menuItemParent->menu_item_name }}
               </option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="w-1/4 m-4">
        </div>
        <div class="w-1/4 m-4">

        </div>

    </div>
    <div class="flex flex-col w-full">
      @include('menus.components.menuitems', ['items' => $menuItem['children']])
    </div>

  </div>
@endforeach

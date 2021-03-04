<div>
  <div class="flex flex-row py-4">
    <div class="flex w-1/2 border rounded">
      <div class="w-full m-4">
        <p class="text-2xl font-bold">New Menu item</p>

        <div class="form-group mt-4">
          <label for="product_attribute_key">Label</label>
          <input name="product_attribute_key" id="product_attribute_key"
          class="w-full border-2 bg-white rounded px-3 py-2 outline-none focus:outline-none focus:bg-white focus:border-indigo-800"
          wire:model="newMenuItemName" />
        </div>
        @if ($menuItems->count() > 0)
          <div class="form-group mt-4">
            <label for="product_attribute_type">Parent item</label>
            <select name="product_attribute_type" id="product_attribute_type"
            class="w-full border-2 border-gray-200 bg-white rounded px-3 py-2 outline-none focus:outline-none focus:bg-white focus:border-indigo-800"
            wire:model="newMenuItemParent">
            <option value="0" class="py-1" selected> - </option>
            @foreach ($menuItems as $menuItem)
              <option value="{{ $menuItem->id }}" class="py-1">{{ $menuItem->menu_item_name }}</option>
            @endforeach

            </select>
          </div>
        @endif
        <div class="form-group mt-4">
          <label for="product_attribute_name">Link</label>
          <input name="product_attribute_name" id="product_attribute_name"
          class="w-full border-2 bg-white rounded px-3 py-2 outline-none focus:outline-none focus:bg-white focus:border-indigo-800"
          wire:model="newMenuItemHref" value="/" />
        </div>
        <div class="form-group mt-4">
          <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center"
           wire:click.prevent="createNewMenuItem">Create</button>
        </div>
      </div>
    </div>
    <div class="flex w-1/2 border rounded ml-4">
      <div class="w-full m-4">
        <p class="text-2xl font-bold">Menu Items</p>
        <div class="w-full mt-4">
          {{-- <pre>
            @php
              print_r($menuItemsLayout);
            @endphp
          </pre> --}}
          @include('menus.components.menuitems', ['items' => $menuItemsLayout])
        </div>
      </div>
    </div>
  </div>

</div>

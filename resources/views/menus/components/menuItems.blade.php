@foreach ($items as $menuItem)
  <div class="ml-6 flex flex-col border rounded w-full">
    <div class="flex flex-row w-full">
      <div class="flex w-1/4 m-4">
        {{ $menuItem['menu_item_name'] }}
      </div>
      <div class="flex w-1/4 m-4">
        {{ $menuItem['menu_item_parent_id'] }}
      </div>
    </div>
    <div class="flex w-full">
      @include('menus.components.menuitems', ['items' => $menuItem['children']])
    </div>

  </div>
@endforeach

<div>
    <div class="flex flex-row justify-between p-4">
        <div class="">
            <a href="{{ route('menus.index') }}">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <span class="material-icons">close</span>
                    Close
                </button>
            </a>
            <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4"
            wire:click.prevent="menuUpdate">
                <span class="material-icons">
                    save
                </span> Save
                <span class="mat-button-focus-overlay"></span>
            </button>
        </div>

    </div>

    <form class="flex w-full" id="SaveMenu" action="{{ route('menus.save', $menuId) }}" wire:submit.prevent method="post">
        {{ csrf_field() }}
        <div class="p-4 w-full">

            <div class="">
                <div class="form-group">
                    <label for="">menu title </label>
                    <input class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800"
                    wire:model="menuName" type="text"/>
                </div>

                <div class="flex flex-row py-4">
                    <div class="flex w-1/2 border rounded">
                        <div class="w-full m-4">
                            <p class="text-2xl font-bold">New Menu item</p>

                            <div class="form-group mt-4">
                                <label>Label</label>
                                <input  class="w-full border-2 bg-white rounded px-3 py-2 outline-none focus:outline-none focus:bg-white focus:border-indigo-800"
                                wire:model="newMenuItemName" />
                            </div>
                            @if ($menuItems->count() > 0)
                            <div class="form-group mt-4">
                                <label>Parent item</label>
                                <select class="w-full border-2 border-gray-200 bg-white rounded px-3 py-2 outline-none focus:outline-none focus:bg-white focus:border-indigo-800"
                                  wire:model="newMenuItemParent">
                                    <option value="0" class="py-1" selected> - </option>
                                    @foreach ($menuItemsAll as $menuItem)
                                    <option value="{{ $menuItem->id }}" class="py-1">{{ $menuItem->menu_item_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            @endif
                            <div class="form-group mt-4">
                                <label>Link</label>
                                <input class="w-full border-2 bg-white rounded px-3 py-2 outline-none focus:outline-none focus:bg-white focus:border-indigo-800"
                                wire:model="newMenuItemHref" value="/" />
                            </div>
                            <div class="form-group mt-4">
                                <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center"
                                wire:click.prevent="createNewMenuItem">Create</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-1/2 border rounded ml-4">
                        <div class="w-full m-4">
                            <p class="text-2xl font-bold">Menu Items</p>

                        </div>
                        <div class="flex flex-col w-full mt-4 pr-4">

                            {{-- <pre>
          @php
            print_r($menuItemsLayout);
          @endphp
        </pre> --}}
                            @include('menus.components.menuitems', ['items' => $menuItemsLayout])
                            <div class="flex m-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>

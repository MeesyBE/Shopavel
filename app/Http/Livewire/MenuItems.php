<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menuitem;
use App\Models\Menus\Menu;
use Auth;

class MenuItems extends Component
{
    public $menuName;
    public $menuId;
    public $menuItems;
    public $menuItemsAll;
    public $menuItemsSave = [];
    public $menuItemsLayout;
    public $newMenuItemName;
    public $newMenuItemParent;
    public $updateMenuItems = [];
    public $newMenuItemHref = "/";

    public function mount($id)
    {
      $this->menuId = $id;

      $this->menuName = Menu::find($id)->first()->menu_name;
      $this->menuItems = Menuitem::where([['menu_id', '=', $id], ['menu_item_parent_id', '=', '0']])->get();
      $this->menuItemsAll = Menuitem::where('menu_id', '=', $id)->get();
      $this->menuItemsSave = Menuitem::where('menu_id', '=', $id)->get()->keyBy('id')->toArray();
      $this->menuItemsLayout = $this->menuAddChildren($this->menuItems);
      // dd($this->menuItemsSave);
    }

    public function menuAddChildren($menuItems)
    {
      $menuArray;
      foreach ($menuItems->toArray() as $menuItem) {
        $menuChildren = Menuitem::where([['menu_id', '=', $this->menuId], ['menu_item_parent_id', '=', $menuItem['id']]])->get();
        $menuItem['children'] = $this->menuAddChildren($menuChildren);
        $menuArray[] = $menuItem;
      }
      return $menuArray ?? [];

    }

    public function createNewMenuItem()
    {
      $menuItem = new MenuItem;

      $menuItem->menu_item_name = $this->newMenuItemName;
      $menuItem->menu_id = $this->menuId['id'];
      $menuItem->menu_item_parent_id = $this->newMenuItemParent ?? 0;
      $menuItem->menu_item_href = $this->newMenuItemHref;
      $menuItem->menu_item_created_by = Auth::id();
      $menuItem->menu_item_last_updated_by = Auth::id();
      // dd($menuItem);
      $menuItem->save();
      $this->menuItems = Menuitem::where([['menu_id', '=', $this->menuId], ['menu_item_parent_id', '=', '0']])->get();
      $this->menuItemsAll = Menuitem::where('menu_id', '=', $this->menuId)->get();
      $this->menuItemsLayout = $this->menuAddChildren($this->menuItems);

      $this->newMenuItemName = "";
      $this->newMenuItemHref = "/";
    }

    public function deleteMenuItem($id)
    {
      $menuItem = MenuItem::destroy($id);
      $this->menuItemsAll = Menuitem::where('menu_id', '=', $id)->get();
      $this->menuItemsSave = Menuitem::where('menu_id', '=', $id)->get()->keyBy('id')->toArray();
      $this->menuItemsLayout = $this->menuAddChildren($this->menuItems);
    }

    public function menuUpdate()
    {
      // dd($this->menuItemsSave);
      foreach ($this->menuItemsSave as $key => $menuItem) {
        $saveMenuItem = MenuItem::find($key);

        $saveMenuItem->menu_item_name = $menuItem['menu_item_name'];
        $saveMenuItem->menu_item_parent_id = $menuItem['menu_item_parent_id'];
        $saveMenuItem->menu_item_last_updated_by = Auth::id();
        $saveMenuItem->save();
      }
      $this->mount($this->menuId);

    }

    public function render()
    {
        return view('livewire.menu-items');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menuitem;
use Auth;

class MenuItems extends Component
{
    public $menuId;
    public $menuItems;
    public $newMenuItemName;
    public $newMenuItemParent;
    public $newMenuItemHref = "/";

    public function mount($id)
    {
      $this->menuId = $id;
      $this->menuItems = Menuitem::where('menu_id', '=', $id)->get();
    }

    public function createNewMenuItem()
    {
      $menuItem = new MenuItem;

      $menuItem->menu_item_name = $this->newMenuItemName;
      $menuItem->menu_id = $this->menuId;
      $menuItem->menu_item_parent_id = $this->newMenuItemParent;
      $menuItem->menu_item_href = $this->newMenuItemHref;
      $menuItem->menu_item_created_by = Auth::id();
      $menuItem->menu_item_last_updated_by = Auth::id();

      $menuItem->save();
      $this->menuItems = Menuitem::where('menu_id', '=', $this->menuId)->get();

      $this->newMenuItemName = "";
      $this->newMenuItemHref = "/";
    }

    public function render()
    {
        return view('livewire.menu-items');
    }
}

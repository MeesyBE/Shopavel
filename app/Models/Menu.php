<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menuitem;

class Menu extends Model
{
    use HasFactory;

    public function menuItems()
    {
        return $this->hasMany(Menuitem::class, 'menu_id');
    }
}

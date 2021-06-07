<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartEntity;

class CartController extends Controller
{
    //
    public function list(){
      $carts = CartEntity::get();
      return view('carts.list', compact('carts'));
    }
}

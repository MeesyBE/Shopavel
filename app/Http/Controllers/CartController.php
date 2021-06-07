<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartEntity;

class CartController extends Controller
{
    //
    public function list(){
      $carts = CartEntity::where('page_status', '!=', '-1')->get();
      return view('carts.list', ['carts' => $carts]);
    }
}

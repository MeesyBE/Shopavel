<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders\OrderEntity;

class OrderController extends Controller
{
    //
    public function list(){
      $orders = OrderEntity::get();
      return view('orders.list', compact('orders'));
    }
}

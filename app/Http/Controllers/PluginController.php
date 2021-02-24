<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginController extends Controller
{
  public function __construct()
  {
      
  }
  public function list(){

    return view('plugins.list');
  }
}

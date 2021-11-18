<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plugins\PluginEntity;

class PluginController extends Controller
{
  public function __construct()
  {

  }
  public function list(){

    return view('plugins.list');
  }
}

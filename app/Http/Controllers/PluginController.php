<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginController extends Controller
{
  public function __construct()
  {
      $this->middleware(function ($request, $next) {
          $this->user= Auth::user();

          return $next($request);
      });
  }
  public function list(){

    return view('plugins.list');
  }
}

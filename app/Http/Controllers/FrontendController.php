<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageEntity;
use App\Models\Menu;

class FrontendController extends Controller
{
    public function index($urlkey = ''){

      $page = PageEntity::with('content')->where('page_url_key', '=', "/".$urlkey)->first();
      $menu = Menu::with('menuItems')->first();
      if(!isset($page->page_name)){
        abort(404);
      }

      return view('frontend.show', ['page' => $page, 'menu' => $menu]);
    }
}

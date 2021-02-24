<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageEntity;

class FrontendController extends Controller
{
    public function index($urlkey = ''){

      $page = PageEntity::where('page_url_key', '=', "/".$urlkey)->first();

      if(!isset($page->page_name)){
        abort(404);
      }

      return view('frontend.show', ['page' => $page]);
    }
}

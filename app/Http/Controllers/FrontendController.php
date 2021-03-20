<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageEntity;
use App\Models\Slug;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class FrontendController extends Controller
{
    public function index($urlkey = 'index'){
      // $page = Slug::with('model')->where('slug_request', '=', $urlkey)->first();

      $page = Slug::query()->where('slug_request', '=', $urlkey)
        ->with(['model' => function (MorphTo $morphTo) {
            $morphTo->morphWith([
                PageEntity::class => ['content'],
            ]);
        }])->first();

      $menu = Menu::with('menuItems')->first();
      // if(!isset($page->page_name)){
      //   abort(404);
      // }

      return view('frontend.show', ['page' => $page->slugmodel, 'menu' => $menu]);
    }

    public function category($urlkey = ''){

      $page = Slug::with('model')->where('slug_request', '=', $urlkey)->first();
      $menu = Menu::with('menuItems')->first();
      if(!isset($page->page_name)){
        abort(404);
      }

      return view('frontend.show', ['page' => $page->model, 'menu' => $menu]);
    }
}

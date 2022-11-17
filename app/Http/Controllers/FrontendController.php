<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages\PageEntity;
use App\Models\Categories\CategoryEntity;
use App\Models\Products\ProductEntity;
use App\Models\Slug;
use App\Models\Menus\Menu;
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
      if(!isset($page->slugmodel)){
        abort(404);
      }

      return view('frontend.show', ['page' => $page->slugmodel, 'menu' => $menu]);
    }

    public function category($urlkey = 'index'){
      // $page = Slug::with('model')->where('slug_request', '=', $urlkey)->first();

      $page = Slug::query()->where('slug_request', '=', $urlkey)
        ->with(['model' => function (MorphTo $morphTo) {
            $morphTo->morphWith([
                CategoryEntity::class => [],
            ]);
        }])->first();

      $products =  $page->slugmodel->products;

      $menu = Menu::with('menuItems')->first();
      if(!isset($page->slugmodel)){
        abort(404);
      }

      return view('frontend.show', ['page' => $page->slugmodel, 'menu' => $menu, 'products' => $products ]);
    }

    public function product($urlkey = 'index'){
      // $page = Slug::with('model')->where('slug_request', '=', $urlkey)->first();

      $page = Slug::query()->where('slug_request', '=', $urlkey)
        ->with(['model' => function (MorphTo $morphTo) {
            $morphTo->morphWith([
                ProductEntity::class => [],
            ]);
        }])->first();

      $product =  $page->slugmodel;
      // dd($page->toArray());

      $menu = Menu::with('menuItems')->first();
      // if(!isset($page->slugmodel)){
      //   abort(404);
      // }

      return view('frontend.show', ['page' => $page->slugmodel, 'menu' => $menu, 'product' => $product ]);
    }
}

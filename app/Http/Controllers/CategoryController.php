<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryEntity;
use App\Models\ProductEntity;
use App\Models\PorductToCategory;
use App\Models\Slug;
use Auth;

class CategoryController extends Controller
{
  public function list(){
    $categories = CategoryEntity::with('slug')->get();
    return view('categories.list', ['categories' => $categories]);
  }

  public function new(){

    return view('categories.new');
  }

  public function create(Request $request){
    // dd($request);
    $category = new CategoryEntity;

    $category->category_name = $request->category_name;
    $category->category_status = 0;
    $category->category_type = 0;
    $category->category_layout = 0;
    $category->category_created_by = Auth::id();
    $category->category_last_updated_by = Auth::id();

    $category->save();

    $slug = new Slug;
    $slug->slug_request = $request->url_key;
    $slug->slug_type = 0;
    $slug->slugmodel_id = $category->id;
    $slug->slugmodel_type = 'App\Models\CategoryEntity';
    $slug->save();

    return redirect('/admin/categories');
  }

  public function edit($id){
    // dd($request);
    $category = CategoryEntity::with('slug')->find($id);
    $products = ProductEntity::get();

    return view('categories.edit', ['category' => $category, 'products' => $products]);
  }

  public function save(Request $request, $id){
    // dd($request);
    $category = CategoryEntity::find($id);

    if ($request->category_enable == "on") {
      $category->category_status = 1;
    }else{
      $category->category_status = 0;
    }

    $category->category_name = $request->category_name;
    $category->category_type = 0;
    $category->category_layout = 0;
    $category->category_last_updated_by = Auth::id();

    $category->save();


    if (isset($category->slug)) {
      $slug = $category->slug;
      $slug->slug_request = $request->category_url_key;
      $slug->slug_type = 0;
      $slug->save();
    }else{
      $slug = new Slug;
      $slug->slug_request = $request->category_url_key;
      $slug->slug_type = 0;
      $slug->slugmodel_id = $category->id;
      $slug->slugmodel_type = 'App\Models\CategoryEntity';
      $slug->save();
    }


    return back();
  }

}

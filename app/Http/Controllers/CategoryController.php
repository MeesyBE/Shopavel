<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryEntity;
use Auth;

class CategoryController extends Controller
{
  public function list(){
    $categories = CategoryEntity::get();
    return view('categories.list', ['categories' => $categories]);
  }

  public function new(){

    return view('categories.new');
  }

  public function create(Request $request){
    // dd($request);
    $category = new CategoryEntity;

    $category->category_name = $request->category_name;
    $category->category_url_key = $request->category_url_key;
    $category->category_status = 0;
    $category->category_type = 0;
    $category->category_layout = 0;
    $category->category_created_by = Auth::id();
    $category->category_last_updated_by = Auth::id();

    $category->save();
    return redirect('/admin/categories');
  }

  public function edit($id){
    // dd($request);
    $category = CategoryEntity::find($id);

    return view('categories.edit', ['category' => $category]);
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
    $category->category_url_key = $request->category_url_key;
    $category->category_type = 0;
    $category->category_layout = 0;
    $category->category_last_updated_by = Auth::id();

    $category->save();


    return back();
  }

}

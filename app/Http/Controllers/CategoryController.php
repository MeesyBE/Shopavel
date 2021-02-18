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
    $Category = new CategoryEntity;

    $Category->Category_name = $request->Category_name;
    $Category->Category_url_key = $request->url_key;
    $Category->Category_status = 0;
    $Category->Category_type = 0;
    $Category->Category_layout = 0;
    $Category->Category_created_by = Auth::id();
    $Category->Category_last_updated_by = Auth::id();

    $Category->save();
    return redirect('/admin/categories');
  }

  public function edit($id){
    // dd($request);
    $Category = CategoryEntity::find($id);

    return view('categories.edit', ['Category' => $Category]);
  }
}

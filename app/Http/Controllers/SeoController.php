<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slug;


class SeoController extends Controller
{
  public function slugs(){
    $slugs = Slug::get();
    return view('seo.slugs.list', compact('slugs'));
  }

  public function slugEdit($id){
    $slug = Slug::find($id);
    return view('seo.slugs.edit', compact('slug'));
  }

  public function slugSave(Request $request, $id){
    $slug = Slug::find($id);
    $slug->slug_request = $request->slug_request;
    $slug->save();
    return back();
  }
}

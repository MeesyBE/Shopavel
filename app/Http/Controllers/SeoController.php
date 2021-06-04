<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slug;


class SeoController extends Controller
{
  public function slugs(){
    $slugs = Slug::get();
    return view('seo.slugs.index', compact('slugs'));
  }
}

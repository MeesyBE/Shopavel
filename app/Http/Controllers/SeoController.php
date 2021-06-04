<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoController extends Controller
{
  public function slugs(){
    return view('seo.slugs.index');
  }
}

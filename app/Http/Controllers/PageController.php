<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages\PageEntity;
use App\Models\Slug;
use Auth;

class PageController extends Controller
{

    public function list(){
      $pages = PageEntity::where('page_status', '!=', '-1')->get();
      return view('pages.list', ['pages' => $pages]);
    }

    public function new(){

      return view('pages.new');
    }

    public function create(Request $request){
      // dd($request);
      $page = new PageEntity;
      $page->page_name = $request->page_name;
      $page->page_status = 0;
      $page->page_type = 0;
      $page->page_layout = 0;
      $page->page_created_by = Auth::id();
      $page->page_last_updated_by = Auth::id();
      $page->save();

      $slug = new Slug;
      $slug->slug_request = $request->url_key;
      $slug->slug_type = 0;
      $slug->slugmodel_id = $page->id;
      $slug->slugmodel_type = 'App\Models\Pages\PageEntity';
      $slug->save();

      return redirect('/admin/pages');
    }

    public function edit($id){
      // dd($request);
      $page = PageEntity::with('content')->find($id);

      return view('pages.edit', ['page' => $page]);
    }

    public function save($id, Request $request){
      // dd($request);
      $page = PageEntity::find($id);

      $page->page_name = $request->page_name;
      $page->page_status = 0;
      $page->page_type = 0;
      $page->page_layout = 0;
      $page->page_last_updated_by = Auth::id();

      $page->save();


      if (isset($page->slug)) {
        $slug = $page->slug;
        $slug->slug_request = $request->page_url_key;
        $slug->slug_type = 0;
        $slug->save();
      }else{
        $slug = new Slug;
        $slug->slug_request = $request->page_url_key;
        $slug->slug_type = 0;
        $slug->slugmodel_id = $page->id;
        $slug->slugmodel_type = 'App\Models\Pages\PageEntity';
        $slug->save();
      }


      return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Auth;

class MenuController extends Controller
{
  public function list(){
    $menus = Menu::get();
    return view('menus.list', ['menus' => $menus]);
  }

  public function new(){

    return view('menus.new');
  }

  public function create(Request $request){
    // dd($request);
    $menu = new Menu;

    $menu->menu_name = $request->menu_name;
    $menu->menu_url_key = $request->menu_url_key;
    $menu->menu_status = 0;
    $menu->menu_type = 0;
    $menu->menu_layout = 0;
    $menu->menu_created_by = Auth::id();
    $menu->menu_last_updated_by = Auth::id();

    $menu->save();
    return redirect('/admin/menus');
  }

  public function edit($id){
    // dd($request);
    $menu = Menu::find($id);

    return view('menus.edit', ['menu' => $menu]);
  }

  public function save(Request $request, $id){
    // dd($request);
    $menu = Menu::find($id);

    if ($request->menu_enable == "on") {
      $menu->menu_status = 1;
    }else{
      $menu->menu_status = 0;
    }

    $menu->menu_name = $request->menu_name;
    $menu->menu_url_key = $request->menu_url_key;
    $menu->menu_type = 0;
    $menu->menu_layout = 0;
    $menu->menu_last_updated_by = Auth::id();

    $menu->save();


    return back();
  }

}

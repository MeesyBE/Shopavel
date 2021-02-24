<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
  public function index(){
    $settings = Setting::get();
    return view('settings.index', ['settings' => $settings]);
  }


}

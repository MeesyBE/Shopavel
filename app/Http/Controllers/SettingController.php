<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
  public function index(){
    $settings = Setting::get();
    $settingsArray = [];

    foreach ($settings as $setting) {
      $settingsArray[$setting->settings_key] = $setting->settings_value;
    }

    return view('settings.index', ['settings' => $settingsArray]);
  }

  public function save(Request $request){
    foreach ($request->all() as $key => $value) {
      if (!empty($value)) {
        if(strpos($key, 'setting') !== false){

          $settings = Setting::where('settings_key', '=', $key)->first();
          if(isset($settings->settings_key)){
            $settings->settings_value = $value;
            $settings->save();
          }else{
            $settings = new Setting;
            $settings->settings_key = $key;
            $settings->settings_value = $value;
            $settings->save();
          }

        }
      }

    }
    return redirect()->back();
  }
}

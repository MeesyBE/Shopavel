<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  public function list(){
    $users = User::get();
    return view('users.list', ['users' => $users]);
  }

  public function new(){
    return view('users.new');
  }

  public function profile(){

    return view('profile.show');
  }
}

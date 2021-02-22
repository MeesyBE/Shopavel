<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function list(){
    $users = User::get();
    return view('users.list', ['users' => $users]);
  }

  public function me(){

    return view('users.me');
  }
}

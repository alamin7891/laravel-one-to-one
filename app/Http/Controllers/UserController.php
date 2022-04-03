<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Models\User;
use\App\Models\Profile;

class UserController extends Controller
{
   public function index() {
       $users = user::all();
       return view('users')->with('users', $users);
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomesController extends Controller
{
   public function logout() {

Auth::logout();
return redirect()->route('login')->with('success','User Logout Succesfully');
   }
}

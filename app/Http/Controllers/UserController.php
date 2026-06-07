<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function login( Request $req){
    return $req->all();
   }

   function showLogin(){
    return view('login');
   }
}

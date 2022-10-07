<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
class Users extends Controller
{ 
   function list(){
      $data = person::all();
    return view('home',compact('data'));
   }
}

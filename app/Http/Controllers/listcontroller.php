<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
class listcontroller extends Controller
{
     function fetch(){
        $data = person::all();
        return view('fetchdata',['data'=>$data]);
    }
}

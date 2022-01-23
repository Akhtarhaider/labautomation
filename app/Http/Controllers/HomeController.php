<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function layout(){

         return view('layout');
    }

    public function login(){

        return view('login');
   }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        dd("fdjhfdjk");
         return view('layout');
    }

    public function login()
    {
        dd("MARKED");
        return view('login');
    }

    public function test()
    {
        return view('layout');
    }

}

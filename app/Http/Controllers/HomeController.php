<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home.blade.php
    public function home(){
        return view('home.home');
    }
    //about.blade.php
    public function about(){
        return view('home.about');
    }
    //dashboard.blade.php
    public function dashboard(){
        return view('home.dashboard');
    }

}

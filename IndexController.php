<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class indexController extends Controller
{
    public function index(){
        return view ('index');
    }
    public function adminlogin(){
        return view('adminlogin');
    }
    public function adotziv(){
        return view('adotziv');
    }
    public function navigpanel(){
        return view('navigpanel');
    }
}


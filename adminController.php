<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\coments;

class adminController extends Controller
{
    public function otziv(){
        $otziv = coments::all();
        return view('otziv',compact("otziv"));
    }
}

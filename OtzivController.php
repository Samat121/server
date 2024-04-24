<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otziv;

class OtzivController extends Controller
{
    public function otziv(){
        $otziv = Otziv::all();
        return view('otziv',compact("otziv"));
    }
}





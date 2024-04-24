<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\yslugi;
class YslugController extends Controller
{

    public function otziv(){
        $otziv = yslugi ::all();
        return view('yslugi',compact("otziv"));
    }


}

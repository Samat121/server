<?php

namespace App\Http\Controllers;

use App\Models\kits;
use App\Models\komand;
use App\Models\pk;

use Illuminate\Http\Request;

class zayvkaController extends Controller
{
    public function index(){



        $kits = kits::all();
        $pk = pk::all();





        return view ('zayvka',compact('kits','pk', ));


    }
}

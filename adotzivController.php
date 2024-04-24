<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otziv;
class adotzivController extends Controller
{
    public function otziv(){
        $otziv = Otziv ::all();
        return view('adotziv',compact("otziv"));
    }
    public function saveOtziv(){

        if (request('bat') == "delete"){
            $Otziv = Otziv:: where('name', "=", request('name'), "and", 'text', "=", request('text'))->delete();
        }
        return redirect()->action([adotzivController::class, 'otziv']);
    }

}

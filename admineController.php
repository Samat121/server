<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\coments;

class admineController extends Controller
{
    public function otziv(){
        $otziv = coments::all()->where('verification', '=', 'false');

        return view('admine',compact("otziv"));
    }

    public function saveOtziv(){

        // (название кнопки) сравнивает со значением (save)
   if (request('bat') == "save"){
       //если проверка прошла со значением true
       $coments = coments:: where('name', "=", request('name'), "and", 'email', "=", request('email'), "and", 'problems', "=", request('problems'), "and", 'adres', "=", request('adres'), "and", 'categori', "=", request('categori'))->update([
           'name' => request('name'),
           'email' => request('email'),
           'problems' => request('problems'),
           'categori' => request('categori'),
           'adres' => request('adres'),
           'verification' => true
       ]);
       return redirect()->action([admineController::class, 'otziv']);
   }

        if (request('bat') == "delete"){
            $coments = coments:: where('name', "=", request('name'), "and", 'email', "=", request('email'), "and", 'problems', "=", request('problems'), "and", 'adres', "=", request('adres'), "and", 'categori', "=", request('categori'))->delete();
        }
        return redirect()->action([admineController::class, 'otziv']);
}
}


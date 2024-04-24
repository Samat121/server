<?php

namespace App\Http\Controllers;

use App\Models\Busket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BusketController extends Controller
{
    public function add($prod = 0){
        $prod_id = $prod;
        $us_id = Auth::user()->id;

        busket::insert(['prod_id'=>$prod_id, 'us_id'=>$us_id]);

        return redirect()->route('katalog');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function buy(Request $request,$buk = 0){
        $prod_id = $buk;
        $num = $request->num;
        $us_id = Auth::user()->id;

        buy::insert(['prod_id'=>$prod_id, 'us_id'=>$us_id, 'num'=>$num]);

        return redirect()->route('korz');
    }
    public function delete($b = 0)
    {
        $buy = buy::where('b_id', $b);

        $buy->delete();

        return redirect()->route('index');
    }
}

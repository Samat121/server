<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuyhomeController extends Controller
{
    public function buyhome()
    {
        $buy = DB::table('users')
            ->leftJoin('buy', 'users.id', '=', 'buy.us_id')
            ->leftJoin('product', 'buy.prod_id', '=', 'product.id')
            ->select('product.id', 'product.prod_name', 'product.price', 'product.size', 'product.image', 'buy.b_id', 'buy.num')
            ->where('buy.us_id', '=', Auth::user()->id)
            ->get();
        return view('buyhome',compact('buy'));
    }
}

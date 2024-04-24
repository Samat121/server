<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Busket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminpanelController extends Controller
{
    public function adminpanel()
    {
        $buy = DB::table('users')
            ->leftJoin('buy', 'users.id', '=', 'buy.us_id')
            ->leftJoin('product', 'buy.prod_id', '=', 'product.id')
            ->select('product.id', 'product.prod_name', 'product.price', 'product.size', 'product.image', 'buy.b_id', 'buy.num', 'users.name', 'users.email', 'users.location')
            ->get();
        return view('admin',compact('buy'));
    }

}

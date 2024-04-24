<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Busket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KorzController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $busket = DB::table('users')
            ->leftJoin('busket', 'users.id', '=', 'busket.us_id')
            ->leftJoin('product', 'busket.prod_id', '=', 'product.id')
            ->select('product.id', 'product.prod_name', 'product.price', 'product.size', 'product.image', 'busket.busk_id')
            ->where('busket.us_id', '=', Auth::user()->id)
            ->get();
        return view('korz',compact('busket'));
    }
    public function delete($buk = 0)
    {
        $busket = busket::where('busk_id', $buk);

        $busket->delete();

        return redirect()->route('korz');
    }
}

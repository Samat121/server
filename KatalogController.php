<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function katalog(){
        $product = product::all();

        return view ('katalog',compact('product'));
    }
}

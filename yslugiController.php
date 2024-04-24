<?php

namespace App\Http\Controllers;


use App\Models\komand;


use Illuminate\Http\Request;

class yslugiController extends Controller
{
    public function index(){
        return view ('yslugi');
    }
}

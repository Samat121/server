<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class feedbackController extends Controller
{
    public function index(){
        $coments = feedback::all()->all();
        return view('coments',compact("coments"));
    }
}

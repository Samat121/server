<?php

namespace App\Http\Controllers;

use App\Models\coments;
use Illuminate\Http\Request;


class comentsController extends Controller
{
    public function index()
    {
        return view('coment');
    }
    public function store(Request $request)
    {
        $post = new coments();
        $post->name = $request->name;
        $post->telephone = $request->telephone;
        $post->email = $request->email;
        $post->problems = $request->problems;
        $post->adres = $request->adres;
        $post->categori = $request->categori;
        $post -> verification = false;
        $post->save();
        return redirect('coment');
    }
}



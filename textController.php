<?php

namespace App\Http\Controllers;

use App\Models\text;
use Illuminate\Http\Request;

class textController extends Controller
{
    public function index()
    {
        return view('Otziv');
    }
    public function store(Request $request)
    {
        $post = new text();
        $post->name = $request->name;
        $post-> text = $request->text;
        $post->save();
        return redirect('Otziv');
    }
}




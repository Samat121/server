<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\FeedRequest;
class FeedController extends Controller
{
    public function feed(){
        return view ('feed');
    }

}

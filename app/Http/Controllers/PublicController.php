<?php

namespace App\Http\Controllers;

use \App\Elearning;
use Illuminate\Http\Request;
use LaravelVideoEmbed;

class PublicController extends Controller
{
    public function index(Request $request)
    {
    	$e = Elearning::all();
    	return view('welcome', compact('e'));
    }

    public function learn(Request $request)
    {
    	$e = Elearning::where('kategori_id', $request->id)->get();
    	return view('learn', compact('e'));
    }
}

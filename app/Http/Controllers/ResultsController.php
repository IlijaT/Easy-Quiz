<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class ResultsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }


    public function index() 
    {
        if(auth()->user()->isAdmin()) {
            $results = Result::orderBy('score', 'desc')->get();
        } else {
            $results = Result::where('user_id', auth()->id())->orderBy('score', 'desc')->get();
        }

        return view('results.index', compact('results'));
    }
}

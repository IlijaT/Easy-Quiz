<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTestsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function store() 
    {
        //dd(request('questions')); 
        auth()->user()->submitAnswers(request('questions'));

        session()->flash('message', 'You finished your test!');

        return redirect()->route('tests.index');

    }
}

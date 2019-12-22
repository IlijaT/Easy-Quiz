<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['index', 'show']]);

    }
    
    public function index()
    {
        $tests = Test::all();
        return view('tests.index', compact('tests'));
    }

    
    public function create()
    {
        return view('tests.create');
    }

    
    public function store(Request $request)
    {

        request()->validate(['title' => 'required|max:255']);


        Test::create([
            'title' => request('title'),
            'description' => request('description'),
            'creator_id' => auth()->id(),
        ]);

        session()->flash('message', 'You created a new test. Add some questions and answers to it!');

        // TO:Do REDIREKCIJA NA KREIRANJE PITANJA I ODGOVORA!!!
        // TO:Do REDIREKCIJA NA KREIRANJE PITANJA I ODGOVORA!!!
        // TO:Do REDIREKCIJA NA KREIRANJE PITANJA I ODGOVORA!!!
        // TO:Do REDIREKCIJA NA KREIRANJE PITANJA I ODGOVORA!!!

        return back();
    }

     
    public function show(Test $test)
    {
        dd('tests.show');        
    }

 
    public function edit(Test $test)
    {       
        dd('tests.edit');

    }

  
    public function update(Request $request, Test $test)
    {
        dd('tests.update');
    }

 
    public function destroy(Test $test)
    {
        dd('helloooooo');        
    }
}

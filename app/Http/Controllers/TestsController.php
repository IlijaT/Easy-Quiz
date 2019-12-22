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
        dd('tests.index');
    }

    
    public function create()
    {
        return view('tests.create');
    }

    
    public function store(Request $request)
    {
        // dd(request()->all());

        Test::create([
            'title' => request('title'),
            'description' => request('description'),
            'creator_id' => auth()->id(),
        ]);

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
        dd('tests.destroy');        
    }
}

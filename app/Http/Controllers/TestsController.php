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
        $tests = Test::latest()->get();
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

        session()->flash('message', 'You created a new quiz topic. Add some questions and answers to it!');

        return redirect()->route('tests.index');
    }

     
    public function show(Test $test)
    {
        return view('tests.show', compact('test'));
    }

 
    public function edit(Test $test)
    {       
        return view('tests.edit', compact('test'));

    }

  
    public function update(Request $request, Test $test)
    {
        request()->validate(['title' => 'required|max:255']);

        Test::create([
            'title' => request('title'),
            'description' => request('description'),
            'creator_id' => auth()->id(),
        ]);

        session()->flash('message', 'Quiz topic has beeen updated!');

        return redirect()->route('tests.index');

        
    }

 
    public function destroy(Test $test)
    {

        $test->delete();

        session()->flash('message', 'Test has been deleted!');
        return back();

    }
}

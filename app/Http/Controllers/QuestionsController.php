<?php

namespace App\Http\Controllers;

use App\Test;
use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);

    }
    
    public function index()
    {
        $questions = Question::latest()->get();
        return view('questions.index', compact('questions'));
    }

  
    public function create()
    {
        $tests = Test::all();

        return view('questions.create', compact('tests'));
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show(Question $question)
    {
        //
    }

   
    public function edit(Question $question)
    {
        //
    }

  
    public function update(Request $request, Question $question)
    {
        //
    }

  
    public function destroy(Question $question)
    {
        //
    }
}

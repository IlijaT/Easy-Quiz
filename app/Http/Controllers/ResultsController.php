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
            $results = Result::orderBy('score', 'desc')->paginate(10);
        } else {
            $results = Result::where('user_id', auth()->id())->orderBy('score', 'desc')->paginate(10);
        }

        return view('results.index', compact('results'));
    }

    public function show($id) 
    {
        $result = Result::findOrFail($id)->load('test', 'user');

        $userAnswers = $result->user->questionAnswers()->where('test_id', $result->test_id)->get();

        $this->authorize('view', $result);
         
        return view('results.show', compact('result', 'userAnswers'));
    }
}

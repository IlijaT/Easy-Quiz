<?php

namespace App\Http\Controllers;

use App\Test;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionFormRequest;

class QuestionsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);

    }
    
    public function index()
    {
        $questions = Question::latest()->paginate(20);
        return view('questions.index', compact('questions'));
    }

  
    public function create()
    {
        $tests = Test::all();

        return view('questions.create', compact('tests'));
    }

   
    public function store(QuestionFormRequest $request)
    {
        $test = Test::findOrFail(request('test_id'));
        $question = $test->addQuestion(request('query'));
        $question->saveAnswers(request('answers'), request('correct'));

        session()->flash('message', 'You created a new question with it\'s answers!');

        return redirect()->route('tests.index');
    }

  
    public function show(Question $question)
    {
        //
    }

   
    public function edit(Question $question)
    {
        $tests = Test::all();
        $question->load('answers');

        return view('questions.edit', compact('question', 'tests'));
    }

  
    public function update(QuestionFormRequest $request, Question $question)
    {
        $question->update([
            'test_id' => request('test_id'),
            'query' => request('query'),
        ]);

        $question->answers()->delete();

        $question->saveAnswers(request('answers'), request('correct'));

        session()->flash('message', 'You updated a question with it\'s answers!');

        return redirect()->route('questions.index');

    }

  
    public function destroy(Question $question)
    {
        $question->delete();
        
        session()->flash('message', 'You deleted a question with it\'s answers!');

        return redirect()->route('questions.index');
    }
}

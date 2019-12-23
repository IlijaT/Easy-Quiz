@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card aliceblue" style="border:none">
                <div>
                   <h2 class="text-center">Create New Question With Answers</h2>
                </div>

                <div class="mt-4">
                   
                    @if(count($tests))
                    <form method="POST" action="{{ route('questions.store') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="quiz">Select a quiz to which you want to add a new question</label>
                            <select class="form-control" id="quiz" name="test_id" required>
                                <option selected disabled value="">Choose one...</option>
                                @foreach($tests as $test)
                                    <option {{ request('test_id') ? 'selected' : '' }} 
                                        value="{{ old('test_id', $test->id) }} ">
                                        {{ $test->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <hr>
                        
                        <div class="form-group mt-2">
                            <label for="title">Question text</label>
                            <input value="{{ old('title') }}" type="text" class="form-control" id="title" placeholder="Question..." name="query" required>
                        </div>

                        <hr>

                        <div class="d-flex mt-4">
                            <div class="col-md-6 pl-0">
                                <h4 class="text-center">Answers</h4>

                                <div class="form-group mt-4">
                                    <label for="solution1">Solution #1</label>
                                    <input value="{{ old('answers[solution_1]') }}" type="text" class="form-control" id="solution1" placeholder="Sloution..."  name="answers[solution_1]" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="solution2">Solution #2</label>
                                    <input value="{{ old('answers[solution_2]') }}" type="text" class="form-control" id="solution2" placeholder="Sloution..."  name="answers[solution_2]" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="solution3">Solution #3</label>
                                    <input value="{{ old('answers[solution_3]') }}" type="text" class="form-control" id="solution3" placeholder="Sloution..."  name="answers[solution_3]" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="solution4">Solution #4</label>
                                    <input value="{{ old('answers[solution_4]') }}" type="text" class="form-control" id="solution4" placeholder="Sloution..."  name="answers[solution_4]" required>
                                </div>
                            </div>

                            <div class="col-md-6 pr-0">
                                <h4 class="text-center">Correct answer</h4>

                                <div class="form-group mt-4">
                                    <label for="correct">Select correct answer</label>

                                    <select class="form-control" id="correct" name="correct" required>
                                        <option selected disabled value="">Choose one...</option>
                                        <option value="solution_1">Solution #1</option>
                                        <option value="solution_2">Solution #2</option>
                                        <option value="solution_3">Solution #3</option>
                                        <option value="solution_4">Solution #4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex mt-4">
                            <button type="submit" class="btn custom-button ml-auto px-5">Create</button>
                        </div>

                    </form>
                    @else
                        Before adding questions, you must qreate a quiz!

                    @endif
                    @include('layouts.errors')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

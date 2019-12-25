@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card aliceblue" style="border:none">
                <div>
                    {{-- $userAnswers  --}}
                    <h2 class="text-center">Quiz Results</h2>
                    <h5><b>User:</b>  {{ $result->user->name}}</h5>
                    <h5><b>Quiz:</b> {{ $result->test->title }}</h5>
                    <h5><b>Score:</b> {{ $result->score }} %</h5>
                    <h5><b>Date:</b> {{ $result->created_at->format('d.m.Y H:i') }} </h5>
                </div>

                <hr>
                
                <div>
                 
                        @foreach($result->test->questions as $question)
                        <div class="card mt-3">
                            <div class="card-header" style="background-color:lavander">
                                <h5>{{ $question->query }}</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item p-2">
                                        <div class="form-check">
                                            @if($question->answers[0]->is_correct && $userAnswers->contains('id', $question->answers[0]->id))
                                                <i class="form-check-input fa fa-check text-weight-bold" style="color:green"></i>
                                            @endif
                                            <label class="form-check-label {{ $question->answers[0]->is_correct ? 'lightseagreen' : '' }}">
                                                {{ $question->answers[0]->solution }}
                                            </label>
                                            @if($userAnswers->contains('id', $question->answers[0]->id) && !$question->answers[0]->is_correct)
                                                <i class="fa fa-times text-weight-bold" style="color:tomato"></i>
                                            @endif
                                        </div>
                                    </li>
                                    <li class="list-group-item p-2">
                                        <div class="form-check">
                                            @if($question->answers[1]->is_correct && $userAnswers->contains('id', $question->answers[1]->id))
                                                <i class="form-check-input fa fa-check text-weight-bold" style="color:green"></i>
                                            @endif
                                            <label class="form-check-label {{ $question->answers[1]->is_correct ? 'lightseagreen' : '' }}">
                                                {{ $question->answers[1]->solution }}
                                            </label>
                                            @if($userAnswers->contains('id', $question->answers[1]->id) && !$question->answers[1]->is_correct)
                                                <i class="fa fa-times text-weight-bold" style="color:tomato"></i>
                                            @endif
                                        </div>
                                    </li>
                                    <li class="list-group-item p-2">
                                        <div class="form-check">
                                            @if($question->answers[2]->is_correct && $userAnswers->contains('id', $question->answers[2]->id))
                                                <i class="form-check-input fa fa-check text-weight-bold" style="color:green"></i>
                                            @endif
                                            <label class="form-check-label {{ $question->answers[2]->is_correct ? 'lightseagreen' : '' }}" >
                                                {{ $question->answers[2]->solution }}
                                            </label>
                                            @if($userAnswers->contains('id', $question->answers[2]->id) && !$question->answers[2]->is_correct)
                                                <i class="fa fa-times text-weight-bold" style="color:tomato"></i>
                                            @endif
                                        </div>
                                    </li>
                                    <li class="list-group-item p-2">
                                        <div class="form-check">
                                            @if($question->answers[3]->is_correct && $userAnswers->contains('id', $question->answers[3]->id))
                                                <i class="form-check-input fa fa-check text-weight-bold" style="color:green"></i>
                                            @endif
                                            <label class="form-check-label {{ $question->answers[3]->is_correct ? 'lightseagreen' : '' }}" >
                                                {{ $question->answers[3]->solution }}
                                            </label>
                                            @if($userAnswers->contains('id', $question->answers[3]->id)  && !$question->answers[3]->is_correct)
                                                <i class="fa fa-times text-weight-bold" style="color:tomato"></i>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
 
           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
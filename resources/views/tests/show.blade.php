@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card aliceblue" style="border:none">
                <div>
                    <h2 class="text-center">{{ $test->title }}</h2>
                    <p class="text-center">{{ $test->description }}</p>
                </div>
                
                <div>
                   
                    <form method="POST" action="{{ route('user.test.store')}}">
                        @csrf

                        @foreach($test->questions as $question)
                        <div class="card mt-3">
                            <div class="card-header" style="background-color:lavander">
                                <h5>{{ $question->query }}</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="questions[{{$question->id}}]" value="{{$question->answers[0]->id}}">
                                            <label class="form-check-label"  >
                                                {{ $question->answers[0]->solution }}
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="questions[{{$question->id}}]" value="{{$question->answers[1]->id}}">
                                            <label class="form-check-label">
                                                {{ $question->answers[1]->solution }}
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="questions[{{$question->id}}]" value="{{$question->answers[2]->id}}">
                                            <label class="form-check-label">
                                                {{ $question->answers[2]->solution }}
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="questions[{{$question->id}}]" value="{{$question->answers[3]->id}}">
                                            <label class="form-check-label">
                                                {{ $question->answers[3]->solution }}
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach

                        <div class="d-flex mt-3">
                            <button type="submit" class="ml-auto btn custom-button px-5 py-2">Submit</button>
                        </div>

                     
                    </form>
                    @include('layouts.errors')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
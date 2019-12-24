@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card aliceblue" style="border:none">
                <div>
                    <h2 class="text-center">All Quizes</h2>
                </div>

                <div class="mt-4">

                    <table class="table table-bordered table-striped {{ count($tests) > 0 ? 'datatable' : '' }} dt-select">
                        <thead class="text-light" style="background-color:grey">
                            <tr>
                                <th>Quiz title</th>
                                <th>Number of questions</th>
                                <th>Participans</th>
                                <th>Created</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @if (count($tests) > 0)
                                @foreach ($tests as $test)
                                    <tr>
                                        <td>{{ $test->title }}</td>
                                        <td>{{ $test->questions->count() }}</td>
                                        <td>{{ $test->numberOfParticipants() }}</td>
                                        <td>{{  $test->created_at->diffForHumans()  }}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('tests.show', [$test]) }}"> 
                                                <button href="{{ route('tests.show', [$test]) }}" 
                                                    class="btn custom-button  custom-button-blue mx-1">
                                                    Start Quiz
                                                </button>
                                            </a>

                                            @if(auth()->user()->isAdmin())
                                                <a href="{{ route('tests.edit', [$test]) }}"> 
                                                    <button class="btn custom-button custom-button-green mx-1">
                                                        Edit
                                                    </button>
                                                </a>
                                                <a href="{{ route('questions.create', ['quizId' => $test->id]) }}"> 
                                                    <button class="btn custom-button  custom-button-blue mx-1">
                                                        Add New Question
                                                    </button>
                                                </a>

                                                <form class="mx-1" action="{{ route('tests.destroy', [$test]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn custom-button" type="submit">Delete</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">No quizes yet</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection  

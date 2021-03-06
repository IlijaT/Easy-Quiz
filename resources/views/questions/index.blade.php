@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card aliceblue" style="border:none">
                <div>
                    <h2 class="text-center">All Questions</h2>
                </div>

                
                <div>
                    <a href="{{ route('questions.create') }}"> 
                        <button class="btn custom-button custom-button-green">
                            Add New Question
                        </button>
                    </a>
                </div>
    

                <div class="mt-4">

                    <table class="table table-bordered table-striped {{ count($questions) > 0 ? 'datatable' : '' }} dt-select">
                        <thead class="text-light" style="background-color:grey">
                            <tr>
                                <th>Question text</th>
                                <th>Quiz title</th>
                                <th>Created</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @if (count($questions) > 0)
                                @foreach ($questions as $question)
                                    <tr>
                                        <td>{{ $question->query }}</td>

                                        <td>{{ $question->test->title }}</td>
                                        <td>{{  $question->created_at->diffForHumans()  }}</td>
                                        <td>
                                            <div  class="d-flex justify-content-center">
                                                <a href="{{ route('questions.edit', [$question]) }}"> 
                                                    <button class="btn custom-button custom-button-blue mx-1">
                                                        Edit
                                                    </button>
                                                </a>
                                                <form class="mx-1" action="{{ route('questions.destroy', [$question]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn custom-button" type="submit">Delete</button>
                                                </form>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">No questions yet</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if($questions->count())
                        {{ $questions->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection  

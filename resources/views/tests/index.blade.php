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
                        <thead>
                            <tr>
                                <th>Quiz title</th>
                                <th>Participans</th>
                                <th>Created</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @if (count($tests) > 0)
                                @foreach ($tests as $test)
                                    <tr data-entry-id="{{ $test->id }}">
                                        <td>{{ $test->title }}</td>

                                        {{-- TO:DO $test->participants() --}}
                                        <td>33 (hardcoded)</td>
                                        <td>{{  $test->created_at->diffForHumans()  }}</td>
                                        <td class="d-flex justify-content-center">
                                            <button href="{{ route('tests.show', [$test]) }}" class="btn custom-button  custom-button-blue mx-1">Start Quiz</button>
                                            @if(auth()->user()->isAdmin())
                                                <a href="{{ route('tests.edit', [$test]) }}"> 
                                                    <button class="btn custom-button custom-button-green mx-1">
                                                        Edit
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
                                    <td colspan="3">No quizes yet</td>
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

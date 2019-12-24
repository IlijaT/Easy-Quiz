@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card aliceblue" style="border:none">
                <div>
                    <h2 class="text-center">{{ auth()->user()->isAdmin() ? 'All Users Results' : 'Your Results'}}</h2>
                </div>

                <div class="mt-4">
                   
                    <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }} dt-select">
                        <thead class="text-light" style="background-color:grey">
                            <tr>
                                <th>Participant name</th>
                                <th>Participant email</th>
                                <th>Quiz title</th>
                                <th>Score</th>
                                <th>Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @if (count($results) > 0)
                                @foreach ($results as $result)
                                    <tr>
                                        <td>{{ $result->user->name }}</td>
                                        <td>{{ $result->user->email }}</td>
                                        <td>{{ $result->test->title }}</td>
                                        <td>{{ $result->score }}%</td>
                                        <td>{{  $result->created_at->format('d.m.Y H:i')  }}</td>
                                        <td class="d-flex justify-content-center">
                                            <h4><a href="{{ route('results.show', ['id' => $result->id]) }}"><i class="fa fa-eye"></i></a></h4>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">No results yet</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if($results->count())
                        {{ $results->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection  

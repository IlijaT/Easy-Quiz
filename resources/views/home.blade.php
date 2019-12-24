@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-3">
        <div class="card-counter primary">
          <i class="fa fa-database"></i>
          <span class="count-numbers">{{ $tests }}</span>
          <span class="count-name">Quizes</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter danger">
            <i class="fa fa-question"></i>
          <span class="count-numbers">{{ $questions }}</span>
          <span class="count-name">Questions</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter success">
          <i class="fa fa-users"></i>
          <span class="count-numbers">{{ $users }}</span>
          <span class="count-name">Users</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter info">
            <i class="fa fa-users"></i>
          <span class="count-numbers">{{ $results}}</span>
          <span class="count-name">Participations</span>
        </div>
      </div>
    </div>
  </div>      
@endsection

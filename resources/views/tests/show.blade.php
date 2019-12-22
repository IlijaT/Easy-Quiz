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
                <hr>
                
                <div class="mt-4">
                   
                    <form method="POST">
                     
                    </form>
                    @include('layouts.errors')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
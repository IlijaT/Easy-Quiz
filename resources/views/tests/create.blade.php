@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card aliceblue" style="border:none">
                <div>
                   <h2>Create New Test</h2>
                </div>

                <div class="card-body mt-4">
                   
                    <form method="POST" action="{{ route('tests.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Test title</label>
                            <input type="text" class="form-control" id="title" placeholder="Test title..." name="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="desc">Test descrition</label>
                            <textarea class="form-control" id="desc" rows="5" name="description" placeholder="Short description about test..."></textarea>
                        </div>
                        
                        <div class="d-flex">
                            <button type="submit" class="btn custom-button ml-auto px-5">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

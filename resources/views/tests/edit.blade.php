@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card aliceblue" style="border:none">
                <div>
                   <h2 class="text-center">Edit Quiz Topic</h2>
                </div>
                
                <div class="mt-4">
                   
                    <form method="POST" action="{{ route('tests.update', [$test]) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="title">Quiz title</label>
                            <input value="{{ old('title', $test->title ) }}" type="text" class="form-control" id="title" placeholder="Quiz title..." name="title" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="desc">Quiz descrition</label>
                            <textarea class="form-control" 
                                id="desc" rows="5" 
                                name="description" 
                                placeholder="Short description about test...">{{ old('description', $test->description ) }}
                            </textarea>
                        </div>
                        
                        <div class="d-flex">
                            <button type="submit" class="btn custom-button ml-auto px-5">Create</button>
                        </div>

                    </form>
                    @include('layouts.errors')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('content')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class=" px-0">
                <h1 class="display ">In your opinion, how can the problem of climate pollution be solved?</h1>
                </div>
        </div>
        <form class="form-horizontal" >
        <div class="card-body">
            <div class="form-group row mt-5">
                <div class="col-sm">
                    <textarea type="text" rows="5" class="form-control @error('description') is-invalid @enderror" id="fname" name="description"
                        value="">
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="border-top " style="text-align: end;">
            <div class="card-body">
                <center><button type="submit" class="btn btn-primary">
                    Add
                </button></center>
            </div>
        </div>
    </main>
@endsection

@extends('Dashboard.layout.app')

@section('content')
    <!-- Bread crumb -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Add Event</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Add Event</a>
                            </li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bread crumb -->

    <!-- Container fluid -->
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('events.store') }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="form-group row mt-5">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="fname" placeholder="First Name Here" name="title"
                                        value="{{ old('title') }}" />
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Time</label>
                                <div class="col-sm-9">
                                    <input type="time" class="form-control @error('time') is-invalid @enderror"
                                        id="fname" name="time" value="{{ old('time') }}" />
                                    @error('time')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('city') is-invalid @enderror"
                                        id="fname" name="city" value="{{ old('city') }}" />
                                    @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        id="fname" name="date" value="{{ old('date') }}" />
                                    @error('date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mt-5">
                                <label for="fname"
                                    class="col-sm-3 text-end control-label col-form-label">Location</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('location') is-invalid @enderror"
                                        id="fname" name="location" value="{{ old('location') }}" />
                                    @error('location')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="fname" name="image" value="{{ old('image') }}" />
                                    @error('path')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="fname"
                                    class="col-sm-3 text-end control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="fname" name="description"
                                        value="">
                                        {{ old('description') }}
                                    </textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="border-top " style="text-align: end;">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Page Content -->
    </div>
    <!-- End Container fluid -->
@endsection

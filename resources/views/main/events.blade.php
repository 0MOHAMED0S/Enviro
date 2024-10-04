@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <center>
                    <h1 class="display-4 fst-italic">Check Our Events </h1>
                </center>
            </div>
        </div>
        <div class="row mb-2">
            @foreach ($events as $event)
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Egypt</strong>
                        <h3 class="mb-0">{{$event->title}}</h3>
                        <div class="mb-1 text-body-secondary">{{$event->date}}</div>
                        <p class="card-text mb-auto">{{$event->description}}.</p>
                        <a href="{{$event->location}}" target="blank" class="icon-link gap-1 icon-link-hover stretched-link">
                            Location
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img width="200" height="250" src="{{asset('storage/'.$event->image)}}" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

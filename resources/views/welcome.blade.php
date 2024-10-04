@extends('layouts.master')
@section('content')
    <div class="container marketing mt-3">
        <div class="row featurette"
            style="    background-image: linear-gradient(129deg, #303030     55%, #ffe6fa00 29%);
    padding: 25px;">
            <div class="col-md-7">
                <h2 style="color: white" class="featurette-heading fw-normal lh-1">At Envo, </h2>
                <br>
                <p style="color: white" class="lead">we are a global network of people committed to reducing pollution and
                    creating sustainable solutions. Whether you’re passionate about cleaning up plastic from our oceans,
                    improving air quality, or raising awareness about the impact of waste on our communities, there’s a
                    place for you here.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" src="{{ asset('assets/files/Water_pollution-removebg-preview.svg') }}"
                    alt="Water Pollution">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette"
            style="    background-image: linear-gradient(217deg, #303030 66%, #ffe6fa00 29%);
    padding: 25px;
    color: aliceblue;">
            <div class="col-md-7 order-md-2">
                <h2 style="margin-top: 50px" class="featurette-heading fw-normal lh-1">What We Are Do.</h2>
                <p class="lead">-Raise Awareness: Through educational campaigns, events, and digital content, we bring the
                    issue of pollution to the forefront of global discussions.
                    -Take Action: We organize clean-up efforts, plant trees, reduce waste, and promote eco-friendly habits
                    that help protect the planet.
                    - Inspire Change: By working together, we push for stronger environmental policies, corporate
                    responsibility, and lasting change that will benefit generations to come.

                    <b>Join Us Become a part of a movement that’s driving real, impactful change. Whether you're
                        volunteering, participating in discussions, or sharing ideas, your contribution matters.</b>

                <h2>Let’s clean up the planet, one step at a time.</p>
                </h2>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" src="{{ asset('assets/files/e.png') }}" alt="Water Pollution">

            </div>
        </div>
        <br>
        <br>
        <hr class="featurette-divider">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <center>
                    <h1 class="display-4 fst-italic">Check Our Last Events</h1>
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
    </div><!-- /.container -->
@endsection

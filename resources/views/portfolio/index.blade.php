@extends('layouts.default')

@section('content')

<section id="portfolio-home" class="page">
    <div class="content">
        <h1 class="slogan heading">Hi, I'm Matt Crandell</h1>
        <div class="button-holder">
            <a href="#portfolio" class="btn btn-outline-white page-scroll">
                See For Yourself
                <svg class="i-chevron-bottom" viewBox="0 0 32 32" width="15" height="15" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M30 12 L16 24 2 12"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="portfolio" class="page">
    <div class="content">

        <div class="portfolio-grid">
        @foreach($portfolio as $key=>$client)
            @include('layouts.thumbnail')
        @endforeach
        </div>

        <h2>Other Clients</h2>

        <ul>
            <li>Heather Pines Adult Care - Clarkston, MI</li>
            <li>The Gate - Big Rapids, MI</li>
            <li>Laura Jasurda - Clarkston, MI</li>
            <li>Common Sense Canine Center, Inc - Ortonville, MI</li>
            <li>Accurate Physical Therapy - Pontiac, MI</li>
            <li>Gary Zirwes - Health and Wellness</li>
            <li>Oxford Plumbing &amp; Heating Air Vac Furnace Company - Oxford, MI</li>
            <li>Culvers of Lake Orion, MI</li>
        </ul>

        <hr>

        <div>
            <p>Interested in getting your next project off to a great start?</p>
            <p>
                <a href="{{url('/#contact')}}" class="btn btn-apple">
                    Contact Me
                    <svg id="i-chevron-right" viewBox="0 0 32 32" width="15" height="15" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M12 30 L24 16 12 2" />
                    </svg>
                </a>
            </p>
        </div>

    </div>
</section>

@endsection
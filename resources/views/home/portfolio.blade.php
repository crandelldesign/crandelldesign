@extends('layouts.default')
@section('content')

<div id="portfolio-home" class="container-fluid page">
    <div class="content">
        <h1 class="slogan heading">Hi, I'm Matt Crandell</h1>
        <div class="button-holder">
            <a href="#portfolio" class="btn btn-clear btn-lg page-scroll">See My Work <i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>

<div id="portfolio" class="container-fluid page">
    <div class="content">

        <div class="row">
        @foreach($portfolio as $key=>$client)
            @include('layouts.thumbnail')
            @if(($key+1) % 4 == 0)
            </div><div class="row">
            @endif
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
        </ul>

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <p>Interested in getting your next project off to a great start?</p>
                <p><a href="{{url('/#contact')}}" class="btn btn-apple animsition-link">Contact Me <i class="fa fa-angle-right"></i></a></p>
            </div>
        </div>


    </div>
</div>

@stop
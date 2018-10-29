@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Sage Orthodontics</h1>
        <p class="city-view-more">Portage, MI</p>

        <hr>

        <p class="header-img text-center"><img src="{{url('/img/samples/sageorthodontics-mockup.jpg')}}" alt="Sage Orthodontics Website Mockup" class="portfolio-img" /></p>

        <p class="section-description">In this website for Sage Orthodontics, located in Portage, MI, I incorporated not only the colors in the logo, but also colors used in the office itself. My goal was to create a very "hygienic" look using clean lines and colors that were pleasing to the eye.</p>

        <div class="portfolio-item-grid">
            <div>
                <img src="{{url('/img/samples/sageorthodontics1.jpg')}}" alt="Sage Orthodontics Website 1" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/sageorthodontics2.jpg')}}" alt="Sage Orthodontics Website 2" class="portfolio-img" />
            </div>
        </div>

        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])

    </div>
</section>

@endsection
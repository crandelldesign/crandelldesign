@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Rifle River Campground</h1>

        <p class="city-view-more">Sterling, MI | <a href="https://www.riflerivercampground.com" target="_blank" rel="noreferrer noopener">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img src="{{url('/img/samples/rifle-river-campground-mockup1.jpg')}}" alt="Responsive Display of the Rifle River Campground Website" class="portfolio-img" /></p>

        <p class="section-description">This website was created for Rifle River Campground. It was built utilizing WordPress allowing the customer to be able to edit the content on the site without coding knowledge.</p>
        <p class="section-description">The website is simple and user friendly yet informative. It provides details on everything that the campground has to offer.</p>

        <div class="portfolio-item-grid">
            <div>
                <img src="{{url('/img/samples/rifle-river-campground-mockup2.jpg')}}" alt="Mockup of the Rifle River Campground Website" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/rifle-river-campground1.jpg')}}" alt="Rifle River Campground Website Image 1" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/rifle-river-campground2.jpg')}}" alt="Rifle River Campground Website Image 2" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/rifle-river-campground3.jpg')}}" alt="Rifle River Campground Website Image 3" class="portfolio-img" />
            </div>
        </div>
        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>
@endsection
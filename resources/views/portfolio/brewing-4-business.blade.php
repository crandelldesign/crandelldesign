@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Brewing 4 Business</h1>
        <p class="city-view-more">Waterford, MI</p>

        <hr>

        <p class="header-img text-center"><img src="{{url('/img/samples/brewing-4-business-mockup1.jpg')}}" alt="Brewing 4 Business Mockup" class="portfolio-img" /></p>

        <p class="section-description">This is a logo and flyer for the Brewing 4 Business networking event between the Clarkston Area Chamber of Commerce and Waterford Chamber of Commerce. The event featured breweries, beer samples, and food.</p>
        <p class="section-description">Both the logo and flyer utilize the same typefaces and color scheme. The logo was utilized for banners and some event promotions. The flyer would be used for mail flyers and online promotions.<p>

        <div class="portfolio-item-grid">
            <div>
                <img src="{{url('/img/samples/brewing-4-business1.jpg')}}" alt="Brewing 4 Business Logo 1" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/brewing-4-business2.jpg')}}" alt="Brewing 4 Business Logo 2" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/brewing-4-business3.jpg')}}" alt="Brewing 4 Business Logo 3" class="portfolio-img" />
            </div>
        </div>

        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])

    </div>
</section>

@endsection
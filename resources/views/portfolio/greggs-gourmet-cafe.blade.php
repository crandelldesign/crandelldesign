@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">
        <h1>Gregg's Gourmet Cafe</h1>

        <p class="city-view-more">Clarkston, MI | <a href="https://www.greggsgourmetcafe.com" target="_blank">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img src="{{url('/img/samples/greggsgourmetcafe-responsive.jpg')}}" alt="Responsive Display of the Gregg's Gourmet Cafe Website" class="portfolio-img" /></p>

        <p class="section-description">This is a website that I created for Gregg's Gourmet Cafe of Clarkston, MI. The design of the site borrows the colors and simplicity of the existing logo.</p>

        <div class="portfolio-item-grid">
            <div>
                <img src="{{url('/img/samples/greggsgourmetcafe1.jpg')}}" alt="Gregg's Gourmet Cafe Website 1" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/greggsgourmetcafe2.jpg')}}" alt="Gregg's Gourmet Cafe Website 2" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/greggsgourmetcafe3.jpg')}}" alt="Gregg's Gourmet Cafe Website 3" class="portfolio-img" />
            </div>
        </div>
        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>

@endsection
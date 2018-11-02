@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">
        <h1>Alchin's Disposal</h1>
        <p class="city-view-more">Fowlerville, MI | <a href="https://www.alchinsdisposal.com" target="_blank" rel="noreferrer noopener">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img src="{{url('/img/samples/alchinsdisposal-mockup1.jpg')}}" alt="Responsive Display of the Alchin's Disposal Website" class="portfolio-img" /></p>

        <p class="section-description">I redesigned the website for Alchin's Disposal to take advantage of new technologies and new design trends. The new website uses bolder colors and takes advantage of white space to fill the screen in a fresh and inviting way. The logo renovation helps build the brand of the company while also bringing something more unique to the table. The website, of course, is responsive and works on all devices.</p>
        <p class="section-description">Starting with a clear and concise style guide, I was able to quickly build out the website and exceed the client's expectations. Keeping with the vision of the style guide, change requests by the client could quickly be applied.</p>

        <div class="portfolio-item-grid">
            <div>
                <img src="{{url('/img/samples/alchinsdisposal1.jpg')}}" alt="Alchin's Disposal Website 1" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/alchinsdisposal2.jpg')}}" alt="Alchin's Disposal Website 2" class="portfolio-img" />
            </div>
            <div>
                <img src="{{url('/img/samples/alchinsdisposal-mockup2.jpg')}}" alt="Alchin's Disposal website on a laptop and phone" class="portfolio-img" />
            </div>
        </div>

        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>
@endsection
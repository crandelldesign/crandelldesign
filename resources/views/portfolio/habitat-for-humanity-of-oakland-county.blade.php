@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Habitat for Humanity of Oakland County</h1>
        <p class="city-view-more">Pontiac, MI | <a href="https://www.habitatoakland.org" target="_blank" rel="noreferrer noopener">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img srcset="{{url('/img/samples/habitat-for-humanity-responsive-banner@2x.jpg')}} 2x" src="{{url('/img/samples/habitat-for-humanity-responsive-banner.jpg')}}" alt="Responsive Display of the Habitat for Humanity of Oakland County Website" class="img-responsive center-block portfolio-img portfolio-browser" /></p>

        <p class="section-description">This custom WordPress backed website for news, events, and other valuable resources also features bright yet clean design.</p>

        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/samples/habitat-for-humanity-browser-homepage@2x.jpg')}} 2x" src="{{url('/img/samples/habitat-for-humanity-browser-homepage.jpg')}}" alt="Homepage of the Habitat for Humanity of Oakland County Website" class="img-responsive center-block portfolio-img portfolio-browser" />
            </div>
            <div>
                <img src="{{url('/img/samples/habitat-for-humanity-mockup-macbook-ipad.jpg')}}" alt="The Habitat for Humanity of Oakland County Website on Devices" class="img-responsive center-block portfolio-img" />
            </div>
            <div class="testimonial-container">
                <p class="testimonial"><strong>&ldquo;</strong>Thank you for all of your hard work and support on this. I know we ask a lot of you and I appreciate your responsiveness and dedication!<strong>&rdquo;</strong></p>
                <p class="testimonial-author text-right">&mdash; Stephanie Osterland, Director of Partner &amp; Community Programs</p>
            </div>
            <div>
                <h2>Color Scheme</h2>
                <div class="color-swatches">
                    <div class="color-swatch swatch1">
                        Bahama Blue<br>
                        #005596
                    </div>
                    <div class="color-swatch swatch2">
                        Apple<br>
                        #51b948
                    </div>
                    <div class="color-swatch swatch3">
                        Jumbo Gray<br>
                        #8b8c84
                    </div>
                    <div class="color-swatch swatch4">
                        Cornflower<br>
                        #8fc3e9
                    </div>
                    <div class="color-swatch swatch5">
                        Deep Cerulean<br>
                        #007cb1
                    </div>
                </div>
            </div>
            <div>
                <h2>Typography</h2>
                <img src="{{url('/img/samples/habitat-for-humanity-typography.jpg')}}" class="img-responsive center-block portfolio-img" alt="Habitat for Humanity of Oakland County Typography">
            </div>
            <div>
                <img srcset="{{url('/img/samples/habitat-for-humanity-browser-restore@2x.jpg')}} 2x" src="{{url('/img/samples/habitat-for-humanity-browser-restore.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Habitat for Humanity of Oakland County - Restore">
            </div>
            <div>
                <img srcset="{{url('/img/samples/habitat-for-humanity-browser-company-team-building@2x.jpg')}} 2x" src="{{url('/img/samples/habitat-for-humanity-browser-company-team-building.jpg')}}" class="img-responsive center-block  portfolio-img portfolio-browser" alt="Habitat for Humanity of Oakland County - Company Team Building with form opened">
            </div>
            <div>
                <img srcset="{{url('/img/samples/habitat-for-humanity-browser-construction-opportunities@2x.jpg')}} 2x" src="{{url('/img/samples/habitat-for-humanity-browser-construction-opportunities.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Habitat for Humanity of Oakland County - Construction Opportunities">
            </div>
            <div>
                <img srcset="{{url('/img/samples/habitat-for-humanity-browser-women-build@2x.jpg')}} 2x" src="{{url('/img/samples/habitat-for-humanity-browser-women-build.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Habitat for Humanity of Oakland County - Women Build">
            </div>
        </div>
        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>

@endsection

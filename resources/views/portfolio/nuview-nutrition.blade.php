@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Nuview Nutrition</h1>
        <p class="city-view-more">Clarkston, MI | <a href="https://www.nuviewnutrition.com" target="_blank">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img srcset="{{url('/img/samples/nuviewnutrition-responsive-banner@2x.jpg')}} 2x" src="{{url('/img/samples/nuviewnutrition-responsive-banner.jpg')}}" alt="Responsive Display of the Nuview Nutrition Website" class="img-responsive center-block portfolio-img portfolio-browser" /></p>

        <p class="section-description">The logo and website created for Nuview Nutrition displays a clean look and bold colors.</p>
        <p class="testimonial"><strong>&ldquo;</strong>We are very happy with our new website and our designer Matt Crandell. Our website at Nuview Nutrition LLC was in need of a facelift and as our business continues to grow and change it was very challenging yet important that the website communicated the right message.  Matt was very patient working with several of us from Nuview Nutrition all with different ideas he was very good at helping us make decisions as he offers his expertise in this field.  Thank you so much for all your hard work and patience during this process end result was amazing!<strong>&rdquo;</strong></p>
        <p class="testimonial-author text-right">&mdash; Cindy Crandell, Owner</p>

        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/samples/nuviewnutrition-browser-homepage@2x.jpg')}} 2x" src="{{url('/img/samples/nuviewnutrition-browser-homepage.jpg')}}" alt="Homepage of the Nuview Nutrition Website" class="img-responsive center-block portfolio-img portfolio-browser" />
            </div>
            <div>
                <img srcset="{{url('/img/samples/nuviewnutrition-mockup-business-card-iphone@2x.jpg')}} 2x"  src="{{url('/img/samples/nuviewnutrition-mockup-business-card-iphone.jpg')}}" alt="The Nuview Nutrition Logo and Website on Devices" class="img-responsive center-block portfolio-img" />
            </div>
            <div>
                <h2>Color Scheme</h2>
                <div class="color-swatches">
                    <div class="color-swatch swatch1">
                        Crimson<br>
                        #ed1c24
                    </div>
                    <div class="color-swatch swatch2">
                        Carnation<br>
                        #f36368
                    </div>
                    <div class="color-swatch swatch3">
                        Shiraz<br>
                        #af0e14
                    </div>
                    <div class="color-swatch swatch4">
                        Malachite<br>
                        #0bb957
                    </div>
                    <div class="color-swatch swatch5">
                        Spring Geen<br>
                        #1ff27b
                    </div>
                    <div class="color-swatch swatch6">
                        Salem<br>
                        #077135
                    </div>
                </div>
            </div>
            <div>
                <h2>Typography</h2>
                <img src="{{url('/img/samples/nuviewnutrition-typography.jpg')}}" class="img-responsive center-block portfolio-img" alt="Nuview Nutrition Typography">
            </div>
            <div>
                <img srcset="{{url('/img/samples/nuviewnutrition-browser-about-us@2x.jpg')}} 2x" src="{{url('/img/samples/nuviewnutrition-browser-about-us.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Nuview Nutrition About Us Page">
            </div>
            <div>
                <img srcset="{{url('/img/samples/nuviewnutrition-browser-detoxification@2x.jpg')}} 2x" src="{{url('/img/samples/nuviewnutrition-browser-detoxification.jpg')}}" class="img-responsive center-block  portfolio-img portfolio-browser" alt="Nuview Nutrition Detoxification Specialty Page">
            </div>
            <div>
                <img srcset="{{url('/img/samples/nuviewnutrition-browser-programs@2x.jpg')}} 2x" src="{{url('/img/samples/nuviewnutrition-browser-programs.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Nuview Nutrition Programs Page">
            </div>
            <div>
                <img srcset="{{url('/img/samples/nuviewnutrition-browser-classes@2x.jpg')}} 2x" src="{{url('/img/samples/nuviewnutrition-browser-classes.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Nuview Nutrition Classes Page">
            </div>
        </div>
        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>

@endsection
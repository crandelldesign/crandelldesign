@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Christ Lutheran Church of Waterford</h1>
        <p class="city-view-more">Waterford, MI | <a href="http://www.christwaterford.org" target="_blank">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img srcset="{{url('/img/samples/christwaterford-responsive-banner@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-responsive-banner.jpg')}}" alt="Responsive Display of the Christ Lutheran Church of Waterford Website" class="img-responsive center-block portfolio-img" /></p>

        <p class="section-description">Since 2009, the Christ Lutheran Church website has seen numerous improvements and redesigns including a new admin interface to keep events up to date.</p>

        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/samples/christwaterford-browser-homepage@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-browser-homepage.jpg')}}" alt="Homepage of the Christ Lutheran Church of Waterford Website" class="img-responsive center-block portfolio-img portfolio-browser" />
            </div>
            <div>
                <img srcset="{{url('/img/samples/christwaterford-mockup-phone@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-mockup-phone.jpg')}}" alt="The Christ Lutheran Church of Waterford Website on a Mobile Device" class="img-responsive center-block portfolio-img" />
            </div>
            <div>
                <h2>Color Scheme</h2>
                <div class="color-swatches">
                    <div class="color-swatch swatch1">
                        Midnight Blue<br>
                        #003366
                    </div>
                    <div class="color-swatch swatch2">
                        Persian Green<br>
                        #00a99d
                    </div>
                    <div class="color-swatch swatch3">
                        Gray<br>
                        #8b8c84
                    </div>
                    <div class="color-swatch swatch4">
                        Pine Green<br>
                        #00746b
                    </div>
                    <div class="color-swatch swatch5">
                        Light Sea Green<br>
                        #1cbbb4
                    </div>
                    <div class="color-swatch swatch6">
                        Black<br>
                        #252525
                    </div>
                </div>
            </div>
            <div>
                <h2>Typography</h2>
                <img src="{{url('/img/samples/christwaterford-typography.jpg')}}" class="img-responsive center-block portfolio-img" alt="Christ Lutheran Church of Waterford Typography">
            </div>
        </div>

        <h2>Event Calendar</h2>

        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/samples/christwaterford-browser-events@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-browser-events.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Christ Lutheran Church of Waterford event calendar">
            </div>
            <div>
                <img srcset="{{url('/img/samples/christwaterford-browser-events-open@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-browser-events-open.jpg')}}" class="img-responsive center-block  portfolio-img portfolio-browser" alt="Christ Lutheran Church of Waterford event calendar with event description open">
            </div>
        </div>

        <h2>Admin Interface</h2>
        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/samples/christwaterford-browser-admin-event-list@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-browser-admin-event-list.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Christ Lutheran Church of Waterford admin event list">
            </div>
            <div>
                <img srcset="{{url('/img/samples/christwaterford-browser-admin-event-edit@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-browser-admin-event-edit.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Christ Lutheran Church of Waterford admin event editing interface">
            </div>
        </div>
        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>

@endsection
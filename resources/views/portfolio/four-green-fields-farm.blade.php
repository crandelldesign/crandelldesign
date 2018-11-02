@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Four Green Fields Farm</h1>
        <p class="city-view-more">Rodney, MI | <a href="http://www.fourgreenfieldsfarm.com" target="_blank">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img srcset="{{url('/img/samples/fourgreenfieldsfarm-responsive-banner@2x.jpg')}} 2x" src="{{url('/img/samples/fourgreenfieldsfarm-responsive-banner.jpg')}}" alt="Responsive Display of the Four Green Fields Farm Website" class="img-responsive center-block portfolio-img portfolio-browser" /></p>

        <p class="section-description">As one of Crandell Design's earliest clients, the website for Four Green Fields Farm is kept up to date with improvements and redesigns including a new admin interface to update events.</p>
        <p class="testimonial"><strong>&ldquo;</strong>I've been a customer of Crandell Design since 2009 and have never once considered switching to another company for my web site services. The level of service and quality of the product has simply been outstanding. The affordability is also critical to a small business like mine. What impresses me most about Matt is that he can take my ideas for my website and rapidly make them reality. That is so important for a person like me who does not possess the technical skill or ability to manage my own site. I have no doubt that the level of professional service and the resulting high quality website provided by Crandell Design have been an important factor in the growth of my business.<strong>&rdquo;</strong></p>
        <p class="testimonial-author text-right">&mdash; Kevin Courtney, Owner</p>

        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/samples/fourgreenfieldsfarm-browser-homepage@2x.jpg')}} 2x" src="{{url('/img/samples/fourgreenfieldsfarm-browser-homepage.jpg')}}" alt="Homepage of the Four Green Fields Farm Website" class="img-responsive center-block portfolio-img portfolio-browser" />
            </div>
            <div>
                <img srcset="{{url('/img/samples/fourgreenfieldsfarm-mockup-ipad-iphone@2x.jpg')}} 2x" src="{{url('/img/samples/fourgreenfieldsfarm-mockup-ipad-iphone.jpg')}}" alt="The Four Green Fields Farm Website on a Mobile Device" class="img-responsive center-block portfolio-img" />
            </div>
            <div>
                <h2>Color Scheme</h2>
                <div class="color-swatches">
                    <div class="color-swatch swatch1">
                        Camarone<br>
                        #005a2c
                    </div>
                    <div class="color-swatch swatch2">
                        Green Haze<br>
                        #00a651
                    </div>
                    <div class="color-swatch swatch3">
                        Holly<br>
                        #000e07
                    </div>
                    <div class="color-swatch swatch4">
                        Supernova<br>
                        #ffcb05
                    </div>
                    <div class="color-swatch swatch5">
                        Mustard<br>
                        #fffdb52
                    </div>
                    <div class="color-swatch swatch6">
                        Pirate Gold<br>
                        #b89100
                    </div>
                    <div class="color-swatch swatch7">
                        Lynch<br>
                        #647b97
                    </div>
                    <div class="color-swatch swatch8">
                        Bali Hai<br>
                        #91a2b6
                    </div>
                    <div class="color-swatch swatch9">
                        Black<br>
                        #465669
                    </div>
                </div>
            </div>
            <div>
                <h2>Typography</h2>
                <img src="{{url('/img/samples/fourgreenfieldsfarm-typography.jpg')}}" class="img-responsive center-block portfolio-img" alt="Four Green Fields Farm Typography">
            </div>
        </div>

        <h2>Event Calendar</h2>

        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/samples/fourgreenfieldsfarm-browser-events@2x.jpg')}} 2x" src="{{url('/img/samples/fourgreenfieldsfarm-browser-events.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Four Green Fields Farm event calendar">
            </div>
            <div>
                <img srcset="{{url('/img/samples/fourgreenfieldsfarm-browser-events-open@2x.jpg')}} 2x" src="{{url('/img/samples/fourgreenfieldsfarm-browser-events-open.jpg')}}" class="img-responsive center-block  portfolio-img portfolio-browser" alt="Four Green Fields Farm event calendar with event description open">
            </div>
        </div>

        <h2>Admin Interface</h2>
        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/samples/fourgreenfieldsfarm-browser-admin-event-list@2x.jpg')}} 2x" src="{{url('/img/samples/fourgreenfieldsfarm-browser-admin-event-list.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Four Green Fields Farm admin event list">
            </div>
            <div>
                <img srcset="{{url('/img/samples/fourgreenfieldsfarm-browser-admin-event-edit@2x.jpg')}} 2x" src="{{url('/img/samples/fourgreenfieldsfarm-browser-admin-event-edit.jpg')}}" class="img-responsive center-block portfolio-img portfolio-browser" alt="Four Green Fields Farm admin event editing interface">
            </div>
        </div>
        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>
@endsection
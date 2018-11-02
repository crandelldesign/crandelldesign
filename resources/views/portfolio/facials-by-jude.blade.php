@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Facials By Jude</h1>
        <p class="city-view-more">Oxford, MI | <a href="http://www.facialsbyjude.com" target="_blank" rel="noreferrer noopener">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img srcset="{{url('/')}}/img/samples/facialsbyjude-responsive@2x.jpg 2x" src="{{url('/')}}/img/samples/facialsbyjude-responsive.jpg" alt="Website for Facials By Jude" class="img-responsive center-block portfolio-img" /></p>

        <p class="section-description">With the latest redesign, the website is configured to work on multiple devices and features Jude's personal style.</p>

        <div class="portfolio-testimonial-grid">
            <div>
                <p class="testimonial"><strong>&ldquo;</strong>Matt originally developed my website and I was very happy with everything he did. Working with Matt this time around, on updating my website to be mobile friendly, was another great experience. He was very professional and efficient. He always took time to address my concerns and was very patient when It took me a little time for decision making. I would highly recommend him.<strong>&rdquo;</strong></p>
                <p class="testimonial-author text-right">&mdash; J. Cunningham, Owner</p>
            </div>
            <div>
                <img srcset="{{url('/')}}/img/samples/facialsbyjude-mockup@2x.jpg 2x" src="{{url('/')}}/img/samples/facialsbyjude-mockup.jpg" alt="Website for Facials By Jude" class="img-responsive center-block portfolio-img" />
            </div>
        </div>

        <div class="portfolio-item-grid">
            <div>
                <h2>Color Scheme</h2>
                <div class="color-swatches">
                    <div class="color-swatch swatch1">
                        Disco<br>
                        #8a175a
                    </div>
                    <div class="color-swatch swatch2">
                        Pink Lace<br>
                        #ffccff
                    </div>
                    <div class="color-swatch swatch3">
                        Vida Loca<br>
                        #4f7e12
                    </div>
                    <div class="color-swatch swatch4">
                        Paprika<br>
                        #990033
                    </div>
                    <div class="color-swatch swatch5">
                        Eggplant<br>
                        #5e3e4a
                    </div>
                    <div class="color-swatch swatch6">
                        Black<br>
                        #252525
                    </div>
                </div>
            </div>
            <div>
                <h2>Typography</h2>
                <img src="{{url('/img/samples/facialsbyjude-typography.jpg')}}" class="img-responsive center-block portfolio-img" alt="Facials By Jude Typography">
            </div>
            <div>
                <p class="text-center"><img srcset="{{url('/img/samples/facialsbyjude-browser-homepage@2x.png')}} 2x" src="{{url('/img/samples/facialsbyjude-browser-homepage.png')}}" alt="Facials By Jude Homepage" class="img-responsive center-block portfolio-img portfolio-browser" /></p>
            </div>
            <div>
                <p class="text-center"><img srcset="{{url('/img/samples/facialsbyjude-browser-menu@2x.png')}} 2x" src="{{url('/img/samples/facialsbyjude-browser-menu.png')}}" alt="Facials By Jude Menu Open" class="img-responsive center-block portfolio-img portfolio-browser" /></p>
            </div>
        </div>
        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>
@endsection
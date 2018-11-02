@extends('layouts.default')
@section('content')

<section class="page portfolio-item-page">
    <div class="content">

        <h1>Clarkston Area Chamber of Commerce</h1>
        <p class="city-view-more">Clarkston, MI</p>

        <p class="header-img text-center"><img src="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-banner.jpg" alt="Logo for Clarkston Area Chamber of Commerce" class="img-responsive center-block portfolio-img" /></p>

        <p class="section-description">In 2015, Crandell Design redesigned the logo for Clarkston Area Chamber of Commerce and additionally created supplementary logos for the various programs and events that the chamber offers.</p>

        <div class="portfolio-item-grid">
            <div>
                <p class="testimonial"><strong>&ldquo;</strong>The Chamber worked with Crandell Design to do a complete logo redesign. We were looking for a more up-to-date look and were able to achieve just that by working with Matt. Matt also worked to update and create an umbrella look for several of the Chamber event logos. He was so easy to work with and was extremely responsive and receptive during the entire development process. Due to Matt’s attentiveness and persistence we were able to complete the entire project in just a few short months. He also went above and beyond to make sure that we had all of the standard logo sizing for social media. The service provided by Crandell Design was exceptional, and it was a pleasure working with Matt throughout the process.<strong>&rdquo;</strong></p>
                <p class="testimonial-author text-right">&mdash; Janelle Best, Director</p>
            </div>
            <div>
                <p class="text-center"><img srcset="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-mockup1@2x.jpg 2x" src="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-mockup1.jpg" alt="Logo for Clarkston Area Chamber of Commerce" class="img-responsive center-block portfolio-img" /></p>
            </div>
            <div>
                <h2>Color Scheme</h2>
                <div class="color-swatches">
                    <div class="color-swatch swatch1">
                        Endeavour<br>
                        #00529e
                    </div>
                    <div class="color-swatch swatch2">
                        Red Damask<br>
                        #d46e2f
                    </div>
                    <div class="color-swatch swatch3">
                        Cod Gray<br>
                        #111111
                    </div>
                </div>
            </div>
            <div>
                <h2>Typography</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-typography.jpg')}}" class="img-responsive center-block portfolio-img" alt="Clarkston Area Chamber of Commerce Typography">
            </div>
            <div>
                <h2>Business Over Breakfast</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-business-over-breakfast.jpg')}}" class="img-responsive center-block portfolio-img" alt="Business Over Breakfast">
            </div>
            <div>
                <h2>WeBiz</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-webiz.jpg')}}" class="img-responsive center-block portfolio-img" alt="WeBiz">
            </div>
            <div>
                <h2>Annual Golf Classic</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-annual-meeting.jpg')}}" class="img-responsive center-block portfolio-img" alt="Annual Golf Classic">
            </div>
            <div>
                <h2>Best of the Best Expo</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-best-of-the-best-expo.jpg')}}" class="img-responsive center-block portfolio-img" alt="Best of the Best Expo">
            </div>
            <div>
                <h2>Concerts in the Park</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-concerts-in-the-park.jpg')}}" class="img-responsive center-block portfolio-img" alt="Concerts in the Park">
            </div>
            <div>
                <h2>Body Mind Green Expo</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-body-mind-green.jpg')}}" class="img-responsive center-block portfolio-img" alt="Body Mind Green Expo">
            </div>
            <div>
                <h2>Luncheon Mixer</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-luncheon-mixer.jpg')}}" class="img-responsive center-block portfolio-img" alt="Luncheon Mixer">
            </div>
            <div>
                <h2>Annual Meeting</h2>
                <img src="{{url('/img/samples/clarkston-chamber-of-commerce-annual-meeting.jpg')}}" class="img-responsive center-block portfolio-img" alt="Annual Meeting">
            </div>
        </div>
        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])
    </div>
</section>
@endsection
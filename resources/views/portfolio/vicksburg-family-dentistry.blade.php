@extends('layouts.default')

@section('content')

<section class="page portfolio-item-page">
    <div class="content">
        <h1>Vicksburg Family Dentistry</h1>
        <p class="city-view-more">Vicksburg, MI | <a href="https://www.vicksburgfamilydentistry.com" target="_blank" rel="noreferrer noopener">View Website</a></p>

        <hr>

        <p class="header-img text-center"><img srcset="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-banner@2x.jpg')}} 2x" src="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-banner.jpg')}}" alt="Responsive Display of the Vicksburg Family Dentistry Website" class="img-responsive center-block portfolio-img" /></p>

        <p class="section-description">In 2013, the original version of the Vicksburg Family Dentistry website was a multipage WordPress blog with a rigid design created for desktop screens with mobile design as an afterthought.</p>
        <p class="section-description">After watching how the client utilized the website and discussing their needs in further depth, I went back to the drawing board. The result: a single page website with the essential information presented in a clean and friendly manner.</p>

        <div class="portfolio-item-grid">
            <div>
                <img srcset="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-browser-homepage@2x.png')}} 2x" src="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-browser-homepage.png')}}" alt="Homepage of the Vicksburg Family Dentistry Website" class="img-responsive center-block portfolio-img portfolio-browser" />
            </div>
            <div>
                <img srcset="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-demo@2x.jpg')}} 2x" src="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-demo.jpg')}}" alt="The Vicksburg Family Dentistry Website on Devices" class="img-responsive center-block portfolio-img" />
            </div>
            <div>
                <h2>Color Scheme</h2>
                <div class="row">
                    <div class="color-swatches">
                        <div class="color-swatch swatch1">
                            Emporor<br>
                            #555555
                        </div>
                        <div class="color-swatch swatch2">
                            Deep Cerulean<br>
                            #006DB0
                        </div>
                        <div class="color-swatch swatch3">
                            Swamp<br>
                            #000E16
                        </div>
                        <div class="color-swatch swatch4">
                            Azure Radiance<br>
                            #009EFF
                        </div>
                        <div class="color-swatch swatch5">
                            Silver Sand<br>
                            #BBBDBF
                        </div>
                        <div class="color-swatch swatch6">
                            Cerulean<br>
                            #0AB1C7
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2>Typography</h2>
                <img src="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-typography.jpg')}}" class="img-responsive center-block portfolio-img" alt="Vicksburg Family Dentistry Website Typography">
            </div>
            <div class="portfolio-item-grid">
                <div>
                    <img srcset="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-mobile-homepage@2x.png')}} 2x" src="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-mobile-homepage.png')}}" class="img-responsive center-block  portfolio-img portfolio-browser" alt="Vicksburg Family Dentistry Website Homepage on Mobile">
                </div>
                <div>
                    <img srcset="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-mobile-features@2x.png')}} 2x" src="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-mobile-features.png')}}" class="img-responsive center-block  portfolio-img portfolio-browser" alt="Vicksburg Family Dentistry Website Features Section on Mobile">
                </div>
            </div>
            
            <div>
                <img srcset="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-browser-contact@2x.png')}} 2x" src="{{url('/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-browser-contact.png')}}" class="img-responsive center-block  portfolio-img portfolio-browser" alt="Vicksburg Family Dentistry Website Contact Section">
            </div>
        </div>

        @include('layouts.portfolio-pagination', ['previous' => $previous, 'next' => $next])

    </div>
</section>

@endsection
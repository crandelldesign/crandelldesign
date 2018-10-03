@extends('layouts.default')

@section('content')
<section id="home" class="page">
    <div class="content">
        <h1 class="slogan heading">Anybody can make a website, but only a few can make it look good!</h1>
        <div class="button-holder">
            <a href="#portfolio" class="btn btn-outline-white page-scroll">
                See For Yourself
                <svg class="i-chevron-bottom" viewBox="0 0 32 32" width="15" height="15" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M30 12 L16 24 2 12"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<section id="portfolio" class="page">
    <div class="content">

        <h2>Portfolio</h2>
        <p class="section-description">Crandell Design and Matt Crandell work with businesses of all sizes. Check out some of the expert work that I have provided. Click on an item below to see more.</p>

        <div class="portfolio-grid">
        @foreach($portfolio as $key=>$client)
            @include('layouts.thumbnail')
        @endforeach
        </div>

        <div class="text-center">
            <a href="{{url('/portfolio')}}" class="btn btn-apple">
                See My Full Portfolio
                <svg id="i-chevron-right" viewBox="0 0 32 32" width="15" height="15" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M12 30 L24 16 12 2" />
                </svg>
            </a>
        </div>

    </div>
</section>
@endsection
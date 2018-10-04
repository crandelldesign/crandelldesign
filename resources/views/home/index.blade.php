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

<section id="services" class="page">
    <div class="content">

        <h2>Services</h2>
        <p class="section-description">Crandell Design is a website design company in Metro Detroit, Michigan. With over 10 years of experience, you can expect a professional looking website for an excellent value. Crandell Design also offers other skilled services from website hosting to logo design.</p>
        <div class="services-grid">
            <a class="btn btn-translucent-apple" href="{{url('/services/web-design')}}">
                <svg data-name="Web Design and Development" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 347.95 347.95">
                    <path d="M214.52 144.71h65.92l-65.92-65.93v65.93z"/>
                    <path d="M174 0a174 174 0 1 0 174 174A174 174 0 0 0 174 0zM52.29 80.39a8 8 0 0 1 0-11.56l19-19a8.06 8.06 0 0 1 11.56 0l14.79 14.89L66.3 96.06zm55.48-7.57l90.75 91.56v31.34h-31.34l-90.74-91.56zm166.72 227.89h-144a24 24 0 0 1-24-24V154.35l50.64 51.2 4.11 4.16h51.25v-51l-4.06-4.1-89.9-90.69a23.88 23.88 0 0 1 12-3.2h96l72 72v144a24.1 24.1 0 0 1-24.04 23.99z"/>
                </svg>
                <h3>Web Design and Development</h3>
            </a>
            <a class="btn btn-translucent-apple" href="{{url('/services/web-hosting')}}">
                <svg data-name="Web Hosting" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900.79 900.79">
                    <path d="M169.87 240h70.03v70.01h-70.03zM169.87 415.39h70.03v70.03h-70.03z"/>
                    <path d="M450.39 0C201.65 0 0 201.65 0 450.39s201.65 450.4 450.39 450.4 450.4-201.65 450.4-450.4S699.14 0 450.39 0zm350.77 695.92H99.63V555.64h701.53zm0-175.39H99.63V380.26h701.53zM99.63 345.15V204.87h701.53v140.28z"/>
                    <path d="M169.87 590.75h70.03v70.05h-70.03z"/>
                </svg>
                <h3>Web Hosting</h3>
            </a>
            <a class="btn btn-translucent-apple" href="{{url('/services/social-media')}}">
                <svg data-name="Social Media Advising Services" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 410.82 410.82">
                    <path d="M205.41 0C92 0 0 92 0 205.41s92 205.41 205.41 205.41 205.41-92 205.41-205.41S318.85 0 205.41 0zm69.45 382.95c-30.4 0-53.57-23.17-53.57-53.49 0-3.57 0-9 1.83-12.54L96.45 243.83C87.48 252.71 75 258 60.74 258 30.42 258 9 236.68 9 206.28s23.17-53.49 53.49-53.49c14.29 0 26.83 5.4 35.72 14.29l126.65-74.92a35.93 35.93 0 0 1-1.74-12.54 51.74 51.74 0 1 1 51.74 51.75c-14.29 0-26.83-5.31-35.72-14.29l-126.66 75c1.74 3.57 1.74 8.88 1.74 12.46s0 8.88-1.74 12.46l126.66 73.17c8.88-8.88 21.43-14.29 35.72-14.29 30.32 0 53.49 23.17 53.49 53.57s-23.17 53.5-53.49 53.5z"/>
                </svg>
                <h3>Social Media Advising Services</h3>
            </a>
            <a class="btn btn-translucent-apple" href="{{url('/services/logo-design')}}">
                <svg data-name="Logo Design" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 539.51 539.51">
                    <path d="M269.76 0C120.77 0 0 120.77 0 269.76s120.77 269.75 269.76 269.75 269.75-120.77 269.75-269.75S418.74 0 269.76 0zm162.33 466.88H238.21V279.47c-22.54 19.4-48.43 32.34-80.77 32.34-64.5 0-119.6-54.9-119.6-119.59 0-64.48 55.09-119.58 119.6-119.58 64.68 0 119.56 55.09 119.56 119.57 0 32.36-12.93 58.25-32.36 80.79h187.45z"/>
                </svg>
                <h3>Logo Design</h3>
            </a>
            <a class="btn btn-translucent-apple" href="{{url('/services/seo')}}">
                <svg data-name="Search Engine Optimization" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.81 726.81">
                    <path d="M317 509.3a81.95 81.95 0 1 0-82-82 81.59 81.59 0 0 0 82 82zM434.62 247.57h158.93L434.62 88.63v158.94z"/>
                    <path d="M363.4 0C162.7 0 0 162.7 0 363.4s162.7 363.4 363.4 363.4 363.4-162.7 363.4-363.4S564.1 0 363.4 0zM116.6 600.37l91.07-91.07h14.59l5.42-5.51c-18.23-20-29.08-47.32-29.08-76.48A118.37 118.37 0 1 1 317 545.67c-29.16 0-56.47-10.85-76.48-29.08L235 522v14.6l-91.1 91.07zM579 622.94H232.56a57.49 57.49 0 0 1-25-5.68l47.08-47.08q3.51 1.56 7.11 2.94A153.1 153.1 0 0 0 317 583.34a156.08 156.08 0 1 0-142.24-220.4V103.17a57.9 57.9 0 0 1 57.83-57.84h231l173.25 173.32v346.47A58 58 0 0 1 579 622.94z"/>
                </svg>
                <h3>Search Engine Optimization</h3>
            </a>
        </div>

    </div>
</section>

@endsection
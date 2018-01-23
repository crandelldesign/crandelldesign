@extends('layouts.default')
@section('content')

<div id="home" class="container-fluid page">
    <div class="content">
        <h1 class="slogan heading">Anybody can make a website, but only a few can make it look good!</h1>
        <div class="button-holder">
            <a href="#portfolio" class="btn btn-outline-light btn-lg page-scroll">See For Yourself <svg class="i-chevron-bottom" viewBox="0 0 32 32" width="15" height="15" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M30 12 L16 24 2 12"></path>
        </svg></a>
        </div>
    </div>
</div>

<div id="portfolio" class="container-fluid page">
    <div class="content">

        <h2>Portfolio</h2>
        <p class="section-description">Crandell Design and Matt Crandell work with businesses of all sizes. Check out some of the expert work that I have provided. Click on an item below to see more.</p>

        <div class="row">
        @foreach($portfolio as $key=>$client)
            @include('layouts.thumbnail')
            @if(($key+1) % 4 == 0)
            </div><div class="row">
            @endif
        @endforeach
        </div>

        <div class="button-holder text-center">
            <a href="{{url('/portfolio')}}" class="btn btn-lg btn-apple animsition-link">See My Full Portfolio <svg id="i-chevron-right" viewBox="0 0 32 32" width="15" height="15" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M12 30 L24 16 12 2" />
</svg></a>
        </div>

    </div>
</div>

<div id="services" class="container-fluid page">
    <div class="content">

        <h2>Services</h2>
        <p class="section-description">Crandell Design is a website design company in Metro Detroit, Michigan. With over 10 years of experience, you can expect a professional looking website for an excellent value. Crandell Design also offers other skilled services from website hosting to logo design.</p>
        <div class="clearfix margin-bottom-15"></div>
        <div class="row">
            <div class="col-md-1 hidden-sm hidden-xs"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/web-design')}}">
                    <svg id="Web_Design_and_Development" data-name="Web Design and Development" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 347.95 347.95"><title>Web Design and Development</title><polygon points="214.52 144.71 280.44 144.71 214.52 78.78 214.52 144.71"/><path d="M174,0a174,174,0,1,0,174,174A174,174,0,0,0,174,0ZM52.29,80.39a8,8,0,0,1,0-11.56l19-19a8.06,8.06,0,0,1,11.56,0L97.64,64.72,66.3,96.06Zm55.48-7.57,90.75,91.56v31.34H167.18L76.44,104.16ZM274.49,300.71h-144a24,24,0,0,1-24-24V154.35l50.64,51.2,4.11,4.16h51.25v-51l-4.06-4.1-89.9-90.69a23.88,23.88,0,0,1,12-3.2h96l72,72v144A24.1,24.1,0,0,1,274.49,300.71Z"/></svg>
                    <h3>Web Design and Development</h3>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/web-hosting')}}">
                    <svg id="Web_Hosting" data-name="Web Hosting" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900.79 900.79"><title>Web Hosting</title><rect x="169.87" y="240" width="70.03" height="70.01"/><rect x="169.87" y="415.39" width="70.03" height="70.03"/><path d="M450.39,0C201.65,0,0,201.65,0,450.39S201.65,900.79,450.39,900.79,900.79,699.14,900.79,450.39,699.14,0,450.39,0ZM801.16,695.92H99.63V555.64H801.16Zm0-175.39H99.63V380.26H801.16ZM99.63,345.15V204.87H801.16V345.15Z"/><rect x="169.87" y="590.75" width="70.03" height="70.05"/></svg>
                    <h3>Web Hosting</h3>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/social-media')}}">
                    <svg id="Social_Media_Advising_Services" data-name="Social Media Advising Services" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 410.82 410.82"><title>Social Media Advising Services</title><path d="M205.41,0C92,0,0,92,0,205.41S92,410.82,205.41,410.82s205.41-92,205.41-205.41S318.85,0,205.41,0Zm69.45,382.95c-30.4,0-53.57-23.17-53.57-53.49,0-3.57,0-9,1.83-12.54L96.45,243.83C87.48,252.71,75,258,60.74,258,30.42,258,9,236.68,9,206.28s23.17-53.49,53.49-53.49c14.29,0,26.83,5.4,35.72,14.29L224.86,92.16a35.93,35.93,0,0,1-1.74-12.54,51.74,51.74,0,1,1,51.74,51.75c-14.29,0-26.83-5.31-35.72-14.29l-126.66,75c1.74,3.57,1.74,8.88,1.74,12.46s0,8.88-1.74,12.46l126.66,73.17c8.88-8.88,21.43-14.29,35.72-14.29,30.32,0,53.49,23.17,53.49,53.57S305.18,382.95,274.86,382.95Z"/></svg>
                    <h3>Social Media Advising Services</h3>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 col-sm-offset-2 col-md-offset-0 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/logo-design')}}">
                    <svg id="Logo_Design" data-name="Logo Design" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 539.51 539.51"><title>Logo Design</title><path d="M269.76,0C120.77,0,0,120.77,0,269.76S120.77,539.51,269.76,539.51,539.51,418.74,539.51,269.76,418.74,0,269.76,0ZM432.09,466.88H238.21V279.47c-22.54,19.4-48.43,32.34-80.77,32.34-64.5,0-119.6-54.9-119.6-119.59,0-64.48,55.09-119.58,119.6-119.58C222.12,72.64,277,127.73,277,192.21c0,32.36-12.93,58.25-32.36,80.79H432.09Z"/></svg>
                    <h3>Logo Design</h3>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 col-xs-offset-3 col-sm-offset-0 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/seo')}}">
                    <svg id="Search_Engine_Optimization" data-name="Search Engine Optimization" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.81 726.81"><title>Search Engine Optimization</title><path d="M317,509.3a81.95,81.95,0,1,0-82-82A81.59,81.59,0,0,0,317,509.3Z"/><polygon points="434.62 247.57 593.55 247.57 434.62 88.63 434.62 247.57"/><path d="M363.4,0C162.7,0,0,162.7,0,363.4s162.7,363.4,363.4,363.4,363.4-162.7,363.4-363.4S564.1,0,363.4,0ZM116.6,600.37l91.07-91.07h14.59l5.42-5.51c-18.23-20-29.08-47.32-29.08-76.48A118.37,118.37,0,1,1,317,545.67c-29.16,0-56.47-10.85-76.48-29.08L235,522V536.6L143.9,627.67ZM579,622.94H232.56a57.49,57.49,0,0,1-25-5.68l47.08-47.08q3.51,1.56,7.11,2.94A153.1,153.1,0,0,0,317,583.34a156.08,156.08,0,1,0-142.24-220.4V103.17a57.9,57.9,0,0,1,57.83-57.84h231L636.84,218.65V565.12A58,58,0,0,1,579,622.94Z"/></svg>
                    <h3>Search Engine Optimization</h3>
                </a>
            </div>
        </div>

    </div>
</div>

<div id="about" class="container-fluid page">
    <div class="content">
        <h2>About</h2>
        <div class="row">
            <div class="col-sm-3">
                <img srcset="{{url('/')}}/img/matt-crandell-2014@2x.jpg 2x" src="{{url('/')}}/img/matt-crandell-2014.jpg" class="img-fluid me-pic" alt="Picture of Matt Crandell">
                <div class="margin-bottom-10 visible-xs-block"></div>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h3>Hi, I'm Matt Crandell.</h3>
                <p>I launched my first website in 2001 and have had a great passion for web design ever since. Currently, I am also a full-time employee for a marketing company where I handle various projects to satisfy their web development and design needs. I hold degrees in Graphic Design and Computer Information Systems from Ferris State University.</p>
                <h3>A little about Crandell Design</h3>
                <p>In 2009, I established Crandell Design to give people a personal touch for their web and graphic design needs. I believe that all businesses deserve a website that is unique to their brand, as well as access to all online business needs.</p>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="container-fluid page">
    <div class="content">
        <h2>Contact</h2>
        <p class="section-description">Interested in getting your next project off to a great start? Contact me using the form below.</p>
        <div class="row">
            <div class="col-sm-7">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form id="contact-form" class="form" action="{{url('/')}}/contact" method="post" autocomplete="off">
                    <div class="form-group {{($errors->has('name'))?'has-error':''}}">
                        <label for="name" class="sr-only">Name</label>
                        @foreach ($errors->get('name') as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group {{($errors->has('email'))?'has-error':''}}">
                        <label for="email" class="sr-only">Email</label>
                        @foreach ($errors->get('email') as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group {{($errors->has('message_text'))?'has-error':''}}">
                        <label for="message_text" class="sr-only">Message</label>
                        @foreach ($errors->get('message_text') as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                        <textarea class="form-control" rows="5" id="message_text" name="message_text" placeholder="Message"></textarea>
                    </div>
                    {{ csrf_field() }}
                    {{-- <!--<input class="url" type="text" id="url" name="url" value="" />--> --}}
                    @foreach ($errors->get('g-recaptcha-response') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @foreach ($errors->get('captcha') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    <div class="form-group form-group-submit">
                        <button type="submit" class="btn btn-submit btn-apple g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}" data-callback="onSubmit" data-badge="inline" data-loading-text="Sending...">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <p>Phone <a class="phone btn btn-link" href="tel:+12483835376">248-383-5376</a><br>
                Email <a class="btn btn-link" href="mailto:matt@crandelldesign.com">matt@crandelldesign.com</a></p>
                <h3>Matt Crandell's R&eacute;sum&eacute;</h3>
                <p><a href="{{url('/')}}/resume.pdf" target="_blank" class="btn btn-apple" title="Download Matt Crandell's R&eacute;sum&eacute; as PDF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download My R&eacute;sum&eacute;</a></p>
            </div>
        </div>
    </div>
</div>

@if(isset($blog_entries))
<div id="blog" class="container-fluid page">
    <div class="content">
        <h2>Blog</h2>
        <div class="row">
        @for ($i = 0; $i < 4; $i++)
        <?php $entry = $blog_entries[$i]; ?>
            <div class="col-md-3 col-sm-6">
                <div class="blog-entry">
                    @if(isset($entry->entities->media))
                        <div class="blog-media" style="background-image: url({{$entry->entities->media[0]->media_url_https}}:small)"></div>
                    @endif
                    <p>{!!preg_replace('"\b(https?://\S+)"', '<a class="animsition-link" href="$1">$1</a>', $entry->text)!!}</p>
                    <p class="date-created">{{date('n/d/Y',strtotime($entry->created_at))}}
                </div>
            </div>
        @endfor
        </div>
        <div class="button-holder text-center">
            <a href="http://twitter.com/crandelldesign" class="btn btn-lg btn-apple" target="_blank" rel="external">See More on Twitter <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
@endif

@stop

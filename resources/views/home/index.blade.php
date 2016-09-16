@extends('layouts.default')
@section('content')

<div id="home" class="container-fluid page">
    <div class="content">
        <h1 class="slogan heading">Anybody can make a website, but only a few can make it look good!</h1>
        <div class="button-holder">
            <a href="#portfolio" class="btn btn-clear btn-lg page-scroll">See For Yourself <i class="fa fa-angle-down"></i></a>
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
            <a href="{{url('/portfolio')}}" class="btn btn-lg btn-apple animsition-link">See My Full Portfolio <i class="fa fa-angle-right"></i></a>
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
                    <img srcset="{{url('/')}}/img/icon-web-design.svg 2x" src="{{url('/')}}/img/icon-web-design.png" alt="Web Design and Development" class="img-responsive center-block" data-no-retina>
                    <h3>Web Design and Development</h3>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/web-hosting')}}">
                    <img srcset="{{url('/')}}/img/icon-web-hosting.svg 2x" src="{{url('/')}}/img/icon-web-hosting.png" alt="Web Hosting" class="img-responsive center-block" data-no-retina>
                    <h3>Web Hosting</h3>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/social-media')}}">
                    <img srcset="{{url('/')}}/img/icon-social-media.svg 2x" src="{{url('/')}}/img/icon-social-media.png" alt="Social Media Advising Services" class="img-responsive center-block" data-no-retina>
                    <h3>Social Media Advising Services</h3>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 col-sm-offset-2 col-md-offset-0 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/logo-design')}}">
                    <img srcset="{{url('/')}}/img/icon-logo-design.svg 2x" src="{{url('/')}}/img/icon-logo-design.png" alt="Logo Design" class="img-responsive center-block" data-no-retina>
                    <h3>Logo Design</h3>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 col-xs-offset-3 col-sm-offset-0 margin-bottom-15">
                <a class="btn btn-block btn-translucent-apple animsition-link" href="{{url('/services/seo')}}">
                    <img srcset="{{url('/')}}/img/icon-seo.svg 2x" src="{{url('/')}}/img/icon-seo.png" alt="Search Engine Optimization" class="img-responsive center-block" data-no-retina>
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
                <img srcset="{{url('/')}}/img/matt-crandell-2014@2x.jpg 2x" src="{{url('/')}}/img/matt-crandell-2014.jpg" class="img-responsive me-pic" alt="Picture of Matt Crandell">
                <div class="margin-bottom-10 visible-xs-block"></div>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h3>Hi, I'm Matt Crandell.</h3>
                <p>In 2009, I established Crandell Design. Prior to Crandell Design, I launched my first website in 2001 and have had a great passion for web design ever since. Currently, I am also a full-time employee for a marketing company where I handle various projects to satisfy their web development and design needs. I hold degrees in Graphic Design and Computer Information Systems from Ferris State University.</p>
                <h3>A little about Crandell Design</h3>
                <p>Crandell Design was created to give people a personal touch for their web and graphic design needs. I believe that all businesses deserve a website that is unique to their brand, as well as access to all online business needs.</p>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="container-fluid page">
    <div class="content">
        <h2>Contact</h2>
        <div class="row">
            <div class="col-sm-7">
                <form class="form" role="form" action="{{url('/')}}/submit-contact" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <label class="control-label error-label" for="name">Please Enter Your Name</label>
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <label class="control-label error-label" for="email">Please Enter A Valid Email Address</label>
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                        <label class="control-label error-label" for="message">What? You Don't Want to Say Something?</label>
                    </div>
                    {{ csrf_field() }}
                    <!--<input class="url" type="text" id="url" name="url" value="" />-->
                    <div class="form-group">
                        <button type="submit" class="btn btn-submit pull-right btn-apple" data-loading-text="Sending...">Send</button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <p>Phone:&nbsp;&nbsp;<a class="phone" href="tel:+12483835376">248&ndash;383&ndash;5376</a><br>
                Email:&nbsp;&nbsp;<a href="mailto:matt@crandelldesign.com">matt@crandelldesign.com</a></p>
                <h3>Matt Crandell's R&eacute;sum&eacute;</h3>
                <p><a href="{{url('/')}}/img/resume.pdf" target="_blank" class="btn btn-apple" title="Download Matt Crandell's R&eacute;sum&eacute; as PDF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download My R&eacute;sum&eacute;</a></p>
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
            <div class="col-sm-3 col-xs-6">
                <div class="blog-entry">
                    @if(isset($entry->entities->media))
                        <div class="blog-media" style="background-image: url({{$entry->entities->media[0]->media_url}})"></div>
                    @endif
                    <p>{!!preg_replace('"\b(https?://\S+)"', '<a class="animsition-link" href="$1">$1</a>', $entry->text)!!}</p>
                    <p class="date-created">{{date('n/d/Y',strtotime($entry->created_at))}}
                    <!--<?php echo "<pre>", print_r($entry, true), "</pre>"; ?>-->
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
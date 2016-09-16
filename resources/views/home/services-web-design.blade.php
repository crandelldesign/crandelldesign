@extends('layouts.default')
@section('content')

<div class="container-fluid page">
    <div class="content">

        <h1>Web Design and Development</h1>

        <hr>

        <div class="row">
            <div class="col-sm-4 col-sm-push-8">
                <img srcset="{{url('/')}}/img/icon-web-design-green.svg 2x" src="{{url('/')}}/img/icon-web-design-green.png" alt="Web Design and Development" class="img-responsive center-block margin-bottom-15 services-modal-icon" data-no-retina>
            </div>
            <div class="col-sm-8 col-sm-pull-4">
                <p>Everybody needs a website. In today's world, nothing is more true. Perhaps you need a website to promote your business or organization? Crandell Design can do that. We also specialize in website renovations, in order to modernize your website to match today's standards.</p>

                <h4>Responsive Design</h4>
                <p>With the plethora of devices that have access to the internet, it is more important than ever to ensure that your website will look right on every one of them. This is where responsive design comes in. A single website would be created that would work and look good on almost every device, whether it is a phone, a tablet, or a normal desktop computer.</p>
                
                <h4>Maintenance</h4>
                <p>So you have a new website, but let's say that your address changes or you add new services. Crandell Design can maintain your website for you. Using a flat, monthly rate, it has never been easier to keep your website up to date.</p>

                <h4>Manage Your Own</h4>
                <p>If your feeling a little adventurous, Crandell Design can build your website using a content management system catered to your needs. What is a content management system (CMS)? It is the backbone to your website that will allow you to create and change content without any coding knowledge. A great way to do things your way.</p>
            </div>
        </div>

    </div>
</div>

@stop
@extends('layouts.default')
@section('content')

<div class="container-fluid page">
    <div class="content">

        <h1>Web Hosting</h1>

        <hr>

        <div class="row">
            <div class="col-sm-4 col-sm-push-8">
                <img srcset="{{url('/')}}/img/icon-web-hosting-green.svg 2x" src="{{url('/')}}/img/icon-web-hosting-green.png" alt="Web Hosting" class="img-responsive center-block margin-bottom-15 services-modal-icon" data-no-retina>
            </div>
            <div class="col-sm-8 col-sm-pull-4">
                <p>So you have a new website, but now you need a place to put it. Crandell Design can host it for you. With over 10 years of experience, we know the best hosting solutions for you.</p>
                <p>Say you need assistance with both hosting and maintaining your website. Crandell Design offers discounts when you combine what you need.</p>
            </div>
        </div>

    </div>
</div>

@stop
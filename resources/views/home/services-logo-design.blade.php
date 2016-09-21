@extends('layouts.default')
@section('content')

<div class="container-fluid page">
    <div class="content">

        <h1>Logo Design</h1>

        <hr>

        <div class="row">
            <div class="col-sm-4 col-sm-push-8">
                <img srcset="{{url('/')}}/img/icon-logo-design-green.svg 2x" src="{{url('/')}}/img/icon-logo-design-green.png" alt="Logo Design" class="img-responsive center-block margin-bottom-15 services-modal-icon" data-no-retina>
            </div>
            <div class="col-sm-8 col-sm-pull-4">
                <h2>Logo Creation</h2>
                <p>Do you have a company or organization that needs to establish brand presence? At Crandell Design, we can create a logo that will conform to the style you and your customers are looking for. Logos created by Crandell Design will be produced to fit any media you need.</p>
                <h2>Logo Modification/Restoration</h2>
                <p>Although you may already have a logo, it may not be up to par with what you may need or what you may require it to do. Crandell Design can update your logo to fit your modern needs.</p>
            </div>
        </div>

    </div>
</div>

@stop
@extends('layouts.default')
@section('content')
<div class="container-fluid page">
    <div class="content">
        <div class="portfolio-item" id="{{$client->slug}}-portfolio">
            @if(isset($client->is_custom) && $client->is_custom)
                @include('portfolio.'.$client->slug, array('client'=>$client,'fullPage'=>'true'))
            @else
                <h1>{{$client->name}}</h1>
                <p class="city-view-more">{{$client->city}}, {{$client->state}} @if(isset($client->is_use_url) && $client->is_use_url)| <a href="{{$client->url}}" rel="external" target="_blank">View Website <i class="fa fa-angle-right" aria-hidden="true"></i></a>@endif</p>

                <hr>

                <div class="row">
                    <div class="col-sm-7 col-sm-push-5">
                        @if(count($client->assets) == 1)
                        <p><img src="{{url('/').$client->featured_img}}" alt="{{$client->name}}" class="img-responsive center-block" /></p>
                        @else
                        <div class="slideshow">
                            <div class="arrows"></div>
                            <?php $i = 0; ?>
                            @foreach($client->assets as $asset)
                                <div class="item {{($i++ == 0)?'active':''}}">
                                    <img src="{{url('/').$asset}}" alt="{{$client->name.' image #'.$i}}" class="img-responsive center-block" />
                                </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="col-sm-5 col-sm-pull-7">
                        @if(substr($client->description, 0, 3) != '<p>')
                        <p>
                        @endif
                        {!!$client->description!!}
                        @if(substr($client->description, -4) != '</p>')
                        </p>
                        @endif
                        <p>Services provided:</p>
                        <ul>
                        @foreach($client->services as $service)
                            <li>{{$service}}</li>
                        @endforeach
                        </ul>

                        @if(isset($client->testimonials))
                        @foreach($client->testimonials as $testimonial)
                        <p class="testimonial"><strong>&ldquo;</strong> {{$testimonial->testimonial}} <strong>&rdquo;</strong></p>
                        <p class="testimonial-author text-right">&mdash; {{$testimonial->author}}</p>
                        @endforeach
                        @endif
                    </div>
                </div>
            @endif

            <div class="button-holder text-center">
                <a href="{{url('/portfolio')}}" class="btn btn-lg btn-apple animsition-link">See My Full Portfolio <i class="fa fa-angle-right"></i></a>
            </div>
            
        </div>
    </div>
</div>
@stop
@section('scripts')
<script type="text/javascript" src="{{ elixir('js/slideshow.js') }}"></script>

@stop
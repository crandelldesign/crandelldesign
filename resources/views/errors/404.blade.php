@php
    $title = '404 | Crandell Design by Matt Crandell'
@endphp
@extends('layouts.default')

@section('content')
<section id="four-o-four" class="page">
    <div class="content">
        <h1>404</h1>
        <hr>
        <p><img src="{{url('/')}}/img/whatd-you-do-tommy-boy.gif" alt="What'd You Do?" class="img-404"></p>
        <p>We're sorry, but we couldn't find the page you were looking for. Please try one of the links below:</p>
        <nav class="navbar">
            <ul>
                <li class="{{(isset($active_page) && $active_page == 'portfolio')?'active':''}}"><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':''}}" href="{{url('/#portfolio')}}">Portfolio</a></li>
                <li class="{{(isset($active_page) && $active_page == 'services')?'active':''}}"><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':''}}" href="{{url('/#services')}}">Services</a></li>
                <li class="{{(isset($active_page) && $active_page == 'about')?'active':''}}"><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':''}}" href="{{url('/#about')}}">About</a></li>
                <li class="{{(isset($active_page) && $active_page == 'contact')?'active':''}}"><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':''}}" href="{{url('/#contact')}}">Contact</a></li>
            </ul>
        </nav>
    </div>
</section>
@endsection
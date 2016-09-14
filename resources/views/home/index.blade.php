@extends('layouts.default')
@section('content')

<div class="container-fluid page">
    <div class="content">

        <a class="animsition-link" href="{{url('/portfolio')}}">Portfolio</a>

        <div class="row">
        @foreach($portfolio as $key=>$client)
            @include('layouts.thumbnail')
            @if(($key+1) % 4 == 0)
            </div><div class="row">
            @endif
        @endforeach
        </div>

    </div>
</div>

@stop
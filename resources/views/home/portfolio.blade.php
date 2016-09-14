@extends('layouts.default')
@section('content')

<div class="container-fluid page">
    <div class="content">

        <p><a class="animsition-link" href="{{url('/')}}">Home</a></p>

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
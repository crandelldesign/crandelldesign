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

@if(isset($blog_entries))
<div class="container-fluid page">
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
                    <p>{!!preg_replace('"\b(https?://\S+)"', '<a href="$1">$1</a>', $entry->text)!!}</p>
                    <p>{{date('n/d/Y',strtotime($entry->created_at))}}
                    <?php echo "<pre>", print_r($entry, true), "</pre>"; ?>
                </div>
            </div>
        @endfor
        </div>
    </div>
</div>
@endif

@stop
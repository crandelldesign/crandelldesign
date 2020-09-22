@extends('layouts.app')

@section('content')
  <h1>Blog</h1>

  <ul>
    @foreach($posts as $post)
      <li>
          <h2><a href="{{url($post['url'])}}">{{ $post['title'] }}</a></h2>
          <!--<p>{!! $post['body'] !!}</p>-->
          <p>{{ $post['read_time'] }}</p>
          <!--<code><?php print_r($post) ?></code>-->
      </li>
    @endforeach
  </ul>
@endsection
@extends('layouts.app')

@section('content')
  <h1>Blog</h1>


  <div class="blog-grid">
    @foreach($posts as $post)
      <div class="blog-tile">
        @if ($post['featured_image'])
          <a href="{{url($post['url'])}}" class="featured-img">
            <img src="{{ url($post['featured_image']) }}" alt="{{ $post['featured_image_caption'] ? $post['featured_image_caption'] : $post['title'] }}" />
          </a>
        @endif
        <div class="blog-tile-content">
          <h1 class="entry-title">
            <a href="{{url($post['url'])}}">{{ $post['title'] }}</a>
          </h1>
          <div class="entry-meta">
            <time class="updated" datetime="{{ $post['published_at'] }}">
              {{ date("F j, Y", strtotime($post['published_at'])) }}
            </time>
            @foreach($post['topic'] as $topic)
              <a href="{{url('/blog/topic/'.$topic['slug'])}}">
                {{ $topic['name'] }}
              </a>
            @endforeach
            <div class="read-time">{{ $post['read_time'] }}</div>
          </div>
          @if (!$post['featured_image'])
            {{ $post['summary'] }}
          @endif
        </div>
      </div>
    @endforeach
  </div>
@endsection
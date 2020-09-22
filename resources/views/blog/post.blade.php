@extends('layouts.app')

@section('content')
  <article class="article-container">
    @if ($post['featured_image'])
      <div class="featured-img">
        <img src="{{ url($post['featured_image']) }}" alt="{{ $post['featured_image_caption'] ? $post['featured_image_caption'] : $post['title'] }}" />
      </div>
    @endif
    <header>
      <h1 class="entry-title">
        {{ $post['title'] }}
      </h1>
      <div class="entry-meta">
        <time class="updated" datetime="{{ $post['published_at'] }}">
          {{ date("F j, Y", strtotime($post['published_at'])) }}
        </time>
        <div class="text-secondary">{{ $post['read_time'] }}</duv>
      </div>
    </header>
    <div class="entry-content">
      {!! $post['body'] !!}
    </div>
  </article>
  <?php print_r($related) ?>
@endsection
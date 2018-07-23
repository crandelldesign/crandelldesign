@extends('layouts.default')

@section('content')
    <h2>Categories</h2>
    <?php $categories = getCategories(); ?>
    @foreach($categories as $category)
        <a href="{{$category['url']}}">{{$category['name']}}</a>
    @endforeach

    <h2>Recent Posts</h2>
    <?php $recentArticles = getRecentArticles(); ?>
    @foreach($recentArticles as $article)
        <a href="{{$article['url']}}">{{$article['title']['rendered']}}</a>
    @endforeach
    @yield('newsArticle')
@endsection
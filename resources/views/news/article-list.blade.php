@extends('layouts.news')

@section('newsArticle')
@foreach($articles as $article)
    <?php // print_r($article) ?>
    <h1><a href="{{$article['url']}}">{{$article['title']['rendered']}}</a></h1>
    {!! $article['excerpt']['rendered'] !!}
    <a href="{{$article['url']}}">Continue reading →</a>
@endforeach
@endsection
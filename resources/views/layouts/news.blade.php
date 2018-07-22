@extends('layouts.default')

@section('content')
    <?php
    $categories = getCategories();
    
    ?>
    @foreach($categories as $category)
        <a href="{{$category['url']}}">{{$category['name']}}</a>
    @endforeach
    @yield('newsArticle')
@endsection
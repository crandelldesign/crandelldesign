@extends('layouts.news')

@section('newsArticle')
@foreach($articles as $article)
    <?php // print_r($article) ?>
    <h1><a href="{{$article['url']}}">{{$article['title']['rendered']}}</a></h1>
    {!! $article['excerpt']['rendered'] !!}
    <a href="{{$article['url']}}">Continue reading →</a>
@endforeach

@if ($totalPages > 1)
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item {{($currentPage == 1)?'disabled':''}}">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    @for ($i = 1; $i <= $totalPages; $i++)
    <li class="page-item {{($currentPage == $i)?'active':''}}"><a class="page-link" href="#">{{$i}}</a></li>
    @endfor
    <li class="page-item {{($currentPage == $totalPages)?'disabled':''}}">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
@endif
@endsection
@extends('layout')

@section('title')
{{$articles['article']->title}}
@stop

@section('keywords')
{{$articles['article']->category}}
@stop

@section('css')
<link rel="stylesheet" href="/custom-css/article.css" type="text/css">
@stop


@section('search')
<form method="get" action="/articles" class="form-inline" style="margin:20px;">
  <div class="form-group">
    <label>検索</label>
    <input type="text" name="keyword" class="form-control" value="">
  </div>
  <input type="submit" value="検索" class="btn btn-info">
</form>
@stop

@section('content')
<h2 class="h2_title" style="font-size:20px;border-left:10px solid orange;background-color:#F2F2F2;padding:30px;">{{$articles['article']->title}}</h2>
<p>最終更新日：{{$articles['article']->updated}}</p>
<a href="/articles" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
<div>{!! $articles['article']->body !!}</div>
@stop

@section('relatedArticle')
<h3 class="related_title" style="margin-top:100px;border-left:solid 10px orange;background-color:#F2F2F2;padding:20px;">関連記事</h3>
<div class="row">
  <table class="table"> 
  @foreach($articles['relatedArticles'] as $relatedArticle)
    <tr><td><a href="{{$relatedArticle->id}}">{{$relatedArticle->title}}</a></td></tr>
  @endforeach
  </table>
</div>
@stop

@section('sidebar')
<span>カテゴリ</span>
    <ul>
@foreach($articles['categories'] as $category)
    <li><a href="http://codeknow.net/articles/{{$category}}">{{$category}}</a></li>
@endforeach

    </ul>
@stop


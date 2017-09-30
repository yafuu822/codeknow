@extends('layout')
@section('title','majika')
@section('content')


    <h1>Logo</h1>

    <!-- 検索フォーム -->
    <div class="row">
        <div class="col-sm-12">
            <form method="get" action="/articles/display" class="form-inline" style="margin:20px;">
                <div class="form-group">
                    <label>検索</label>
                    <input type="text" name="keyword" class="form-control" value="{{$keyword}}">
                </div>
                <input type="submit" value="検索" class="btn btn-info">
            </form>
        </div>
    </div>



    <table class="table table-striped">
    @foreach($articles as $article)
        <tr>
            <td>{{$article->title}}</td>
            <td>{{$article->updated}}</td>
             <td><a href="/articles/show/{{$article->id}}" class="btn btn-primary btn-sm">詳細</a></td>
        </tr>
    @endforeach
    </table>

    <!-- page control -->
    {!! $articles->appends(['keyword'=>$keyword])->render() !!}
@stop

@extends('layout')

@section('title')
一覧
@stop

@section('content')

    <!-- 検索フォーム -->
    <div class="row">
        <div class="col-sm-12">
            <form method="get" action="/articles" class="form-inline" style="margin:20px;">
                <div class="form-group">
                    <label>検索</label>
                    <input type="text" name="keyword" class="form-control" value="@if($keyword){{$keyword}}@elseif($keyword == null) @endif">
                </div>
                <input type="submit" value="検索" class="btn btn-info">
            </form>
        </div>
    </div>


    <table class="table table-striped">
    @foreach($articles as $article)
        <tr>
            <td>{{$article->title}}<br /><span style="font-size:8px;">{{date('Y年m月d日',  strtotime($article->updated))}}</span></td>
             <td><a href="/articles/show/{{$article->id}}" class="btn btn-primary btn-sm">詳細</a></td>
        </tr>
    @endforeach
    </table>

    <!-- page control -->
    {!! $articles->appends(['keyword'=>$keyword])->render() !!}

@stop

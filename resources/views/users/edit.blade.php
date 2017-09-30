@extends('layout')

@section('content')

    <h1>情報編集</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/users" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

    <!-- form -->
    <form method="post" action="/users/update/{{$user->id}}">

        <div class="form-group">
            <label>名前</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label>E-Mail</label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control">
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="更新" class="btn btn-primary">

    </form>

@stop

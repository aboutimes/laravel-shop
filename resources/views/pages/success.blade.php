@extends('layouts.app')

@section('title', '成功 | ')

@section('content')
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">成功</div>
        <div class="panel-body text-center">
            <h1>{{ $msg }}</h1>
            <a class="btn btn-primary" href="{{ route('home') }}">返回首页</a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', '错误 | ')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">错误</div>
                        <div class="panel-body text-center">
                            <h1>{{ $msg }}</h1>
                            <a class="btn btn-primary" href="{{ route('home') }}">返回首页</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
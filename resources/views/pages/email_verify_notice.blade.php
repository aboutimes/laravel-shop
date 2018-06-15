@extends('layouts.app')

@section('title', '邮箱验证 | ')

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">邮箱验证</div>
                    <div class="panel-body text-center">
                        <h1>请先验证邮箱</h1>
                        <a class="btn btn-primary" href="{{ route('home') }}">返回首页</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', '邮箱验证 | ')

@section('content')

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">邮箱验证</div>
        <div class="panel-body text-center">
            <h1>{{ $msg  }}</h1>
            <a class="btn btn-primary" href="{{ $link }}">
                {{ $link_desc  }}
            </a>
        </div>
    </div>
</div>
@endsection
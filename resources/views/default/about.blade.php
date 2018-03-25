@extends('default.layouts.layout')
@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')
<div class="jumbotron">
    @if ($content)
    <h2 class="blog-post-title">{{$longtitle}}</h2>
    <p>{{$date}}</p>
    {{!! $content !!}}
    @endif
</div>

@endsection
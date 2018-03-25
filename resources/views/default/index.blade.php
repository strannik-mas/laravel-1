@extends('default.layouts.layout')
@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
    <div class="sidebar-module">
        <h4>About</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, ea! <em>Lorem ipsum dolor sit amet.</em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, pariatur?</p>
    </div>
@endsection

@section('content')
    @include('default.content')
@endsection
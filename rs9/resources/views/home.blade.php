@extends('layout.adminlayout')
@section('title','Home Page')
@section('page-name')
    <h1>Home Page</h1>
    <hr>
@endsection
@section('banner')
    <h2>This Home page banner</h2>
@endsection

@section('main')
    <h2>this is home page main content</h2>
@endsection

@section('default-content')
    <h4>This home page content overridden from layout default</h4>
@endsection
@extends('layout.adminlayout')
@section('title','Contact Page')

@section('page-name')
    <h1>Contact Page</h1>
    <hr>
   
@endsection
@section('banner')
    <h2>This Contact page banner</h2>
@endsection

@section('main')
    <h2>this is Contact page main content</h2>
@endsection

@section('default-content')
@parent         {{--   appending --}}
    <h4>This Contact page content overridden from layout default</h4>
@endsection
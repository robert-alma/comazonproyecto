@extends('Cliente.Templates.index')
@section('titulo')
    Dashboard
@endsection
@section('header')
    @include('Cliente.Templates.header')
@endsection

@section('content')
    @include('Cliente.Dashboard.content')
@endsection

@section('footer')
    @include('Cliente.Templates.footer')
@endsection

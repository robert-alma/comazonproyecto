@extends('Ejecutivo.Templates.index')
@section('titulo')
    Dashboard
@endsection
@section('header')
    @include('Ejecutivo.Templates.header')
@endsection

@section('content')
    @include('Ejecutivo.Dashboard.content')
@endsection

@section('footer')
    @include('Ejecutivo.Templates.footer')
@endsection

@extends('Cliente.Templates.index')
@section('titulo')
    Solicitud
@endsection
@section('header')
    @include('Cliente.Templates.header')
@endsection

@section('content')
    @include('Cliente.Solicitud.content')
@endsection

@section('footer')
    @include('Cliente.Templates.footer')
@endsection

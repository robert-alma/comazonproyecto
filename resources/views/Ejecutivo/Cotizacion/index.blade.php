@extends('Ejecutivo.Templates.index')
@section('titulo')
    Cotizacion
@endsection
@section('header')
    @include('Ejecutivo.Templates.header')
@endsection

@section('content')
    @include('Ejecutivo.Cotizacion.content')
@endsection

@section('footer')
    @include('Ejecutivo.Templates.footer')
@endsection

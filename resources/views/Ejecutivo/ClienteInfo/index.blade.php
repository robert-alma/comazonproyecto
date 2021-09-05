@extends('Ejecutivo.Templates.index')
@section('titulo')
    ClienteInfo
@endsection
@section('header')
    @include('Ejecutivo.Templates.header')
@endsection

@section('content')
    @include('Ejecutivo.ClienteInfo.content')
@endsection

@section('footer')
    @include('Ejecutivo.Templates.footer')
@endsection

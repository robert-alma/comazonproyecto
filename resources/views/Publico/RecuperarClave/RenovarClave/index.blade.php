@extends('Publico.Templates.index')
@section('titulo')
    Login
@endsection
@section('header')
    @include('Publico.Templates.header')
@endsection

@section('content')
    @include('Publico.RecuperarClave.RenovarClave.content')
@endsection

@section('footer')
    @include('Publico.Templates.footer')
@endsection

@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h2 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8">Bienvenido a la pagina principal</h2>
    <a href="{{route('cursos.index')}}">Cursos</a>
@endsection
@extends('layouts.plantilla')

@section('title', 'Cursos ' . $curso->name)

@section('content')
    <h2 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8">Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <a href="{{route('cursos.edit', $curso)}}">Editar</a>
    <br>
    <br>
    <p><strong>Categoria:</strong> {{$curso->categoria}}</p>

    <p>{{$curso->description}}</p>
@endsection
@extends('layouts.plantilla')

@section('title', 'Cursos ' . $curso->name)

@section('content')
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <br>
    <p><strong>Categoria: {{$curso->categoria}}</strong></p>
    <p>{{$curso->description}}</p>
@endsection
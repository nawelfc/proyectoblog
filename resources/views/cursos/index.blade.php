@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h2 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8">Bienvenido a los cursos</h2>
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <br>
    <br>
    <ul>
        @foreach ($cursos as $curso)
            <li><a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a></li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection

@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h2 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8">Crear cursos</h2>
    <form action="{{route('cursos.store')}}" method="POST" class="w-full max-w-sm">
        @csrf
        <label>
            Nombre: <br>
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text"name="name">
            <br>
        </label>
        <label>
            Descripción: 
            <br>
            <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="description" rows="5"></textarea>
            <br>
        </label>
        <label>
            Categoría: 
            <br>
            <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="categoria">
            <br>
        </label>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
    </form>
@endsection
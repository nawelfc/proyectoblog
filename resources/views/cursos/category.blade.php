@extends('layouts.plantilla')

@section('title', $categoria .' - '. $curso)

@section('content')
    <h1>Bienvenido al curso {{$curso}} de la categoria {{$categoria}}.</h1>
@endsection
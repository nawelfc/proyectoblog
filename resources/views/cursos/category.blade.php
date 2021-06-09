@extends('layouts.plantilla')

@section('title', $categoria .' - '. $curso)

@section('content')
    <h1>Bienvenido al curso {{$curso}} de la categoría {{$categoria}}.</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga animi optio, facere earum eligendi nemo expedita repudiandae facilis sint velit illum sunt nulla molestias corrupti dolorem excepturi iusto est harum.</p>
@endsection
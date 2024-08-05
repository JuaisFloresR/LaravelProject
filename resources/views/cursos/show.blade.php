@extends('layouts.plantilla')

@section('title', 'Course ' . $curso->name)

@section('content')
    <h1>Welcome to the course: {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Category: {{$curso->categoria}}</strong> </p>

@endsection
   
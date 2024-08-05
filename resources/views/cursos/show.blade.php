@extends('layouts.plantilla')

@section('title', 'Course ' . $curso->name)

@section('content')
    <h1>Welcome to the course: {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Come back to courses</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Edit course</a>

    <p><strong>Category: {{$curso->categoria}}</strong> </p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf 
        @method('delete')
        <button type="submit">Delete</button>
    </form>

@endsection
   
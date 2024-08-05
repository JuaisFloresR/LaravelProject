@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
<h1>Welcome to the courses's principal page </h1>
<a href="{{route('cursos.create')}}">Crear curso</a>
<ul>
    @foreach ($cursos as $curso)
        <li><a href="{{route('cursos.show',$curso->slug )}}">{{$curso->name}}</a></li>
       
    @endforeach

</ul>
    {{$cursos->links()}}
@endsection

@extends('layouts.plantilla')

@section('title', 'Create Course')

@section('content')
<h1>In this page you can make a course</h1>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<form action="">
    <label >
        Name:
        <br>
        <input type="text" name="name" id="name">
    </label>
    
    <br>
    <label>
        Description:
        <br>
        <textarea name="" id=""  rows="5"></textarea>
    </label>
    <br>
    <label>
        Category:
        <br>
        <input type="text" name="category" id="category">
    </label>
    
</form>

@endsection

@extends('layouts.plantilla')

@section('title', 'Edit Course')

@section('content')
    <h1>In this page you can edit a course</h1>
    <a href="{{route('cursos.index')}}">Come back to courses</a>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('put')
        <label >
            Name:
            <br>
            <input type="text" name="name" id="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name') 
            <br>
            <span >*{{$message}}</span>
            <br>

        @enderror 
        
        <br>
        <label>
            Description:
            <br>
            <textarea name="descripcion" id="descripcion"  rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripcion') 
            <br>
            <span >*{{$message}}</span>
            <br>

        @enderror 
        <br>
        <label>
            Category:
            <br>
            <input type="text" name="categoria" id="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria') 
            <br>
            <span >*{{$message}}</span>
            <br>

        @enderror 
         <br>

         <label >
            Slug:
            <br>
            <input type="text" name="slug" id="slug" value="{{old('slug', $curso->slug  )}}" >
        </label>

        @error('slug') 
            <br>
            <span >*{{$message}}</span>
            <br>

        @enderror 
    
         <br>
        <button type="submit"> Update form</button>
    </form>

@endsection

@extends('layouts.plantilla')

@section('title', 'Create Course')

@section('content')
    <h1>In this page you can make a course</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label >
            Name:
            <br>
            <input type="text" name="name" id="name" value="{{old('name')}}" >
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
            <textarea name="descripcion" id="descripcion"  rows="5">{{old('descripcion')}}</textarea>
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
            <input type="text" name="categoria" id="categoria"  value="{{old('categoria')}}"  >
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
            <input type="text" name="slug" id="slug" value="{{old('slug')}}" >
        </label>

        @error('slug') 
            <br>
            <span >*{{$message}}</span>
            <br>

        @enderror 
    
         <br>
        <button type="submit"> Send form</button>
    </form>

@endsection

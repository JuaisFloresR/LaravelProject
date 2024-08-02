@extends('layouts.plantilla')

@section('title', 'Course ' . $curso)

@section('content')
    <h1>Welcome to the course: {{$curso}} </h1>
@endsection
   
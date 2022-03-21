@extends('layout')

@section('content')

  <h1>{{$project->title}}</h1>

  <h2>{{$project->description}}</h2>

  <div>Le project appartient à: {{$project->user->name}}</div>

  <a href="/project/{{$project->id}}/edit" class="button">> Modifier le projet</a>
  
@endsection

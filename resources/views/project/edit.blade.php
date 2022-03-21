@extends('layout')

@section('content')

  <h1>Édit le project</h1>
  <form method="POST" action="/project/{{$project->id}}">
    @csrf
    @method('PUT')
    <div>
      <input type="text" name="title" placeholder="Titre du projet" value="{{$project->title}}">
    </div>
    <div>
      <textarea name="description" placeholder="Description du projet">{{$project->description}}</textarea>
    </div>
    <div>
      <button type="submit" class="button">Éditer le projet</button>
    </div>
  </form>  
@endsection

@extends('layout')

@section('content')

  <h1>Project</h1>
  
  <ul>
    @foreach ($projects as $project )
      <li>
	{{ $project->title }}
      </li>
    @endforeach
  </ul>

  <a href="/project/create" class="button">> Créer un nouveau projet</a>
@endsection

@extends('layout')

@section('content')

  <h1>Home - {{ $maVar }}</h1>

  <ul>
    @foreach ($tasks as $task )
      <li>{{ $task }}</li>
    @endforeach
  </ul>
@endsection

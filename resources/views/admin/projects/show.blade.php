@extends('layouts.app')

@section('content')

<div class="card text-center" >
    <div class="card-body">
      <h5 class="card-title">{{ $project->name }}</h5>
      <p class="card-text">{{ $project->description }}</p>
      <a href="{{ route('admin.project.index') }}" class="btn btn-primary">Torna a Progetti</a>
    </div>
  </div>

@endsection

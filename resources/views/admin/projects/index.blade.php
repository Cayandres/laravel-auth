@extends('layouts.app')

@section('content')
<div class="container text-center">
    <a href="{{ route('admin.project.create') }}" class="btn btn-secondary btn-lg m-4">Aggiungi Nuovo Progetto</i></a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Data</th>
        <th scope="col">Azioni</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)

        <tr>
          <td>{{ $project->id }}</td>
          <td>{{ $project->name }}</td>
          <td>{{ $project->creation_date }}</td>
          <td>

              <a href="{{ route('admin.project.show', $project) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
              <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>

          </td>
        </tr>

        @endforeach
    </tbody>
  </table>

@endsection

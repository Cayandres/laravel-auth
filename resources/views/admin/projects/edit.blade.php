@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.project.update', $project) }}"  method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label" >Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('description',$project->name )}}"></input>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label" >Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="5">{{ old('description',$project->description )}}</textarea>
        </div>

        <div class="mb-3">
            <label for="creation_date" class="form-label" >Data</label>
            <input type="date" class="form-control" id="creation_date" name="creation_date" value="{{ old('description',$project->creation_date )}}"></input>
        </div>

        <button type="submit" class=" btn btn-primary">Modifica</button>


        </form>

@endsection

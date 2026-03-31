@extends('layouts.app')

@section('content')
<div class="container-md">
    <form action="{{ route('project.update', $project)}}" method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">NOME</label>
    <input type="text" name="name" class="form-control" id="name" value="{{$project->name}}">
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">AUTORE</label>
    <input type="text" name="author" class="form-control" id="author" value="{{$project->author}}" >
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">DESCRIZIONE</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$project->description}}"</textarea>
  </div>
  <button type="submit" class="btn btn-primary">MODIFICA</button>
</form>    
</div>

@endsection
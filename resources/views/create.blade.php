@extends('layouts.app')

@section('content')
<div class="container-md">
    <form action="{{ route('project.store')}}" method="POST">
        @csrf
  <div class="mb-3">
    <label for="name" class="form-label">NOME</label>
    <input type="text" name="name" class="form-control" id="name" >
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">AUTORE</label>
    <input type="text" name="author" class="form-control" id="author" >
  </div>
  <div class="mb-3">
    <label for="type_id" class="form-label">CATEGORIA</label>
    <select name="type_id" id="type_id">
      @foreach ($types as $type)
          <option value="{{$type->id}}">{{$type->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">DESCRIZIONE</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">AGGIUNGI</button>
</form>    
</div>

@endsection
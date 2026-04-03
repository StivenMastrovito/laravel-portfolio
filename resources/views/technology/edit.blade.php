@extends('layouts.app')
@section('content')
    <form action="{{route('technology.update', $technology)}}" method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Nome categoria:</label>
    <input value="{{$technology->name}}" type="text" class="form-control" id="name" name="name" >
  </div>
  <div class="mb-3">
      <label for="color">Scegli colore</label>
        <input value="{{$technology->color}}" type="color" name="color" id="color">
    </select>
  </div>
  <button type="submit" class="btn btn-outline-primary">Modifca</button>
</form>
@endsection
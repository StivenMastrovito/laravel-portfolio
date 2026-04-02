@extends('layouts.app')
@section('content')
    <form action="{{route('type.update', $type)}}" method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Nome categoria:</label>
    <input value="{{$type->name}}" type="text" class="form-control" id="name" name="name" >
  </div>
  <button type="submit" class="btn btn-outline-primary">Modifica</button>
</form>
@endsection
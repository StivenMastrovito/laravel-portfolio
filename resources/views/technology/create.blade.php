@extends('layouts.app')
@section('content')
    <form action="{{route('technology.store')}}" method="POST">
        @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nome categoria:</label>
    <input type="text" class="form-control" id="name" name="name" >
  </div>
  <div class="mb-3">
      <label for="color">Scegli colore</label>
        <input value="#ff0000" type="color" name="color" id="color">
    </select>
  </div>
  <button type="submit" class="btn btn-outline-primary">Aggiungi</button>
</form>
@endsection
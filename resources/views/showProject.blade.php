@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->author }}</p>
    <h3>{{ $project->description }}</h3>
    <div class="">
        <a class="btn btn-outline-warning" href="{{ route('project.edit', $project) }}">MODIFICA</a>
        <button class="btn btn-outline-danger" id="openModal">ELIMINA</button>
    </div>
</div>

<div id="modal" class="modal_sm">
    <div>
        <h3>SEI SICURO DI VOLER ELIMINARE?</h3>
     <div class="">
        <button class="btn btn-warning" id="annulla">ANNULLA</button>
        <form action="{{ route('project.destroy', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="ELIMINA">
        </form>
     </div>
    </div>
</div>
 
    
@endsection
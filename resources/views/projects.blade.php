@extends('layouts.app')
@section('content')

<div class="container d-flex flex-column justify-content-between py-5">
    <a class="btn btn-outline-primary" href='{{ route('project.create') }}'>AGGIUNGI PROGETTO</a>
    <div class="grid_sm">
        @foreach ($projects as $project)
       <div class="card_sm">
            <h1>{{$project->name}}</h1>
            <small>{{$project->author}}</small>
            <a href="{{ route('project.show', $project) }}">VISUALIZZA</a>
            
        </div> 
        @endforeach
    </div>
</div>


@endsection
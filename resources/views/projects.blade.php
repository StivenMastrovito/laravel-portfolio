@extends('layouts.app')
@section('content')

<div class="container">
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
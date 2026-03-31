@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->author }}</p>
    <h3>{{ $project->description }}</h3>
</div>
    
@endsection
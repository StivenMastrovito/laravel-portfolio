@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('type.create')}}" class="btn btn-primary my-5">AGGIUNGI CATEGORIA</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Opzioni</th>
    </tr>
  </thead>
  <tbody>
    @for ($i = 0; $i < count($types); $i++)
       <tr>
      <th scope="row">{{$i + 1}}</th>
      <td>{{$types[$i]->name}}</td>
      <td>
        <div class="d-flex gap-3">
           <a href="{{route('type.edit', $types[$i])}}" class="btn btn-outline-warning">MODIFICA</a>
        <form action="{{route('type.destroy', $types[$i])}}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="ELIMINA">
        </form> 
        </div>
        
     </td>
    </tr> 
    @endfor        
    
  </tbody>
</table>
    </div>
@endsection
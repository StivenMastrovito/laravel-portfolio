@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('technology.create')}}" class="btn btn-primary my-5">AGGIUNGI TECNOLOGIA</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Colore</th>
      <th scope="col">Opzioni</th>
    </tr>
  </thead>
  <tbody>
    @for ($i = 0; $i < count($technologies); $i++)
       <tr>
      <th scope="row">{{$i + 1}}</th>
      <td>{{$technologies[$i]->name}}</td>
      <td><div class="blocco" style="background-color: {{$technologies[$i]['color']}}"></div></td>
      <td>
        <div class="d-flex gap-3">
           <a href="{{route('technology.edit', $technologies[$i])}}" class="btn btn-outline-warning">MODIFICA</a>
        <form action="{{route('technology.destroy', $technologies[$i])}}" method="POST">
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
@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
<form action="{{ route('todos')}}" method="POST">
  @csrf
  @if(session('sucesss'))
<h6 class="allert alert-sucess">{{session('sucess')}}</h6>

  @endif

  @error('tittle')
    <h6 class="alert alert-danger">{{$message}}</h6>
  @enderror
<div class="mb-3">
    <label for="tittle" class="form-label">Titulo de la tarea</label>
    <input type="text" name="tittle" class="form-control">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Crear nueva Tarea</button>

</form>
  <div>
    @foreach ($todos as $todo )
    <div class="row py/1">
      <div class="col-md-9 d-flex align-items-center">
        <a href="{{ route('todos-edit',['id' -> $todo->id]) }}">{{$todo -> tittle}}</a>
        </div>

        <div class="col-md-3 d-flex justify-content-end">
          <form action="{{route('todos-destroy',[$todo-> $todo->id]) }}" method="POST">
          @mthod('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm">Elimanr </button>
</form>
</div>
</div>
    @endforeach
  </div>
</div>
@endsection
@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
<form action="{{ route('todos-update',['id'=> $todo->id]) }}" method="POST">
  @csrf
  @if(session('sucesss'))
<h6 class="allert alert-sucess">{{session('sucess')}}</h6>

  @endif

  @error('tittle')
    <h6 class="alert alert-danger">{{$message}}</h6>
  @enderror
<div class="mb-3">
    <label for="tittle" class="form-label">Titulo de la tarea</label>
    <input type="text" name="tittle" class="form-control "value="{{ $todo->title}}">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Actualizar Tarea</button>

</form>
  
</div>
@endsection
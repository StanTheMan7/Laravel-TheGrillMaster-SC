@extends('backoffice.homeBack.homeB')
@section('contentB')
<div class="container d-flex flex-column justify-content-center align-items-center"></div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"></h5>
        <p class="card-text">{{$warmWelcomes->titre}}</p>
        <p class="card-text">{{$warmWelcomes->description_grand}}</p>
        <p class="card-text">{{$warmWelcomes->description_petit}}</p>
    <a class="btn btn-warning" href="{{route('loveSteaks.edit', $warmWelcomes->id)}}">Edit LoveSteak</a>
    <form action="{{route('loveSteaks.destroy', $warmWelcomes->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
@endsection
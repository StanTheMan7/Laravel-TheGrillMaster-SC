@extends('backoffice.homeBack.homeB')
@section('contentB')
<div class="container d-flex flex-column justify-content-center align-items-center"></div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"></h5>
        <p class="card-text">{{$item->contenu}}</p>
    <a class="btn btn-warning" href="{{route('navbars.edit', $item->id)}}">Edit NavBar</a>
    <form action="{{route('navbars.destroy', $item->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
@endsection
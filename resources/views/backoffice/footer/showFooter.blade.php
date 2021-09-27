@extends('backoffice.homeBack.homeB')
@section('contentB')
<div class="container d-flex flex-column justify-content-center align-items-center"></div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"></h5>
        <p class="card-text">{{$item->titre}}</p>
        <p class="card-text">{{$item->emoji}}</p>
    <a class="btn btn-warning" href="{{route('footers.edit', $item->id)}}">Edit Footer</a>
    <form action="{{route('footers.destroy', $item->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
@endsection
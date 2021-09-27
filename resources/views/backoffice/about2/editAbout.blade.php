@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('loveSteaks.update', $item->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Title:<input type="text" name="titre"value="{{$item->titre}}">
        Description:<input type="text" name="description"value="{{$item->description}}">
        Bouton:<input type="text" name="bouton"value="{{$item->bouton}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('loveSteaks.update', $warmWelcomes->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Title:<input type="text" name="titre"value="{{$warmWelcomes->titre}}">
        Description:<input type="text" name="description"value="{{$warmWelcomes->description}}">
        Bouton:<input type="text" name="bouton"value="{{$warmWelcomes->bouton}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
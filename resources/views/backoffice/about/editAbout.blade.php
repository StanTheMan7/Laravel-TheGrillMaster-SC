@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('warmWelcomes.update', $item->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Title:<input type="text" name="titre"value="{{$item->titre}}">
        Description_petit<input type="text" name="description_petit"value="{{$item->description_petit}}">
        Description_grand:<input type="text" name="description_grand"value="{{$item->description_grand}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
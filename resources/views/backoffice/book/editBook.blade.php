@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('bookTables.update', $item->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Building:<input type="text" name="building"value="{{$item->building}}">
        Description:<input type="text" name="adresse"value="{{$item->adresse}}">
        Bouton:<input type="text" name="telephone"value="{{$item->telephone}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
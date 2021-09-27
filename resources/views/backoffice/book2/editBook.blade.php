@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('heure.update', $item->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Jour:<input type="text" name="jour"value="{{$item->jour}}">
        Heure:<input type="text" name="heure"value="{{$item->heure}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
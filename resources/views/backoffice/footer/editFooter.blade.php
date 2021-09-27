@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('footers.update', $item->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Titre:<input type="text" name="titre"value="{{$item->titre}}">
        Emoji:<input type="text" name="emoji"value="{{$item->emoji}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
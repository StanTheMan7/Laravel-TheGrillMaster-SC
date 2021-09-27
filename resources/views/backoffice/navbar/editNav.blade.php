@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('navbars.update', $item->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Contenu:<input type="text" name="contenu"value="{{$item->contenu}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
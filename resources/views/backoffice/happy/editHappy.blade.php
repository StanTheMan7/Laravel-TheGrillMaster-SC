@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('happyCustomers.update', $item->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Image Url:<input type="file" name="url"value="{{$item->url}}">
        Titre:<input type="text" name="titre"value="{{$item->titre}}">
       Icone:<input type="text" name="icone"value="{{$item->icone}}">
       Description:<input type="text" name="description"value="{{$item->description}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
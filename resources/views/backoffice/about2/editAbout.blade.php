@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('abouts.update', $warmWelcome->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Title:<input type="text" name="titre"value="{{$warmWelcome->titre}}">
        Description_petit<input type="text" name="description_petit"value="{{$warmWelcome->description_petit}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection
@extends('backoffice.chefs.createChef')
 @section('contentB')
 @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
<form action="{{route('portfolios.store')}}" method="post">
@csrf
Image URL:<input type="file" name="url"value="{{old('url')}}" >
Titre:<input type="text" name="titre"value="{{old('titre')}}" >
Titre:<input type="text" name="titre"value="{{old('icone')}}" >

<button type="submit" class="btn btn-primary">Validate</button>
</form>
 @endsection
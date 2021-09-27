@extends('template.mainB')

@section('contentB')

<div class="container ">
    <h2 class="text-center mb-5">DATA BookTable</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Building</th>
            <th scope="col">Adresse</th>
            <th scope="col">Telephone</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($book_adresse as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->building}}</td>
        <td>{{$item->adresse}}</td>
        <td>{{$item->telephone}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection
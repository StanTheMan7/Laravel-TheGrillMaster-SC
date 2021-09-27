@extends('template.mainB')

@section('contentB')

<div class="container ">
    <h2 class="text-center mb-5">DATA LoveSteak</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Bouton</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($loveSteak as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->bouton}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection
@extends('template.mainB')

@section('contentB')

<div class="container ">
    <h2 class="text-center mb-5">DATA Heure</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Jour</th>
            <th scope="col">Heure</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($heure as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->jour}}</td>
        <td>{{$item->heure}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection
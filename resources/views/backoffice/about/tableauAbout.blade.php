@extends('template.mainB')

@section('contentB')
<div class="container ">
    <h2 class="text-center mb-5">DATA Warm Welcome</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description Grand</th>
            <th scope="col">Description Petit</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($warmWelcome as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->description_grand}}</td>
        <td>{{$item->description_petit}}</td>
        <td><a class="btn btn-warning" href="{{route('warmWelcomes.edit', $item->id)}}">Edit title</a> </td>
        <td><a class="btn btn-warning" href="{{route('warmWelcomes.show', $item->id)}}">Show</a> </td>
        <td>
          <form action="{{route('warmWelcomes.destroy', $item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection
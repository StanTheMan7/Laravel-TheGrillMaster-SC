@extends('template.mainB')

@section('contentB')
<div class="container">
    <h2 class="text-center mb-5">DATA NavBar</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Contenu</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach ($titre as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td><a class="btn btn-warning" href="{{route('titles.edit', $item->id)}}">Edit title</a> </td>
        <td><a class="btn btn-warning" href="{{route('titles.show', $item->id)}}">Show</a> </td>
        <td>
          <form action="{{route('titles.destroy', $item->id)}}" method="post">
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
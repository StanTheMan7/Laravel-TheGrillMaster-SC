@extends('backoffice.homeBack.homeB')

@section('contentB')
<div class="container ">
    <h2 class="text-center mb-5">DATA NavBar</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Contenu</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach ($navbar as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->contenu}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
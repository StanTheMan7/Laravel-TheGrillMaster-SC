<div class="container ">
    <h2 class="text-center mb-5">DATA Portfolio Chef</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Emoji</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($footer as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->emoji}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
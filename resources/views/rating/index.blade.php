


@include('layout.template')

<div class="container mt5">
<table class="table">
  <thead>
    <tr>
    <!-- <th scope="col">Id Meniu</th> -->
      <th scope="col">Nota (1-5)</th>
      <th scope="col">Parere</th>
      <!-- <th scope="col">Pret</th>
      <th scope="col">Ingrediente</th>
      <th scope="col">Actiuni</th> -->
      <!-- <th scope="col">Editeaza</th> -->
      <!-- <th scope="col">Editeaza</th> -->
      <!-- <th scope="col">status</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($rating as $r) 
    <tr>
      <!-- <td scope="row">{{$r->id}}</td> -->
      <td>{{$r->score}}</td>
      <td>{{$r->remarks}}</td>

      <td>
                <a href="{{ route('rating.show', $r->id)}}" 
                class="btn btn-primary">Show</a></td>
              <td>
      <td>
                <a href="{{ route('rating.edit', $r->id)}}" 
                class="btn btn-primary">Edit</a></td>
              <td>
                  <form action="{{ route('rating.destroy', $r->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
<div class="pull-right">
                <a class="btn btn-success" href="{{ route('rating.create') }}"> Creaza un Rating nou</a>
            </div>
</div>

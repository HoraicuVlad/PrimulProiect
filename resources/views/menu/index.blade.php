@include('layout.template')

<div class="container mt5">
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Numele meniului</th>
      <th scope="col">Pret (Lei)</th>
      <th scope="col">Ingrediente</th>
      <!-- <th scope="col">Actiuni</th> -->
      <!-- <th scope="col">Editeaza</th> -->
      <!-- <th scope="col">Editeaza</th> -->
      <!-- <th scope="col">status</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($menu as $m) 
    <tr>
      <!-- <td scope="row">{{$m->id}}</td> -->
      <td>{{$m->menu_name}}</td>
      <td>{{$m->price}}</td>

      <td>{{$m->ingredients}}</td>
      <td>
                <a href="{{ route('menu.show', $m->id)}}" 
                class="btn btn-primary">Show</a></td>
              <td>
      <td>
                <a href="{{ route('menu.edit', $m->id)}}" 
                class="btn btn-primary">Edit</a></td>
              <td>
                  <form action="{{ route('menu.destroy', $m->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
      <!-- <td>{{$m->menu_status}}</td> -->
    </tr>
    @endforeach
  </tbody>
</table>
<div class="pull-right">
                <a class="btn btn-success" href="{{ route('menu.create') }}"> Creaza un Meniu nou</a>
            </div>
</div>







<!-- @foreach($menu as $m)
<p>
{{$m->menu_name}} costa
{{$m->price}} de lei, cu ingredientele: 
{{$m->menu_type_id}}
{{$m->ingredients}}
{{$m->menu_status}}
</p>
<div>

</div>   

@endforeach -->
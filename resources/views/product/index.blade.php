<!-- <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
            </div>


@foreach($product as $p)
<p>
{{$p->name}}
{{$p->id}}
{{$p->detail}}
{{$p->created_at}}
{{$p->update_at}}
</p>
<div>
                <form action="{{ route('product.destroy',$p->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('product.show',$p->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('product.edit',$p->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
</div>

@endforeach -->

@include('layout.template')

<div class="container mt5">
<table class="table">
  <thead>
    <tr>
    <th scope="col">Id Produs</th>
      <th scope="col">Nume Produs</th>
      <th scope="col">Detalii Produs</th>
      <!-- <th scope="col">Pret</th>
      <th scope="col">Ingrediente</th>
      <th scope="col">Actiuni</th> -->
      <!-- <th scope="col">Editeaza</th> -->
      <!-- <th scope="col">Editeaza</th> -->
      <!-- <th scope="col">status</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($product as $p) 
    <tr>
      <td scope="row">{{$p->id}}</td>
      <td>{{$p->name}}</td>
      <td>{{$p->detail}}</td>

      <!-- <td>{{$p->ingredients}}</td> -->
      <td>
                <a href="{{ route('product.show', $p->id)}}" 
                class="btn btn-primary">Show</a></td>
              <td>
      <td>
                <a href="{{ route('product.edit', $p->id)}}" 
                class="btn btn-primary">Edit</a></td>
              <td>
                  <form action="{{ route('product.destroy', $p->id)}}" method="post">
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
                <a class="btn btn-success" href="{{ route('product.create') }}"> Adauga un Produs nou</a>
            </div>
</div>



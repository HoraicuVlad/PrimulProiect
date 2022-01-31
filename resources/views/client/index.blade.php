

@include('layout.template')

<div class="container mt5">
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Numele Clientului</th>
      <th scope="col">Contact</th>
      <th scope="col">Adresa de email</th>
      <th scope="col">Username</th>
      <th scope="col">Parola</th>
        
    
    </tr>
  </thead>
  <tbody>
  @foreach($client as $c)
    <tr>
      <td scope="row">{{$c->full_name}}</td>
      <td>{{$c->contact}}</td>
      <td>{{$c->email_address}}</td>
      <td>{{$c->username}}</td>
      <td>{{$c->password}}</td>
      <td>
                <a href="{{ route('client.show', $c->id)}}" 
                class="btn btn-primary">Show</a></td>
              <td>
      <td>
                <a href="{{ route('client.edit', $c->id)}}" 
                class="btn btn-primary">Edit</a></td>
              <td>
                  <form action="{{ route('client.destroy', $c->id)}}" method="post">
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
                <a class="btn btn-success" href="{{ route('client.create') }}"> Creaza un Client nou</a>
            </div>
</div>


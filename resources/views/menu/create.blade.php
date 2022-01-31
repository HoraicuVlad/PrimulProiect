
@include('layout.template')

<style>
  .uper {
    margin-top: 40px;
  }
</style> 
<h1> Detaliile Meniului</h1>
<div class="container">

    <div class="col-md-6 mx-auto">
        <div class="card uper"> 
            <div class="card-header">
               <h2> Adauga un Meniu</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p class="mb-0">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <p class="mb-0">{{ session('success') }}</p>
                    </div>
                @endif
                <form method="POST" action="{{ route('menu.store') }}">
                @csrf
                    <div class="form-group">   
                        <label for="menu_name" class="form-label">Numele Meniului:</label>
                        <input type="text" name="menu_name" class="form-control"/>
                    </div>
                    <div class="form-group">   
                        <label for="price" class="form-label">Pretul Meniului (Lei):</label>
                        <input type="text" name="price" class="form-control"/>
                    </div>

                    <div class="form-group">   
                        <label for="ingredients" class="form-label">Ingredientele Meniului:</label>
                        <input type="text" name="ingredients" class="form-control"/>
                    </div>
                    
                   
                
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Adauga</button>
                    </div>
                    
                </form>
                <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('menu.index') }}"> Back</a>
            </div>
            </div>
        </div>
    </div>
    
<!-- </div>

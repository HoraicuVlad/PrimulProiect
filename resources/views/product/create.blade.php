
@include('layout.template')

<style>
  .uper {
    margin-top: 40px;
  }
</style> 
<div class="container">

    <div class="col-md-6 mx-auto">
        <div class="card uper">
            <div class="card-header">
                Adauga Produs
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
                <form method="POST" action="{{ route('product.store') }}">
                @csrf
                    <div class="form-group">   
                        <label for="name" class="form-label">Numele Produsului:</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>
                    <div class="form-group">   
                        <label for="detail" class="form-label">Detaliile Produsului:</label>
                        <input type="text" name="detail" class="form-control"/>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
            </div>
        </div>
    </div> -->
<!-- </div>

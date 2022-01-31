
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
                Adauga Parere
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
                <form method="POST" action="{{ route('rating.store') }}">
                @csrf
                    <!-- <div class="form-group">   
                        <label for="menu_id" class="form-label">Nota Meniu(1-5):</label>
                        <input type="text" name="menu_id" class="form-control"/>
                    </div> -->
                    <div class="form-group">   
                        <label for="score" class="form-label">Nota pret(1-5):</label>
                        <input type="text" name="score" class="form-control"/>
                    </div>

                    <div class="form-group">   
                        <label for="remarks" class="form-label">Parerea despre meniu:</label>
                        <input type="text" name="remarks" class="form-control"/>
                    </div>
                    <!-- <div class="form-group">   
                        <label for="customer_id" class="form-label">Menu Customer:</label>
                        <input type="text" name="customer_id" class="form-control"/>
                    </div> -->
                    <!-- <div class="form-group">   
                        <label for="menu_status" class="form-label">Menu menu_status:</label>
                        <input type="text" name="menu_status" class="form-control"/>
                    </div> -->

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rating.index') }}"> Back</a>
            </div>
            </div>
        </div>
    </div> -->
<!-- </div>

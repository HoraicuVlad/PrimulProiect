
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
                Adauga Client
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
                <form method="POST" action="{{ route('client.store') }}">
                @csrf
                    <div class="form-group">   
                        <label for="full_name" class="form-label">Full Name:</label>
                        <input type="text" name="full_name" class="form-control"/>
                    </div>
                    <div class="form-group">   
                        <label for="contact" class="form-label">Contact:</label>
                        <input type="text" name="contact" class="form-control"/>
                    </div>

                    <div class="form-group">   
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" class="form-control"/>
                    </div>
                    <div class="form-group">   
                        <label for="email_address" class="form-label">Email Address:</label>
                        <input type="text" name="email_address" class="form-control"/>
                    </div>
                    <div class="form-group">   
                        <label for="password" class="form-label">Password:</label>
                        <input type="text" name="password" class="form-control"/>
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('client.index') }}"> Back</a>
            </div>
            </div>
        </div>
    </div> -->


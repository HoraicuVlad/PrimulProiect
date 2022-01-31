@include('layout.template')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editeaza Meniul</h2>
            </div>
           
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
    <form action="{{ route('menu.update',$menu->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numele Meniului:</strong>
                    <input type="text" name="menu_name" value="{{ $menu->menu_name }}" class="form-control" placeholder="menu_name">
                </div>
            </div>
            
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ingredientele Meniului:</strong>
                    <input type="text" name="ingredients" value="{{ $menu->ingredients }}" class="form-control" placeholder="ingredients">
                </div>
            </div>
            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ingrediente:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $menu->detail }}</textarea>
                </div>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editeaza</button>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('menu.index') }}"> Back</a>
            </div>
        </div> 
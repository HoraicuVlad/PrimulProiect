@include('layout.template')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Afiseaza Meniul</h2>
            </div>
           
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numele Meniului:</strong>
                {{ $menu->menu_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ingrediente:</strong>
                {{ $menu->ingredients }}
            </div>
        </div>
    </div>   
    <div class="pull-right">
                <a class="btn btn-primary btn-sm"href="{{ route('menu.index') }}"> Back</a>
            </div>
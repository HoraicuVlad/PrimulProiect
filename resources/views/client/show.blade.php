
@include('layout.template')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Datele Clientului</h2>



            </div>
           
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nume:</strong>
                {{ $client->full_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact:</strong>
                {{ $client->contact }}
            </div>
        </div>
    </div>  
    <div class="pull-right">
                <a class="btn btn-primary btn-sm" href="{{ route('client.index') }}"> Back</a>
            </div>
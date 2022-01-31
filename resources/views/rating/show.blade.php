@include('layout.template')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Arata Parere</h2>
            </div>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Score:</strong>
                {{ $rating->score }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Parere:</strong>
                {{ $rating->remarks }}
            </div>
        </div>
    </div>  
    <div class="pull-right">
                <a class="btn btn-primary btn-sm" href="{{ route('rating.index') }}"> Back</a>
            </div>
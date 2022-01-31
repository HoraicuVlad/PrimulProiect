@include('layout.template')


<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Rating</h2>
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
    <form action="{{ route('rating.update',$rating->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Scor Meniu:</strong>
                    <input type="text" name="score" value="{{ $rating->score }}" class="form-control" placeholder="score">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Parere:</strong>
                    <textarea class="form-control" style="height:150px" name="remarks" placeholder="Detail">{{ $rating->remarks }}</textarea>
                </div>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div> 

        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rating.index') }}"> Back</a>
            </div>
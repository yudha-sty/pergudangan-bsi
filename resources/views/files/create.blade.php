@extends('layouts.masterapp')

@section('content')

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


<form action="{{ route('files.store') }}" method="POST">
@csrf


 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Number:</strong>
            <input type="text" name="number" class="form-control" placeholder="Number">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>File Name:</strong>
            <textarea class="form-control" style="height:150px" name="filename" placeholder="File Name"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            <textarea class="form-control" style="height:150px" name="status" placeholder="Status"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


</form>


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
    
@endsection
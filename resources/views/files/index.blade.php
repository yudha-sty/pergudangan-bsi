@extends('layouts.masterapp')

@section('content')

<div class="pull-right">
    @can('file-create')
    <a class="btn btn-success" href="{{ route('files.create') }}"> Create New File</a>
    @endcan
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>Number</th>
    <th>File Name</th>
    <th>Status</th>
    <th width="280px">Action</th>
</tr>
@foreach ($files as $file)
<tr>
    <td>{{ ++$i }}</td>
    <td>{{ $file->number }}</td>
    <td>{{ $file->filename }}</td>
    <td>{{ $file->status }}</td>
    <td>
        <form action="{{ route('files.destroy',$file->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('files.show',$file->id) }}">Show</a>
            @can('file-edit')
            <a class="btn btn-primary" href="{{ route('files.edit',$file->id) }}">Edit</a>
            @endcan


            @csrf
            @method('DELETE')
            @can('file-delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @endcan
        </form>
    </td>
</tr>
@endforeach
</table>


{!! $files->links() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
    
@endsection
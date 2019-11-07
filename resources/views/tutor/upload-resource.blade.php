@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
                <div class="container">
  <div class="row justify-content-center">
    <div class="card">
       <div class="card-header">Upload resources</div>
 
         <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
 
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('upload-resource')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label>Description</label><br>
                <textarea name="description"></textarea>
            </div>
            <div class="col-md-6">
                <label>Resources</label><br>
                <input type="file" name="file" class="form-control"><br>
                 <label>File Name</label><br>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col-md-6">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
        </div>

        </form>
 </div>
         </div>
     </div>
  </div>
</div>
@endsection
@extends('layouts.tutor-dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header">Add New Resource</div>
                </center>
                    <div class="card-body">

                    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="col-md-6">
                    <div class="form-group">
                        Title:
                        <br>
                        <input type="text" name="title" class="form-control">
                    </div>
                    </div>
                       <br>
                        <div class="col-md-6">
                        File:
                        <br>
                        
                        <input type="file" name="file">
                            <br>
                        <br>
                    </div>
                    <div class="col-md-10">
                    <div class="form-group">
                        Description:
                        <br>
                        <textarea class="form-control" required name="description" rows="4"></textarea>
                    </div>
                </div>
                <center>
                    <div class="col-md-4">
                        <input type="submit" value=" Upload Resource " class="btn btn-primary">
                        </div>
                </center>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
<br><br><br><br>
@endsection
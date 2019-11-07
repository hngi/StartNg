@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="desc">Resource Description</label>
                            <input id="desc" class="form-control" type="text" name="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Upload
                                    File</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a class="btn btn-warning" href="">SUBMIT</a>
                </div>
            </div>
@endsection
            
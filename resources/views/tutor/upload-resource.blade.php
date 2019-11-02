@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="desc">Resource Description</label>
                            <input id="desc" class="form-control" type="text" name="">
                        </div>
                    </div>
                </div><br>
                 <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="custom-file">
                               <?php
                                 echo Form::open(array('url' => '/uploadfile','files'=>'true'));
                                 echo 'Select the file to upload.';
                                 echo Form::file('image');
                                 echo Form::submit('Upload File');
                                 echo Form::close();
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <a class="btn btn-warning" href="">submit</a>
                </div>
            </div>
@endsection
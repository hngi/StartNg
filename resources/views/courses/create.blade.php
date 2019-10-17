@extends('layouts.app')

@section('content')
    
<div class="container">
            <h2 class="text-center mt-5 mb-5">ADD NEW COURSES</h2>
            <form action="" method="POST">
                @csrf
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coursename">Course Title</label>
                                <input id="coursename" class="form-control" type="text" name="title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coursecode">Course Duration</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" name="duration" placeholder="" aria-label="Recipient's " aria-describedby="new-addon">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="new-addon">MONTHS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Course Price</label>
                                <div class="input-group">

                                    <input class="form-control" type="number" name="price" placeholder="" aria-label="Recipient's " aria-describedby="my-addon">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="my-addon">NGN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="coursedesc">Course Description</label>
                                <textarea id="coursedesc" class="form-control" name="description" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success d-block mx-auto pr-5 pl-5" style="background-color: #3A0842; border-color: #3A0842;">ADD</button>
            </form>
        </div>

    </div>
    <!-- /#page-content-wrapper -->

</div>

@endsection
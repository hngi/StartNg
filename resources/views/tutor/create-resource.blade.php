@extends('layouts.tutor-dashboard')

@section('content')
<div class=" content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">UPLOAD RESOURCE</h4>
                </div>
                <div class="card-body">
                        <form action="{{route('resource.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div><label for="file"><strong>Upload</strong></label> </div>
                                    <input type="file" class="form-control" name="file"><br>
                                </div>
                                <div class="col-md-2 px-1">
                                    <div class="form-group">
                                        <label>Course</label>
                                        @foreach($courses as $course)
                                        <input type="radio" name="course" value="{{$course->id}}" class="form-control">{{$course->title}}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">CREATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
            
    
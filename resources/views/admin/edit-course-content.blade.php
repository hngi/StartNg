@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">EDIT COURSE CONTENT</h4>
                </div>
                <div class="card-body">
                        <form action="{{route('course-content.update', $content->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$content->title}}">
                                    </div>
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Content Details</label>
                                        <textarea class="form-control" required name="details" rows="4">{{$content->details}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Assignment</label>
                                        <textarea class="form-control" required name="assignment" rows="4">{{$content->assignment}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">EDIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
            
    
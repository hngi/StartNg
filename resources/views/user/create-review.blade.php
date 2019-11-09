@extends('layouts.user-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">Review Page</h5>
        </div>
        <div class="card-body">
                    <form action="{{route('review.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control" required name="comment" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 px-1">
                            <div class="form-group">
                                <label>Course</label>
                                @foreach($courses as $course)
                                @foreach($registered_courses as $registered_course)
                                @if($registered_course->course_id==$course->id)
                                <input type="radio" name="course" value="{{$course->id}}" class="form-control">{{$course->title}}
                                @endif
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
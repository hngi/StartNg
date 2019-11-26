@extends('layouts.user-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">Submission</h5>
        </div>
        <div class="card-body">
            <form action="{{route('submission.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            Upload<input type="file" name="submission" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        @foreach($registered_courses as $registered_course)
                        @foreach($contents as $content)
                            @if($registered_course->course_id==$content->course_id)
                            <input type="radio" name="content" value="{{$content->id}}" class="form-control">{{$content->title}}
                            @endif
                        @endforeach
                        @endforeach
                        </div>
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
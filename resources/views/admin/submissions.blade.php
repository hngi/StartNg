@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">DETAILS</h5>
        </div>
        <div class="card-body">
            <div class="card-header">
                    <h4 class="card-title">Submissions</h4>
                </div>
                <div class="card-body">
                    @foreach($courses as $course)
                    @foreach($contents as $content)
                    @foreach($submissions as $submission)
                        @if($course->id==$content->course_id)
                        @if($submission->course_content_id==$content->id)
                        <li>
                            <a href="/storage/submissions/{{$submission->file}}" download>
                                {{$submission->file}} - {{$content->title}}
                            @foreach($students as $student)
                                @if($submission->user_id==$student->id)
                                {{$student->username}}
                                @endif
                            @endforeach
                            </a>
                        </li>
                        @endif
                        @endif
                    @endforeach
                    @endforeach
                    @endforeach
                    <a class="btn btn-primary" href="{{route('submission.create')}}">GRADE SUBMISSIONS</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection       
            
    
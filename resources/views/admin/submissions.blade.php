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
                    @foreach($assignments as $assignment)
                    @foreach($submissions as $submission)
                        @if($assignment->course_content_id==$content->id)
                        @if($course->id==$content->course_id)
                        @if($submission->assignment_id==$assignment->id)
                        <li>
                            <a href="/storage/submissions /{{$submission->file}}" download>
                                {{$submission->file}} - {{$assignment->title}}
                            @foreach($students as $student)
                                @if($submission->user_id==$student->id)
                                {{$student->username}}
                                @endif
                            @endforeach
                            </a>
                        </li>
                        @endif
                        @endif
                        @endif
                    @endforeach
                    @endforeach
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection       
            
    
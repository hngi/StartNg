@extends('layouts.user-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">DETAILS</h5>
        </div>
        <div class="card-body">
            <div class="card-header">
                    <h4 class="card-title">My Assigments</h4>
                </div>
                <div class="card-body">
                <ul>
                @foreach($registered_courses as $registered_course)
                @foreach($contents as $content)
                @foreach($assignments as $assignment)
                    @if($assignment->course_content_id==$content->id)
                    @if($registered_course->course_id==$content->course_id)
                    @if($assignment->active)
                    <li>
                        <a href="{{route('assignment.show', $assignment->id)}}">{{$assignment->title}}</a>
                    </li>
                    @endif
                    @endif
                    @endif
                @endforeach
                @endforeach
                @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
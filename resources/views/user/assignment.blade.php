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
                @foreach($assignments as $assignment)
                @if($registered_course->course_id == $assignment->user_id)
                @if($assignment->active)
                <li>
                    <a href="{{route('assignment.show', $assignment->id)}}">{{$assignment->title}}</a> -
                        @foreach($courses as $course)
                        @if($assignment->user_id == $course->id)
                            {{$course->title}}
                        @endif
                        @endforeach
                </li>
                @endif
                @endif
                @endforeach
                @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
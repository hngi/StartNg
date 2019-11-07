@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">DETAILS</h5>
            @foreach($users as $user)
            @if($course->user_id == $user->id)
            <h4 class="card-title">Tutor: {{$user->username}}</h4>
            @endif
            @endforeach
            <h4 class="card-title">Number of Students: {{$number}}</h4>
            <h4 class="card-title">Course Contents:</h4>
            <ul>
            @foreach($contents as $content)
            <li>{{$content->title}}</li>
            @endforeach
            </ul>
            @if($mine)
            Reviews:
            @foreach($reviews as $review)
            {{$review->comment}}
            @endforeach
            <div class="row mt-2">
                <div>
                    <a class=" btn btn-info" href="{{route('course.edit', $course->id)}}" >Edit</a>
                </div>
            @if($course->active)
                <div>
                    <a class=" btn btn-info" href="{{route('courses.disable', $course->id)}}" >Disable</a>
                </div>
            @else
                <div>
                    <a class=" btn btn-primary" href="{{route('courses.disable', $course->id)}}" >Enable</a>
                </div>
            @endif
            </div>
            @endif
        </div>
    </div>
</div>
@endsection 
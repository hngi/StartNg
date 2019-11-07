@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">{{$course->title}} DETAILS</h5>
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
        </div>
        <div class="card-body">
            Reviews:
            <ul>
            @foreach($reviews as $review)     
                <li>{{$review->comment}}</li>   
            @endforeach
            </ul>
        </div>
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
                <a class=" btn btn-danger" href="{{route('courses.disable', $course->id)}}" >Enable</a>
            </div>
        @endif
        </div>
    </div>
</div>
@endsection
            
    
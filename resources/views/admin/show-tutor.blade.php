@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">{{$tutor->username}}</h5>
        </div>
        <div class="card-body">
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>NAME: {{$tutor->first_name}} {{$tutor->last_name}}</h5>
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>USERNAME: {{$tutor->username}}</h5>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>EMAIL: {{$tutor->email}}</h5>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>Phone Number: {{$tutor->phone}}</h5>
                </div>
            </div>
        </div>
        <div class="row mt-2">
                <div class="col-md-12">
                    <h5>COURSES:<span>
                    @foreach($courses as $course)
                            <li class="mt-4">{{$course->title}}</li>
                    @endforeach
                    </h5>
                </div>
            </div>
        @if($tutor->active)
            <div>
                <a class=" btn btn-info" href="{{route('tutors.disable', $tutor->id)}}" >Disable</a>
            </div>
        @else
            <div>
                <a class=" btn btn-primary" href="{{route('tutors.disable', $tutor->id)}}" >Enable</a>
            </div>
        @endif
    </div>
</div>
@endsection
            
       
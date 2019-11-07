@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
                <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">DETAILS</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>NAME: {{$student->first_name}} {{$student->last_name}}</h5>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>USERNAME: {{$student->username}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>EMAIL: {{$student->email}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Phone Number: {{$student->phone}}</h5>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>COURSES:<span>
                                @foreach($registered_courses as $registered_course)
                                @foreach($courses as $course)
                                @if($registered_course->course_id == $course->id)
                                        <li class="mt-4">{{$course->title}} <span> <br>Progress: <div
                                                    class="progress md-progress mt-3" style="height: 20px">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                        role="progressbar" style="width: {{$registered_course->progress}}%; height: 20px;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$registered_course->progress}}%
                                                    </div>
                                                </div></span></li>
                                    </span>
                                @endif
                                @endforeach
                                @endforeach
                                </h5>
                            </div>
                        </div>

                        <div class="row mt-2">
                        @if($student->active)
                            <div>
                                <a class=" btn btn-info" href="{{route('user.disable', $student->id)}}" >Disable</a>
                            </div>
                        @else
                            <div>
                                <a class=" btn btn-primary" href="{{route('user.disable', $student->id)}}" >Enable</a>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
@endsection      
            
   
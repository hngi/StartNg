@extends('layouts.user-dashboard')

@section('content')
<div class="content">
                <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">DETAILS</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>TITLE: {{$course->title}}</h5>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Price: {{$course->price}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Duration: {{$course->duration}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Description: {{$course->description}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Course Contents:</h5>
                                <ul>
                                @foreach($contents as $content)
                                <li>{{$content->title}}</li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        @if($registered)
                        <div>
                            <a href="{{route('user.review', $course->id)}}">Review</a>
                        </div>
                        @else
                        <div>
                            <a href="{{route('register.courses', $course->id)}}">Register</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
@endsection
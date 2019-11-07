@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
                <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">{{$admin->username}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>NAME: {{$admin->first_name}} {{$admin->last_name}}</h5>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>USERNAME: {{$admin->username}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>EMAIL: {{$admin->email}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Phone Number: {{$admin->phone}}</h5>
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
                </div>
            </div>
@endsection
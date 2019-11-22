@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Edit {{$course->title}}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('course.update', $course->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" value="{{$course->title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2 px-1">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="number" name="price" class="form-control" value="{{$course->price}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Duration</label>
                                                <input type="number" name="duration" class="form-control" value="{{$course->duration}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Course Description</label>
                                                <textarea class="form-control" required name="description" rows="4">{{$course->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Tutor:</label><br>
                                                @foreach($users as $user)
                                                @if($user->role != 0)
                                                <input type="radio" name="tutor" value="{{$user->id}}" class="form-control">
                                                {{$user->username}}
                                                @if($course->user_id==$user->id)
                                                <small>Current Tutor</small>
                                                @endif
                                                <br>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">EDIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
            
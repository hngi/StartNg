@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">CREATE ASSIGNMENT</h4>
                            </div>
                            <div class="card-body">
                                    <form action="{{route('assignment.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <div class="form-group">
                                                    <label>Course</label>
                                                    @foreach($courses as $course)
                                                    <input type="radio" name="course" value="{{$course->id}}" class="form-control">{{$course->title}}
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-5 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Duration</label>
                                                    <input type="number" name="duration" class="form-control">days
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Details</label>
                                                    <textarea class="form-control" required name="description" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="update ml-auto mr-auto">
                                                <button type="submit" class="btn btn-primary btn-round">CREATE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
            
    
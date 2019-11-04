@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">EDIT SCHEDULE</h4>
                            </div>
                            <div class="card-body">
                                    <form action="{{route('schedule.update', $schedule->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" name="date" class="form-control" value="{{$schedule->date}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Time</label>
                                                    <input type="time" name="time" class="form-control" value="{{$schedule->time}}">
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
                                        </div>>
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
            
    
@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">CREATE SCHEDULE</h4>
                            </div>
                            <div class="card-body">
                                    <form action="{{route('schedule.store')}}" method="post">
                                        @csrf
       
                                        <div class="row">
                                            <div class=" col-md-4 px-2 ">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Date:</span>
                                                <input type="date" class="form-control" name="date" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <br> <br>
                                            <br>
                                               <div class=" col-md-4 px-2">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Time:</span>
                                                <input type="time" class="form-control" name="time" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                          <br>
                                            <br><br>
                                            <div class="col-md-3 px-1">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Course:</span>
                                                <select name="course" class="form-control" aria-describedby="basic-addon1">
                                                     <option >Select</option>
                                                       @foreach($courses as $course)
                                                        <option  class="form-control" value="{{$course->id}}">
                                                        {{$course->title}}</option>
                                                        @endforeach
                                                     </select>
                                                    
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
            
    
@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">CREATE COURSE CONTENT</h4>
                            </div>
                            <div class="card-body">
                                    <form action="{{route('course-content.store')}}" method="post">
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
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Content Details</label>
                                                    <textarea class="form-control" required name="details" rows="4"></textarea>
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
            
    
@extends('layouts.user-dashboard')

@section('content')
<div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">My Profile</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('user.update', $student->id)}}" method="post">
                            @csrf 
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Username</label>
                                    </div>
                                        <input type="text" name="username" class="form-control" value="{{$student->username}}">
                                    </div>
                                </div>
                                <div class="col-md-2 px-1">

                                </div>
                                <div class="col-md-5 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" value="{{$student->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control" value="{{$student->first_name}}">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value="{{$student->last_name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" name="phone" class="form-control" value="{{$student->phone}}">
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
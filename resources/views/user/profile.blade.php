@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <h3 class="mb-3">My Profile</h3>
    
    <form method="post" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="text-center">
                        @if($user->profile_pic)
                        <img class="card-img-top img-fluid w-75" src="/storage/profile_pictures/{{$user->profile_pic}}">
                        @else
                        <img class="card-img-top img-fluid w-75" src="/storage/profile_pictures/noimage.jpg">
                        @endif
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$user->first_name}} {{$user->last_name}}</h4>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="pic" class="form-control" type="file" name="profile_pic">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" class="form-control" type="text" name="username" value="{{$user->username}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="email" class="form-control" type="text" name="email" value="{{$user->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input id="firstname" class="form-control" type="text" name="first_name" value="{{$user->first_name}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input id="lastname" class="form-control" type="text" name="last_name" value="{{$user->last_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input id="phone" class="form-control" type="tel" name="phone" value="{{$user->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input id="status" class="form-control" type="text" name="status" value="{{$user->status}}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="my-textarea">About Me</label>
                                    <textarea id="my-textarea" class="form-control" name="about" rows="3">{{$user->about}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-8">
                                <div class="form-group">
                            <button type="submit" class="button">UPDATE PROFILE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

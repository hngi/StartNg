@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                     <!--            <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572364388/startng/3A0842_gfrakh.jpg" class="img-fluid w-100" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="https://res.cloudinary.com/josh4324/image/upload/v1566593526/jj_yvwlrq.jpg" alt="Profile Photo">
                                        <h5 class="title">{{ $tutor->first_name }} {{ $tutor->last_name }}
                                    </a>
                                    <p class=" text-black"><strong>Username:</strong>{{ $tutor->username }}</p>
                                    <p class=" text-black"><strong>Email:</strong>{{$tutor->email}}</p>
                                    <p class=" text-black"><strong>Phone:</strong>{{$tutor->phone}}</p>
                                    <p class=" text-black"><strong>State:</strong>{{$tutor->state}}</p>
                                </div>
                                <p class=" text-center text-black"><strong>aboutme:</strong>{{$tutor->aboutme}}</p>
                            </div> -->
                            <!-- <div class="card-footer">
                                <hr>
                                <div class="button-container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-6 ml-auto">
                                            <h5>1
                                                <br>
                                                <small>Project(s) Pending</small>
                                            </h5>
                                        </div>

                                        <div class="col-lg-6 mr-auto">
                                            <h5>2
                                                <br>
                                                <small>Project(s) Completed</small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div class="col-md-8">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form  method="post" action="{{ route('tutor.update', $tutor->id) }}">
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control"  name="username" value={{ $tutor->username }}/>
                                            </div>
                                        </div>
                                        <div class="col-md-2 px-1">

                                        </div>
                                        <div class="col-md-5 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" value={{ $tutor->email }}/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="first_name" value={{ $tutor->first_name }}/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="last_name" value={{ $tutor->last_name }}/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Upload
                                                        Profile Picture</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" value={{ $tutor->address }}/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control" name="state" value={{ $tutor->state }}/>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" name="country" value={{ $tutor->country }}/>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number" class="form-control" name="phone" value={{ $tutor->phone }}/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea class="form-control textarea" name="aboutme" value={{ $tutor->aboutme }}/>About Me</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">Update
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
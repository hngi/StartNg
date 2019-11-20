@extends('layouts.admin-dashboard')

@section('content')
<br><br><br>

<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal">
        @if($admin->profile_pic)
        <img src="/storage/profile_pictures/{{$admin->profile_pic}}"  name="aboutme" width="140" height="140" class="img-circle">
        @else
        <img src="/storage/profile_pictures/noimage.jpg"  name="aboutme" width="140" height="140" class="img-circle">
        @endif
        </a>
        <h3>{{$admin->first_name}} {{$admin->last_name}}</h3>
        <em>click my face for more</em>
        </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About {{$admin->username}}</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    @if($admin->profile_pic)
                    <img src="/storage/profile_pictures/{{$admin->profile_pic}}" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    @else
                    <img src="/storage/profile_pictures/noimage.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    @endif
                    <h3 class="media-heading">{{$admin->first_name}} {{$admin->last_name}}</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Username: {{$admin->username}}</li>
                        <li class="list-group-item">Email: {{$admin->email}}</li>
                        <li class="list-group-item">Phone: {{$admin->phone}}</li>
                        <li class="list-group-item">Status: {{$admin->status}}</li>
                    </ul>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>{{$admin->about}}</p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about {{$admin->username}}</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="span3 well">
        <center><h3 class="media-heading">Edit Profile</h3></center>
        <center>
        <form class="user-form" method="post" action="{{route('admin.update', $admin->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="username"><strong>User Name</strong></label></div>
                        <input type="text" class="form-control" id="username"  placeholder="Username" name="username" value="{{$admin->username}}">
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <div><label for="email"><strong>Email Address</strong></label></div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$admin->email}}">
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div><label for="fname"><strong>First Name</strong></label></div>
                        <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name" value="{{$admin->first_name}}">
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <div><label for="lname"><strong>Last Name</strong></label></div>
                        <input type="text" class="form-control" name="last_name" id="lname" placeholder="Last Name" value="{{$admin->last_name}}">
                        </div>
                    </div>
                    </div>

                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="address"><strong>Phone</strong></label> </div>
                        <input type="number" class="form-control" name="phone" class="phone" id="phone" placeholder="Phone Number" value="{{$admin->phone}}">
                    </div>
                </div>
                        <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="address"><strong>Status</strong></label> </div>
                        <input type="text" class="form-control" name="status" class="about" id="status" placeholder="Status" value="{{$admin->status}}">
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <div><label for="about"><strong>About Me</strong></label> </div>
                        <textarea name="about"  class="form-control"id="about" class="about" cols="30" rows="5" placeholder="About Me">{{$admin->about}}</textarea>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-8">
                        <div> <label for="address"><strong>Profile Picture</strong></label> </div>
                        <input type="file" class="form-control" name="profile_pic"><br>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                 <div class="col-md-8">
                    <div class="form-group">
                <button class="but">UPDATE PROFILE</button>
            </div>
        </div>
    </div>
            
        </form>
    </div>
</div>
</center>
<br>
</main>
@endsection

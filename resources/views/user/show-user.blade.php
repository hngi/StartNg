@extends('layouts.user-dashboard')

@section('content')
<main class="main" >
    <div class="profile card">
        <div class="user-back">

        </div>
        <div class="circle">
            <img src="storage/profile_pictures/{{$student->profile_pic}}" alt="josh">
        </div>
        <div class="card-body user-body">
            <h5 class="name">{{$student->first_name}} {{$student->last_name}}</h5>
            <p>{{$student->username}}</p>
            <p>{{$student->status}}</p>

            <p class="pb-2">{{$student->about}}</p>

            <hr>
        </div>

    </div>

    <div class="form-content card">
        <p class="edit">Edit Profile</p>
        <form class="user-form" method="post" action="{{route('user.update', $student->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="row">
                    <div class="col-sm py-2">
                        <div> <label for="username">User Name</label></div>
                        <input type="text" id="username"  placeholder="Username" name="username" value="{{$student->email}}">
                    </div>
                    
                    <div class="col-sm py-2">
                        <div><label for="email">Email Address</label></div>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{$student->email}}">
                    </div>
                    
                </div>

                <div class="row">

                    <div class="col-sm py-2">
                        <div><label for="fname">First Name</label></div>
                        <input type="text" name="first_name" id="fname" placeholder="First Name" value="{{$student->first_name}}">
                    </div>

                        <div class="col-sm py-2">
                        <div><label for="lname">Last Name</label></div>
                        <input type="text" name="last_name" id="lname" placeholder="Last Name" value="{{$student->last_name}}">
                        </div>

                </div>
                
                <div class="row">
                    <div class="col-sm py-2">
                        <div> <label for="address">Phone</label> </div>
                        <input type="number" name="phone" class="phone" id="phone" placeholder="Phone Number" value="{{$student->phone}}">
                    </div>
                    <div class="col-sm py-2">
                        <div> <label for="address">Status</label> </div>
                        <input type="text" name="status" class="about" id="status" placeholder="Status" value="{{$student->status}}">
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col py-2">
                        <div><label for="about">About Me</label> </div>
                        <textarea name="about" id="about" class="about" cols="30" rows="5" placeholder="About Me">{{$student->about}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm py-2">
                        <div> <label for="address">Profile Picture</label> </div>
                        <input type="file" name="profile_pic">
                    </div>
                </div>
            </div>
            <button class="but">UPDATE PROFILE</button>
        </form>
    </div>
</main>
@endsection
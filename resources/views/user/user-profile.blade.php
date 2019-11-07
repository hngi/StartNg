<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        User Profile
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/paper-dashboard.css')}}" rel="stylesheet" />
    <style>
        .main {
            margin-top:80px;
            display: flex;
            background-color:#f4f3ef;


        }

        .profile{
            width:400px;
            margin-left:20px;
            height: 510px;

        }

        .form-content {
            margin-left:30px;
            margin-right:30px;
            width:80%;
        }

        .user-back {
            background-color:#3A0842;
            height: 130px;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
        }

        .circle {
            border-top-left-radius:50%;
            border-top-right-radius:50%;
            border-bottom-left-radius:50%;
            border-bottom-right-radius:50%;
            width:150px;
            height:150px;
            border:1px solid rgb(226, 230, 235);
            position:absolute;
            top:40px;
            left:25%;
            right:40%;
            overflow: hidden;
        }

        .user-body {
            margin-top:100px;
            text-align: center;
        }

        .card-foot {
            display: flex;
        }

        .name {
            color: #51cbce;
            margin-top:30px;
        }

        .edit {
            padding:20px 20px 0px 20px;
            font-size:20px;
            font-weight:normal;
            margin-bottom: 0px;
        }

        .user-form {
            padding:20px;
        }

        .about {
            width: 100% !important;
        }

        input[type=text],
        [type=email]{
            width:100%;
            height:40px;
            border-radius:1px;
            padding-left:10px;
        }

        .but {
            display: block;
            margin-left:auto;
            margin-right:auto;
            text-align:center;
            background-color:#51cbce;
            color:white;
            height: 40px;
            border-radius:20px;
            margin-top:20px;
            padding:10px;
        }

        @media screen and (max-width:888px){
            .profile {
                width:100%;
                margin-right:30%;
                margin-left:30%

            }
            .form-content {
                width:100%;
            }

            .main {
                flex-wrap: wrap;
            }


        }

        @media screen and (max-width: 500px){
            .profile {
                width:100%;
                margin-right:20px;
                margin-left:20px;
            }

            .circle {
                top:20px;
            }

            .foot {
                width:50%;
            }


        }


    </style>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">

        <div class="logo">
            <a href="http://startng.ml">

                <img class="img-fluid w-50 mt-3 mb-1" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png">

            </a>

        </div>
        <div class="sidebar-wrapper">
            @include('inc.user-sidebar')
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">USER PROFILE</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </nav>

        <main class="main" >
            <div class="profile card">
                <div class="user-back">

                </div>
                <div class="circle">
                    <img src="{{asset('storage/'.$user->image)}}" alt="josh">
                </div>
                <div class="card-body user-body">
                    <h5 class="name">{{$user->first_name. ' '. $user->last_name}}</h5>
                    <p>{{$user->username}}</p>
                    <p>"About Me"</p>

                    <p class="pb-2">{{$user->about}}</p>

                    <hr>
                </div>
                {{--<div class="card-footer card-foot">--}}
                    {{--<div class="mx-1 foot">--}}
                        {{--<p class="text-center">1</p>--}}
                        {{--<p class="text-center">Project(s) Pending</p>--}}
                    {{--</div>--}}
                    {{--<div class="mx-1 foot">--}}
                        {{--<p class="text-center">2</p>--}}
                        {{--<p class="text-center">Project(s) Completed</p>--}}
                    {{--</div>--}}

                {{--</div>--}}

            </div>

            <div class="form-content card">
                <p class="edit">Edit Profile</p>
                @if (session('success'))
                    <div class=" text-center alert alert-success">
                        {!!  session('success') !!}
                    </div>
                @endif
                @if (session('error'))
                    <div class="text-center alert alert-warning">
                        {{ session('error') }}
                    </div>
                @endif
                <form class="user-form" method="post" enctype="multipart/form-data" action="{{route('user.update')}}  ">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-sm py-2">
                                <div> <label for="username">User Name</label></div>
                                <input type="text" value="{{$user->username}}" id="username"  placeholder="Username" name="username">
                                @error('username')
                                <span class="alert text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm py-2">
                                <div><label for="email">Email Address</label></div>
                                <input type="email" value="{{$user->email}}" name="email" id="email" placeholder="Email">
                                @error('email')
                                <span class="alert text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm py-2">
                                <div><label for="fname">First Name</label></div>
                                <input type="text" value="{{$user->first_name}}" name="first_name" id="fname" placeholder="First Name">
                                @error('first_name')
                                <span class="alert text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm py-2">
                                <div><label for="lname">Last Name</label></div>
                                <input type="text" value="{{$user->last_name}}" name="last_name" id="lname" placeholder="Last Name">
                                @error('last_name')
                                <span class="alert text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm py-2">
                                <div><label for="phone">Phone</label></div>
                                <input type="number" value="{{$user->phone}}" name="phone" id='phone' placeholder="Phone">
                                 @error('image')
                                <span class="alert text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm py-2">
                                <div><label for="pic">Profile Picture</label></div>
                                <input type="file" name="image" id="pic" placeholder="Profile Picture">
                                @error('image')
                                <span class="alert text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>




                        <div class="row">
                            <div class="col-sm py-2">
                                <div> <label for="address">Address</label> </div>
                                <input type="text" value="{{$user->address}}" name="address" class="about" id="address" placeholder="Address">
                            </div>

                            @error('address')
                            <span class="alert text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>



                        <div class="row">
                            <div class="col py-2">
                                <div><label for="about">About Me</label> </div>
                                <textarea name="about" id="about" class="about" cols="30" rows="5" placeholder="About Me"> {{$user->about}}</textarea>
                            </div>
                            @error('about')
                            <span class="alert text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                    </div>



                    <button type="submit" class="but">UPDATE PROFILE</button>


                </form>

            </div>
        </main>


    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>

<script src="{{asset('js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
</body>

</html>
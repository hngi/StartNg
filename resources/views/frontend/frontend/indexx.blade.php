<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Start NG</title>

    <style>
        body {
            font-family: Nunito;
        }

        /* Style for Navbar Starts */

        .navbar-custom li a {
            color: #000;
        }

        .btn-success {
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
        }

        .btn-success:hover {
            background-color: rgb(2, 20, 12);
            color: #fff;
            border: thin solid rgb(2, 20, 12);
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .custom-toggler.navbar-toggler {
            border-color: #000;
        }

        /* Style for Navbar Ends */
        /* Style for Footer Starts */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .deep {
            background: #3A0842;
            color: #fff;
        }

        .deep #slink {
            background: #44CF6C;
            border-radius: 10px;
            color: white;
            padding: 10px 70px;
        }

        .deep li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            line-height: 30px;
        }

        .deep li {
            list-style: none;
        }

        .deep li a:hover {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .icons i {
            font-size: 26px;
            height: 50px;
            width: 50px;
            padding: 10px 20px;
            color: white;
        }

        .icons i.fa.fa-twitter:hover {
            color: #00aced;
        }

        .icons i.fa.fa-facebook:hover {
            color: #3b5598;
        }

        .icons i.fa.fa-instagram:hover {
            color: #ed3833;
        }

        /* Style for Footer Ends */

        .body-banner {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570926364/startng/Group_415_yteas3.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .checked {
            color: orange;
        }

        .video {
            background-color: #44CF6C;
        }

        .help {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570930464/startng/Group_418_ngwxfa.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
        <div class="container">
            <a href="/" class="navbar-brand"><img
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png"
                    class="img-fluid" alt="logo" width="150px"></a>
            <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbar9" style="color: #000;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar9">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{route('courses.index')}}">Courses</a>
                    </li>

                    @if(!Auth::guest())
                        <li class="nav-item mr-5">
                            <a class="btn btn-success nav-link px-5" href="{{route('mycourses',\Illuminate\Support\Facades\Auth::user()->id)}}" style="color: #fff;">My courses</a>
                        </li>
                    @endif
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{route('hire')}}">Hire A Grad</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{route('contact')}}">Contact Uss</a>
                    </li>

                    {{--@if(!Auth::guest())--}}

                            {{--<a class="btn btn-success nav-link px-5" href="{{ route('logout') }}" style="color: #fff;">Logout--}}
                            {{--</a>--}}
                        {{--<a class="btn btn-success nav-link px-5" href="{{ route('logout') }}"--}}
                           {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                            {{--{{ __('Logout') }}--}}
                        {{--</a>--}}

                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            {{--@csrf--}}
                        {{--</form>--}}


                    {{--@endif--}}

                    {{--@if(Auth::guest())--}}
                        {{--<li class="nav-item mr-5">--}}
                            {{--<a class="btn btn-success nav-link px-5" href="{{route('signup')}}" style="color: #fff;">Start--}}
                                {{--Learning</a>--}}
                        {{--</li>--}}
                    {{--@endif--}}

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid body-banner pt-5 pb-5">
        <div class="col-md-6 offset-md-2">
            <h4 class="pt-5 mt-5 pb-4"
                style="color: #fff; font-style: normal; font-weight: 600; font-size: 35px; line-height: 27px;">Up Your
                Tech Game Online <br> or Onsite</h4>
            <p class="pb-3"
                style="color: #fff; font-style: normal; font-weight: 400; font-size: 16px; line-height: 27px;">
                The HNG internship is a 3-month remote internship designed to <br> find and develop the most talented
                software developers
            </p>
            <a href="{{route('index)}}" class="btn btn-success pl-5 pr-5 mb-4">Start Learning</a>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4 class="mb-4 mt-3">Begin Your Journey to Self Development</h4>
                <p>The HNG internship is a 3-month remote internship designed <br> to find and develop the most talented
                    software developers.<br> Everyone is welcome to participate (there is no entrance exam).<br> Anyone
                    can log into the internship using
                    their laptop. Each week, we give tasks. </p>
                <form action="{{route('course.search')}}" method="post" >
                    @csrf
                    <input type="text" name="course" class="form-control col-md-10 mb-3" placeholder="Type in your preferred course">
                    <button type="submit" class="btn btn-success pl-5 pr-5 mb-3">  Find A Course</button>
                    <a href="" >Find A Course</a>
                </form>

            </div>
            <div class="col-md-6 mb-3">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570926879/startng/Group_144_qgkkfx.png"
                    class="img-fluid">
            </div>
        </div>
    </div>

    {{--<div id="response">--}}
        {{--@if (session('message'))--}}
            {{--<div class="alert alert-success">--}}
                {{--{!! session('message') !!}--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--@if (session('success'))--}}
            {{--<div class="alert alert-success">--}}
                {{--{!!  session('success') !!}--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--@if (session('error'))--}}
            {{--<div class="alert alert-danger">--}}
                {{--{{ session('error') }}--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--@if (session('warning'))--}}
            {{--<div class="alert alert-warning">--}}
                {{--{!! session('warning') !!}--}}

            {{--</div>--}}
        {{--@endif--}}
        {{--@if ($errors->any())--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
    {{--</div>--}}

    <div class="container mt-5">
        <h4 class="text-center" style="color: #3A0842;">Explore Our Courses</h4>
        <hr>

        @php
        $counter=3;

        @endphp

        @foreach($courses as $item)
            @if($counter%3==0)
                <div class="row">
                @endif
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570927379/startng/Rectangle_44_w9fioh.png"
                                 alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-weight: bold;">{{$item->name}}</h4>
                                <p>{{$item->description}}</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked mb-3"></span> <br>
                                {{--@if(Auth::guest())--}}
                                    {{--<a href="{{route('index')}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"--}}
                                       {{--style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>--}}
                                    {{--@endif--}}
                                {{--@if(!Auth::guest())--}}
                                    {{--<a href="{{route('register.courses',$item->id)}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"--}}
                                       {{--style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>--}}
                                {{--@endif--}}
                                {{--<a href="{{route('details',$item->id)}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"--}}
                                   {{--style="background-color: #FFE797; border: thin solid #FFE797;">Details</a>--}}
                            </div>
                        </div>
                    </div>

                    @if($counter%3==0)
                        </div>
                            @endif

            @endforeach

            {{--<div class="col-md-4">--}}
                {{--<div class="card">--}}
                    {{--<img class="card-img-top"--}}
                        {{--src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570927379/startng/Rectangle_44_w9fioh.png"--}}
                        {{--alt="Card image">--}}
                    {{--<div class="card-body">--}}
                        {{--<h4 class="card-title" style="font-weight: bold;">Backend Development</h4>--}}
                        {{--<p>Learn the fundamentals of <br> Modern Backend ...</p>--}}
                        {{--<span class="fa fa-star checked"></span>--}}
                        {{--<span class="fa fa-star checked"></span>--}}
                        {{--<span class="fa fa-star checked"></span>--}}
                        {{--<span class="fa fa-star checked"></span>--}}
                        {{--<span class="fa fa-star checked mb-3"></span> <br>--}}
                        {{--<a href="#" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"--}}
                            {{--style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>--}}
                        {{--<a href="#" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"--}}
                            {{--style="background-color: #FFE797; border: thin solid #FFE797;">Details</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}





        {{--<div class="row mb-5">--}}
            {{----}}
            {{--<div class="col-md-4">--}}
                {{--<div class="card">--}}
                    {{--<img class="card-img-top"--}}
                        {{--src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570927379/startng/Rectangle_44_w9fioh.png"--}}
                        {{--alt="Card image">--}}
                    {{--<div class="card-body">--}}
                        {{--<h4 class="card-title" style="font-weight: bold;">Backend Development</h4>--}}
                        {{--<p>Learn the fundamentals of <br> Modern Backend ...</p>--}}
                        {{--<span class="fa fa-star checked"></span>--}}
                        {{--<span class="fa fa-star checked"></span>--}}
                        {{--<span class="fa fa-star checked"></span>--}}
                        {{--<span class="fa fa-star checked"></span>--}}
                        {{--<span class="fa fa-star checked mb-3"></span> <br>--}}
                        {{--<a href="#" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"--}}
                            {{--style="background-color: #9A75A0; border: thin solid #9A75A0;">ONLINE</a>--}}
                        {{--<a href="#" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"--}}
                            {{--style="background-color: #FFE797; border: thin solid #FFE797;">FREE</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


        {{--</div>--}}
    </div>

    <div class="container-fluid video">
        <div class="row align-items-center">
            <div class="col-md-6 pb-3" style="color: #fff;">
                <h4 class="pl-3 pb-3" style="font-weight:bold; font-size: 24px;">The beginning of your career <br>
                    starts here. With us.
                </h4>
                <p class="pl-5" style="font-weight:bold;">- Intensive learning sessions</p>
                <p class="pl-5">The HNG internship is a 3-month remote <br> internship designed ---to find and <br>
                    develop the most talented software developers. </p>
                <p class="pl-5" style="font-weight:bold;">- Intensive learning sessions</p>
                <p class="pl-5">The HNG internship is a 3-month remote <br> internship designed ---to find and <br>
                    develop the most talented software developers. </p>
                <a href="" class="pl-5" style="color: #fff; font-weight: bold;">Learn more >></a>
            </div>
            <div class="col-md-6">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570929621/startng/Group_417_rx40it.png"
                    class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570930231/startng/Group_236_dr5bq8.png">
            </div>
            <div class="col-md-6">
                <h4 class="pb-3">Take Your First Steps in Achieving Your Dreams</h4>
                <p class="pb-4">The HNG internship is a 3-month remote internship <br> designed to find and develop the
                    most talented
                    <br> software developers. Everyone is welcome to participate <br> (there is no entrance exam). </p>
                <a href="{{route('index')}}" class="btn btn-success pl-5 pr-5">Start Learning</a>
            </div>
        </div>
    </div>

    <div class="container-fluid help mt-5 pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center pt-5" style="color: #fff;">
            <h4 class="pb-3">Need Professional Help?</h4>
            <p class="pb-4">After 3 months of training and projects, our graduates <br> are ready to take on full-time
                or remote jobs at your <br> company.
            </p>
            <a href="{{route('hire')}}" class="btn btn-success pl-5 pr-5">Hire
                a Graduate
            </a>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5" style="background-color: #fff;">
        <div class="col-md-10 offset-md-1">
            <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570930756/startng/Testimonials_dwtp2n.png"
                class="img-fluid">
        </div>
        <div class="col-md-6 offset-md-3 text-center pt-5 pb-5">
            <h4>Online or Offline, We Are Here For You</h4>
            <p>The HNG internship is a 3-month remote internship designed to find and develop the most talented software
                developers.
            </p>
            <a href="{{route('index')}}" class="btn btn-success pl-5 pr-5">Start
                Learning</a>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5" style="background-color: rgba(42, 43, 42, 0.05);">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="col-md-8 pb-5">
                    <h4 style="font-weight: bold; font-size: 40px;">Subscribe to our Newsletter</h4>
                    <p style="font-size: 20px;">Stay Updated with our latest news, discount and promotions
                    </p>
                    <form class="form-inline">
                        <input type="text" class="form-control col-md-8" id="email">
                        <button type="submit" class="btn btn-primary ml-1 pl-5 pr-5"
                            style="background-color: #44CF6C; border-color: #44CF6C;">Subscribe</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570931071/startng/newsletter_1_h3frhq.png">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid text-white deep">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3 mb-4">
                        <img src="https://res.cloudinary.com/juwon-tech/image/upload/v1570818437/Logo_1_oyasky.png"
                            alt="">
                    </div>
                </div>

                <div class="row pb-4">
                    <div class="col-lg-4 col-md-12 mb-3">
                        <h4 class='mb-4'>Ready to take the Leap?</h4>
                        <a href="{{route('signup')}}" class='btn btn-success px-5 py-2 mb-5'>Start!</a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('courses.index')}}">Our Course</a></li>
                        <li><a href="{{route('hire')}}">Hire a Grad</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="{{route('curriculum')}}">Curriculum</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>


                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="{{route(('find-course'))}}">Find a Course</a></li>

                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="{{route(('faq'))}}">FAQ</a></li>
                        <li><a href="{{route('terms')}}">Terms of Service</a></li>
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                    </div>
                </div>

            </div>
    </div>
    </div>

    <div class="container-fluid text-white py-2" style="background: #2E0435; width:100%;">
        <footer>
        <div class="container text-right">
            <div class="row icons">
                <div class="col-md-12 ">
                    <a href=""><i class='fab fa-twitter' aria-hidden="true"></i></a>
                    <a href=""><i class='fab fa-instagram' aria-hidden="true"></i></a>
                    <a href=""><i class="fab fa-facebook" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        </footer>
    </div>

    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
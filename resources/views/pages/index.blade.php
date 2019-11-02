@extends('layouts.app')

@section('style')

<style>
        /* Style for Navbar Starts */
        :root {
            --primary-color: #3A0842;
            --secondary-color: #44CF6C;
            --default-color: #7f7979;
            --dark-color: #2A2B2A;
            --light-color: #D3D5D4;
        }
        
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

        /* Background style starts */
        .bg-primary{
            background-color: var(--primary-color) !important;
        }
        .bg-secondary{
            background-color: var(--secondary-color) !important;
        }
        /* Background style starts */

        /* Text styles starts */
        .text-primary{
            color: var(--primary-color) !important;
        }
        .text-secondary{
            color: var(--secondary-color) !important;
        }
        /* Text styles ends */

        /* Button styles starts */
        .btn-primary {
            background-color: var(--primary-color);
            color: #fff;
            border: thin solid var(--primary-color);
            transition: 0.25s;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-color);
            opacity: 0.85;
        }

        .btn-secondary {
            background-color: var(--secondary-color);
            color: #fff;
            border: thin solid var(--secondary-color);
            transition: 0.25s;
        }
        
        .btn-secondary:hover {
            background-color: var(--secondary-color);
            opacity: 0.85;
        }

        /* Button styles end */

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
        /*main tag style starts here */
        .jumbotron{
            background: linear-gradient(0deg, rgba(37, 108, 57, 0.39),rgba(37, 108, 57, 0.39)), url(https://lancer-app.000webhostapp.com/startng/images/landing/lead-image.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .journey img{
            max-width: 340px;
        }
        .video-overlay{
            background: linear-gradient(0deg, rgba(37, 108, 57, 0.39),rgba(37, 108, 57, 0.39)), url(https://lancer-app.000webhostapp.com/startng/images/landing/beginer.png);
            background-repeat: no-repeat;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            min-height: 300px;
            display:flex;
            align-items:center; /* vertically aligned! */
            justify-content: center;
        }

        .steps-section img{
            max-width: 340px;
        }
        .professional-section{
            background: linear-gradient(0deg, rgba(37, 108, 57, 0.39),rgba(37, 108, 57, 0.39)), url(https://lancer-app.000webhostapp.com/startng/images/landing/professional.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        /*main tag style ends here */

        /* Style for Footer Starts */

        .deep {
            background: var(--primary-color);
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
            background-color: rgb(45, 206, 137);
            border: thin solid rgb(45, 206, 137);
            border-radius: 10px;

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
        /* Vidoe style */
        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        .videoWrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('content')
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
        <a href="{{route('dashboard')}}" class="btn btn-success pl-5 pr-5 mb-4">Start Learning</a>
    </div>
</div>
<!--  -->
<section class="journey">
    <div class="container py-5">
        <div class="row d-flex">
            <div class="col-md-7 order-sm-1 order-md-2">
                <div class="text-center">
                    <img src="https://lancer-app.000webhostapp.com/startng/images/landing/journey.png" class="img img-fluid img-responsive">

                </div>
            </div>
            <div class="col-md-5 order-sm-2 order-md-1 ">
                <h5 class="my-4 font-weight-bold">Begin Your Journey to Self Development</h5>
                <p class="my-4 text-muted">
                    The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers. Everyone is welcome to participate (there is no entrance exam). Anyone can log into the internship using their laptop. Each week, we give tasks. 
                </p>
                <form class="my-4">
                    <div class="form-group w-75 mt-3">
                        <input type="text" name="searchCourses" class="form-control" required>
                    </div>
                    <button class="btn btn-secondary py-2 px-4 mt-3"><i class="fas fa-search"></i> Find a Course</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--  -->

{{-- <div id="response">
@include('inc.messages')
</div> --}}
</div>

<div class="container mt-5">
<h4 class="text-center" style="color: #3A0842;">Explore Our Courses</h4>
<hr>

@php
    $counter=4;
@endphp

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

<div class="row">

    @foreach($courses as $item)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570927379/startng/Rectangle_44_w9fioh.png"
                        alt="Card image">
                <div class="card-body">
                    <h4 class="card-title" style="font-weight: bold;">{{$item->title}}</h4>
                    <p>{{$item->description}}</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked mb-3"></span> <br>
                    @if(Auth::guest())
                        <a href="{{route('register')}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"
                            style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>
                    @endif
                    @if(!Auth::guest())
                        <a href="{{route('register.courses',$item->id)}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"
                            style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>
                    @endif
                    <a href="{{route('course.show', $item->id)}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"
                        style="background-color: #9A75A0; border: thin solid #FFE797;">Details</a>
                </div>
            </div>
</div>
        @if($counter%3==0) <br>   @endif

        @php
            $counter+=1;
        @endphp

    @endforeach
</div>
<br>

<div class="text-center">
    <a href="{{route('courses.index')}}">
        <button class="btn btn-primary    pt-3">
            View More Courses
        </button>
    </a>
</div>
<br>
<!--  -->
<br>
<!--  --></div>
    <section class="beginning-lesson">
        <div class="row no-gutters">
            <div class="col-md-6 bg-secondary">
                <div class="container">
                    <div class="mb-4 pt-5 px-md-5 mx-md-5">
                        <h5 class="text-white">The beginning of your career starts here. With us.</h5>
                        <dl class="d-flex align-items-start text-white mb-0">
                            <dt class="">-</dt>
                            <dd class="ml-4 mb-0">
                                <p class="d-inline">
                                    <div class="font-weight-bold mb-2">
                                        Intensive learning sessions
                                    </div>
                                    <span class="">The HNG internship is a 3-month remote internship designed ---to find and develop the most talented software developers.
                                    </span>
                                </p>
                            </dd>
                        </dl>
                        <dl class="d-flex align-items-start text-white pt-0">
                            <dt class="">-</dt>
                            <dd class="ml-4">
                                <p class="d-inline">
                                    <div class="font-weight-bold mb-2">
                                        Intensive learning sessions
                                    </div>
                                    <span class="">The HNG internship is a 3-month remote internship designed ---to find and develop the most talented software developers.
                                    </span>
                                </p>
                            </dd>
                        </dl>
                        <div class=""></div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 mt-0 pt-0">
                <div class="videoWrapper">
                    <iframe 
                        width="100%" 
                        height="380"
                        src="https://www.youtube.com/embed/DYaq2sWTWAA" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <!-- <div class="container">
                    <div class="text-center">
                        <button class="btn btn-light btn-lg rounded-circle text-secondary pt-3">
                            <i class="fas fa-play fa-2x"></i>
                        </button>
                    </div>
                </div> -->
            </div>
        </div>            
    </section>
    <!--  -->

<!-- Take Your First Steps in Achieving Your Dreams -->
        <section class="steps-section">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="https://lancer-app.000webhostapp.com/startng/images/landing/steps.png" class="img img-fluid img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mr-md-5">
                            <h5 class="my-4 font-weight-bold">Take Your First Steps in Achieving Your Dreams</h5>
                            <p class="my-4 text-muted">
                                The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers. Everyone is welcome to participate (there is no entrance exam).  
                            </p>
                            <a href="#" class="btn btn-success pl-5 pr-5">Start Learning</a>
                       </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="professional-section">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 text-white text-center">
                        <h4 class="my-4 font-weight-bold">Need Professional Help?</h4>
                        <p class="">
                            After 3 months of training and projects, our graduates
                            <br> are ready to take on full-time or remote jobs at your
                            <br> company.
                        </p>
                        <a href="{{route('hire')}}" class="btn btn-success pl-5 pr-5">Hire a Graduate</a>
                    </div>
                </div>
            </div>
        </section>
        
<!-- What people have to say about us -->
<section class="">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h4 class="font-weight-bold">What people have to say about us</h4>
        </div>
        <div class="mb-5 card border-0 rounded rounded-lg shadow bg-white">
            <div class="card-body mx-md-5 my-2">
                <p class="lead text-muted">The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers. Everyone is welcome to participate (there is no entrance exam). Anyone can log into the internship using their laptop. Each week, we give tasks. </p>
                <div class="d-flex justify-content-start align-items-left mt-5">
                    <img src="https://lancer-app.000webhostapp.com/startng/images/landing/dennis.png" class="img img-responsive rounded-circle" width="100" height="100">
                    <div class="ml-4">
                        <p class="text-warning pb-2 my-0" >
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </p>
                        <h6>Dennis Lagbaja</h6>
                        <small class="text-muted"><em>Completed the Front End Developer Class</em></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0 rounded rounded-lg shadow bg-white">
            <div class="card-body mx-md-5 my-2">
                <p class="lead text-muted">The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers. Everyone is welcome to participate (there is no entrance exam). Anyone can log into the internship using their laptop. Each week, we give tasks. </p>
                <div class="d-flex justify-content-start align-items-left mt-5">
                    <img src="https://res.cloudinary.com/message/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1566597822/personal%20and%20school%20images/RAW_9_i7w8k2.jpg" class="img img-responsive rounded-circle" width="100" height="100">
                    <div class="ml-4">
                        <p class="text-warning pb-2 my-0" >
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </p>
                        <h6>Akunna Message</h6>
                        <small class="text-muted"><em>Completed the Front End Developer Class</em></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--  -->
    <div class="col-md-6 offset-md-3 text-center pt-5 pb-5">
        <h4 class="my-4 font-weight-bold">Online or Offline, We Are Here For You</h4>
        <p>The HNG internship is a 3-month remote internship designed to find and develop the most talented software
            developers.
        </p>
        <a href="#" class="btn btn-success pl-5 pr-5">Start
            Learning</a>
    </div>
</div>

<div class="container-fluid pt-5 pb-5" style="background-color: rgba(42, 43, 42, 0.05);">
    <div class="container pt-5 pb-5">
        <div class="row align-items-center">
            <div class="col-md-8 pb-5">
                <h4 style="font-weight: bold; font-size: 40px;">Subscribe to our Newsletter</h4>
                <p style="font-size: 20px;">Stay Updated with our latest news, discount and promotions</p>
                {!! Form::open(['action' => 'SubscriptionsController@store', 'method' => 'POST', 'class' => 'form-inline']) !!}
                {{ csrf_field() }}
                {{Form::email('email', '', ['class' => 'form-control col-md-8', 'id' => 'email', 'placeholder' => 'Enter your email address'])}}
                {{Form::submit('Subscribe', ['class' => 'btn btn-success ml-1 pl-5 pr-5'])}}
                {!! form::close() !!}
            </div>
            <div class="col-md-4">
                <img class="img-fluid"
                     src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570931071/startng/newsletter_1_h3frhq.png"> 
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        // Find all YouTube videos
        var $allVideos = $("iframe[src^='//www.youtube.com']");
        // The element that is fluid width
        $fluidEl = $("body");
        // Figure out and save aspect ratio for each video
        $allVideos.each(function() {
            $(this)
            .data('aspectRatio', this.height / this.width)
            // and remove the hard coded width/height
            .removeAttr('height')
            .removeAttr('width');
        });

        // When the window is resized
        $(window).resize(function() {

            var newWidth = $fluidEl.width();

            // Resize all videos according to their own aspect ratio
            $allVideos.each(function() {

            var $el = $(this);
                $el
                .width(newWidth)
                .height(newWidth * $el.data('aspectRatio'));
            });
            // Kick off one resize to fix all videos on page load
        }).resize();
    </script>
@endsection
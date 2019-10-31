<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>StartNg</title>

    <style>
        /* Style for Navbar Starts */
        :root {
            --primary-color: #3A0842;
            --secondary-color: #44CF6C;
            --default-color: #7f7979;
            --dark-color: #2A2B2A;
            --light-color: #D3D5D4;
        }

        .navbar-custom li a {
            color: #000;
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
    </style>
</head>

<body>
@include('../inc.navbar')

<main class="mb-0 pb-0">
    <!--  -->
    <section class="jumbotron rounded-0 px-0 bg-dark py-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white py-5">
                    <h1 class="jumbotron-heading ">Up Your Tech Game Online or Onsite</h1>
                    <p class="lead font-weight-lighter">The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers.</p>
                    <p>
                        <a href="{{route('register')}}" class="btn btn-secondary my-2 px-4 py-2">Start Learning</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
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
                    <form action="{{route('course.search')}}" method="post" >
                        @csrf
                        <input type="text" name="course" class="form-control col-md-10 mb-3" placeholder="Type in your preferred course">
                        <button type="submit" class="btn btn-success pl-5 pr-5 mb-3">  Find A Course</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="">
        <div class="container pb-5">
            <div class="mb-4 py-2 border-bottom text-center">
                <h5 class="font-weight-bolder text-primary">Explore Our Courses</h5>
            </div>
            @if (Session::has('success'))
            
        <p class="alert alert-primary text-center">{{Session('success')}}</p>
                
            @endif
            <div class="row">
             
                <!-- card -->
                @foreach($courses as $item)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow border-0">
                            <img src="https://lancer-app.000webhostapp.com/startng/images/landing/backend-1.png" class="card-img-top img-fluid img-responsive" alt="Courses" role="img">
                            <div class="card-body">
                                
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text text-muted mb-0">{{$item->description}}</p>
                                <p class="text-warning pb-2 my-0">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="">
                                        
                                        @if(Auth::guest())
                                            <a href="{{route('index')}}" class="btn btn-sm btn-primary rounded-pill py-0 mr-1"
                                               style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>
                                        @endif
                                        @if(!Auth::guest())
                                        @if ( !auth()->user()->registercourse)
                                     
                                            <a href="{{route('verify',$item->id)}}" class="btn btn-sm btn-primary rounded-pill py-0 mr-1"
                                               style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>
                                               @endif
                                               @else
                                               <a href="{{route('verify',$item->id)}}" class="btn btn-sm btn-primary rounded-pill py-0 mr-1"
                                                    style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>
                                               @endif
                                              
                                        <a href="{{route('details',$item->id)}}" class="btn btn-sm btn-warning rounded-pill py-0"
                                           style="background-color: #FFE797; border: thin solid #FFE797;">Details</a>
                                    </div>
                                    <small class="text-muted">{{$item->duration}} Hrs video course</small>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

            <!-- card -->

                <!-- card -->

                <!-- card -->
                <!-- card -->

            </div>
        </div>
    </section>
    <!--  -->
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
            <div class="col-md-6 video-overlay">
                <div class="container">
                    <div class="text-center">
                        <button class="btn btn-light btn-lg rounded-circle text-secondary pt-3">
                            <i class="fas fa-play fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
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
                        <a href="{{route('register')}}" class="btn btn-secondary my-4 py-2 px-4 mt-3">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
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
                   <a href="{{route('hire')}}">
                       <button class="btn btn-secondary my-3 py-2 px-4 mt-3">Hire a Graduate</button>
                   </a>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
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
    <section class="">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="my-4 font-weight-bold">Online or Offline, We Are Here For You</h4>
                    <p class="text-muted ">
                        The HNG internship is a 3-month remote internship designed to find and develop <br> the most talented software developers.
                    </p>
                    <a href="{{route('register')}}" class="btn btn-secondary my-3 py-2 px-4 mt-3">Start Learning</a>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <!--  -->
    <section class="bg-light">
        <div class="container py-md-5 ">
            <div class="row d-flex">
                <div class="col-md-6 col-sm-12 order-sm-1 order-md-2">
                    <div class="text-center mb-4">
                        <img src="https://lancer-app.000webhostapp.com/startng/images/landing/email.png" class="img img-responsive " width="" height="">
                    </div>
                </div>
                <div class="col-md-6 order-sm-2 order-md-1">
                    <h4 class="my-2 font-weight-bold">Subscribe to our Newsletter</h4>
                    <p class="">
                        Stay Updated with our latest news, discount and promotions.
                    </p>
                    <form class="my-4">
                        <div class="input-group input-group-lg mt-3">
                            <input type="text" name="sendmail" class="form-control" required>
                            <div class="input-group-append">
                                <button class="btn btn-secondary">Subscribe <i class="fas fa-envelope"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Footer -->
@include('../inc.footer')
<!-- End of Footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
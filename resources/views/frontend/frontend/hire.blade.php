<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Hire A Grad</title>

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

        .btn-secondary {
            background-color: #3A0842;
            border-color: #3A0842;
            color: #fff !important;
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: rgb(2, 20, 12);
            color: #fff !important;
            border: thin solid rgb(2, 20, 12);
        }

        .btn-secondary:hover {
            background-color: rgb(2, 20, 12);
            color: #fff;
            border: thin solid #2dce89;
            cursor: pointer;
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
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570956770/startng/Group_407_bko5eo.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
        <div class="container pt-2 pb-2">
            <a href="{{route('/')}}" class="navbar-brand"><img
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
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>

                    @if(!Auth::guest())

                        {{--<a class="btn btn-success nav-link px-5" href="{{ route('logout') }}" style="color: #fff;">Logout--}}
                        {{--</a>--}}
                        <a class="btn btn-success nav-link px-5" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                    @endif

                    @if(Auth::guest())
                        <li class="nav-item mr-5">
                            <a class="btn btn-success nav-link px-5" href="/signup" style="color: #fff;">Start
                                Learning</a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid body-banner pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center" style="color: #fff;">
            <h4 class="pb-5 pt-5" style="font-weight: bold; font-size: 40px;">Hire a Grad</h4>
            <p class="pb-4" style="font-weight: 600; font-size: 25px;">After 3 months of training and projects, <br> our
                graduates are ready to take on full-time <br> or remote jobs at your company.</p>
            <a href="{{route('hire')}}" class="btn btn-success pl-5 pr-5 mb-3">Hire a
                Graduate</a>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5 pb-5 pt-5">
        <div class="row align-items-center pb-5 pt-5">
            <div class="col-md-6">
                <div class="col-md-8 offset-md-2">
                    <h4 class="pb-3" style="font-weight: bold; font-size: 25px;">Versatile</h4>
                    <p>Our graduates are versatile, dedicated,Lorem <br> ipsum dolor sit amet, consectetur adipiscing
                        <br> elit, sed do eiusmod tempor incididunt ut <br> labore et dolore magna aliqua. Non diam <br>
                        phasellus vestibulum lorem sed.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570957521/startng/Rectangle_26_jwplh1.png">
            </div>
        </div>
    </div>

    <div class="col-md-6 offset-md-3 text-center">
        <h4 class="pt-5 pb-5">Our graduates have acquired the latest skills</h4>
    </div>
    <div class="col-md-10 offset-md-1">
        <div class="row text-center pb-3">
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958135/startng/Group_408_stke6s.png">
                <p style="font-weight: bold;">Frontend Development</p>
                <p>HTML, CSS, JavaScript, <br> Boostrap, JQuery</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_409_lho37u.png">
                <p style="font-weight: bold;">Backend Development</p>
                <p>PHP, Python, Java,</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_410_tzprqb.png">
                <p style="font-weight: bold;">UI/UX Design</p>
                <p>User research, <br> Protoyping, Wireframing</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_411_jlcykp.png">
                <p style="font-weight: bold;">Frontend Development</p>
                <p>HTML, CSS, JavaScript, <br> Boostrap, JQuery</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_412_jrwpdt.png">
                <p style="font-weight: bold;">Backend Development</p>
                <p>PHP, Python, Java,</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_413_h4wy7a.png">
                <p style="font-weight: bold;">UI/UX Design</p>
                <p>User research, <br> Protoyping, Wireframing</p>
            </div>
        </div>
    </div>

    <div class="container pb-5 pt-5">
        <div class="row pt-5 pb-5 align-items-center">
            <div class="col-md-6">
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958760/startng/Rectangle_27_icxcps.png">
            </div>
            <div class="col-md-6">
                <div class="col-md-8 offset-md-2">
                    <h4 class="pb-4" style="font-weight: bold;">Remote Flexibility</h4>
                    <p>Our graduates are taught how to be effective <br> remote employees. Lorem ipsum dolor sit <br>
                        amet, consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore et dolore
                        <br> magna aliqua. Non diam phasellus vestibulum
                        <br> lorem sed.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5 pt-5">
        <h4 class="text-center font-weight-bold pb-5">Big companies are hiring our graduates</h4>
        <div class="col-md-10 offset-md-1 pb-5">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570959260/startng/Vector_qy0hzu.png">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570959261/startng/Rectangle_cgpe2w.png">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570959261/startng/Vector1_hidr5z.png">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570959260/startng/flutterwave_brmhoe.png">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5 pb-5">
        <div class="row align-items-center pb-5 pt-5">
            <div class="col-md-6">
                <div class="col-md-8 offset-md-2">
                    <h4 class="pb-3" style="font-weight: bold; font-size: 25px;">Zero Hiring Fees</h4>
                    <p>Let us know what you're looking for. We’ll help <br> you source the ideal candidates for your
                        next <br> full-time hire, without any placement fees.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570957521/startng/Rectangle_26_jwplh1.png">
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5" style="background-color: #44CF6C;">
        <div class="col-md-10 offset-md-1 pt-5 pb-5">
            <h4 class="text-center font-weight-bold pb-3">Learn more about hiring our grads</h4>
            <p class="text-center font-weight-bold pb-5">Fill out the form and we will get in touch.</p>
            <div class="row pb-4">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Company Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Job Title">
                </div>
            </div>
            <a class="btn btn-secondary col-md-2 offset-md-5 mt-5">Subscribe</a>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid text-white deep">
        <footer>
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
    <div class="container-fluid text-white py-2" style="background: #2E0435; width:100%;">
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
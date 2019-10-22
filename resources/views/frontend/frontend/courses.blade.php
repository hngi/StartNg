<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Courses</title>

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
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961662/startng/Group_420_naoymq.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
        <div class="container pt-2 pb-2">
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

    <div class="container-fluid pt-5 pb-5 body-banner">
        <div class="col-md-12 mt-5 pt-5">
            <h4 class="text-center font-weight-bold mt-5 pt-5" style="color: #fff;">Our Courses</h4>
            <p class="text-center pb-3" style="color: #fff;">We currently offer courses for various skills level, taught
                by
                <br> seasoned experts with a curriculum that helps improve your skills <br> from beginner level to world
                class
            </p>
        </div>
    </div>


    <div class="container pt-5 pb-5">
        <div class="row align-items-center mt-3">
            <div class="col-md-6 mt-5">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_414_l9x17w.png"
                    class="img-fluid">
            </div>
            <div class="col-md-6 mt-3">
                <h4 class="font-weight-bold pb-3">Complete Beginner <br> Software Development Training</h4>
                <p class="pb-2">Learn the basics of HTML and CSS with this quick and easy course.<br> If you're looking for a place to start your journey as a <br> web-developer, then look no further.<br>Also, you will learn all the other basics of the different courses that we offer
                    <br> After this course, you’ll be set to explore the world of programming and web development<br> as you’ll be equipped with the major basics of all that software development entails.</p>
                <div class="clearfix">  
                    <div class="float-left">
                        <a class="btn btn-success pt-1 pb-1" href="complete.html">More
                            Details</a>
                    </div>
                    <div class="float-right">
                        <a href="" style="color: #000;">Beginner</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-md-6 mt-5">
                <h4 class="font-weight-bold pb-3 mt-5">UI/UX Design</h4>
                <p class="pb-2">Learn about UX UI design at your own pace depending on your choice on how you intend to go about the learning. UI UX design means User interface design or user interface. it focuses on the design of user interfaces for machines and software, such as computers,home appliances, mobile devices, and other electronic devices, with the focus on maximizing usability and the user experience. The course would help to have a depth insight about how User experience (UX) designer can create products that provide meaningful and relevant experiences to users. This involves the design of the entire process of acquiring and integrating the product, including aspects of branding, design, usability, and function.</p>
                <div class="clearfix">
                    <div class="float-left">
                        <a class="btn btn-success pt-1 pb-1" href="#">More
                            Details</a>
                    </div>
                    <div class="float-right">
                        <a href="" style="color: #000;">Beginner</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_415_m3n0cq.png"
                    class="img-fluid">
            </div>

        </div>
        <div class="row align-items-center mt-3">
            <div class="col-md-6 mt-5">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_416_wlg555.png"
                    class="img-fluid">
            </div>
            <div class="col-md-6 mt-4">
                <h4 class="font-weight-bold pb-3">Modern Javascript from Scratch</h4>
                <p class="pb-2">Learn and build a product with JAVASCRIPT in no time with our route of training you. Modern JavaScript is a safe and secure programming language for you to build your first project. It is very good because when it's running in the browser, JavaScript is able to proceed anything related to web page manipulations, users' interactions and interactions with the server (to some extent). This is one of the best programming languages you can learn very fast and can as well help land your first product at ease. In many ways, JavaScript is one of the easiest programming languages to learn as your first language. The way that it functions as an interpreted language within the web browser means that you can easily write even the most complex code by writing it a small piece at a time and testing it in the web browser as you go. subscribe to this course to learn the depth of it. </p>
                <div class="clearfix">
                    <div class="float-left">
                        <a class="btn btn-success pt-1 pb-1" href="javascript-course.html">More
                            Details</a>
                    </div>
                    <div class="float-right">
                        <a href="" style="color: #000;">Beginner</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-3">
            <div class="col-md-6 mt-5">
                <h4 class="font-weight-bold pb-3 mt-5">Laravel PHP from Scratch</h4>
                <p class="pb-2">Join this great platform to learn this wonderful. The course, Laravel PHP is a framework for creating web applications with an easy to use syntax. Taking this course would lead you to have deep idea behind Laravel PHP. Laravel PHP will make common development tasks easy such as routing, authentication, sessions, and caching. Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony. Subscribing to this course will lead you to be able to use laravel PHP curve, Incredible Eloquent ORM, Clear and humane syntax in most of components, Flexibility, Integration with front-end out of the box.</p>
                <div class="clearfix">
                    <div class="float-left">
                        <a class="btn btn-success pt-1 pb-1" href="laravel.html">More
                            Details</a>
                    </div>
                    <div class="float-right">
                        <a href="" style="color: #000;">Beginner</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_417_akfrop.png"
                    class="img-fluid">
            </div>

        </div>
        <div class="row align-items-center mt-3">
            <div class="col-md-6 mt-5">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_418_ranmxy.png"
                    class="img-fluid">
            </div>
            <div class="col-md-6 mt-3">
                <h4 class="font-weight-bold pb-3">Full Stack Developer</h4>
                <p class="pb-2">Subscribe to this course to have a great knowledge mostly about frontend and backend track at ease. You might be wondering what a full stack developer is all about before you agree with yourself if it is your track like, is an engineer who can handle all the work of databases, servers, systems engineering, and clients. Depending on the project, what customers need may be a mobile stack, a Web stack, or a native application stack. Subscribe to learn more. Here are the things that this course would reveal to you through our experience mentors on job<br>
<li> Front-end technology. ...</li>
<li> Development Languages. ...</li>
<li>Database and cache. ...</li>
<li>Basic design ability. ...</li>
<li>Server. ...</li>
<li>Version control system (VCS) ...</li>
<li>Working with API (REST & SOAP): ...</li>
<li>Other Pieces of the Puzzle</li> </p>
                <div class="clearfix">
                    <div class="float-left">
                        <a class="btn btn-success pt-1 pb-1" href="fullstack.html">More
                            Details</a>
                    </div>
                    <div class="float-right">
                        <a href="" style="color: #000;">Beginner</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                        <a class="btn btn-success pt-1 pb-1"
                            style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <img class="img-fluid"
            src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961661/startng/Group_419_c7p8rv.png">
        <div class="col-md-8 offset-md-1">
            <h4 class="font-weight-bold">Subscribe to our Newsletter</h4>
            <p>Stay Updated with our latest news, discount and promotions</p>
            <form class="form-inline pb-5">
                <input type="email" class="form-control col-md-8" placeholder="Email Address"><button type="submit"
                    class="btn btn-success">Subscribe</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid text-white deep mt-5">
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
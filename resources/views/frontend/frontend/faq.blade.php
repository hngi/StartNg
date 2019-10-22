
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <title>StartNg</title>
    <style type="text/css">
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
        
        .bg-primary {
            background-color: var(--primary-color) !important;
        }
        
        .bg-secondary {
            background-color: var(--secondary-color) !important;
        }
        /* Background style starts */
        /* Text styles starts */
        
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .text-secondary {
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
        /*  collapsible accordion starts */
        
        .myaccordion {
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 750px;
        }
        
        .myaccordion .card,
        .myaccordion .card:last-child .card-header {
            border: none;
        }
        
        .myaccordion .card-header {
            border-bottom-color: #EDEFF0;
            background: transparent;
        }
        
        .myaccordion .fa-stack {
            font-size: 14px;
        }
        
        .myaccordion .btn {
            width: 100%;
            font-weight: bold;
            color: var(--primary-color);
            padding: 0;
        }
        
        .myaccordion .btn-link:hover,
        .myaccordion .btn-link:focus {
            text-decoration: none;
        }
        
        .myaccordion li+li {
            margin-top: 10px;
        }
        /*  collapsible accordion ends  */
        
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
        
        .jumbotron {
            background-color: #2A2B2A;
        }
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
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
            <div class="container pt-2 pr-2">
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
    </header>
    <main>
        <!--  -->
        <section class="jumbotron rounded-0 py-4 mb-0">
            <div class="container">
                <div class="row">
                    <div class="offset-md-2 col-md-8">
                        <div class="text-center text-white py-5">
                            <h2 class="jumbotron-heading ">How can we help you?</h2>
                            <form class="my-4">
                                <div class="input-group mt-3">
                                    <input type="text" name="Search" class="form-control pt-2 pb-2 rounded-0" placeholder="Search" required aria-label="Search question" aria-describedby="button-addon2" style="border: thin solid #fff;">
                                    <div class="input-group-append">
                                        <button class="btn btn-light rounded-0" type="button" id="button-addon2"><i
                                                class="fas fa-search"></i> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3 class="">FAQ</h3>
                            <p class="lead">Here are some of the most frequently asked questions on StartNG</p>
                        </div>
                    </div>
                    <div class="col-md-12 text-black">
                        <div class="container">
                            <div id="accordion" class="myaccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Do you offer certification or degrees?
                                                <span class="fa-stack fa-sm">
                                                    <i class="fas fa-circle fa-stack-2x"></i>
                                                    <i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">At Start.ng, we offer Certification upon completion of the selected courses. And certificates are presented to deserving students with their grades clearly states on the certificates.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Do you offer student discount?
                                                <span class="fa-stack fa-2x">
                                                    <i class="fas fa-circle fa-stack-2x"></i>
                                                    <i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">
                                               Everyone who enrolls and participates in the software development training as well as other courses are considered to be students and therefore treated equally.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">                 Are there free courses?
                                                <span class="fa-stack fa-2x">
                                                    <i class="fas fa-circle fa-stack-2x"></i>
                                                    <i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">
                                               Yes. In fact, all the Courses offered at Start.ng are free. All you are requires to do is to enroll for the courses you are interested in when the portal for registration opens. And get yourself ready for the 3-month rigorous training by our professionals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                What do I require for a successful training?
                                                <span class="fa-stack fa-2x">
                                                    <i class="fas fa-circle fa-stack-2x"></i>
                                                    <i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">
                                            <li> You require a very good laptop with a good battery or power source.</li>
                                            <li>You’ll need a good internet service provider, as you’ll have to be online mostly.</li>
                                            <li>Data is essential and you must be willing to download the resources as specified by the mentors</li>
                                            </p>
                                        </div>
                                </div>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary py-5">
            <div class="container">
                <div class="text-center my-4">
                    <h4 class="text-dark font-weight-bold">Didn’t find an answer to your question?</h4>
                    <p class="">Write us a message and describe your problem!</p>
                    <a href="{{route('contact')}}" class="btn btn-primary px-5">Contact</a>
                </div>
            </div>
        </section>
    </main>
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
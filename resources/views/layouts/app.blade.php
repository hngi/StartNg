<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Start NG') }}</title>-->
    <title>Start NG - {{ $title ?? '' }}</title>

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
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
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
    <div id="app">
        @include('inc.navbar')
        <div class="containeyr">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid text-white deep">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3 mb-4">
                        <img src="https://res.cloudinary.com/juwon-tech/image/upload/v1570818437/Logo_1_oyasky.png" alt="">
                    </div>
                </div>

                <div class="row pb-4">
                    <div class="col-lg-4 col-md-12 mb-3">
                        <h4 class='mb-4'>Ready to take the Leap?</h4>
                        <a href="#" class='btn btn-success px-5 py-2 mb-5'>Start!</a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/courses">Our Course</a></li>
                        <li><a href="/hireGrad">Hire a Grad</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="curriculum.html">Curriculum</a></li>
                        <li><a href="/blog2">Blog</a></li>
                        <li><a href="/blog1">Student Stories</a></li>

                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="search.html">Find a Course</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="/contactus">Contact Us</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="/help">FAQ</a></li>
                        <li><a href="/terms">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
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


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
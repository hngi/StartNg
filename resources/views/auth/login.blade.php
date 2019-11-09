<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link href="/css/modifiedstyles.css" rel="stylesheet" />
    <title>Start NG | Login</title>
    <style>
        body {
        font-family: 'Poppins';
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
        /* .btn-success:hover {
        background-color: rgb(2, 20, 12);
        color: #fff;
        border: thin solid rgb(2, 20, 12);

        } */
        .btn-secondary {
        background-color: #3A0842;
        border-color: #3A0842;
        color: #fff !important;
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
        font-family: 'Poppins', sans-serif;
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
        /* a:hover {
        text-decoration: none;
        background-color: rgb(45, 206, 137);
        border: thin solid rgb(45, 206, 137);
        border-radius: 10px;
        } */

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
        /* Body Style */
        .search {
        background-color: #44CF6C;
        }
        .support {
        background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570910454/startng/Rectangle_66_iauqka.png');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        .contact {
        width: 1200px;
        margin-left: 25px;
        }
        @media screen and (max-width: 1024px) {
        .contact {
        width: 1200px;
        margin-left: 10px;
        }
        }
        @media screen and (max-width: 768px) {
        .contact {
        width: 1200px;
        margin-left: 10px;
        }
        }
        @media screen and (max-width: 425px) {
        .contact {
        width: 1200px;
        margin-left: -21px;
        }
        }
        @media screen and (max-width: 375px) {
        .contact {
        width: 1200px;
        margin-left: -15px;
        }
        }
        span.field-icon {
        position: absolute;
        display: inline-block;
        cursor: pointer;
        right: 1.4rem;
        top: 10.2rem;
        color: $input-label-color;
        z-index: 2;
        }

        .footer-top {
        background-color: #3A0842;
        color: #fff;
        }

        .footer-top li {
        list-style-type: none;
        }

        .footer-link {
        color: #fff;
        text-decoration: none;
        font-size: 1em;
        }

        .footer-link:hover {
        color: #2DCE89;
        text-decoration: none;
        }

        .footer-social {
        background-color: #2E0435;
        color: #fff;
        }
        </style>
    </head>
    <body>
        @include('../inc.navbar')
        <div class="container-fluid banner">
            <div class="container">
                <div class="row align-items-center pt-3">
                    <div class="col-md-12 pb-3 text-center">
                        <h4 class="" style="font-style: normal; font-weight: bold; font-size: 40px; letter-spacing: 0.655606px;">
                        Welcome again!</h4>
                        <p style="font-style: normal; font-weight: normal; font-size: 20px; line-height: 24px;">Log in using the form below and get started.</p>
                    </div>

                </div>
            </div>
        </div>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="container pt-4 pb-5">
                @if ($errors->any())
                <div class="alert text-center alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card card-signin my-5">
                            <div class="card-body">
                                <div class="form-label-group">
                                    <label for="usr" style="font-weight: bold;">Email:</label>
                                    <input type="text" name="email" class="form-control" id="usr" placeholder="Your Email Address" required autofocus>
                                </div><br>
                                <div class="form-label-group">
                                    <label for="usr" style="font-weight: bold;">Password:</label>
                                    <input type="password" name="password" id="input-pwd" class="form-control" placeholder="Your Password" minlength="8" maxlength="21" required>
                                    <span toggle="#input-pwd" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-success d-block mx-auto pl-5 pr-5 mb-4">Login</button>
                                <hr class="my-4">
                                <div style="text-align: center;"><a href="/password/reset" class="forget-password">Forgot Password?</a> | <a href="{{route('register')}}">Sign Up</a> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
           <footer>
               <div class="container-fluid footer-top col-lg-12">
                   <div class="container col-md-12 p-5">
                       <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572346080/startng/Logo_2_ee1iqv.png">
                       <div class="row">
                       @if(Auth::guest())
                           <div class="col-md-4 mt-4">

                               <h4 class="">Ready to take the leap?</h4>
                               <a class="btn btn-custom mt-3 pl-5 pr-5"  href="{{route('register')}}">Start</a>
                           </div>
                       @else
                            <div class="col-md-4 mt-4">

                                <a class="btn btn-custom mt-3 pl-5 pr-5"  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                                </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                               </form>
                           </div>
                       @endif
                           <div class="col-md-2 mt-4">

                               <li><a class="footer-link" href="{{route('about')}}">About Us</a></li>
                               <li><a class="footer-link" href="{{route('course.index')}}">Our Course</a></li>
                               <li><a class="footer-link" href="{{route('hire')}}">Hire a Grad</a></li>

                           </div>
                           <div class="col-md-2 mt-4">

                               <li>
                                   <a class="footer-link" href="{{route('curriculum')}}">Curriculum</a>
                               </li>
                               <li>
                                   <a class="footer-link" href="">Blog</a>
                               </li>

                           </div>
                           <div class="col-md-2 mt-4">
                               <li>
                                   <a class="footer-link" href="{{route('find-course')}}">Find a Course</a>
                               </li>
                               <li>
                                   <a class="footer-link" href="{{route('faq')}}">FAQ</a>
                               </li>
                               <li>
                                   <a class="footer-link" href="{{route('contact')}}">Contact Us</a>
                               </li>
                           </div>
                           <div class="col-md-2 mt-4">
                               <li>
                                   <a class="footer-link" href="{{route('terms')}}">Terms of Service</a>
                               </li>
                               <li>
                                   <a class="footer-link" href="{{route('privacy')}}">Privacy Policy</a>
                               </li>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="container-fluid footer-social col-lg-12">
                   <div class="container p-3">
                       <div class="clearfix">
                           <div class="float-left">

                           </div>
                           <div class="float-right">
                               <a href="https://twitter.com/hotelsng" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                       class="fab fa-twitter"></i></a>
                               <!-- <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                       class="fab fa-instagram"></i></a>
                               <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                       class="fab fa-facebook"></i></a> -->
                           </div>
                       </div>
                   </div>
               </div>
           </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>
        $('.toggle-password').on('click', function() {
        $(this).toggleClass('fa-eye fa-eye-slash');
        let input = $($(this).attr('toggle'));
        if (input.attr('type') == 'password') {
        input.attr('type', 'text');
        }
        else {
        input.attr('type', 'password');
        }
        });
        </script>
    </body>
</html>

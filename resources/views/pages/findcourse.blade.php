<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link href="/css/modifiedstyles.css" rel="stylesheet" />
    <title>Find Course</title>
            <style>
            body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Nunito';
            }
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
            /*... NavBar..*/
            /* ul.navbar-nav li {
            margin: auto 13px;
            font-family: Nunito;
            font-style: normal;
            font-weight: bold;
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.655606px;
            color: #2A2B2A;
            } */
            ul.navbar-nav button {
            background-color: #2DCE89;
            border-radius: 7px;
            padding: 10px 45px;
            color: #fff;
            }
            ul.navbar-nav button:hover {
            color: #fff;
            background: #000;
            }
            .navbar {
            padding: 12px;
            }
            /*...Main Section...*/
            section.main {
            background-image: url("https://res.cloudinary.com/dht5bpbmi/image/upload/v1570802801/Rectangle_2_cercha.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            min-height: 100vh;
            background-color: rgba(58, 8, 66, 0.5);
            }
            .content {
            font-weight: bold;
            padding-top: 25vh;
            z-index: 1;
            text-align: left;
            width: 35%;
            margin-left: 15%;
            }
            .content .upgrade-text {
            color: #000;
            font-size: 40px;
            font-weight: normal;
            line-height: 55px;
            letter-spacing: 0.655606px;
            color: #FFFFFF;
            }
            .content .hng-text {
            font-weight: normal;
            font-size: 1.5em;
            line-height: 151.2%;
            color: #FFFFFF;
            padding-top: 12px;
            padding-bottom: 12px;
            }
            section.main a button {
            background: #44CF6C;
            border-radius: 7px;
            font-size: 20px;
            padding: 8px 70px;
            color: #fff;
            margin-top: 12px;
            margin-bottom: 5px;
            }
            section.main a button:hover {
            color: #fff;
            background: rgba(68, 207, 108, 0.35);
            }
            /*...Search Area...*/
            .main-field {
            margin-top: 5%;
            margin-bottom: 5%;
            width: 100%;
            text-align: center;
            }
            p {
            padding: 0;
            margin-top: 0;
            }
            .find h3 {
            color: #2A2B2A;
            font-family: 'Nunito', sans-serif;
            letter-spacing: 0.655606px;
            }
            input[type=text] {
            width: 50%;
            border: 0.5px solid #2B322D;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            outline: none;
            padding: 8px;
            box-sizing: border-box;
            transition: .3s;
            }
            input[type=text]:focus {
            border-color: rgba(68, 207, 108, 0.35);
            box-shadow: 0 0 8px 0 rgba(68, 207, 108, 0.35);
            }
            .find {
            position: relative;
            }
            .find i {
            position: absolute;
            top: 55%;
            left: 26%;
            padding: 9px 8px;
            color: #000000;
            transition: .3s;
            }
            .find input[type=text] {
            padding-left: 45px;
            }
            .find input[type=text]:focus+i {
            color: rgba(68, 207, 108, 0.35);
            }
            .results {
            width: 50%;
            height: 460px;
            max-height: 470px;
            text-align: left;
            margin-left: 25%;
            overflow-y: auto;
            border: 0.5px solid #2B322D;
            padding-bottom: 20px;
            position: relative;
            }
            .result1 {
            border: 0.5px solid #aaa;
            }
            .result1:hover {
            background: rgba(68, 207, 108, 0.35);
            }
            .active-2 {
            background: rgba(68, 207, 108, 0.35);
            }
            .first-result {
            font-weight: bold;
            font-family: 'Nunito', sans-serif;
            font-size: 0.8rem;
            letter-spacing: 0.655606px;
            color: #000000;
            padding-left: 110px;
            }
            .first-result i {
            font-weight: normal;
            font-size: .7rem;
            color: #333333;
            }
            .first-result span {
            font-size: 1.5rem;
            color: #000;
            }
            .first-result em {
            font-weight: normal;
            color: #333333;
            font-size: .7rem;
            }
            .second-result {
            padding-left: 110px;
            }
            .image-result {
            position: absolute;
            height: 60px;
            width: 60px;
            margin-top: 8px;
            margin-left: 20px;
            }
            .online-link {
            border: 1px solid #3a0842;
            text-decoration: none;
            font-size: .6rem;
            padding: 5px 15px 5px 15px;
            border-radius: 10px;
            color: #3a0842;
            background: #9a7580;
            margin-right: 10px;
            }
            .free-link {
            border: 1px solid #aaa;
            text-decoration: none;
            font-size: .6rem;
            padding: 5px 23px 5px 23px;
            border-radius: 10px;
            color: #e3b82a;
            background: #ffe797;
            }
            /*... Footer...*/
            /*.page-footer {
            margin-top: 80px;
            background-color: #3A0842;
            }

            .row {
            padding: 30px 50px;
            color: #fff;
            }

            .col-md-2 {
            margin-top: 30px;
            }

            .col-md-2 ul li a {
            color: #fff;
            }

            .footer-copyright {
            background-color: #2E0435;
            padding-right: 50px;
            overflow: hidden;
            }

            .footer-copyright a img {
            margin-right: 15px;
            } */
            .col-md-4 {
            overflow: hidden;
            }
            .col-md-4 a button {
            background-color: #44CF6C;
            border-radius: 7px;
            padding: 4px 50px;
            color: #fff;
            outline: none;
            border: none;
            }
            .col-md-4 a button:hover {
            background: rgba(68, 207, 108, 0.35);
            color: #fff;
            }
            .col-md-4 p[title] {
            font-family: "Nunito";
            font-weight: bold;
            font-size: 22px;
            display: inline-block;
            padding-top: 10px;
            }
            .col-md-4 img {
            display: inline-block;
            width: 25px;
            padding-right: 5px;
            }
            .float-right a {
            color: #fff;
            font-size: 1rem;
            margin-left: 10px;
            }
            .float-right a:hover {
            color: #44CF6C;
            }
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
            @media only screen and (max-width: 576px) {
            .online-link {
            margin-right: 2px;
            padding: 1px 5px 1px 5px;
            }
            .free-link {
            padding: 1px 6px 1px 6px;
            }
            .content {
            width: 80%;
            }
            .find i {
            left: 20%;
            }
            }
            @media only screen and (min-width: 576px) {
            .content {
            width: 80%;
            }
            .find i {
            left: 20%;
            }
            }
            @media only screen and (min-width: 798px) {
            .content {
            width: 60%;
            }
            .find i {
            left: 25%;
            }
            }
            /* for screen size lesser than 802px.... the point where courses in search list becomes clumsy */
            @media only screen and (max-width: 802px) {
            .find i {
            left: 16%;
            }
            .find input[type="text"] {
            width: 80%;
            }
            .results {
            width: 80%;
            margin: 0 auto;
            }
            .result1 {
            padding: 4px;
            }
            }
            @media only screen and (min-width: 992px) {}
            @media only screen and (min-width: 1200px) {
            .content {
            width: 35%;
            }
            }
            .banner-body {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570925063/startng/Group_414_xmbnpz.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            }
      </style>
</head>
<body>

    @include('inc.navbar')
                <div class="container-fluid banner-body pt-5 pb-5">
                    <div class="col-md-6 offset-md-1 align-items-center">
                        <h4 class="mb-4 mt-5 pt-4"
                        style="color: #fff; font-weight: bold; font-size: 30px; letter-spacing: 0.655606px;">Upgrade Your Skills
                        with <br> Our Curriculum</h4>
                        <p class="pb-3" style="color: #fff;">
                            The HNG internship is a 3-month remote <br> internship designed ---to find and develop the <br> most
                            talented software developers.
                        </p>
                        @if(Auth::guest())
                        <a class="btn btn-success pl-5 pr-5 mb-4" style="background-color: #44CF6C;" href="{{route('register')}}">Start Learning</a>
                        @else
                        <a class="btn btn-success pl-5 pr-5 mb-4" style="background-color: #44CF6C;" href="{{route('dashboard')}}">Start Learning</a>
                        @endif
                    </div>
                </div>
                <section class="main-field">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {!!  session('success') !!}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <form method="post" action="{{route('search')}}">
                        <div class="find">
                            <h3>Search Courses</h3>
                            @csrf
                            <input type="text" name="course">
                            <button type="submit"> </button>
                            <i class="fa fa-search"></i>
                        </div>
                    </form>
                    <div class="results">
                    </div>
                </section>
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
                                   <a class="footer-link" href="http://lucid.blog/startng">Blog</a>
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
  </body>

  </html>

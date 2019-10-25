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
    @include('../inc.navbar')

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
            <a href="{{route('signup')}}" class="btn btn-success pl-5 pr-5 mb-4">Start Learning</a>
        </div>
    </div>



    <div class="container mt-5">
        <h4 class="text-center" style="color: #3A0842;">Your Registered Courses</h4>
        <hr>

        @if(!empty($message))
            <div class="text-center alert alert-info">
                <p>{{$message}}</p>
            </div>
            @endif

        @if (session('success'))
            <div class="alert alert-success">
                {!!  session('success') !!}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger text-center ">
                {{ session('error') }}
            </div>
        @endif

        @php
        $counter=3;

        @endphp
        <div class="row">
        @foreach($courses as $item)

                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570927379/startng/Rectangle_44_w9fioh.png"
                                 alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-weight: bold;">{{$item['name']}}</h4>
                                <p>{{$item['description']}}</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked mb-3"></span> <br>

                                {{--<a href="{{route('details',$item['id'])}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"--}}
                                   {{--style="background-color: #FFE797; border: thin solid #FFE797;">Details</a>--}}
                            </div>
                        </div>
                    </div>



            @endforeach
        </div>
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
                <a href="{{route('signup')}}" class="btn btn-success pl-5 pr-5">Start Learning</a>
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
            <a href="{{route('signup')}}" class="btn btn-success pl-5 pr-5">Start
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
    @include('../inc.footer')
    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
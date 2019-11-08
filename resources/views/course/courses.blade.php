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
    <title>Start NG | Courses</title>

<style>

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Nunito', sans-serif;
    }

    body {
        font-family: 'Nunito';
    }

    a {
        text-decoration: none;
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
    .btn-primary:hover {
        background-color: var(--primary-color);
        opacity: 0.85;
    }
    .btn-secondary {
    background-color: #3A0842;
    border-color: #3A0842;
    color: #fff !important;
    cursor: pointer;
    }

    :root {
        --primary-color: #3A0842;
        --secondary-color: #44CF6C;
        --default-color: #7f7979;
        --dark-color: #2A2B2A;
        --light-color: #D3D5D4;
    }

    .body-banner {
        background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961662/startng/Group_420_naoymq.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
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

@include('inc.navbar')
<div class="container-fluid pt-5 pb-5 body-banner">
        <div class="col-md-12 mt-5 pt-5">
            <h4 class="text-center font-weight-bold mt-5 pt-5" style="color: #fff;">Our Courses</h4>
            <p class="text-center pb-3" style="color: #fff;">We currently offer courses for various skills level, taught by
                <br> seasoned experts with a curriculum that helps improve your skills <br> from beginner level to world class
            </p>
        </div>
    </div>


    <div class="container pt-5 pb-5">

        @php $counter=3 @endphp

        @foreach($courses as $item)
            @if($counter%2==0)

                <div class="row align-items-center mt-3">
                    <div class="col-md-6 mt-5">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_414_l9x17w.png"
                             class="img-fluid">
                    </div>
                    <div class="col-md-6 mt-3">
                        <h4 class="font-weight-bold pb-3"> {{$item->title}}</h4>
                        <p class="pb-2">{{$item->description}}</p>
                        <div class="clearfix">
                            <div class="float-left">
                                <a class="btn btn-success pt-1 pb-1" href="{{route('course.show', $item->id)}}">More
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

            @endif

            @if($counter%2!=0)
                <div class="row align-items-center mt-4">
                    <div class="col-md-6 mt-5">
                        <h4 class="font-weight-bold pb-3 mt-5">{{$item->title}}</h4>
                        <p class="pb-2">{{$item->description}}</p>
                        <div class="clearfix">
                            <div class="float-left">
                                <a class="btn btn-success pt-1 pb-1" href="{{route('course.show', $item->id)}}">More
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
            @endif
            @php $counter = $counter + 1; @endphp
        @endforeach
    </div>

    <div class="container-fluid phones" style="background-color: #2A2B2A;">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12 mt-4 ">
                <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-3 text-white" style="font-size: 120%;">
                    <h4>Benefits</h4>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Full time Mentorship</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Expert Instructors</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Real Time Collaboration</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Build Real Time Products</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Learn up-to-date remote tools</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Offline Meet-ups</li>
                    @if(Auth::guest())
                    <a href="{{route('register')}}" class="btn btn-custom mt-3 pl-5 pr-5">Start Learning</a>
                    @else
                    <a href="{{route('dashboard')}}" class="btn btn-custom mt-3 pl-5 pr-5">Start Learning</a>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 mt-4 mb-3">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572635161/startng/Group_227_fzkkii.png" class="img-fluid w-75" style="transform: scaleY(1.3); height: 70vh;">
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container py-md-5 pt-5">
            <div class="row d-flex">
                <div class="col-md-6 col-sm-12 order-sm-1 order-md-2 pt-3">
                    <div class="text-center mb-4">
                        <img src="https://lancer-app.000webhostapp.com/startng/images/landing/email.png" class="img img-responsive " width="" height="">
                    </div>
                </div>
                <div class="col-md-6 order-sm-2 order-md-1 pt-3">
                    <h4 class="my-2 font-weight-bold">Subscribe to our Newsletter</h4>
                    <p class="">
                        Stay Updated with our latest news, discount and promotions.
                    </p>
                    {!! Form::open(['action' => 'SubscriptionsController@store', 'method' => 'POST', 'class' => 'my-4']) !!}
                    {{ csrf_field() }}
                    <div class="input-group input-group-lg mt-3">
                    {{Form::email('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter your email address'])}}
                    <div class="input-group-append">
                    {{Form::submit('Subscribe', ['class' => 'btn btn-success'])}}
                    </div>
                    </div>
                    {!! form::close() !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer >
        <div class="container-fluid footer-top col-lg-12">
            <div class="container col-md-12 p-5">
                <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572346080/startng/Logo_2_ee1iqv.png">
                <div class="row">
                @if(Auth::guest())
                    <div class="col-md-4 mt-4">

                        <h4 class="">Ready to take the leap?</h4>
                        <a class="btn btn-success mt-3 pl-5 pr-5"  href="{{route('register')}}">Start</a>
                    </div>
                @else
                     <div class="col-md-4 mt-4">

                         <a class="btn btn-success mt-3 pl-5 pr-5"  href="{{ route('logout') }}"
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

    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</body>

</html>

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
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link href="/css/modifiedstyles.css" rel="stylesheet" />
    <title>Start NG</title>

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
            font-family: 'Poppins', sans-serif;
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

        /* .btn-secondary {
            background-color: var(--secondary-color);
            color: #fff;
            border: thin solid var(--secondary-color);
            transition: 0.25s;
        }

        .btn-secondary:hover {
            background-color: var(--secondary-color);
            opacity: 0.85;
        } */

        /* Button styles end */

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
        /*main tag style starts here */
        .jumbotron{
            background: linear-gradient(0deg, rgba(37, 108, 57, 0.39),rgba(37, 108, 57, 0.39)), url(https://lancer-app.000webhostapp.com/startng/images/landing/lead-image.png);
            background-repeat: no-repeat;
            background-position: center;
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
        .journey img{
            max-width: 340px;
        }
    </style>


</head>
<body>

    @include('../inc.navbar')


  <section class="jumbotron rounded-0 px-0 bg-dark mb-0">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-white py-5">
                  <h1 class="jumbotron-heading ">Up Your Tech Game Online or Onsite</h1>
                  <p class="lead font-weight-light">The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers.</p>
                  <p>
                    @if(Auth::guest())
                    <a href="{{route('register')}}" class="btn btn-success pl-5 pr-5 mb-4">Start Learning</a>
                    @else
                    <a href="{{route('dashboard')}}" class="btn btn-success pl-5 pr-5 mb-4">Start Learning</a>
                    @endif
                  </p>
              </div>
          </div>
      </div>
  </section>

  <section class="journey">
        <div class="container py-5">
            <div class="row d-flex">
                <div class="col-md-7 order-sm-1 order-md-2">
                    <div class="text-center">
                        <img src="https://lancer-app.000webhostapp.com/startng/images/landing/journey.png" class="img img-fluid img-responsive">
                    </div>
                </div>
                <div class="col-md-5 order-sm-2 order-md-1 mt-4">
                    <h5 class="my-4 font-weight-bold">Begin Your Journey to Self Development</h5>
                    <p class="my-4 text-muted">
                        The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers. Everyone is welcome to participate (there is no entrance exam). Anyone can log into the internship using their laptop. Each week, we give tasks.
                    </p>
                    <form class="my-4" action="{{route('search')}}" method="post" >
                        @csrf

                        <a class="btn btn-success py-2 px-4 mt-3" href="{{route('find-course')}}"> Find a Course  <i class="fas fa-search"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </section>

@php
        $counter=0; @endphp
    <div class="container mt-5">
        <h4 class="text-center" style="color: #3A0842;">Explore Our Courses</h4>
        <hr>
        <div class="row">
            @foreach($courses as $item)
                <div class="col-md-4">
                    <div class="card mb-2" style="height:33rem">
                        <img class="card-img-top"
                             src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570927379/startng/Rectangle_44_w9fioh.png"
                             alt="Card image" style="height:10rem">
                        <div class="card-body" style="height:23rem">
                            <h4 class="card-title" style="font-weight:bold; height:2.3rem">{{$item->title}}</h4>
                            <p style="height:12rem">{{$item->description}}</p>
                            <div class="" style="height:">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked mb-3"></span> <br>
                              <div class="mb-1">
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
                    </div>
                </div>
                @if($counter%3==0) <br>   @endif

                @php
                    $counter+=1;
                @endphp

            @endforeach


        </div>

    </div>

    <div class="container-fluid video col-lg-12">
        <div class="row align-items-center">
            <div class="col-md-6" style="color: #fff;">
                <div class="col-md-10 col-lg-10 offset-md-1 pt-5 pb-5">
                    <h4 class="" style="font-weight:bold; font-size: 24px;">The beginning of your career <br> starts here. With us.
                    </h4>
                    <p class="" style="font-weight:bold;">Intensive learning sessions</p>
                    <p class="">The HNG internship is a 3-month remote <br> internship designed ---to find and <br> develop the most talented software developers. </p>
                    <a href="{{route('about')}}" class="" style="color: #fff; font-weight: bold;text-decoration:none">Learn more >></a>
                </div>
            </div>

            <div class="col-md-6 mt-0 pt-0 pb-n2 mb-n1">
                <div class="videoWrapper">
                    <iframe
                        width="100%"
                        height="400"
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
    </div>
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
                            @if(Auth::guest())
                            <a href="{{route('register')}}" class="btn btn-custom pl-5 pr-5">Start Learning</a>
                            @else
                            <a href="{{route('dashboard')}}" class="btn btn-custom pl-5 pr-5">Start Learning</a>
                            @endif
                       </div>
                    </div>
                </div>

            </div>

        </section>

<!-- What people have to say about us -->



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
                  <a href="{{route('hire')}}" class="btn btn-success my-3 py-2 px-4 mt-3">Hire a Graduate</a>
              </div>
          </div>
      </div>
  </section>

  <!-- https://lancer-app.000webhostapp.com/startng/images/landing/dennis.png -->
  <section class="">
      <div class="container py-5">
          <div class="text-center mb-5">
              <h4 class="font-weight-bold">What people have to say about us</h4>
          </div>
          <div class="mb-4 card border-0 rounded rounded-lg shadow bg-white">
              <div class="card-body mx-md-5 my-2">
                  <p class="lead text-muted">StartNg was indeed a Start for me on my long term path to a career switch. I literally stumbled on the application link on twitter. I liked that the classes were in written text, interns were encouraged to help each other, the learning process was great and the certificate was a welcome incentive. I'm still reeling with pride!</p>
                  <div class="d-flex justify-content-start align-items-left mt-5">
                      <img src="https://img.icons8.com/clouds/100/000000/user.png" class="img img-responsive rounded-circle img-thumbnail" width="100" height="100">
                      <div class="ml-4">
                          <p class="text-warning pb-2 my-0" >
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                          </p>
                          <h6>Chidinma O.</h6>
                          <small class="text-muted"><em>Completed the Front End Developer Class</em></small>
                      </div>
                  </div>
              </div>
          </div>
          <div class="mb-4 card border-0 rounded rounded-lg shadow bg-white">
              <div class="card-body mx-md-5 my-2">
                  <p class="lead text-muted">StartNg program was very helpful to me as I learned the basics of Web development and other courses relevant to the field. With several tasks, learning became interesting, I was able to practice within limited time and effectively collaborate with remote teammates.</p>
                  <div class="d-flex justify-content-start align-items-left mt-5">
                      <img src="https://img.icons8.com/bubbles/50/000000/user-female.png" class="img img-responsive rounded-circle img-thumbnail" width="100" height="100">
                      <div class="ml-4">
                          <p class="text-warning pb-2 my-0" >
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                          </p>
                          <h6>Egesi Ndubuisi Success.</h6>
                          <small class="text-muted"><em>Completed the Front End Developer Class</em></small>
                      </div>
                  </div>
              </div>
          </div>
          <div class="mb-4 card border-0 rounded rounded-lg shadow bg-white">
              <div class="card-body mx-md-5 my-2">
                  <p class="lead text-muted">I enrolled for start StartNg program a preparatory program for the main internship HNGI. it was a wonderful experience for me and I got to learn so many new things in software development.
                      Things like how to communicate with your team remotely through slack, how to use git and github, how to meet up with deadlines on task for each week e.t.c.</p>
                  <div class="d-flex justify-content-start align-items-left mt-5">
                      <img src="https://img.icons8.com/bubbles/50/000000/user-female.png" class="img img-responsive rounded-circle img-thumbnail" width="100" height="100">
                      <div class="ml-4">
                          <p class="text-warning pb-2 my-0" >
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                          </p>
                          <h6>Isuma Chidera.</h6>
                          <small class="text-muted"><em>FullStack Developer</em></small>
                      </div>
                  </div>
              </div>
          </div>
          <div class="mb-5 card border-0 rounded rounded-lg shadow bg-white">
              <div class="card-body mx-md-5 my-2">
                  <p class="lead text-muted">I have always been a tech enthusiast. I started my tech journey with start.ng. Though, the duration of the program was not enough to grasp all you need to know about software development, however i bet it is a great start. The secret to being a pro is getting started, start with start.ng.</p>
                  <div class="d-flex justify-content-start align-items-left mt-5">
                      <img src="https://img.icons8.com/clouds/100/000000/user.png" class="img img-responsive rounded-circle img-thumbnail" width="100" height="100">
                      <div class="ml-4">
                          <p class="text-warning pb-2 my-0" >
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                          </p>
                          <h6>Agboola Eniola</h6>
                          <small class="text-muted"><em>Backend Developer</em></small>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--  -->
  <section class="">
      <div class="container py-md-5 mb-5">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h4 class="my-4 font-weight-bold">Online or Offline, We Are Here For You</h4>
                  <p class="text-muted ">
                      The HNG internship is a 3-month remote internship designed to find and develop <br> the most talented software developers.
                  </p>
                  <a href="{{route('register')}}" class="btn btn-success my-3 py-2 px-4 mt-3">Start Learning</a>
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
                  {!! Form::open(['action' => 'SubscriptionsController@store', 'method' => 'POST', 'class' => 'my-4']) !!}
                  {{ csrf_field() }}
                  <div class="input-group input-group-lg mt-3">
                  {{Form::email('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter your email address'])}}
                  <div class="input-group-append">
                  {{Form::submit('Subscribe', ['class' => 'btn btn-custom'])}}
                  </div>
                  </div>
                  {!! form::close() !!}
              </div>
          </div>
      </div>
  </section>
    <!-- Footer -->

       <footer>
           <div class="container-fluid footer-top col-lg-12">
               <div class="container col-md-12 p-5">
                   <a href="{{route('index')}}"><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572346080/startng/Logo_2_ee1iqv.png"></a>
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

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

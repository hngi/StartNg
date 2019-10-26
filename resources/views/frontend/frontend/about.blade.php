<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Startng">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Site Title -->
	<title>About | Startng</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Default Styles -->
    <style>
        body {
        color: #3A0842;
        height: 100%;
        font-size: 1rem;
        line-height: 1.5;
        font-family: sans-serif;
        }
        a:hover, a:focus {
            text-decoration: none;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -ms-transition: 0.3s;
            -o-transition: 0.3s;
            color: inherit;
            outline: 0;
        }
        .navbar {
            margin-top: 10px;
        }
        .navbar-nav .nav-link {
            color: #3A0842;
        }
        p, span, h2 {
            display: block;
        }
        p, span, h2, .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
        }
        p.lead {
            font-size: 1.2em;
            font-weight: 500;
        }
        .ptb-100 {
            padding: 100px 0;
        }
        .ptb-80 {
            padding: 80px 0;
        }
        .btn-default {
            color: #fff;
            background: #3A0842;
            border: 1px solid #3A0842;
        }
        .btn-default:hover {
            color: #fff;
        }
        .header {
            height: 460px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570915217/startng/Rectangle_7_ak5zc2.png');
        }
        .welcome {
            color: #3A0842;
            margin: auto;
            text-align: center;
            padding-top: 100px;
            max-width: 400px;
        }
        .call-to-action {
            color: #fff;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570916337/startng/Rectangle_10_pwiqsf.png');
        }
        .testimonials {
            background: #fff;
        }
        .testimonials-content {
        	position: relative;
        	width: 80%;
			margin: auto;
			border: 1px solid #ececec;
			padding-bottom: 30px;
			box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2);
        }
        .testimonials .overlay1 {
        	background: #2DCE89;
        	padding: 50px;
        }
        .testimonials .overlay2 {
        	background: purple;
        	padding: 50px;
        }
        .testimonials-content img {
            border: 2px solid #2DCE89;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin: 0 auto;
            position: relative;
            top: -50px;
        }
        .testimonials-content p {
            max-width: 588px;
            margin: 0 auto;
            padding: 20px 10px;
        }
        .testimonials-content h2 {
            color: #2DCE89;
            font-size: 16px;
            padding-bottom: 10px;
        }
        .testimonials-content h3 {
            font-size: 14px;
        }
        .about {
            background:url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570920182/startng/Rectangle_57_xdcvbs.png');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .footer {
            background: #3A0842;
            color: #fff;
        }
        .footer ul {
            margin-left: 0;
            padding: 0;
        }
        .footer ul li {
            list-style: none;
        }
        .footer ul li a {
            color: #fff;
            margin-bottom: 10px;
        }
        .copyrights {
            background: #2E0435;
            color: #fff;
            padding-top: 20px;
        }
        .copyrights .icons i {
            color: #fff;
            font-size: 24px;
            padding-left: 15px;
            height: 45px;
            width: 45px;
        }   
    </style>
</head>
<body>
@include('../inc.navbar')
    <!-- Navigation area end -->

    <!-- Page header start -->
    <div class="header fixed_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="welcome">
                        <p class="m-5">A platform for learning programming where anyone, anywhere in the world can join and become a better programmer.</p>
                    </div>
                </div>
            </div>
        </div>                 
    </div>
    <!-- Header area end -->

    <!-- Courses area start -->
    <section class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pb-5">
                    <h4>Courses</h4>
                    <p>Interns are able to select from the number of courses we offer:</p>
                    <p>Machine Learning<br /> Digital Marketing<br/> Front End development <br /> Back end Development <br />
                    <ul style="color: #2DCE89;">
                        <li>100% Online</li>
                        <li>Flexible Online Learning</li>
                        <li>Earn a Course Certificate</li>
                    </ul>
                    <a class="btn btn-success" href="{{route('register')}}">Start Learning</a>
                </div>
                <div class="col-md-6">
                    <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570915745/startng/Rectangle_9_w0iucz.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Courses area end -->

    <!-- Call to action area start -->
    <section class="call-to-action p-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 offset-md-2 mb-2">
                   <p>You can have access to our free courses in Web development, Machine learning, and Digital Marketing. We have also made available paid courses that would give maximum and intense information about any course you will be interested in and you will have the opportunity to get your hands on enough practicals and projects of which at the end of the course, certificates will be issued.</p>
                </div>
                <div class="col-md-12">
                    <a href="{{route('courses.index')}}" class="btn btn-success pr-5 pl-5 m-2">Free Courses</a>
                    <a href="{{route('courses.index')}}" class="btn btn-success pr-5 pl-5 m-2">Paid Courses</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action end -->

    <!-- Testimonials Section Start -->
    <section class="testimonials text-center">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="testimonials-content">
                                    	<div class="overlay1"></div>
                                        <img src="https://res.cloudinary.com/oloyekuzza/image/upload/v1571941694/IMG-20191024-WA0039_in7uyq.jpg" alt="client1">
                                        <p>Managing tasks and having to deliver meeting up with deadlines in a few days under pressure is not a big deal anymore. I say a big thank you to the organizers of the HNG program and the sponsors.</p>
                                        <h2>Moses Obanega</h2>
                                        <h3>Front end track<br> from Imo state</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonials-content">
                                    	<div class="overlay2"></div>
                                        <img style="border: 2px solid purple" src="https://res.cloudinary.com/oloyekuzza/image/upload/v1571941743/IMG-20191024-WA0037_dbk4cm.jpg" alt="client3">
                                        <p>I came into HNG with zero knowledge in programming and I'll be leaving with so much knowledge acquired in programming, now I can be called a front end web developer. Thanks to HNG.</p>
                                        <h2 style="color: purple">Sydney Collins</h2>
                                        <h3>Front end track <br>from Cameroon</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonials-content">
                                    	<div class="overlay1"></div>
                                        <img src=" https://res.cloudinary.com/oloyekuzza/image/upload/v1571941726/IMG-20191024-WA0038_prwjkb.jpg" alt="client2">
                                        <p>One of the many things learned during the HNG program is collaborating with people online effectively. And I won't forget to commend the efforts of the mentors who we could reach out to when we are faced with some big problems. Lol.</p>
                                        <h2>Ibrahim Adamu</h2>
                                        <h3>Machine learning track <br>from Kano</h3>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Section End -->

    <!-- Privilege area start -->
    <section class="privilege pt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5 class="pb-5">On Start.ng, you are privileged to</h5>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_412_furoek.png" class="img-fluid img-responsive">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p class="lead">Learn from the Best Teachers</p>
                            <p>We hire Tutors with 100% knowledge on each track. Interns are provided best and appropriate advice from tutors based on their experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_414_pycdu8.png" class="img-fluid img-responsive">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p class="lead">Join Online Developer Community</p>
                            <p>A 24-hour functioning online community is made available for interns to learn from each other and communicate with senior developers. They also would not miss out on important information about events and meetups.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_412_furoek.png" class="img-fluid img-responsive">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p class="lead">Get Academic and Technical Support</p>
                            <p>Interns are exposed to updated usage of some technologies and effective training on their usage is provided.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_414_pycdu8.png" class="img-fluid img-responsive">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p class="lead">Earn a Certifcate</p>
                            <p>Interns are eligible for a certificate if only they get to a certain stage of the internship.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Privilege area end -->

        <!-- Hi Section End -->
        <section class="pt-5 mt-5">
            <div class="container">
                <div class="row pb-5 mb-2">
                    <div class="col-md-8 offset-md-2 text-center">
                        <p class="lead mb-4">Hi <br /> Do you know you can Enrol for <br/> FREE COMPLETE BEGINNER SOFTWARE DEVELOPMENT TRAINING</p>
                        <a href="{{route('register')}}" class="btn btn-success pl-5 pr-5">Start Learning</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570919824/startng/Group_360_s7w45n.png">
                    </div>
                    <div class="col-md-6 text-center">
                        <h4 class="pb-2">How It All Started</h4>
                        <p>The Internship was born out of passion and dedication to see aspiring youths attain their goals in the tech world by becoming software developers.</p>
                        <p>The co-founder Mark Essien initiated this Internship in 2017, and since then, the vision has remained the same - massively accelerate Nigerians and Africans becoming software developers. And doing this in a way that is open for all, no barriers and no bias. The only limitation should be your own willingness to continue.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hi Section End -->

        <!-- About section start -->
        <section class="about ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h4 class="pb-3">Our Global Reach</h4>
                        <p class="pb-4">Start.ng is the leading online learning platform for programming courses nationwide and across Africa and the world. Our goal is to eradicate illetracy across Africa, equipping each students with knowledge and character needed to excel anywhere in the world.</p>
                        <p class="pb-3 strong">Most Sought after Programming Skills <br /> Experienced Qualified Teachers <br /> Access to the Largest Online Developer Community</p>
                        <a href="{{route('register')}}" class="btn btn-default">Explore Start.ng</a>
                    </div>
                </div>               
            </div>
        </section>
        <!-- About section start -->

        <!-- Footer -->
<div class="footer pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/">
                    <img src="https://res.cloudinary.com/juwon-tech/image/upload/v1570818437/Logo_1_oyasky.png" alt="Startng">
                </a>
                <p class="pb-2">Ready to take the Leap?</p>
                <a href="{{route('index')}}" class="btn btn-success mb-5 pl-5 pr-5">Start!</a>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('courses.index')}}">Our Course</a></li>
                    <li><a href="{{route('hire')}}">Hire a Grad</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><a href="{{route('curriculum')}}">Curriculum</a></li>
                    <li><a href="{{route('blogs.index')}}">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><a href="{{route('find-course')}}">Find a Course</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><a href="{{route('terms')}}">Terms of Service</a></li>
                    <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="copyrights">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; copyrights 2019. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-right icons">
                <a href="#"><i class='fa fa-twitter' aria-hidden="true"></i></a>
                <a href="#"><i class='fa fa-instagram' aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
        <!-- End of Footer -->

    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
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
    <title>Register | Start NG </title>
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
        /* .btn-success:hover {
        background-color: rgb(2, 20, 12);
        color: #fff;
        border: thin solid rgb(2, 20, 12);

        } */
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
        top: 3.1rem;
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
        <div class="container">
            <div id="main-container"></div>
        </div>
        <div class="container-fluid banner">
            <div class="container">
                <div class="row align-items-center pt-5">
                    <div class="col-md-6 pb-5">
                        <h4 class=""
                        style="font-style: normal; font-weight: bold; font-size: 40px; letter-spacing: 0.655606px;">
                        Welcome to the <br>Start.ng application!</h4>
                        <p style="font-style: normal; font-weight: normal; font-size: 20px; line-height: 24px;">Sign up below <br> to Register For our Courses</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570906539/startng/Group_410_uqg7d0.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-4 pb-5">
            <form  action="{{ route('register') }}" method="post">
                @if ($errors->any())
                <div class="alert text-center alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @csrf
                <div class="col-md-10 offset-md-1" >
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usr" style="font-weight: bold;">First Name:</label>
                                <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Your First Name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usr" style="font-weight: bold;">Last Name:</label>
                                <input type="text" name="last_name" class="form-control" id="lastname" placeholder="Your Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usr" style="font-weight: bold;">Username:</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Your Unique Username" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usr" style="font-weight: bold;">Email Address:</label>
                                <input type="text" @error('email') is-invalid @enderror  name="email" class="form-control" id="email" placeholder="Enter Your Email Address" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usr" style="font-weight: bold;">Password:</label>
                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required onkeyup='check();'>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usr" style="font-weight: bold;">Confirm Password:</label>
                                <input type="password" name="password_confirmation" class="form-control" id="confirm_password" placeholder="Please Retype Your Password" required onkeyup='check();'><span id='message'></span>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usr" style="font-weight: bold;">Mobile Number:</label>
                                <input type="text" name="phone" class="form-control" id="mobileNumber" placeholder="Enter Phone Number" required>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                e.g. +2348101234567
                                </small>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-4">
                    <button type="submit" class="btn btn-success d-block mx-auto pl-5 pr-5 mb-1">Continue</button>
                    <div>
                        <p>Already have an Account? <a href="{{route('login')}}"> Sign In</a> </p>
                    </div>
                </div>
                </form>
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

    <script>
    const mainContainer = document.querySelector('#main-container');
    const formSubmit = document.querySelector('#formSubmit');
    let error = [];
    formSubmit.addEventListener('submit', (e) => {
    e.preventDefault();
    const firstName = document.querySelector('#firstName').value;
    const email = document.querySelector('#email').value;
    const mobileNumber = document.querySelector('#mobileNumber').value;
    const course = document.querySelector('#course').value;
    const experience = document.querySelector('#experience').value;
    const state = document.querySelector('#state').value;
    const country = document.querySelector('#country').value;
    if (!firstName || firstName.length < 5) {
    error.push('FirstName should not be less than 5')
    }
    if (!email || email.length < 5) {
    error.push('Email field cannot be less than 5 characters')
    }
    if (!mobileNumber || mobileNumber.length < 5) {
    error.push('Mobile Number should not be less than 5 numbers')
    }
    if (!course) {
    error.push('Course field cannot be blank')
    }
    if (!experience) {
    error.push('Experience cannot be blank')
    }
    if (!state) {
    error.push('State of Residence cannot be blank')
    }
    if (!country) {
    error.push('Country cannot be blank')
    }
    if (error.length > 0) {
    error.forEach(err => {
    const div = document.createElement('div');
    div.style.width = '100%';
    div.style.padding = '10px 8px';
    div.style.backgroundColor = 'green';
    div.style.color = '#fff';
    div.style.marginBottom = '10px';
    div.style.borderRadius = '4px';
    div.textContent = err;
    mainContainer.append(div);
    setTimeout(() => div.remove(), 5000);
    });
    error.length = 0;
    return
    }
    console.log(true);
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
    var check = function() {
    if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password matched';
    } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password not matching';
    }
    }
    </script>
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

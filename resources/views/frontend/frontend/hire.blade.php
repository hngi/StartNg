<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Hire A Grad</title>

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

        .btn-success:hover {
            background-color: rgb(2, 20, 12);
            color: #fff !important;
            border: thin solid rgb(2, 20, 12);
        }

        .btn-secondary:hover {
            background-color: rgb(2, 20, 12);
            color: #fff;
            border: thin solid #2dce89;
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
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570956770/startng/Group_407_bko5eo.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>

<body>
    @include('../inc.navbar')

    <div class="container-fluid body-banner pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center" style="color: #fff;">
            <h4 class="pb-5 pt-5" style="font-weight: bold; font-size: 40px;">Hire a Grad</h4>
            <p class="pb-4" style="font-weight: 600; font-size: 25px;">After 3 months of training and projects, <br> our
                graduates are ready to take on full-time <br> or remote jobs at your company.</p>
            <a href="{{route('hire')}}" class="btn btn-success pl-5 pr-5 mb-3">Hire a
                Graduate</a>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5 pb-5 pt-5">
        <div class="row align-items-center pb-5 pt-5">
            <div class="col-md-6">
                <div class="col-md-8 offset-md-2">
                    <h4 class="pb-3" style="font-weight: bold; font-size: 25px;">Versatile</h4>
                    <p>Our graduates are versatile , dedicated & equipped with the right skill sets to adapt
                        <br>to various areas of the workplace.<br> Our intensive 3 months program ensures our graduates are trained <br>with necessary skill sets needed for any workplace.
                    </p>   
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570957521/startng/Rectangle_26_jwplh1.png">
            </div>
        </div>
    </div>

    <div class="col-md-6 offset-md-3 text-center">
        <h4 class="pt-5 pb-5">Our graduates have acquired the latest skills</h4>
    </div>
    <div class="col-md-10 offset-md-1">
        <div class="row text-center pb-3">
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958135/startng/Group_408_stke6s.png">
                <p style="font-weight: bold;">Frontend Development</p>
                <p>HTML, CSS, JavaScript, <br> Boostrap, JQuery</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_409_lho37u.png">
                <p style="font-weight: bold;">Backend Development</p>
                <p>PHP, Python, Java,</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_410_tzprqb.png">
                <p style="font-weight: bold;">UI/UX Design</p>
                <p>User research, <br> Protoyping, Wireframing</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_411_jlcykp.png">
                <p style="font-weight: bold;">Frontend Development</p>
                <p>HTML, CSS, JavaScript, <br> Boostrap, JQuery</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_412_jrwpdt.png">
                <p style="font-weight: bold;">Backend Development</p>
                <p>PHP, Python, Java,</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-25 mb-4"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958136/startng/Group_413_h4wy7a.png">
                <p style="font-weight: bold;">UI/UX Design</p>
                <p>User research, <br> Protoyping, Wireframing</p>
            </div>
        </div>
    </div>

    <div class="container pb-5 pt-5">
        <div class="row pt-5 pb-5 align-items-center">
            <div class="col-md-6">
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570958760/startng/Rectangle_27_icxcps.png">
            </div>
            <div class="col-md-6">
                <div class="col-md-8 offset-md-2">
                    <h4 class="pb-4" style="font-weight: bold;">Remote Flexibility</h4>
                    <p>Our graduates are taught how to be effective remote employees . <br> They are trained to connect & work digitally at any time with <br>employers and clients around the world. With the rise in demand for remote <br> work, we ensure our graduates are up to date <br> with the latest practices to fill in these roles suitably.<br> lorem sed.</p>
                </div> 

 
            </div>
        </div>
    </div>

    <div class="container pb-5 pt-5">
        <h4 class="text-center font-weight-bold pb-5">Big companies are hiring our graduates</h4>
        <div class="col-md-10 offset-md-1 pb-5">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570959260/startng/Vector_qy0hzu.png">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570959261/startng/Rectangle_cgpe2w.png">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570959261/startng/Vector1_hidr5z.png">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570959260/startng/flutterwave_brmhoe.png">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5 pb-5">
        <div class="row align-items-center pb-5 pt-5">
            <div class="col-md-6">
                <div class="col-md-8 offset-md-2">
                    <h4 class="pb-3" style="font-weight: bold; font-size: 25px;">Zero Hiring Fees</h4>
                    <p>Let us know what you're looking for. We’ll help <br> you source the ideal candidates for your
                        next <br> full-time hire, without any placement fees.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570957521/startng/Rectangle_26_jwplh1.png">
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5" style="background-color: #44CF6C;">
        <div class="col-md-10 offset-md-1 pt-5 pb-5">
            <h4 class="text-center font-weight-bold pb-3">Learn more about hiring our grads</h4>
            <p class="text-center font-weight-bold pb-5">Fill out the form and we will get in touch.</p>
            <div class="row pb-4">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Company Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Job Title">
                </div>
            </div>
            <a class="btn btn-secondary col-md-2 offset-md-5 mt-5">Subscribe</a>
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
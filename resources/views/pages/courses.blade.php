<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Courses</title>

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
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961662/startng/Group_420_naoymq.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>

<body>
    @include('inc.navbar')

    <div class="container-fluid pt-5 pb-5 body-banner">
        <div class="col-md-12 mt-5 pt-5">
            <h4 class="text-center font-weight-bold mt-5 pt-5" style="color: #fff;">Our Courses</h4>
            <p class="text-center pb-3" style="color: #fff;">We currently offer courses for various skills level, taught
                by
                <br> seasoned experts with a curriculum that helps improve your skills <br> from beginner level to world
                class
            </p>
        </div>
    </div>


    <div class="container pt-5 pb-5">
    @if(count($courses) > 0)
        @foreach($courses as $course)
        <div class="row align-items-center mt-3">
            <div class="col-md-6 mt-5">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_414_l9x17w.png"
                    class="img-fluid">
            </div>
            <div class="col-md-6 mt-3">
                <h4 class="font-weight-bold pb-3">{{ $course->name }}</h4>
                <p class="pb-2">{{ $course->description }}</p>
                <div class="clearfix">
                    <div class="float-left">
                        <a class="btn btn-success pt-1 pb-1" href="/courses/{{$course->id}}">More
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
        @endforeach
    @endif
    </div>
    <div class="container-fluid">
        <img class="img-fluid"
            src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961661/startng/Group_419_c7p8rv.png">
        <div class="col-md-8 offset-md-1">
            <h4 class="font-weight-bold">Subscribe to our Newsletter</h4>
            <p>Stay Updated with our latest news, discount and promotions</p>
            <form class="form-inline pb-5">
                <input type="email" class="form-control col-md-8" placeholder="Email Address"><button type="submit"
                    class="btn btn-success">Subscribe</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    @include('inc.footer')
    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
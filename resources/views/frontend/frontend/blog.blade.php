<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <style>
        /* Style for Navbar Starts */

        body {
            font-family: Nunito;
        }

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
        /* Body Starts */

        
        .pagination li a {
            color: #3A0842;
        }
        .header_btn {
            color: #fff;
            border: 1px solid #44CF6C;
            padding: 5px 70px;
            background: #44CF6C;
            border-radius: 10px;
        }
        .header_btn:hover {
            color: #44CF6C;
            background: transparent;
            transition: all .5s;
        }
        


        .banner {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570922862/startng/Group_413_dy6fmr.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .pagination li a {
            color: #3A0842;
        }

        .pagination li.active {
            background-color: #3A0842;
        }

        /* Body Ends */
    </style>
</head>

<body>
    @include('../inc.navbar')

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571144019/mystart/Group_427_ry58n0.png" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">How much will I earn as a UI/UX Designer?</h3>
                    <p style="margin-top: 20px">
                        <a href="" class="header_btn">
                            Read
                        </a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571144020/mystart/Group_429_leath8.png" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">How much will I earn as a Web Developer?</h3>
                    <p style="margin-top: 20px">
                        <a href="" class="header_btn">
                            Read
                        </a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571144020/mystart/Group_428_fqdqgg.png" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">How much will I earn as a Machine Learning Engineer?</h3>
                    <p style="margin-top: 20px">
                        <a href="" class="header_btn">
                            Read
                        </a>
                    </p>
                    
                </div>
            </div>

    <div class="container-fluid banner pt-5 pb-5">
        <div class="col-md-8 offset-md-2 text-center pt-5 mt-3">
            <h4 class="mb-5"
                style="color: #fff; font-style: normal; font-weight: bold; font-size: 30px; line-height: 50px; text-align: center; letter-spacing: 0.655606px;">
                How much will I earn as a UI/UX Designer?</h4>
            <a href="#" class="btn btn-success pl-5 pr-5 mb-5">Read</a> <br>
            <a href="#"><img
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923285/startng/Group_303_dr7xs0.png"
                    class="img-fluid"></a>

        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <div class="container-fluid">
        <h2 class="text-center pt-5 mt-5 pb-4">StartNG BLOG</h2>
        <div class="input-group col-md-8 offset-md-2 mb-5 pb-3">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-append">
                <form action="{{route('course.search')}}" method="post" >
                    @csrf
                    <input type="text" name="course" class="form-control col-md-10 mb-3" placeholder="Type in your preferred course">
                    <button type="submit" class="btn btn-success pl-5 pr-5 mb-3">  Find A Course</button>
                    {{--<a href="" >Find A Course</a> --}}
                </form>
            </div>
        </div>
    </div>


    <div class="col-md-10 offset-md-1 pt-5">
        <hr>
        <div class="row pt-3">
            <div class="col-md-4">
                <p>October 5, 2019</p>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923818/startng/Rectangle_78_uzftqh.png">
            </div>
            <div class="col-md-8">
                <h4 class="mt-5 pt-3 pb-3">What you need to know about StartNG</h4>
                <p class="mb-5 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing .</p>
            </div>
        </div>
        <hr>
        <div class="row pt-5 mt-3">
            <div class="col-md-4">
                <p>October 5, 2019</p>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923818/startng/Rectangle_78_uzftqh.png">
            </div>
            <div class="col-md-8">
                <h4 class="mt-5 pt-3 pb-3">What you need to know about StartNG</h4>
                <p class="mb-5 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing .</p>
            </div>
        </div>
        <hr>
        <div class="row pt-5 mt-3">
            <div class="col-md-4">
                <p>October 5, 2019</p>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923818/startng/Rectangle_78_uzftqh.png">
            </div>
            <div class="col-md-8">
                <h4 class="mt-5 pt-3 pb-3">What you need to know about StartNG</h4>
                <p class="mb-5 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing .</p>
            </div>
        </div>
        <hr>
        <div class="row pt-5 mt-3">
            <div class="col-md-4">
                <p>October 5, 2019</p>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923818/startng/Rectangle_78_uzftqh.png">
            </div>
            <div class="col-md-8">
                <h4 class="mt-5 pt-3 pb-3">What you need to know about StartNG</h4>
                <p class="mb-5 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing .</p>
            </div>
        </div>
        <hr>
        <div class="row pt-5 mt-3">
            <div class="col-md-4">
                <p>October 5, 2019</p>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923818/startng/Rectangle_78_uzftqh.png">
            </div>
            <div class="col-md-8">
                <h4 class="mt-5 pt-3 pb-3">What you need to know about StartNG</h4>
                <p class="mb-5 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing .</p>
            </div>
        </div>
        <hr>
        <div class="row pt-5 mt-3">
            <div class="col-md-4">
                <p>October 5, 2019</p>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923818/startng/Rectangle_78_uzftqh.png">
            </div>
            <div class="col-md-8">
                <h4 class="mt-5 pt-3 pb-3">What you need to know about StartNG</h4>
                <p class="mb-5 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing .</p>
            </div>
        </div>
        <hr>
        <div class="row pt-5 mt-3">
            <div class="col-md-4">
                <p>October 5, 2019</p>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923818/startng/Rectangle_78_uzftqh.png">
            </div>
            <div class="col-md-8">
                <h4 class="mt-5 pt-3 pb-3">What you need to know about StartNG</h4>
                <p class="mb-5 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing .</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 offset-md-5 mb-5 pb-5">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">&lt;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item active" style="background-color: #3A0842;"><a class="page-link" href="#"
                    style="background-color: #3A0842; border: thin solid #3A0842;">10</a></li>
            <li class="page-item"><a class="page-link" href="#">11</a></li>
            <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
        </ul>
    </div>



    <!-- Footer -->
    @include('../inc.footer')

    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- Custom styles for this template -->
    <style>
        body {
            overflow-x: hidden;
        }

        .btn-success {
            background-color: #44CF6C;
            border-color: #44CF6C;
        }

        .btn-success:hover {
            background-color: #44CF6C;
            border-color: #44CF6C;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
            background-color: #3A0842;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }
            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }
            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
    </style>

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper" style="background-color: #3A0842;">
        <div class="sidebar-heading"><img class="img-fluid pt-4" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571217844/startng/Logo_1_x4nvwt.png">
        </div>
        <div class="list-group list-group-flush" style="background-color: #3A0842; color: #fff; text-transform: uppercase;">
            <a href="profile.html" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Profile</a>
            <a href="users.html" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Users</a>
            <a href="add-courses.html" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Add
                Courses</a>
            <a href="view-courses.html" class="list-group-item active list-group-item-action pt-3 pb-3" style="background-color: #fff; color: #3A0842; border-color: #fff;">View Courses</a>
            <a href="create-admin.html" class="list-group-item active list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff; border-color: #3A0842;">Create Admin</a>

        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn" id="menu-toggle"><img class="img-fluid"
                                                      src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571236013/iconfinder_Menu_2290865-2_rtadbn.png"></button>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="#" style="color: #fff;">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="min-height:80vH;">
            <div class="mb-4 py-2 border-bottom text-center">
                <h5 class="font-weight-bolder text-primary">Number of Courses: 6</h5>
            </div>

            <div class="row">
                <div class="card-deck">

                    @foreach($courses as $item)
                        <div class="card-deck">

                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="https://lancer-app.000webhostapp.com/startng/images/landing/backend-1.png" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item->name}}</h5>
                                        <p class="card-text">{{$item->description}}</p>
                                    </div>
                                    <div class="card-footer justify-content-between">
                                        <small class="text-muted float-left">₦{{$item->price}}</small>

                                        <a href="{{route('course.details',$item->id)}}">
                                            <button class="text-primary font-weight-bold
                                     float-right" >View</button>
                                        </a>
                                        <a href="{{route('course.disable',$item->id)}}">
                                            <button class="text-danger font-weight-bold
                                     float-right" >Disable</button>
                                        </a>
                                        {{--<small class="text-danger font-weight-bold--}}
                                        {{--float-right">50 students</small>--}}

                                    </div>
                                    <!--end of .card-footer-->
                                </div>
                                <!--end of .card-->

                            </div>

                            @endforeach



                </div>
                <!--end of card deck-->

            </div>
                </div>
            <!--end of .row-->


            <!--end of .row-->

            <ul class="pagination justify-content-center mt-3">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>

            <!-- </div> -->


        </div>
        <!-- end of .container-->

        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://start.ng" target="_blank" style="text-decoration:none; color:#000;"> Start.ng</a>
        </div>



    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
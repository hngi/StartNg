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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
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
    <div class="sidebar-heading"><a href="{{route('index')}}"><img class="img-fluid pt-4" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571217844/startng/Logo_1_x4nvwt.png">
    </div>
    <div class="list-group list-group-flush" style="background-color: #3A0842; color: #fff; text-transform: uppercase;">
    @if(Auth::user()->role==2)
        <a href="{{route('mentors')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #fff; color: #3A0842;">Admin</a>
        <a href="{{route('mentors.create')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Add Admin</a>
    @endif
        <a href="{{route('users')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Users</a>
        <a href="{{route('course.create')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Add
            Courses</a>
        <a href="{{route('courses')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">View Courses</a>

        <a class="list-group-item list-group-item-action pt-3 pb-3"  style="background-color: #3A0842; color: #fff;" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

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


            </nav>

            <div class="table-responsive col-md-10 offset-md-1 mt-5">
                <h2 class="text-center mb-5">Admin Details</h2>

                <div>
                    @if(session('failed'))
                        <div class="text-center alert alert-danger">
                            {{session('failed')}}
                        </div>

                    @endif
                </div>
                <div>
                    @if(session('success'))
                        <div class="text-center alert alert-success">
                            {{session('success')}}
                        </div>

                    @endif
                </div>
<div class="container">
  <div class="card" style="width:380px">
    <img class="card-img-top" src="https://lancer-app.000webhostapp.com/startng/images/landing/dennis.png" alt="Card image" style="width:90%">
    <div class="card-body">
      <h4 class="card-title">Name: {{$mentor->name}}</h4>
      <h4 class="card-title">Phone:{{$mentor->phone}}</h4>
      <h4 class="card-title">Email:{{$mentor->email}}</h4>
      <h4 class="card-title">Location:{{$mentor->state}}</h4>
      <a href="#" class="btn btn-warning">Edit</a>
      <a href="#" class="btn btn-danger">Delete</a>
    @if($mentor->active)
    <a class=" btn btn-info" href="{{route('mentors.destroy',$mentor->id)}}" >Disable Mentor</a>
    </div>
    @endif
    @if(!$mentor->active)
    <div>
    <a class=" btn btn-primary" href="{{route('mentor.destroy',$mentor->id)}}" >Enable Mentor</a>
    </div>
    @endif
    </div>
  </div>
            </div>
               <br>
               <br>
               <br>

           

       
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
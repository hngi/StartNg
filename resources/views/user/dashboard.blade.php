<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        User Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <!-- <link href="css/bootstrap.min.css"  rel="stylesheet" /> -->
    <!-- <link href="css/paper-dashboard.css" rel="stylesheet" /> -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="">


  @if(Auth::guest())
  {{ '/' }}

  @endif



@if(!Auth::guest())


<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">

        <div class="logo">
            <a href="http://startng.ml">

                <img class="img-fluid w-50 mt-3 mb-1" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png">

            </a>

        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="/user">
                        <i class="fa fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/user/template">
                        <i class="fa fa-home"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="/user/">
                        <i class="fa fa-book"></i>
                        <p>View Courses</p>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <i class="fa fa-book"></i>
                        <p>Register for Courses</p>
                    </a>
                </li>
                <li>
                  <a class="pl-5" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                </li>


            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">DASHBOARD</a>
                </div>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->


                <li class="nav-item dropdown" style="font-size:1.5rem">
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </nav>
              <!-- End Navbar -->
              <!-- <div class="panel-header panel-header-lg">

    <canvas id="bigDashboardChart"></canvas>


  </div> -->

          </div>
      </div>

@endif





    <!--   Core JS Files   -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>

    <script src="js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <script src="js/demo.js"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
</body>

</html>

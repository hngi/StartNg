<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        User Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/paper-dashboard.css" rel="stylesheet" />
    <link href="css/view-course.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        @include('inc.user-sidebar')
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
                        <a class="navbar-brand" href="#pablo">USER PROFILE</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
            <div class=" content">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class=" text-center alert alert-success">
                                {!!  session('success') !!}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="text-center alert alert-warning">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Courses Registered</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Duration(Months)
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                Progress
                                            </th>
                                            <th>
                                                Tutor
                                            </th>
                                            <th class="text"> </th>
                                        </thead>
                                        <tbody>
                                            @foreach($registered_courses as $registered_course)
                                            @foreach($courses as $course)
                                            @if($registered_course->course_id == $course->id)
                                            <tr>
                                                <td>
                                                    {{$course->title}}
                                                </td>
                                                <td>
                                                    {{$course->duration}}
                                                </td>
                                                <td>
                                                    NGN{{$course->price}}
                                                </td>
                                                <td>
                                                    {{$registered_course->progress}}%
                                                </td>
                                                <td>
                                                    @foreach($users as $user)
                                                    @if($user->id == $course->user_id)
                                                    {{$user->username}}
                                                    @endif
                                                    @endforeach
                                                </td>
                                                <td class="text">
                                                    <a href="{{route('user.show', $course->id)}}" class="btn btn-warning">VIEW COURSE</a>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <script src="js/demo.js"></script>
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
</body>

</html>
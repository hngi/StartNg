<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Tutor Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/paper-dashboard.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">

  @include('inc.tutorsidebar')
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
            <div class="content">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card card-stats">
                            <a href="{{route('tutor.view-students')}}" style="text-decoration: none;">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4 class="text-black">VIEW <br> STUDENTS</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-footer ">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats">
                            <a href="{{route('tutor.assignment')}}" style="text-decoration: none;">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4 class="text-black">CREATE <br> ASSIGNMENT</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-footer ">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats">
                            <a href="{{route('tutor.upload-resource')}}" style="text-decoration: none;">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4 class="text-black">UPLOAD <br> RESOURCES</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-footer ">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">
                                <h5 class="card-title">Assignment</h5>
                                <p class="card-category">Submissions of Assignments</p>
                            </div>
                            <div class="card-body ">

                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Class Schedule</h5>
                                <p class="card-category">Schedule for your classes</p>
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Date
                                            </th>
                                            <th>
                                                Time
                                            </th>
                                            <th>
                                                Course
                                            </th>
                                            <th class="text"> </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    2019-11-11
                                                </td>
                                                <td>
                                                    09:30
                                                </td>
                                                <td>
                                                    Laravel
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    2019-11-12
                                                </td>
                                                <td>
                                                    14:00
                                                </td>
                                                <td>
                                                    Javascript
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    2019-11-13
                                                </td>
                                                <td>
                                                    15:00
                                                </td>
                                                <td>
                                                    UI/UX
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li>
                                    <a href="https://startng.ml" target="_blank">STARTNG</a>
                                </li>

                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>, made by Startdotng Team
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/perfect-scrollbar.jquery.min.js"></script>

    <script src="/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <script src="/js/demo.js"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
        Admin Tutor Dashboard | StartNg
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/css/paper-dashboard.css" rel="stylesheet" />
        <link href="/css/view-course.css" rel="stylesheet" />
    </head>
    <body class="">
        <div class="wrapper ">
            @include('inc.sidebar')
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
                            <a class="navbar-brand" href="#pablo">VIEW ALL TUTORS</a>
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
                @include('inc.messages')
                <div class=" content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">TUTORS</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email Address</th>
                                                <th>Phone Number</th>
                                            </thead>
                                            <tbody>
                                                @foreach($tutors as $tutor)
                                                <tr>
                                                    <td>{{$tutor->first_name}} {{$tutor->last_name}}</td>
                                                    <td>{{$tutor->username}}</td>
                                                    <td>{{$tutor->email}}</td>
                                                    <td>{{$tutor->phone}}</td>
                                                    <td class="text">
                                                        <a href="{{route('admin.view-user-detail', $tutor->id)}}" class="btn btn-warning">VIEW DETAILS</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$tutors->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <script type="text/javascript">
                $(document).ready(function() {
                var newUrl = "";
                $("#dothis").change(function() {
                $newUrl = $("#dothis option:selected").val();
                });
                $("#executelink").click(function() {
                location = $newUrl ;
                });
                });
                </script>
            </body>
        </html>
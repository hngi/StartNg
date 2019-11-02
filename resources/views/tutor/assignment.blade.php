<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Tutor | StartNg
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
                        <a class="navbar-brand" href="#pablo">ASSIGNMENT</a>
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


</div> --> @include('inc.messages')
            <div class="content">

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

                <form enctype="multipart/form-data" action="{{route('ass.upload')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="description" placeholder="Assignment Details" class="form-control" >
                            Assignment Details
                        </textarea>


                    </div>

                    <label for="ass">Upload Assignment Resource </label>
                    <input id="ass" placeholder="upload Assignment Resource" name="image" class="form-control" type="file">

                    <div class="form-group {{ $errors->has('course_id') ? 'has-error' : ''}}">
                        {!! Form::label('course_id', 'Course', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::select('course_id', $courses, null, ['class' => 'form-control', 'placeholder' => 'Pick a Course']) !!}
                            {!! $errors->first('course_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div>
                        <input name="due_date" type="date" placeholder="Due Date">
                    </div>

                    <div class=" text-center">
                        <button type="submit" class="btn btn-warming">Submit</button>

                    </div>
                </form>
                </div><br>


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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>User Dashboard</title>
</head>

<body>
    @include('inc.usersidebar')

    <!-- Page content holder -->
    <div class="page-content" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm mt-2 ml-2"><i
        class="fa fa-bars"></i></button>

        <!-- Content -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="input-group">
                        <input class="form-control" type="text" name="" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                        <div class="input-group-append">
                            <a href="" class="input-group-text" id="my-addon"><i class="fa fa-search text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 offset-md-1 mt-2">
                    <a href=""><i class="fa fa-bell"></i></a>
                </div>
                <div class="col-md-3 offset-md-1 mt-2">
                    @if(Auth::user()->profile_pic)
                    <p><img width="50" height="50" class="img-fluid rounded-circle mr-3" src="/storage/profile_pictures/{{Auth::user()->profile_pic}}"> <span class="font-weight-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></p>
                    @else
                    <p><img width="50" height="50" class="img-fluid rounded-circle mr-3" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"> <span class="font-weight-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></p>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="container-fluid banner">
            <h1 class="text-white" style="font-weight: 300;">Hello, {{ Auth::user()->username }}</h1>
            <p class="text-white" style="font-weight: 300;">This is your dashboard</p>
        </div>

            @include('inc.messages')
            @yield('content')

    </div>

    <!-- End content -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            // Sidebar toggle behavior
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });
        });
    </script>
</body>

</html>
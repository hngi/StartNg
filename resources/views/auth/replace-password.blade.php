<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>StartNG</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        
        .btn-custom {
            color: #fff;
            background-color: #2DCE89;
        }
        
        .btn-custom:hover {
            color: #fff;
            background-color: #2DCE89;
        }
        
        .navbar-custom .nav-link {
            color: #000;
        }
        
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        
        .footer-top {
            background-color: #3A0842;
            color: #fff;
        }
        
        .footer-top li {
            list-style-type: none;
        }
        
        .footer-link {
            color: #fff;
            text-decoration: none;
            font-size: 1em;
        }
        
        .footer-link:hover {
            color: #fff;
            text-decoration: none;
        }
        
        .footer-social {
            background-color: #2E0435;
            color: #fff;
        }
    </style>
</head>

<body>
@include('../inc.navbar')
    <div class="container pt-4 pb-5">
      @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
       <form method="post" action="{{route('reset')}}">
           @csrf
           <div class="row">
               <div class="col">
                   <h3 style="text-align: center;"><i class="fa fa-lock fa-4x"></i></h3>
               </div>
           </div>
           <div class="row pt-5">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                   <div class="form-group">
                       <label for="usr" style="font-weight: bold;">Password:</label>
                       <input name="password" type="Password" class="form-control" id="usr" placeholder="New Password" required>
                   </div>
               </div>
               <div class="col-md-2"></div>
           </div>

           <div class="row pt-5">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                   <div class="form-group">
                       <label for="usr" style="font-weight: bold;">Confirm password:</label>
                       <input name="confirm_password" type="Password" class="form-control" id="usr" placeholder="Confirm Password" required>
                   </div>
               </div>
               <div class="col-md-2"></div>
           </div>




           <div class="row mb-3">
               <div class="col-md-2"></div>
               <div class="col-md-3">

               </div>
               <div class="col-md-4"></div>

           </div>
           <button type="submit" class="btn btn-success d-block mx-auto pl-5 pr-5 mb-4">Reset Password</button>
       </form>
    </div>

    <footer>
        <div class="container-fluid footer-top col-lg-12">
            <div class="container col-md-12 p-5">
                <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572346080/startng/Logo_2_ee1iqv.png">
                <div class="row">
                    <div class="col-md-4 mt-4">

                        <h4 class="">Ready to take the leap?</h4>
                        <a class="btn btn-custom mt-3 pl-5 pr-5" href="">Start</a>
                    </div>
                    <div class="col-md-2 mt-4">

                        <li><a class="footer-link" href="">About Us</a></li>
                        <li><a class="footer-link" href="">Our Course</a></li>
                        <li><a class="footer-link" href="">Hire a Grad</a></li>

                    </div>
                    <div class="col-md-2 mt-4">

                        <li>
                            <a class="footer-link" href="">Curriculum</a>
                        </li>
                        <li>
                            <a class="footer-link" href="">Blog</a>
                        </li>

                    </div>
                    <div class="col-md-2 mt-4">
                        <li>
                            <a class="footer-link" href="">Find a Course</a>
                        </li>
                        <li>
                            <a class="footer-link" href="">Our Partners</a>
                        </li>
                        <li>
                            <a class="footer-link" href="">Contact Us</a>
                        </li>
                    </div>
                    <div class="col-md-2 mt-4">
                        <li>
                            <a class="footer-link" href="">FAQ</a>
                        </li>
                        <li>
                            <a class="footer-link" href="">Terms of Service</a>
                        </li>
                        <li>
                            <a class="footer-link" href="">Privacy Policy</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-social col-lg-12">
            <div class="container p-3">
                <div class="clearfix">
                    <div class="float-left">

                    </div>
                    <div class="float-right">
                        <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-twitter"></i></a>
                        <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
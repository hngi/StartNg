<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="{{asset('css/modifiedstyles.css')}}" rel="stylesheet">
    <title>Login</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        
        /* Body Style */
        
        .banner {
            background-color: #E5EBFF;
        }
    </style>
</head>

<body>
   @include('inc.new_nav')
    <div class="container-fluid banner">
        <div class="container">
            <div class="row align-items-center pt-5">
                <div class="col-md-12 pb-5 text-center">
                    <h4 class="" style="font-style: normal; font-weight: bold; font-size: 40px; letter-spacing: 0.655606px;">
                        Welcome again!</h4>
                    <p style="font-style: normal; font-weight: normal; font-size: 20px; line-height: 24px;">Log in using the form below and get started.</p>
                </div>
                
            </div>
        </div>
    </div>
   <form action="{{ route('login') }}" method="post">
       @csrf
    <div class="container pt-4 pb-5">
        @if ($errors->any())
            <div class="alert text-center alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row pt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="usr" style="font-weight: bold;">Email:</label>
                    <input type="text" name="email" class="form-control" id="usr" placeholder="Your Email Address" required>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="usr" style="font-weight: bold;">Password:</label>
                    <input type="password" name="password" class="form-control" id="usr" placeholder="Your Password" minlength="8" maxlength="21" required>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row mb-3">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <input type="checkbox" name="remember" value="remember" id="check-me"> Remember me
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-4"><a href="forgotpassword.html" class="forget-password">Forgot Password?</a></div>
            
        </div>
        <button type="submit" class="btn btn-success d-block mx-auto pl-5 pr-5 mb-4">Login</button>
    </div>
       </form>
    <!-- Footer -->
@include('inc.new_footer')

    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
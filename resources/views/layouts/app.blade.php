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
    
    @yield('style')
</head>

<body>
    @include('inc.navbar')

    @yield('content')

    @include('inc.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito&display=swap">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{asset('css/modifiedstyles.css')}}" rel="stylesheet">
</head>
<style>
    body {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Nunito", sans-serif;
    }
    /*...Main Section...*/
    
    section.main {
        background-image: url("https://res.cloudinary.com/dht5bpbmi/image/upload/v1570802801/Rectangle_2_cercha.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        min-height: 100vh;
        background-color: rgba(58, 8, 66, 0.5);
    }
    
    .content {
        font-weight: bold;
        padding-top: 25vh;
        z-index: 1;
        text-align: left;
        width: 35%;
        margin-left: 15%;
    }
    
    .content .upgrade-text {
        color: #000;
        font-size: 40px;
        font-weight: normal;
        line-height: 55px;
        letter-spacing: 0.655606px;
        color: #FFFFFF;
    }
    
    .content .hng-text {
        font-weight: normal;
        font-size: 1.5em;
        line-height: 151.2%;
        color: #FFFFFF;
        padding-top: 12px;
        padding-bottom: 12px;
    }
    
    section.main a button {
        background: #44CF6C;
        border-radius: 7px;
        font-size: 20px;
        padding: 8px 70px;
        color: #fff;
        margin-top: 12px;
        margin-bottom: 5px;
    }
    
    section.main a button:hover {
        color: #fff;
        background: rgba(68, 207, 108, 0.35);
    }
    /*...Search Area...*/
    
    .main-field {
        margin-top: 5%;
        margin-bottom: 5%;
        width: 100%;
        text-align: center;
    }
    
    p {
        padding: 0;
        margin-top: 0;
    }
    
    .find h3 {
        color: #2A2B2A;
        font-family: 'Nunito', sans-serif;
        letter-spacing: 0.655606px;
    }
    
    input[type=text] {
        width: 50%;
        border: 0.5px solid #2B322D;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        outline: none;
        padding: 8px;
        box-sizing: border-box;
        transition: .3s;
    }
    
    input[type=text]:focus {
        border-color: rgba(68, 207, 108, 0.35);
        box-shadow: 0 0 8px 0 rgba(68, 207, 108, 0.35);
    }
    
    .find {
        position: relative;
    }
    
    .find i {
        position: absolute;
        top: 55%;
        left: 26%;
        padding: 9px 8px;
        color: #000000;
        transition: .3s;
    }
    
    .find input[type=text] {
        padding-left: 45px;
    }
    
    .find input[type=text]:focus+i {
        color: rgba(68, 207, 108, 0.35);
    }
    
    .results {
        width: 50%;
        height: 460px;
        max-height: 470px;
        text-align: left;
        margin-left: 25%;
        overflow-y: auto;
        border: 0.5px solid #2B322D;
        padding-bottom: 20px;
        position: relative;
    }
    
    .result1 {
        border: 0.5px solid #aaa;
    }
    
    .result1:hover {
        background: rgba(68, 207, 108, 0.35);
    }
    
    .active-2 {
        background: rgba(68, 207, 108, 0.35);
    }
    
    .first-result {
        font-weight: bold;
        font-family: 'Nunito', sans-serif;
        font-size: 0.8rem;
        letter-spacing: 0.655606px;
        color: #000000;
        padding-left: 110px;
    }
    
    .first-result i {
        font-weight: normal;
        font-size: .7rem;
        color: #333333;
    }
    
    .first-result span {
        font-size: 1.5rem;
        color: #000;
    }
    
    .first-result em {
        font-weight: normal;
        color: #333333;
        font-size: .7rem;
    }
    
    .second-result {
        padding-left: 110px;
    }
    
    .image-result {
        position: absolute;
        height: 60px;
        width: 60px;
        margin-top: 8px;
        margin-left: 20px;
    }
    
    .online-link {
        border: 1px solid #3a0842;
        text-decoration: none;
        font-size: .6rem;
        padding: 5px 15px 5px 15px;
        border-radius: 10px;
        color: #3a0842;
        background: #9a7580;
        margin-right: 10px;
    }
    
    .free-link {
        border: 1px solid #aaa;
        text-decoration: none;
        font-size: .6rem;
        padding: 5px 23px 5px 23px;
        border-radius: 10px;
        color: #e3b82a;
        background: #ffe797;
    }
    /*... Footer...*/
    /*.page-footer {
        margin-top: 80px;
        background-color: #3A0842;
    }
    
    .row {
        padding: 30px 50px;
        color: #fff;
    }
    
    .col-md-2 {
        margin-top: 30px;
    }
    
    .col-md-2 ul li a {
        color: #fff;
    }
    
    .footer-copyright {
        background-color: #2E0435;
        padding-right: 50px;
        overflow: hidden;
    }
    
    .footer-copyright a img {
        margin-right: 15px;
    } */
    
    .col-md-4 {
        overflow: hidden;
    }
    
    .col-md-4 a button {
        background-color: #44CF6C;
        border-radius: 7px;
        padding: 4px 50px;
        color: #fff;
        outline: none;
        border: none;
    }
    
    .col-md-4 a button:hover {
        background: rgba(68, 207, 108, 0.35);
        color: #fff;
    }
    
    .col-md-4 p[title] {
        font-family: "Nunito";
        font-weight: bold;
        font-size: 22px;
        display: inline-block;
        padding-top: 10px;
    }
    
    .col-md-4 img {
        display: inline-block;
        width: 25px;
        padding-right: 5px;
    }
    
    .float-right a {
        color: #fff;
        font-size: 1rem;
        margin-left: 10px;
    }
    
    .float-right a:hover {
        color: #44CF6C;
    }
    
    @media only screen and (max-width: 576px) {
        .online-link {
            margin-right: 2px;
            padding: 1px 5px 1px 5px;
        }
        .free-link {
            padding: 1px 6px 1px 6px;
        }
        .content {
            width: 80%;
        }
        .find i {
            left: 20%;
        }
    }
    
    @media only screen and (min-width: 576px) {
        .content {
            width: 80%;
        }
        .find i {
            left: 20%;
        }
    }
    
    @media only screen and (min-width: 798px) {
        .content {
            width: 60%;
        }
        .find i {
            left: 25%;
        }
    }
    /* for screen size lesser than 802px.... the point where courses in search list becomes clumsy */
    
    @media only screen and (max-width: 802px) {
        .find i {
            left: 16%;
        }
        .find input[type="text"] {
            width: 80%;
        }
        .results {
            width: 80%;
            margin: 0 auto;
        }
        .result1 {
            padding: 4px;
        }
    }
    
    @media only screen and (min-width: 992px) {}
    
    @media only screen and (min-width: 1200px) {
        .content {
            width: 35%;
        }
    }
    
    .banner-body {
        background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570925063/startng/Group_414_xmbnpz.png');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>

   @include('inc.new_nav')

    <div class="container-fluid banner-body pt-5 pb-5">
        <div class="col-md-6 offset-md-1 align-items-center">
            <h4 class="mb-4 mt-5 pt-4" style="color: #fff; font-weight: bold; font-size: 30px; letter-spacing: 0.655606px;">Upgrade Your Skills with <br> Our Curriculum</h4>
            <p class="pb-3" style="color: #fff;">
                The HNG internship is a 3-month remote <br> internship designed ---to find and develop the <br> most talented software developers.
            </p>

            <a href="register.html" class="btn btn-success pl-5 pr-5 mb-4" style="background-color: #44CF6C;">Start

                Learning</a>
        </div>
    </div>

    <section class="main-field">
        <div class="find">
            <form method="post" action="{{route('course.search')  }}">

                    <h3>Search Courses</h3>

                    @csrf
                    <input type="text" name="course">

                <i class="fa fa-search"></i>


            </form>
        </div>

        <div class="results">
            @foreach($courses as $item)
                <div class="result1 active-2">
                    <img src="https://res.cloudinary.com/dht5bpbmi/image/upload/v1570800314/Group_34_pklbgg.png" alt="JS"
                         title="image-result" class="image-result">
                    <p class="first-result">{{$item->name}} &nbsp; &nbsp; &nbsp; <i>Beginner</i> <span>.</span> <em>{{$item->duration}}
                            Days</em></p>
                    <p class="second-result">
                        @if(Auth::guest())
                            <a href="{{route('register')}}" class="online-link">Register</a>
                        @endif
                        @if(!Auth::guest())
                            <a href="{{route('register.courses',$item->id)}}" class="online-link">Register</a>
                        @endif

                        <a href="{{route('course.show',$item->id)}}" class="free-link">Details</a>
                    </p>
                </div>
            @endforeach



        </div>

    </section>

    <!-- Footer -->
@include('inc.new_footer')
    <!-- End of Footer -->

</body>

</html>
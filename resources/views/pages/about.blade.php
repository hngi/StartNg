@extends('layouts.app')

@section('style')

<style>
    /* Style for Navbar Starts */

    .navbar-custom li a {
        color: #000;
    }

    .btn-success {
        background-color: #2DCE89;
        color: #fff;
        border: thin solid #2dce89;
    }

    .btn-success:hover {
        background-color: rgb(2, 20, 12);
        color: #fff;
        border: thin solid rgb(2, 20, 12);
    }

    .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .custom-toggler.navbar-toggler {
        border-color: #000;
    }

    /* Style for Navbar Ends */
    /* Style for Footer Starts */

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Nunito', sans-serif;
    }

    a {
        text-decoration: none;
    }

    .deep {
        background: #3A0842;
        color: #fff;
    }

    .deep #slink {
        background: #44CF6C;
        border-radius: 10px;
        color: white;
        padding: 10px 70px;
    }

    .deep li a {
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        line-height: 30px;
    }

    .deep li {
        list-style: none;
    }

    .deep li a:hover {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    .icons i {
        font-size: 26px;
        height: 50px;
        width: 50px;
        padding: 10px 20px;
        color: white;
    }

    .icons i.fa.fa-twitter:hover {
        color: #00aced;
    }

    .icons i.fa.fa-facebook:hover {
        color: #3b5598;
    }

    .icons i.fa.fa-instagram:hover {
        color: #ed3833;
    }

    /* Style for Footer Ends */
    /* Body Style */

    .banner {
        background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570915217/startng/Rectangle_7_ak5zc2.png');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .loren-ipsum {
        background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570916337/startng/Rectangle_10_pwiqsf.png');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .priviledge {
        background-color: #FCFCFC;
    }

    .started {
        background-color: #FCFCFC;
    }

    .global-reach {
        background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570920182/startng/Rectangle_57_xdcvbs.png');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Body Style Ends */
</style>
@endsection

@section('content')

    <div class="container-fluid banner pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center pt-5 pb-5 mb-5">
            <p class="pb-5 mb-5" style="color: #3A0842;">A platform for learning programming <br> where anyone, anywhere
                in the world <br> can join and become
                <br> a better programmer
            </p>
        </div>
    </div>

    <div class="container-fluid pt-5 mt-5 mb-5 pb-5">
        <div class="row align-items-center">
            <div class="col-md-6 pb-5">
                <h4 class="pl-5" style="color: #7F5A83;">Courses</h4>
                <p class="pl-5">Lorem ipsum was going to church and she forgot to <br> ferdsdscsd sdsdnd dffdss wesa
                    dsea wxli sde zdxd asw <br> fdesd fdvdfvddscd sdd.</p>
                <ul class="pl-5 ml-3" style="color: #44CF6C;">
                    <li>100% Online</li>
                    <li>Flexible Online Learning</li>
                    <li>Earn a Course Certificate</li>
                </ul>
                <a class="btn btn-success ml-5 pl-5 pr-5" href="{{route('register')}}">Start Learning</a>
            </div>
            <div class="col-md-6">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570915745/startng/Rectangle_9_w0iucz.png"
                    class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid loren-ipsum pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <p style="color: #fff;"> Lorem ipsum was going to church and she forgot to ferd <br> nd dffdss wesa dsea
                wxli sde zdxd asw df sds dcdsc <br> dfvdfvdf csd dscsdc dvsdd sdvsdv vfv vfv sdcd fvfv dede <br> ws a as
                ff g ss ddcdd fr es waa dde saw asz cde ers ffggt <br> sdawd dfdv ddv dssdsx xsccdvdvf ss </p>
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="row">
                <div class="col-6">
                    <a href="courses.html" class="btn btn-success pr-5 pl-5">Free Courses</a>
                </div>
                <div class="col-6">
                    <a href="courses.html" class="btn btn-success pr-5 pl-5">Paid Courses</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570921068/startng/Group_257_kibawi.png"
            class="img-fluid">
    </div>

    <div class="container-fluid priviledge pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <p style="color: #3A0842;">On Start.ng, you are privileged to</p>
        </div>
        <div class="row mt-5 pt-3">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_412_furoek.png"
                            class="img-fluid ml-4 pl-5">
                    </div>
                    <div class="col-md-8">
                        <p style="color: #3A0842">Learn from the Best Teachers</p>
                        <p>Lorem ipsum was going to church and she forgot to ferdsdscsd sdsdnd dffdss gg dzxf fgg.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_414_pycdu8.png"
                            class="img-fluid ml-4 pl-5">
                    </div>
                    <div class="col-md-8">
                        <p style="color: #3A0842">Join Online Developer Community</p>
                        <p>Lorem ipsum was going to church and she forgot to ferdsdscsd sdsdnd dffdss gg dzxf fgg.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-3">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_412_furoek.png"
                            class="img-fluid ml-4 pl-5">
                    </div>
                    <div class="col-md-8">
                        <p style="color: #3A0842">Get Academic and Technical Support</p>
                        <p>Lorem ipsum was going to church and she forgot to ferdsdscsd sdsdnd dffdss gg dzxf fgg.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_414_pycdu8.png"
                            class="img-fluid ml-4 pl-5">
                    </div>
                    <div class="col-md-8">
                        <p style="color: #3A0842">Earn a Certifcate</p>
                        <p>Lorem ipsum was going to church and she forgot to ferdsdscsd sdsdnd dffdss gg dzxf fgg.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <p style="color: #3A0842;">Hi</p>
            <p style="color: #3A0842;">Do you know you can Enrol for</p>
            <p style="color: #3A0842; font-weight: bold;">FREE COMPLETE BEGINNER SOFTWARE DEVELOPMENT TRAINING</p>
            <a href="{{route('register')}}" class="btn btn-success pl-5 pr-5">Start Learning</a>
        </div>
    </div>

    <div class="container-fluid started">
        <div class="row align-items-center">
            <div class="col-md-6 pb-2">
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570919824/startng/Group_360_s7w45n.png">
            </div>
            <div class="col-md-6 text-center pb-2">
                <h4 style="color: #7F5A83; font-weight: bold;">How It All Started</h4>
                <p>Start.ng was going to church and she forgot to ferdsdscsd <br> sdsdnd dffdss wesa dsea wxli sde zdxd
                    asw fdesd <br> fdvdfvddscd sdd fvvdfvdf sds dcdsc dfvdfvdf vscscsd <br> dscsdc dvsdvsdvsdsvsdvsdsd
                    sdvsdv vfv vfv sdcd fvfv dede <br> ws a as ff g ss ddcdd fr es waa dde saw asz cde ers ffggt <br>
                    sdawd dfdv ddv dssdsx xsccdvdvf ss day that a woman <br> goes to church to meet with Mick Jagger</p>
            </div>
        </div>
    </div>

    <div class="container-fluid global-reach pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center pt-5">
            <h4 class="pb-3">Our Global Reach</h4>
            <p class="pb-5">Start.ng is the leading online learning platform for programming courses nationwide and
                across Africa and the world. Our goal is to eradicate illetracy across Africa, equipping each students
                with knowledge and character needed to excel anywhere
                in the world.</p>
            <p class="pb-3">Most Sought after Programming Skills </p>
            <p class="pb-3">Experienced Qualified Teachers</p>
            <p class="pb-3">Access to the Largest Online Developer Community</p>
            <a href="{{route('curriculum')}}" class="btn btn-secondary pl-5 pr-5 mb-3"
                style="background-color: #3A0842; border: thin solid #3A0842; cursor: pointer;">Explore Start.ng</a>
        </div>
    </div>
@endsection
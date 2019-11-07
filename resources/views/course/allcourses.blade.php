<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/modifiedstyles.css')}}">
    <title>Courses</title>

    <style>
        body {
            font-family: Nunito;
        }
        
        .body-banner {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961662/startng/Group_420_naoymq.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>

<body>
  @include('inc.new_nav')

    <div class="container-fluid pt-5 pb-5 body-banner">
        <div class="col-md-12 mt-5 pt-5">
            <h4 class="text-center font-weight-bold mt-5 pt-5" style="color: #fff;">Our Courses</h4>
            <p class="text-center pb-3" style="color: #fff;">We currently offer courses for various skills level, taught by
                <br> seasoned experts with a curriculum that helps improve your skills <br> from beginner level to world class
            </p>
        </div>
    </div>


    <div class="container pt-5 pb-5">

        @php $counter=3 @endphp

        @foreach($courses as $item)
            @if($counter%2==0)

                <div class="row align-items-center mt-3">
                    <div class="col-md-6 mt-5">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_414_l9x17w.png"
                             class="img-fluid">
                    </div>
                    <div class="col-md-6 mt-3">
                        <h4 class="font-weight-bold pb-3"> {{$item->name}}</h4>
                        <p class="pb-2">{{$item->description}}</p>
                        <div class="clearfix">
                            <div class="float-left">
                                <a class="btn btn-success pt-1 pb-1" href="{{route('course.show', $item->id)}}">More
                                    Details</a>
                            </div>
                            <div class="float-right">
                                <a href="" style="color: #000;">Beginner</a>
                                <a class="btn btn-success pt-1 pb-1"
                                   style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                                <a class="btn btn-success pt-1 pb-1"
                                   style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endif

            @if($counter%2!=0)
                <div class="row align-items-center mt-4">
                    <div class="col-md-6 mt-5">
                        <h4 class="font-weight-bold pb-3 mt-5">{{$item->name}}</h4>
                        <p class="pb-2">{{$item->description}}</p>
                        <div class="clearfix">
                            <div class="float-left">
                                <a class="btn btn-success pt-1 pb-1" href="{{route('course.show', $item->id)}}">More
                                    Details</a>
                            </div>
                            <div class="float-right">
                                <a href="" style="color: #000;">Beginner</a>
                                <a class="btn btn-success pt-1 pb-1"
                                   style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                                <a class="btn btn-success pt-1 pb-1"
                                   style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_415_m3n0cq.png"
                             class="img-fluid">
                    </div>

                </div>
            @endif


            @php $counter = $counter + 1; @endphp

        @endforeach



    </div>

    <div class="container-fluid phones" style="background-color: #2A2B2A;">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-3 text-white" style="font-size: 120%;">
                    <h4>Benefits</h4>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Full time Mentorship</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Expert Instructors</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Real Time Collaboration</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Build Real Time Products</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Learn up-to-date remote tools</li>
                    <li style="list-style-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572644348/startng/Vector-2_xigbuh.png');">
                        Offline Meet-ups</li>

                    <a href="" class="btn btn-custom mt-3 pl-5 pr-5">Start Learning</a>
                </div>
            </div>
            <div class="col-6">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572635161/startng/Group_227_fzkkii.png" class="img-fluid w-75" style="transform: scaleY(1.3); height: 70vh;">
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="col-md-8 offset-md-0 col-lg-8 offset-lg-0">
            <h4 class="font-weight-bold">Subscribe to our Newsletter</h4>
            <p>Stay Updated with our latest news, discount and promotions</p>
            <form class="form-inline pb-5">
                <input type="email" class="form-control col-md-8" placeholder="Email Address"><button type="submit" class="btn btn-custom pl-5 pr-5">Subscribe</button>
            </form>
        </div>
    </div>


    <!-- Footer -->
  @include('inc.new_footer')
    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
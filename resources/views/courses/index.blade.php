@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-5 pb-5 body-banner">
        <div class="col-md-12 mt-5 pt-5">
            <h4 class="text-center font-weight-bold mt-5 pt-5" style="color: #fff;">Our Courses</h4>
            <p class="text-center pb-3" style="color: #fff;">We currently offer courses for various skills level, taught by
                <br> seasoned experts with a curriculum that helps improve your skills <br> from beginner level to world class
            </p>
        </div>
    </div>

    <div class="container pt-5 pb-5">
        @if(count($courses) > 0)
        <div class="row align-items-center">
            @foreach($courses as $course)
            <div class="col-md-6">
                <img src="{{$course->image}}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h4 class="font-weight-bold pb-3">{{$course->title}}</h4>
                <p class="pb-2">{{$course->description}}</p>
                <div class="clearfix">
                    <div class="float-left">
                        <a class="btn btn-success pt-1 pb-1" href="complete.html" style="background-color:#44CF6C; color: #fff; border-color: #44CF6C;">More
                            Details</a>
                    </div>
                    <div class="float-right">
                        <a href="" style="color: #000;">Beginner</a>
                        <a class="btn btn-success pt-1 pb-1" style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                        <a class="btn btn-success pt-1 pb-1" style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
            <p>No course found</p>
        @endif
    </div>
    <div class="container-fluid">
        <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961661/startng/Group_419_c7p8rv.png">
        <div class="col-md-8 offset-md-1">
            <h4 class="font-weight-bold">Subscribe to our Newsletter</h4>
            <p>Stay Updated with our latest news, discount and promotions</p>
            <form class="form-inline pb-5">
                <input type="email" class="form-control col-md-8" placeholder="Email Address"><button type="submit" class="btn btn-success">Subsribe</button>
            </form>
        </div>
    </div>
@endsection
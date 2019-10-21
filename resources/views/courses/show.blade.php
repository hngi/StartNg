@extends('layouts.app')

@section('content')
    
<div class="container-fluid pt-5 pb-5" style="background-color: #F0F2F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="font-weight-bold">{{$course->price}} for {{ $course->duration }} months full training </p>
                    <h4 class="font-weight-bold pb-3">{{ $course->title }}</h4>
                    <p class="pb-2">{{ $course->description }}</p>

                    <div class="clearfix">
                        <div class="float-left">
                            <a class="btn btn-success pt-1 pb-1" href="register.html" style="background-color:#44CF6C; color: #fff; border-color: #44CF6C;">Start
                                Learning</a>
                        </div>
                        <div class="float-right">
                            <a href="" style="color: #000;">Beginner</a>
                            <a class="btn btn-success pt-1 pb-1" style="background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                            <a class="btn btn-success pt-1 pb-1" style="background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                        </div>
                    </div>
                    <img class="img-fluid mt-2" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570965296/startng/Group_422_gdcqn9.png">
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570964974/startng/Group_369_ubc2ec.png">
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5 pt-5">
        <img class="img-fluid mt-5 mb-5" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570965540/startng/Group_423_s3a4ez.png">
    </div>
    <div class="contaner-fluid">
        <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570965650/startng/Group_372_ywrzu3.png">
    </div>

    <div class="container">

        <div class="course-acc" style="background:rgba(129, 22, 124, 0.05);">
            <div class="container course-drop">
                <p class="text-center exp-tt">No Experience Required. Knowledge on how to use the computer. Use windows or MAC OSX
                </p>
                <h3 class="text-center panel-tt">Course Curriculum </h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Introduction
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                        </a>


                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Here you go with the content of accordion's heading 3. You may place textual information, images etc. here.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- panel-group -->

                    </div>

                    <div class="col-sm-6">
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> User Research
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Ideation
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Wireframes
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseEleven" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- panel-group -->

                    </div>

                </div>
            </div>



            <div class="col-md-10 offset-md-1 pb-5 pt-5">
                <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570965739/startng/Group_424_eokznw.png">
            </div>
            <div class="col-md-10 offset-md-1 pt-5 pb-5">
                <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570965845/startng/Testimonials_skqwbu.png">
            </div>

            <div class="container-fluid pt-5 pb-5" style="background-color: rgba(42, 43, 42, 0.05);">
                <div class="container pt-5 pb-5">
                    <div class="row align-items-center">
                        <div class="col-md-8 pb-5">
                            <h4 style="font-weight: bold; font-size: 40px;">Subscribe to our Newsletter</h4>
                            <p style="font-size: 20px;">Stay Updated with our latest news, discount and promotions
                            </p>
                            <form class="form-inline">
                                <input type="text" class="form-control col-md-8" id="email">
                                <button type="submit" class="btn btn-primary ml-1 pl-5 pr-5" style="background-color: #44CF6C; border-color: #44CF6C;">Subscribe</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570931071/startng/newsletter_1_h3frhq.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container-fluid banner">
        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570908542/startng/Group_411_d0xdb8.png" class="img-fluid" height="100">
    </div>
    <div class="container-fluid search pt-5 pb-5">
        <div class="input-group col-md-10 offset-md-1 pt-3 pb-3">
            <input type="text" class="form-control pt-4 pb-4" placeholder="Find answers now!" style="border: thin solid #fff; border-right-color: #44CF6C; border-radius: 4px;">
            <div class="input-group-append">
                <button class="btn btn-secondary pl-4 pr-4" type="button" style="background-color: #fff; color: #44CF6C; border-color: #fff; border-left-color: #44CF6C;">
                    Search our FAQ Page
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <form>
            <div class="col-md-10 offset-md-1 pt-5 pb-5">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">First Name</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Last Name</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Email Address</label>
                            <input type="email" class="form-control" id="usr">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Phone Number</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="comment" class="pb-2">Write Your Message</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3 text-center mb-5">
                    <p class="pb-3">By filling out this form and clicking submit, <br> you acknowledge our <a href="" style="color: #44CF6C">privacy policy</a></p>
                    <button class="btn btn-success pl-5 pr-5">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid support pt-5 pb-5 mb-0">

        <h1 class="pt-5 mt-5 pl-5 pr-5" style="font-family: Nunito; font-style: normal; font-weight: bold; font-size: 50px;">
            CUSTOMER SUPPORT</h1>
        <p class="pt-3 pb-3 pl-5 pr-5" style="font-family: Open Sans; font-style: normal; font-weight: bold; font-size: 15px; letter-spacing: 0.655606px;">
            Call +23480500000 or send a mail to support@start.ng</p>

    </div>

@endsection
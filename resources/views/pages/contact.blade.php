@extends('layouts.app')

@section('style')
    <style>
        body {
            font-family: Nunito;
        }
        /* Body Style */
        .navbar-custom li a {
            color: #000;
        }
        a {
            text-decoration: none;
        }
        .search {
            background-color: #44CF6C;
        }
        
        .support {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570910454/startng/Rectangle_66_iauqka.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .contact {
            width: 1200px;
            margin-left: 25px;
        }
        
        @media screen and (max-width: 1024px) {
            .contact {
                width: 1200px;
                margin-left: 10px;
            }
        }
        
        @media screen and (max-width: 768px) {
            .contact {
                width: 1200px;
                margin-left: 10px;
            }
        }
        
        @media screen and (max-width: 425px) {
            .contact {
                width: 1200px;
                margin-left: -21px;
            }
        }
        
        @media screen and (max-width: 375px) {
            .contact {
                width: 1200px;
                margin-left: -15px;
            }
        }
        /* Body Style Ends*/
    </style>
</head>
@endsection

@section('content')
        <div class="container-fluid banner">
        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570908542/startng/Group_411_d0xdb8.png" class="img-fluid contact" height="100">
    </div>

    <div class="container-fluid mt-5">
    <div class="row">
  <div class="col-sm-6">
   
      <div class="card-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15856.334481934015!2d3.3627260269792587!3d6.511099574643041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.5137963!2d3.3691252!4m5!1s0x103b8c58aa4e0931%3A0x9ddabc4518c15d14!2sHotels.ng%2C%203%20Birrel%20Ave%2C%20Yaba%2C%20Lagos!3m2!1d6.509180799999999!2d3.3795045999999997!5e0!3m2!1sen!2sng!4v1571971640480!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>

  <div class="col-sm-6">
         <div class="card-body">
    @include('inc.messages')
        <form method="post" action="{{route('contact.store')}}">
            @csrf
            <div class="col-md-10 offset-md-1 ">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-1">First Name</label>
                            <input type="text" name="fname" pattern = "[A-Za-z]{1,32}" title = "Please input your First Name" class="form-control" id="Fname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-1">Last Name</label>
                            <input type="text" name="lname" pattern = "[A-Za-z]{1,32}" title = "Please input your Last Name" class="form-control" id="Lname" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-1">Email Address</label>
                            <input type="email"  name="email" class="form-control" id="Eaddr" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-1">Phone Number</label>
                            <input type="text" name="phone" pattern = "^[0-9\)\(+-]+$" title = "Please input a correct phone number" class="form-control" id="Pnum" required>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="comment" class="pb-1">Write Your Message</label>
                            <textarea name="message" class="form-control" rows="5" id="comment" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center ">
                    <p>By filling out this form and clicking submit, <br> you acknowledge our <a href="" style="color: #44CF6C">privacy policy</a></p>
                    <button type="submit" class="btn btn-custom pl-3 pr-3">Submit</button>
                </div>
            </div>
        </form>
   </div>
    </div>
  </div>
</div>

    <div class="container-fluid support pt-5 pb-5 mb-0" style="padding-left: 15px;">

        <h1 class="pt-5 mt-5 pl-3 pl-sm-5 pr-5 ml-md-5" style="font-family: Nunito; font-style: normal; font-weight: bold; font-size: 50px; ">
            CUSTOMER SUPPORT</h1>
        <p class="pt-3 pb-3 pl-3 pl-sm-5 pr-5 ml-md-5" style="font-family: Open Sans; font-style: normal; font-weight: bold; font-size: 15px; letter-spacing: 0.655606px;">
            Call +2348050000000 or send a mail to support@start.ng</p>

    </div>
@endsection
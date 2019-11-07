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
    <title>Contact Us</title>

    <style>
        body {
            font-family: Nunito;
        }
        /* Body Style */
        
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

<body>
    @include('inc.new_nav')

    <div class="container-fluid banner">
        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570908542/startng/Group_411_d0xdb8.png" class="img-fluid contact" height="100">
    </div>
    <div class="container-fluid search pt-5 pb-5">
        <div class="input-group col-12 col-md-10 mx-auto pt-3 pb-3">
            <input type="text" class="form-control pt-4 pb-4" placeholder="Find answers now!" style="border: thin solid #fff; border-right-color: #44CF6C; border-radius: 4px;">
            <div class="input-group-append">
                <button class="btn btn-secondary w-100 px-md-5" type="button" style="background-color: #fff; color: #44CF6C; border-color: #fff; border-left-color: #44CF6C;">
                    Search FAQ
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <form method="post" action="{{route('contact.store')}}">
            @csrf
            <div class="col-md-10 offset-md-1 pt-5 pb-5">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">First Name</label>
                            <input type="text" pattern="[A-Za-z]{1,32}" title="Please input your First Name" class="form-control" id="Fname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Last Name</label>
                            <input type="text" pattern="[A-Za-z]{1,32}" title="Please input your Last Name" class="form-control" id="Lname" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Email Address</label>
                            <input type="email" class="form-control" id="Eaddr" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Phone Number</label>
                            <input type="text" pattern="^[0-9\)\(+-]+$" title="Please input a correct phone number" class="form-control" id="Pnum" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="comment" class="pb-2">Write Your Message</label>
                            <textarea class="form-control" rows="5" id="comment" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3 text-center mb-5">
                    <p class="pb-3">By filling out this form and clicking submit, <br> you acknowledge our <a href="" style="color: #44CF6C">privacy policy</a></p>
                    <button type="submit"  class="btn btn-success pl-5 pr-5">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid support pt-5 pb-5 mb-0" style="padding-left: 15px;">

        <h1 class="pt-5 mt-5 pl-3 pl-sm-5 pr-5 ml-md-5" style="font-family: Nunito; font-style: normal; font-weight: bold; font-size: 50px; ">
            CUSTOMER SUPPORT</h1>
        <p class="pt-3 pb-3 pl-3 pl-sm-5 pr-5 ml-md-5" style="font-family: Open Sans; font-style: normal; font-weight: bold; font-size: 15px; letter-spacing: 0.655606px;">
            Call +23480500000 or send a mail to support@start.ng</p>

    </div>

    <!-- Footer -->
   @include('inc.new_footer')
    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
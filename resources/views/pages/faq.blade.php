@extends('layouts.app')

@section('style')

<style type="text/css">
        /* Style for Navbar Starts */
        
         :root {
            --primary-color: #3A0842;
            --secondary-color: #44CF6C;
            --default-color: #7f7979;
            --dark-color: #2A2B2A;
            --light-color: #D3D5D4;
        }
        
        .navbar-custom li a {
            color: #000;
        }
        
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        
        .custom-toggler.navbar-toggler {
            border-color: #000;
        }
        /* Style for Navbar Ends */
        /* Background style starts */
        
        .bg-primary {
            background-color: var(--primary-color) !important;
        }
        
        .bg-secondary {
            background-color: var(--secondary-color) !important;
        }
        /* Background style starts */
        /* Text styles starts */
        
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .text-secondary {
            color: var(--secondary-color) !important;
        }
        /* Text styles ends */
        /* Button styles starts */
        
        .btn-primary {
            background-color: var(--primary-color);
            color: #fff;
            border: thin solid var(--primary-color);
            transition: 0.25s;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-color);
            opacity: 0.85;
        }
        
        .btn-secondary {
            background-color: var(--secondary-color);
            color: #fff;
            border: thin solid var(--secondary-color);
            transition: 0.25s;
        }
        
        .btn-secondary:hover {
            background-color: rgb(2, 20, 12);
            opacity: 0.85;
            border: thin solid rgb(2, 20, 12);
        }
        /* Button styles end */
        /*	collapsible accordion starts */
        
        .myaccordion {
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 750px;
        }
        
        .myaccordion .card,
        .myaccordion .card:last-child .card-header {
            border: none;
        }
        
        .myaccordion .card-header {
            border-bottom-color: #EDEFF0;
            background: transparent;
        }
        
        .myaccordion .fa-stack {
            font-size: 14px;
        }
        
        .myaccordion .btn {
            width: 100%;
            font-weight: bold;
            color: var(--primary-color);
            padding: 0;
        }
        
        .myaccordion .btn-link:hover,
        .myaccordion .btn-link:focus {
            text-decoration: none;
        }
        
        .myaccordion li+li {
            margin-top: 10px;
        }
        /*	collapsible accordion ends	*/
        
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
        /*main tag style starts here */
        
        .jumbotron {
            background-color: #2A2B2A;
        }
        /* Style for Footer Starts */
        
        .deep {
            background: var(--primary-color);
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
    </style>
@endsection

@section('content')
    <main>
        <!--  -->
        <section class="jumbotron rounded-0 py-4 mb-0">
            <div class="container">
                <div class="row">
                    <div class="offset-md-2 col-md-8">
                        <div class="text-center text-white py-5">
                            <h2 class="jumbotron-heading ">How can we help you?</h2>
                            <form class="my-4">
                                <div class="input-group mt-3">
                                    <input type="text" name="Search" class="form-control pt-2 pb-2 rounded-0" placeholder="Search" required aria-label="Search question" aria-describedby="button-addon2" style="border: thin solid #fff;">
                                    <div class="input-group-append">
                                        <button class="btn btn-light rounded-0" type="button" id="button-addon2"><i
												class="fas fa-search"></i> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3 class="">FAQ</h3>
                            <p class="lead">Here are some of the most frequently asked questions on StartNG</p>
                        </div>
                    </div>
                    <div class="col-md-12 text-black">
                        <div class="container">
                            <div id="accordion" class="myaccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												Do you offer certification or degrees?
												<span class="fa-stack fa-sm">
													<i class="fas fa-circle fa-stack-2x"></i>
													<i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
												</span>
											</button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Do you offer student discount?
												<span class="fa-stack fa-2x">
													<i class="fas fa-circle fa-stack-2x"></i>
													<i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
												</span>
											</button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Are there free courses?
												<span class="fa-stack fa-2x">
													<i class="fas fa-circle fa-stack-2x"></i>
													<i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
												</span>
											</button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												Do you offer student discount?
												<span class="fa-stack fa-2x">
													<i class="fas fa-circle fa-stack-2x"></i>
													<i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
												</span>
											</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												Are there free courses?
												<span class="fa-stack fa-2x">
													<i class="fas fa-circle fa-stack-2x"></i>
													<i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
												</span>
											</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary py-5">
            <div class="container">
                <div class="text-center my-4">
                    <h4 class="text-dark font-weight-bold">Didn’t find an answer to your question?</h4>
                    <p class="">Write us a message and describe your problem!</p>
                    <a href="{{route('contact')}}" class="btn btn-primary px-5">Contact</a>
                </div>
            </div>
        </section>
    </main>
@endsection
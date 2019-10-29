@extends('layouts.app')

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
                                            class="fas fa-search"></i> Search</button>
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
                <a href="contactus.html" class="btn btn-primary px-5">Contact</a>
            </div>
        </div>
    </section>
</main>

@endsection
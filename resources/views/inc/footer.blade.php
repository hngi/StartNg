    <!-- Footer -->
    <footer>
        <div class="container-fluid footer-top col-lg-12">
            <div class="container col-md-12 p-5">
                <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572346080/startng/Logo_2_ee1iqv.png">
                <div class="row">
                @if(Auth::guest())
                    <div class="col-md-4 mt-4">

                        <h4 class="">Ready to take the leap?</h4>
                        <a class="btn btn-success mt-3 pl-5 pr-5" href="{{route('register')}}">Start</a>
                    </div>
                @else
                     <div class="col-md-4 mt-4">

                         <a class="btn btn-success mt-3 pl-5 pr-5" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                         </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                @endif
                    <div class="col-md-2 mt-4">

                        <li><a class="footer-link" href="{{route('about')}}">About Us</a></li>
                        <li><a class="footer-link" href="{{route('courses.index')}}">Our Course</a></li>
                        <li><a class="footer-link" href="{{route('hire')}}">Hire a Grad</a></li>

                    </div>
                    <div class="col-md-2 mt-4">

                        <li>
                            <a class="footer-link" href="{{route('curriculum')}}">Curriculum</a>
                        </li>
                        <li>
                            <a class="footer-link" href="">Blog</a>
                        </li>

                    </div>
                    <div class="col-md-2 mt-4">
                        <li>
                            <a class="footer-link" href="{{route('find-course')}}">Find a Course</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{route('faq')}}">FAQ</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{route('contact')}}">Contact Us</a>
                        </li>
                    </div>
                    <div class="col-md-2 mt-4">
                        <li>
                            <a class="footer-link" href="{{route('terms')}}">Terms of Service</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{route('privacy')}}">Privacy Policy</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-social col-lg-12">
            <div class="container p-3">
                <div class="clearfix">
                    <div class="float-left">

                    </div>
                    <div class="float-right">
                        <a href="https://twitter.com/hotelsng" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-twitter"></i></a>
                        <!-- <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-facebook"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- End of Footer -->
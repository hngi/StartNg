<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
    <div class="container col-lg-12 pl-5 pr-3">
        <a href="/" class="navbar-brand"><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png"></a>
        <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto pt-2">
                <li class="nav-item pr-4">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="{{route('course.index')}}">Courses</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="{{route('hire')}}">Hire a Grad</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
                @if(Auth::guest())
                    <li class="nav-item mr-4">
                        <a class="btn btn-custom nav-link pl-5 pr-5" href="{{route('register')}}" style="color: #fff;">Register</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="btn btn-custom nav-link pl-5 pr-5" href="{{route('login')}}" style="color: #fff;">Login</a>
                    </li>
                @else
                    <li class="nav-item mr-4">
                        <a class="btn btn-custom nav-link pl-5 pr-5" href="#" style="color: #fff;">Dashboard</a>
                    </li>
                    <a class="btn btn-custom nav-link pl-5 pr-5" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif
            </ul>
        </div>
    </div>
</nav>
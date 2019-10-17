<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
        <div class="container">
            <a href="/" class="navbar-brand"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png" class="img-fluid" alt="logo" width="150px"></a>
            <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Left Side Of Navbar -->
            <div class="navbar-collapse collapse" id="navbar9">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="/courses">Courses</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="/hireGrad">Hire A Grad</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="/contactus">Contact Us</a>
                    </li>
                     <!-- Authentication Links -->
                     @if (Auth::guest())
                    <li class="nav-item mr-5">
                        <a class="btn btn-success nav-link px-5" href="{{ route('register') }}" style="color: #fff;">Start
                            Learning</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/dashboard">Dashboard</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
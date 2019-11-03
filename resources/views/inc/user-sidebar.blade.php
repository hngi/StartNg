<div class="sidebar" data-color="white" data-active-color="danger">

            <div class="logo">
                <a href="{{route('index')}}">

                    <img class="img-fluid w-50 mt-3 mb-1" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png">

                </a>

            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{route('dashboard')}}">
                            <i class="fa fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.profile')}}">
                            <i class="fa fa-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.index')}}">
                            <i class="fa fa-book"></i>
                            <p>View Courses</p>
                        </a>
                    </li>
                    <li class="{{ (request()->is('logout')) ? 'active' : '' }}">
                        <a href="{{route('logout')}}"  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();" >
                            <i class="fa fa-users"></i>
                            <p>Logout</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
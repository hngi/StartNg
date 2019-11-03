<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
    <a href="{{route('index')}}">

            <img class="img-fluid w-50 mt-3 mb-1" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png">

        </a>

    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ (request()->is('tutor/dashboard')) ? 'active' : '' }}">
                <a href="{{route('tutor.dashboard')}}">
                    <i class="fa fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ (request()->is('tutor/profile')) ? 'active' : '' }}">
                <a href="{{route('tutor.profile')}}">
                    <i class="fa fa-user"></i>
                    <p>My Profile</p>
                </a>
            </li>
            <li class="{{ (request()->is('tutors/view-courses')) ? 'active' : '' }}">
                <a href="{{route('tutor.view-courses')}}">
                    <i class="fa fa-book"></i>
                    <p>My Courses</p>
                </a>
            </li>
              <li class="{{ (request()->is('admins/view-admins')) ? 'active' : '' }}">
                <a href="{{route('admin.view-admins')}}">
                    <i class="fa fa-users"></i>
                    <p>Reviews</p>
                </a>
            </li>
            <li class="{{ (request()->is('tutors/assignment')) ? 'active' : '' }}">
                <a href="{{route('tutor.assignment')}}">
                    <i class="fa fa-book"></i>
                    <p>Assignments</p>
                </a>
            </li>
            <li class="{{ (request()->is('tutors/upload-resource')) ? 'active' : '' }}">
                <a href="{{route('tutor.upload-resource')}}">
                    <i class="fa fa-file"></i>
                    <p>Resourses</p>
                </a>
            </li>
            <li class="{{ (request()->is('tutors/view-students')) ? 'active' : '' }}">
                <a href="{{route('tutor.view-students')}}">
                    <i class="fa fa-users"></i>
                    <p>View All My Students</p>
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
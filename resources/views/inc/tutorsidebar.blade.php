<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
    <a href="{{route('index')}}">

            <img class="img-fluid w-50 mt-3 mb-1" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png">

        </a>

    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a href="{{route('dashboard')}}">
                    <i class="fa fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ (request()->is(route('tutor.edit', auth()->user()->id))) ? 'active' : '' }}">
                <a href="{{route('tutor.edit', auth()->user()->id)}}">
                    <i class="fa fa-user"></i>
                    <p>My Profile</p>
                </a>
            </li>
            <li class="{{ (request()->is('course')) ? 'active' : '' }}">
                <a href="{{route('course.index')}}">
                    <i class="fa fa-book"></i>
                    <p>View Courses</p>
                </a>
            </li>
            <li class="{{ (request()->is('user')) ? 'active' : '' }}">
                <a href="{{route('user.index')}}">
                    <i class="fa fa-users"></i>
                    <p>View Students</p>
                </a>
            </li>
            <li class="{{ (request()->is('course-content/create')) ? 'active' : '' }}">
                <a href="{{route('course-content.create')}}">
                    <i class="fa fa-book"></i>
                    <p>Create Course Content</p>
                </a>
            </li>
            <li class="{{ (request()->is('assignment')) ? 'active' : '' }}">
                <a href="{{route('assignment.create')}}">
                    <i class="fa fa-book"></i>
                    <p>Create Assignment</p>
                </a>
            </li>
            <li class="{{ (request()->is('files')) ? 'active' : '' }}">
                <a href="{{route('files.index')}}">
                    <i class="fa fa-file"></i>
                    <p>Upload Resource</p>
                </a>
            </li>
        </ul>
    </div>
    
</div>
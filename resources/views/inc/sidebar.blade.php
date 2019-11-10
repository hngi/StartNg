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
            <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
                <a href="{{route('admin.index')}}">
                    <i class="fa fa-users"></i>
                    <p>View All Admins</p>
                </a>
            </li>
            <li class="{{ (request()->is('course')) ? 'active' : '' }}">
                <a href="{{route('course.index')}}">
                    <i class="fa fa-book"></i>
                    <p>View All Courses</p>
                </a>
            </li>
            <li class="{{ (request()->is('tutor')) ? 'active' : '' }}">
                <a href="{{route('tutor.index')}}">
                    <i class="fa fa-users"></i>
                    <p>View All Tutors</p>
                </a>
            </li>
            <li class="{{ (request()->is('user')) ? 'active' : '' }}">
                <a href="{{route('user.index')}}">
                    <i class="fa fa-users"></i>
                    <p>View All Students</p>
                </a>
            </li>
            <li class="{{ (request()->is('admin/create')) ? 'active' : '' }}">
                <a href="{{route('admin.create')}}">
                    <i class="fa fa-user"></i>
                    <p>Create Admin</p>
                </a>
            </li>
            <li class="{{ (request()->is('schedule/create')) ? 'active' : '' }}">
                <a href="{{route('schedule.create')}}">
                    <i class="fa fa-book"></i>
                    <p>Create Schedule</p>
                </a>
            </li>
            <li class="{{ (request()->is('course/create')) ? 'active' : '' }}">
                <a href="{{route('course.create')}}">
                    <i class="fa fa-book"></i>
                    <p>Create Course</p>
                </a>
            </li>
            <li class="{{ (request()->is('course-content/create')) ? 'active' : '' }}">
                <a href="{{route('course-content.create')}}">
                    <i class="fa fa-book"></i>
                    <p>Create Course Content</p>
                </a>
            </li>
            <li class="{{ (request()->is('files')) ? 'active' : '' }}">
                <a href="{{route('files.index')}}">
                    <i class="fa fa-file"></i>
                    <p>Upload Resource</p>
                </a>
            </li>

            <li class="{{ (request()->is('submission')) ? 'active' : '' }}">
                <a href="{{route('submission.index')}}">
                    <i class="fa fa-book"></i>
                    <p>View submissions</p>
                </a>
            </li>
            
            
        </ul>
    </div>
</div>

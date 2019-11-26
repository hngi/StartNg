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
                    <li class="{{ (request()->is(route('user.edit', auth()->user()->id))) ? 'active' : '' }}">
                        <a href="{{route('user.edit', auth()->user()->id)}}">
                            <i class="fa fa-user"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                    <li class="{{ (request()->is(route('tutor.edit', auth()->user()->id))) ? 'active' : '' }}">
                        <a href="{{route('course.mycourses')}}">
                            <i class="fa fa-book"></i>
                            <p>View My Courses</p>
                        </a>
                    </li>
                    <li class="{{ (request()->is('review/create')) ? 'active' : '' }}">
                        <a href="{{route('review.create')}}">
                            <i class="fa fa-book"></i>
                            <p>Review My Courses</p>
                        </a>
                    </li>
                    <li class="{{ (request()->is('course')) ? 'active' : '' }}">
                        <a href="{{route('course.index')}}">
                            <i class="fa fa-book"></i>
                            <p>View Courses</p>
                        </a>
                    </li>
                    <!--
                    <li class="{{ (request()->is('assignment')) ? 'active' : '' }}">
                        <a href="{{route('assignment.index')}}">
                            <i class="fa fa-book"></i>
                            <p>View Assignments</p>
                        </a>
                    </li>
                    -->
                    <li class="{{ (request()->is('submission/create')) ? 'active' : '' }}">
                        <a href="{{route('submission.create')}}">
                            <i class="fa fa-book"></i>
                            <p>Submissions</p>
                        </a>
                    </li>
                    <li class="{{ (request()->is('resource')) ? 'active' : '' }}">
                        <a href="{{route('resource.index')}}">
                            <i class="fa fa-file"></i>
                            <p>Resources</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
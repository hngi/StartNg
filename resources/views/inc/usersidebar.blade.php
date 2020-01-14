<!-- Vertical navbar -->
<div class="vertical-nav" id="sidebar" style="background-color: #3A0842;">
    <div class="py-4 px-3 mb-4">
        <a href="{{route('index')}}">
            <img alt="" class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571217844/startng/Logo_1_x4nvwt.png">
        </a>
    </div>

    <ul class="nav flex-column mb-0">
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link font-italic py-3 mb-1 {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <i class="fa fa-th-large mr-3 fa-fw"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('user.edit', auth()->user()->id)}}" class="nav-link font-italic py-3 mb-1 {{ (request()->is(route('user.edit', auth()->user()->id))) ? 'active' : '' }}">
                <i class="fa fa-address-card mr-3 fa-fw"></i> My Profile
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('course.mycourses')}}" class="nav-link font-italic py-3 mb-1 {{ (request()->is(route('tutor.edit', auth()->user()->id))) ? 'active' : '' }}">
                <i class="fa fa-cubes mr-3 fa-fw"></i> View My Courses
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('course.index')}}" class="nav-link font-italic py-3 mb-1 {{ (request()->is('course')) ? 'active' : '' }}">
                <i class="fa fa-picture-o mr-3 fa-fw"></i> View Courses
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('review.create')}}" class="nav-link font-italic py-3 mb-1 {{ (request()->is('review/create')) ? 'active' : '' }}">
                <i class="fa fa-picture-o mr-3 fa-fw"></i> Review My Courses
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('submission.create')}}" class="nav-link font-italic py-3 mb-1 {{ (request()->is('submission/create')) ? 'active' : '' }}">
                <i class="fa fa-picture-o mr-3 fa-fw"></i> Submit Assignment
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('resource.index')}}" class="nav-link font-italic py-3 mb-1 {{ (request()->is('resource')) ? 'active' : '' }}">
                <i class="fa fa-picture-o mr-3 fa-fw"></i> Resources
            </a>
        </li>
    </ul>
    
</div>
<!-- End vertical navbar -->
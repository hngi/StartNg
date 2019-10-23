<div class="border-right" id="sidebar-wrapper" style="background-color: #3A0842;">
    <div class="sidebar-heading"><a href="{{route('index')}}"><img class="img-fluid pt-4" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571217844/startng/Logo_1_x4nvwt.png">
    </div>
    <div class="list-group list-group-flush" style="background-color: #3A0842; color: #fff; text-transform: uppercase;">
    @if(Auth::user()->role==2)
        <a href="{{route('mentors')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Mentors</a>
        <a href="{{route('mentors.create')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Add Mentor</a>
    @endif
        <a href="{{route('users')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Users</a>
        <a href="{{route('course.create')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Add
            Courses</a>
        <a href="{{route('courses')}}" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">View Courses</a>

        <a class="list-group-item list-group-item-action pt-3 pb-3" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</div>
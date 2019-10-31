<div class="border-right" id="sidebar-wrapper" style="background-color: #3A0842;">
    <div class="sidebar-heading"><a href="{{route('index')}}"><img class="img-fluid pt-4" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571217844/startng/Logo_1_x4nvwt.png">
    </div>
    <div class="list-group list-group-flush" style="background-color: #3A0842; color: #fff; text-transform: uppercase;">
    @if(Auth::user()->role==2)
        <a href="#" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Admin</a>
        <a href=# class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Add Admin</a>
    @endif
        <a href="#" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Users</a>
        <a href="#" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">Add
            Courses</a>
        <a href="" class="list-group-item list-group-item-action pt-3 pb-3" style="background-color: #3A0842; color: #fff;">View Courses</a>

        <a class="list-group-item list-group-item-action pt-3 pb-3" href="#"
            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="#" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</div>
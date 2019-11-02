    <div class="container col-lg-12 pl-5 pr-3" style="margin-top:60px; ">
    @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </div><br />
        @endif
   
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@if(session('failure'))
    <div class="alert alert-danger">
        {{session('failure')}}
    </div>
@endif
    
    </div>
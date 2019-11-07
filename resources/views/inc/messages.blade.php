    <div class="container col-lg-8 pl-4 pr-3" style="margin-top:150px; ">
    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
         @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </div><br />
        @endif
   
@if(session('success'))
    <div class="alert alert-success alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button>
 <strong> {{session('success')}}</strong>
    </div>
@endif
@if(session('failure'))
    <div class="alert alert-danger">
        {{session('failure')}}
    </div>
@endif
    
    </div>
      
 
          
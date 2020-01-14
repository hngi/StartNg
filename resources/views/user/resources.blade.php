@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">DETAILS</h5>
        </div>
        <div class="card-body">
            <div class="card-header">
                    <h4 class="card-title">Resources</h4>
                </div>
                <div class="card-body">
                    @foreach($registered_courses as $registered_course)
                    @foreach($resources as $resource)
                        @if($resource->course_id == $registered_course->course_id)
                        <a href="/storage/resources/{{$resource->file}}" download>
                            Download {{$resource->file}}<br>
                        </a>
                        @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection       
            
    
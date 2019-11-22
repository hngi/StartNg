@extends('layouts.user-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">DETAILS</h5>
        </div>
        <div class="card-body">
            <div class="card-header">
                    <h4 class="card-title">Resources</h4>
                </div>
                <div class="card-body">
                    @foreach($resources as $resource)
                    <a href="/storage/resources/{{$resource->file}}" download>
                        Download {{$resource->file}}<br>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection       
            
    
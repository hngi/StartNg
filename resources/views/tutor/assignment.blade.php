@extends('layouts.tutor-dashboard')

@section('content')
<div class=" content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ALL ASSIGNMENT</h4>
                </div>
                <div class="card-body">
                    @foreach($courses as $course)
                    @foreach($assignments as $assignment)
                    @if($assignment->user_id == $course->id)
                    {{$assignment->title}}<br>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
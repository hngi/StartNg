@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
                <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">DETAILS</h5>
                        @foreach($users as $user)
                        @if($course->user_id == $user->id)
                        <h4 class="card-title">Tutor: {{$user->username}}</h4>
                        @endif
                        @endforeach
                        <h4 class="card-title">Number of Students: {{$number}}</h4>
                    </div>
                    <div class="card-body">
                        Reviews:
                        <ul>
                        @foreach($reviews as $review)     
                            <li>{{$review->comment}}</li>   
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
@endsection
            
    
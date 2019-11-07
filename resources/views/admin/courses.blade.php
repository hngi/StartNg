@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
                @foreach($courses as $course)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><a href="{{route('course.show', $course->id)}}">{{$course->title}}</a></h4>
                                @foreach($users as $user)
                                @if($course->tutor_id == $user->id)
                                <h4 class="card-title">Tutor: {{$user->username}}</h4>
                                @endif
                                @endforeach
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                            <th>
                                                Email Address
                                            </th>
                                            <th>
                                                Phone Number
                                            </th>
                                            <th class="text"> </th>
                                        </thead>
                                        @foreach($registered_courses as $registered_course)
                                        @if($registered_course->course_id == $course->id)
                                        <tbody>
                                        @foreach($users as $user)
                                            @if($user->id == $registered_course->user_id)
                                            <tr>
                                                <td>
                                                    {{$user->first_name}} {{$user->last_name}}
                                                </td>
                                                <td>
                                                    {{$user->username}}
                                                </td>
                                                <td>
                                                    {{$user->email}}
                                                </td>
                                                <td>
                                                    {{$user->phone}}
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        </tbody> 
                                        @endif
                                        @endforeach   
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{$courses->links()}}
            </div>
@endsection
            
        
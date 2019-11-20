@extends('layouts.tutor-dashboard')

@section('content')
<div class=" content">
    @foreach($courses as $course)
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('course.show', $course->id)}}">{{$course->title}}</a></h4>
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
                            @foreach($students as $student)
                                @if($student->id == $registered_course->user_id)
                                <tr>
                                    <td>
                                        {{$student->first_name}} {{$student->last_name}}
                                    </td>
                                    <td>
                                        {{$student->username}}
                                    </td>
                                    <td>
                                        {{$student->email}}
                                    </td>
                                    <td>
                                        {{$student->phone}}
                                    </td>
                                    <td class="text">
                                        <a href="{{route('user.show', $student->id)}}" class="btn btn-warning">VIEW DETAILS</a>
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
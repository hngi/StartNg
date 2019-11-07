@extends('layouts.user-dashboard')

@section('content')
<div class="content">
    <div class="row">
        @foreach($registered_courses as $registered_course)
        @foreach($courses as $course)
        @if($registered_course->course_id == $course->id)
        <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-code text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">{{$course->title}}</p>
                                <p class="card-title">{{$registered_course->progress}}%
                                    <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">

                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endforeach

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                    <h5 class="card-title">Assignments</h5>
                    <p class="card-category">Keep track of assignments given by your tutors</p>
                </div>
                <div class="card-body ">
                    <ul>
                    @foreach($registered_courses as $registered_course)
                    @foreach($assignments as $assignment)
                    @if($registered_course->course_id == $assignment->user_id)
                    @if($assignment->active)
                    <li>
                        <a href="{{route('assignment.show', $assignment->id)}}">{{$assignment->title}}</a> -
                            @foreach($courses as $course)
                            @if($assignment->user_id == $course->id)
                                {{$course->title}}
                            @endif
                            @endforeach
                    </li>
                    @endif
                    @endif
                    @endforeach
                    @endforeach
                    </ul>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Courses Registered</h5>
                    <p class="card-category">List of registered courses</p>
                    <ul>
                    @foreach($registered_courses as $registered_course)
                    @foreach($courses as $course)
                    @if($registered_course->course_id == $course->id)
                        <li>
                            {{$course->title}}
                        </li>
                    @endif
                    @endforeach
                    @endforeach
                    </ul>
                </div>
                <div class="card-body ">
                    <canvas id="chartEmail"></canvas>
                </div>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Class Schedule</h5>
                    <p class="card-category">Schedule for your classes</p>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Date
                                </th>
                                <th>
                                    Time
                                </th>
                                <th>
                                    Course
                                </th>
                                <th class="text"> </th>
                            </thead>
                            <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td>
                                        {{$schedule->date}}
                                    </td>
                                    <td>
                                        {{$schedule->time}}
                                    </td>
                                    <td>
                                        @foreach($courses as $course)
                                        @if($schedule->course_id == $course->id)
                                        {{$course->title}}
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

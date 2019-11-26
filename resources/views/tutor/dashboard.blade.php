@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card card-stats">
                            <a href="{{route('user.index')}}" style="text-decoration: none;">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4 class="text-black">VIEW <br> STUDENTS</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-footer ">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats">
                            <a href="{{route('course-content.create')}}" style="text-decoration: none;">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4 class="text-black">CREATE <br> COURSE CONTENT</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-footer ">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats">
                            <a href="{{route('resource.create')}}" style="text-decoration: none;">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4 class="text-black">UPLOAD <br> RESOURCES</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-footer ">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">
                                <h5 class="card-title">Assignment</h5>
                                <p class="card-category">Submissions of Assignments</p>
                            </div>
                            <div class="card-body ">

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
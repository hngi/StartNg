@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
               
                                    <div class="row">
                                     <div class="col-md-6 offset-md-3 book-desc">
    <div class="card">
        <img class="card-img-top" src="{{url('admins/show-resources/'.$resource->filename)}}" alt="{{$resource->filename}}">
        <div class="card-body">
            <h4 class="card-title">Resource No: {{ $resource->id}}</h4>
            <p class="card-text">
                Resource <strong>{{ $resource->name}}</strong> Description <strong>{{ $resource->description}}</strong>
            </p>
            <a href="{{ route('admin.upload-resource') }}" class="btn btn-dark">Back</a>
        </div>
    </div>
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
                            <a href="{{route('assignment.create')}}" style="text-decoration: none;">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4 class="text-black">CREATE <br> ASSIGNMENT</h4>
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
                            <a href="{{route('admin.upload-resource')}}" style="text-decoration: none;">
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
                                                <td>
                                                    <div>
                                                        <a class=" btn btn-info" href="{{route('schedule.edit', $schedule->id)}}" >EDIT</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class=" btn btn-info" href="{{route('schedule.destroy', $schedule->id)}}" >DELETE</a>
                                                    </div>
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
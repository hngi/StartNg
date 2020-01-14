@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">DETAILS</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Duration(Months)
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Progress
                                        </th>
                                        <th>
                                            Tutor
                                        </th>
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                        @foreach($myCourses as $mycourse)
                                        @foreach($courses as $course)
                                        @if($mycourse->course_id == $course->id)
                                        <tr>
                                            <td>
                                                {{$course->title}}
                                            </td>
                                            <td>
                                                {{$course->duration}}
                                            </td>
                                            <td>
                                                NGN{{$course->price}}
                                            </td>
                                            <td>
                                                {{$mycourse->progress}}%
                                            </td>
                                            <td>
                                                @foreach($users as $user)
                                                @if($user->id == $course->user_id)
                                                {{$user->username}}
                                                @endif
                                                @endforeach
                                            </td>
                                            <td class="text">
                                                <a href="{{route('course.show', $course->id)}}" class="btn btn-warning">VIEW COURSE</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
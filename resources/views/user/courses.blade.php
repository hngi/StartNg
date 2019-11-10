@extends('layouts.user-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">DETAILS</h5>
        </div>
        <div class="card-body">
        <div class="card-header">
                    <h4 class="card-title">Courses Available</h4>
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
                                <th class="text"> </th>
                                <th class="text"> </th>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                
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
                                    <td class="text">
                                        <a href="{{route('course.show', $course->id)}}" class="btn btn-warning">VIEW COURSE</a>
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
@endsection       
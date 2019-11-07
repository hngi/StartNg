@extends('layouts.tutor-dashboard')

@section('content')
<div class=" content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">STUDENTS</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                        </thead>
                                        <tbody>
                                            @foreach($students as $student)
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$students->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
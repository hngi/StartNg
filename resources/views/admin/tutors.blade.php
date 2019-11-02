@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">TUTORS</h4>
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
                                                @foreach($tutors as $tutor)
                                                <tr>
                                                    <td>{{$tutor->first_name}} {{$tutor->last_name}}</td>
                                                    <td>{{$tutor->username}}</td>
                                                    <td>{{$tutor->email}}</td>
                                                    <td>{{$tutor->phone}}</td>
                                                    <td class="text">
                                                        <a href="{{route('tutor.show', $tutor->id)}}" class="btn btn-warning">VIEW DETAILS</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$tutors->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
                
@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ADMINS</h4>
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
                                            @foreach($admins as $admin)
                                            <tr>
                                                <td>{{$admin->first_name}} {{$admin->last_name}}</td>
                                                <td>{{$admin->username}}</td>
                                                <td>{{$admin->email}}</td>
                                                <td>{{$admin->phone}}</td>

                                                <td class="text">
                                                    <a href="{{route('admin.show', $admin->id)}}" class="btn btn-warning">VIEW DETAILS</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$admins->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
            
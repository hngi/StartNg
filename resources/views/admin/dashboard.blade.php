@extends('layouts.admin-dashboard')

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
                            <a href="" style="text-decoration: none;">
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
                                            <tr>
                                                <td>
                                                    2019-11-11
                                                </td>
                                                <td>
                                                    09:30
                                                </td>
                                                <td>
                                                    Laravel
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    2019-11-12
                                                </td>
                                                <td>
                                                    14:00
                                                </td>
                                                <td>
                                                    Javascript
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    2019-11-13
                                                </td>
                                                <td>
                                                    15:00
                                                </td>
                                                <td>
                                                    UI/UX
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
@endsection
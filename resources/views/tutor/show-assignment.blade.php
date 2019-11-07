@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
                <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">DETAILS</h5>
                    </div>
                    <div class="card-body">
                        <div class="card-header">
                                <h4 class="card-title">Assigment</h4>
                            </div>
                            <div class="card-body">
                                {{$assignment->title}}<br>
                                {{$assignment->description}}<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
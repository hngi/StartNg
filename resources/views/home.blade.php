@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card"></div>
                    <div class="card-header">Welcome</div>
                    <div class="card-body">
                        <h1>  You are logged in!</h1>
                        <p>Welcome to startng your preferred displayed</p>
                        @auth
                        <form action="" method="POST">

                                <input type="hidden" name="content" id="content">
                               
                                <button type="submit" class="btn btn-primary my-2">Add </button>
                                </form>

                    </div>
                   

               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

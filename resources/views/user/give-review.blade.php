@extends('layouts.user-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">Review {{$course->title}}</h5>
        </div>
        <div class="card-body">
                    <form action="{{route('user.store-review', $course->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Review Course</label>
                                    <textarea class="form-control" required name="review" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
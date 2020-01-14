@extends('layouts.tutor-dashboard')

@section('content')
<div class=" content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">GRADE SUBMISSIONS</h4>
                </div>
                <div class="card-body">
                <form class="user-form" method="get" action="{{route('scoresheet')}}"> 
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                            <div class="form-group">
                                <div> <label for="content"><strong>Course Content</strong></label></div>
                                @foreach($courses as $course)
                                @foreach($contents as $content)
                                @if($content->course_id == $course->id)
                                <input type="radio" class="form-control" name="content" value="{{$content->id}}">{{$content->title}}
                                @endif
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                            <button class="but">GET SCORESHEET</button>
                        </div>
                    </form>
                    <form class="user-form" method="post" action="{{route('score')}}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <div> <label for="content"><strong>Course Content</strong></label></div>
                                @foreach($courses as $course)
                                @foreach($contents as $content)
                                @if($content->course_id == $course->id)
                                <input type="radio" class="form-control" name="content" value="{{$content->id}}">{{$content->title}}
                                @endif
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div> <label><strong>Sheet</strong></label> </div>
                                <input type="file" class="form-control" name="file"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                            <button class="but">SCORE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
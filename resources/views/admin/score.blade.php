@extends('layouts.admin-dashboard')

@section('content')
<div class=" content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">GRADE SUBMISSIONS</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('score')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    Upload<input type="file" name="file" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    @foreach($courses as $course)
                                    @foreach($contents as $content)
                                    @if($content->course_id == $course->id)
                                        <input type="radio" name="content" value="{{$content->id}}" class="form-control">{{$content->title}}
                                    @endif
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{route('scoresheet')}}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    @foreach($courses as $course)
                                    @foreach($contents as $content)
                                    @if($content->course_id == $course->id)
                                        <input type="radio" name="content" value="{{$content->id}}" class="form-control">{{$content->title}}
                                    @endif
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-warning btn-round">DOWNLOAD SCORESHEET</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
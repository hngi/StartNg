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
                        <form action="{{route('score')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            Upload<input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 px-1">
                                    <div class="form-group">
                                        <label>Assignment</label>
                                        @foreach($courses as $course)
                                        @foreach($contents as $content)
                                        @foreach($assignments as $assignment)
                                            @if($assignment->course_content_id==$content->id)
                                            @if($course->id==$content->course_id)
                                            @if($assignment->active)
                                                <input type="radio" name="content" value="{{$assignment->id}}" class="form-control">{{$assignment->title}}
                                            @endif
                                            @endif
                                            @endif
                                        @endforeach
                                        @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection 
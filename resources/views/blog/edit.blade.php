@extends('blog.blog')

@section('content')
<h2 class="text-center pt-5 mt-5 pb-4">Edit Post</h2>
<form action="{{route('blogs.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input id="title" class="form-control" required type="text" name="title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="body">Post Body</label>
                    <textarea id="body" class="form-control" required name="body" rows="4"></textarea>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success d-block mx-auto pr-5 pl-5" style="background-color: #3A0842; border-color: #3A0842;">ADD</button>
</form>
@endsection
@extends('blog.blog')

@section('content')

<h2 class="text-center pt-5 mt-5 pb-4">StartNG BLOG</h2>
<div class="col-md-10 offset-md-1 pt-5">
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <hr>
        <div class="row pt-3">
            <div class="col-md-4">
                <p>Written on {{$post->created_at}} by <a  href="{{route('show.individual', $post->user_id)}}">{{$post->user->name}}</a></p>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570923818/startng/Rectangle_78_uzftqh.png">
            </div>
            <div class="col-md-8">
                <h4 class="mt-5 pt-3 pb-3"><a href="{{route('blogs.show', $post->id)}}">{{$post->title}}</a></h4>
                <p class="mb-5 pb-3">{{$post->body}}</p>
            </div>
        </div>
        <hr>
        @endforeach
        <div class="col-md-6 offset-md-5 mb-5 pb-5">
            {{$posts->links()}}
        </div>
    @else
        <p>No Post</p>
    @endif
    <div>
        <a href="{{route('blogs.create')}}">Create Post</a>
    </div>
</div>
@endsection
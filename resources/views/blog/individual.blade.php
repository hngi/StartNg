@extends('blog.blog')

@section('content')

    <a href="{{route('blogs.index')}}" class="btn btn-outline">Go Back</a>
    <h2 class="text-center pt-5 mt-5 pb-4">Posts by {{$user->name}}</h2>
    <br><br>
    <div>
        @if($posts)
            @foreach($posts as $post)
            <h2 class="text-center pt-5 mt-5 pb-4"><a href="{{route('blogs.show',$post->id)}}">{{$post->title}}</a></h2>
            <br><br>
            <div>
                {{$post->body}}
            </div>
            <hr>
            @endforeach
        @else
            <p>No posts for {{$user->name}}</p>
        @endif
    </div>
@endsection
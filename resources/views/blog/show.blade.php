@extends('blog.blog')

@section('content')

    <a href="{{route('blogs.index')}}" class="btn btn-outline">Go Back</a>
    <h2 class="text-center pt-5 mt-5 pb-4">{{$post->title}}</h2>
    <br><br>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="{{route('blogs.edit', $post->id)}}" class="btn btn-default">Edit</a>
            <form action="{{route('blogs.destroy', $post->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Delete</button>
            </form>
        @endif
    @endif
@endsection
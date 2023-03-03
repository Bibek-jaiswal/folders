@extends('app')
@section('title')
All Blogs
@endsection
@section('content')
<div style="width:900px" class="container max-w-full mx-auto pt-4">
    <div class="flex">

        <h1>My Blog</h1>

        <a href="{{route('createpost')}}" class="btn btn-primary"> Add Post</a>

    </div>
    @foreach($posts as $post)
    <article class="my-4">

        <!-- <div class="contents"> -->

        <a href="/posts/{{$post->id}}/edit">
            <h2 class="text-xl font-bold text-gray-900">{{ $post->title }}</h2>
        </a>
        @foreach($post->images as $image)
            <img style="width: 500px; height:500px;" src="{{url('public/Image/'.$image->image)}}" alt="">
        @endforeach

        <p class="text-md text-gray-600">{{$post->content}}</p>
        <!-- </div> -->





    </article>
    @endforeach
</div>
@endsection
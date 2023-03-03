@extends('app')
@section('title')
Add or Edit Blog
@endsection
@section('content')
<div style="width:900px" class="container max-w-full mx-auto pt-4">

    <form action="{{route('updatepost',$post->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{$post->title}}">
        </div>


        <div class="form-group">
            <label>Content</label>
            <input type="textarea" class="form-control" name="content" value="{{$post->content}}">
        </div>





        <button type="submit" class="btn btn-primary">Update</button>
        <button type="submit" class="btn btn-secondary"> <a href="/posts" style="color:#ffffff; text-decoration:none;">Cancel</a></button>


    </form>
    <form method="post" action="{{ route('destroypost', $post->id) }}">
        @csrf
        @method('delete')

        <button type="submit" class="btn btn-danger">Delete</button>

    </form>

</div>

</form>

<form action="{{route('uploadImage',$post->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="">
    <button type="submit">Submit</button>
</form>

@endsection


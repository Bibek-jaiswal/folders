@extends('app')
@section('title')
Create Blog
@endsection
@section('content')
<div style="width:900px" class="container max-w-full mx-auto pt-4">

    <form action="{{route('storepost')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" aria-describedby="emailHelp" name="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label>Content</label>
            <input type="textarea" class="form-control @error('content') is-invalid @enderror" name="content">
            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- 
        <div class="image">
            <label>
                <h4>Add image</h4>
            </label>
            <input type="file" class="form-control" required name="image">
        </div> -->



        <button type="submit" class="btn btn-primary">Add</button>
        <button class="btn btn-secondary"> <a href="/posts" style="color:#ffffff; text-decoration:none;">Cancel</a></button>

    </form>

</div>

</form>



</div>
@endsection
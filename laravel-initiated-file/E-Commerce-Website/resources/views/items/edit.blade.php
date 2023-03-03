@extends('app')
@section('title')
    Update Item
@endsection
@section('content')
   

{{-- <form  class="my-2" action="{{route('uploadImage',$item->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image" >
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>

    <button class="btn btn-secondary my-2" type="submit">Submit</button>
</form> --}}



    <form action="{{ route('updateitem', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf


        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $item->name }}">
        </div>


        <div class="form-group">
            <label>In-Stock</label>
            <input type="number" class="form-control" name="in_stock" value="{{ $item->in_stock }}">
        </div>


        <div class="form-group">
            <label>Brand</label>
            <input type="text" class="form-control" name="brand" value="{{ $item->brands }}">
        </div>


        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="{{ $item->price }}">
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-secondary" href="{{ route('indexitem') }}" style="color:#ffffff; text-decoration:none;">Cancel</a>




    </form>


    <form action="{{ route('deleteitem', $item->id) }}" method="post">
        @csrf
        @method('delete')

        <button type="submit" class="btn btn-danger my-2"> Delete</button>


    </form>
@endsection

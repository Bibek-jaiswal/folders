@extends('app')
@section('title')
    Items Available
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



    <form class="my-4" action="{{ route('storeitem') }}" method="POST" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


        </div>


        <div class="form-group">
            <label>In-Stock</label>
            <input type="number" class="form-control" name="in_stock">

            @error('in_stock')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>


        <div class="form-group">
            <label>Brand</label>
            <input type="text" class="form-control" name="brand">
            @error('brand')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>


        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>


        <button type="submit" class="btn btn-outline-primary">Add</button>
        
            <a href="{{ route('indexitem') }}"
                class="btn btn-outline-warning">Cancel</a>

        <input type="reset" class="btn btn-outline-info" value="Reset">



    </form>
@endsection

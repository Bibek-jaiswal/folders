@extends('app')
@section('title')
    Items Available
@endsection
@section('content')
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
    </style>


    <header>
        <h1>Items Available</h1>
        <a href="{{ route('createitem') }}" class="btn btn-primary">Add Items</a>
    </header>


    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">S.No.</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">In Stock</th>
                <th scope="col">Brands</th>
                <th scope="col">Price</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $index => $item)
                <tr>


                    <td scope="row">{{ ++$index }}</td>
                    <td {{-- style="width: 20%; height:200px;" --}}>
                        @if ($item->image)
                            <img  class="img-fluid"  src="{{ url('public/Image/' . $item->image) }}" alt=""
                                style="width:200px; height:200px;">
                        @endif

                        {{-- @foreach ($item->images as $image)
                            <img src="{{ url('public/Image/' . $image->image) }}" alt=""
                                style="width:200px; height:200px;">
                        @endforeach --}}

                    </td>

                    <td>{{ $item->name }}</td>
                    <td>{{ $item->in_stock }}</td>
                    <td>{{ $item->brands }}</td>
                    <td>{{ $item->price }}</td>
                    <td><a href="/items/{{ $item->id }}/edit" class="btn btn-outline-secondary">Edit</a></td>




                </tr>
            @endforeach


        </tbody>
    </table>
@endsection

@extends('app')
@section('title')
    Home
@endsection



@section('content')
    <table class="table table-bordered mt-4">

        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        @foreach ($accounts as $account)
            <tr>
                <td>{{ $account->id }}</td>
                <td>{{ $account->name }}</td>
                <td>{{ $account->email }}</td>
                <td>{{ $account->password }}</td>


            </tr>
        @endforeach

    </table>
@endsection


@extends('layout')
@section('title','Training')
@section('header','Students List')
    <!-- Sidebar -->
@section('content')
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Email Address</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
    </thead>
    @foreach($humans as $human)
        <tr>
            <td>{{$human['first_name']}}</td>
            <td>{{$human['middle_name']}}</td>
            <td>{{$human['last_name']}}</td>
            <td>{{$human['email']}}</td>
            <td>{{$human['age']}}</td>
            @if($human['gender'] == '1')
                <td>Male</td>
            @else
                <td>Female</td>
            @endif
            <td>{{$human['address']}}</td>
        </tr>
    @endforeach
</table>
@endsection
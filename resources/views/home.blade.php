<!doctype html>
<html lang="en">
<head>
    @extends('layout.head')
</head>
<body class="container mt-5" >
<a href="{{route('employees.create')}}"><button class="btn btn-success">Create</button></a>
@if(!$employees->isEmpty())
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Date</th>
            <th scope="col">Phone</th>
            <th scope="col">Mail</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <th scope="row">{{$employee->id}}</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->gender}}</td>
                <td>{{$employee->date}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->email}}</td>
                <td >
                    <a href="{{route('employees.edit',$employee->id)}}"> <button class="btn btn-warning">Edit</button></a>

                    <form action="{{route('employees.destroy',$employee->id )}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button></a>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@else
    <h3 class="text-danger text-center">Chưa có data</h3>
@endif

</body>
@extends('layout.footer')
</html>

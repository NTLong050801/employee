<!doctype html>
<html lang="en">
<head>
    @extends('layout.head')
</head>
<body>
<div class="container mt-5">
    <form method="post" action="{{route('employees.update',$employee->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" value="{{$employee->name}}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="date" name="date" value="{{$employee->date}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Nam" @if($employee->gender == 'Nam')
                                                                                                               checked
                    @endif>

                <label class="form-check-label" for="exampleRadios1">
                    Nam
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Nữ" @if($employee->gender == 'Nữ')
                    checked
                    @endif >
                <label class="form-check-label" for="exampleRadios2">
                    Nu
                </label>
            </div>

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" name="phone" value="{{$employee->phone}}" class="form-control" id="exampleInputPassword1" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{$employee->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>
@extends('layout.footer')

</html>

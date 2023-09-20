@extends('layout/app')
@section('content')
<div class="container mt-3">
    <h3 class="text-center">Student Data</h3>
    <a href="{{route('student.login') }}" class="btn btn-danger float-end">Back</a>
    <div class="col-md-6">
        <p><b>Firstname:</b> {{$data->firstname}}</p>
        <p><b>Lastname:</b> {{$data->lastname}}</p>
        <p><b>Class:</b> {{$data->companyname}}</p>
    </div>
</div>
@endsection
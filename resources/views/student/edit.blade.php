@extends('layout/app')
@section('content')

<div class="container mt-3">
    <h3>Edit Student Data</h3>
<form action="{{route('student.update', $data->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
    <label for="firstname" class="form-label">Firstname:</label>
    <input type="text" class="form-control" id="firstname" placeholder="Enter Name" value="{{$data->firstname}}" name="firstname">
  </div>
  <div class="mb-3 mt-3">
    <label for="lastname" class="form-label">Lastname:</label>
    <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" value="{{$data->lastname}}" name="lastname">
  </div>
  <div class="mb-3 mt-3">
    <label for="companyname" class="form-label">Company Name:</label>
    <input type="companyname" class="form-control" id="companyname" placeholder="Enter Company Name" value="{{$data->companyname}}" name="companyname">
  </div>
  <div class="mb-3 mt-3">
    <label for="mobile" class="form-label">Class:</label>
    <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile" value="{{$data->mobile}}" name="mobile">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
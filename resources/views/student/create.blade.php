@extends('layout/app')
@section('content')

<div class="container mt-3">
    <h3>Add Student Data</h3>
<form action="{{route('student.store') }}" method="post">
    @csrf
    <div class="mb-3 mt-3">
    <label for="firstname" class="form-label">Firstname:</label>
    <input type="text" class="form-control" id="firstname" placeholder="Enter Name" name="firstname">
  </div>
  <div class="mb-3 mt-3">
    <label for="lastname" class="form-label">Lastname:</label>
    <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" name="lastname">
  </div>
  <div class="mb-3 mt-3">
    <label for="companyname" class="form-label">Companyname:</label>
    <input type="text" class="form-control" id="companyname" placeholder="Enter Company name" name="companyname">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile:</label>
    <input type="number" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
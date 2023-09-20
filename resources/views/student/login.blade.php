@extends('layout/app')
@section('content')

<div class="container mt-3">
    <h3>Student Data Login</h3>
<form action="{{route('student.login')}}" method="post">
    @csrf
    @method('POST')
    <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
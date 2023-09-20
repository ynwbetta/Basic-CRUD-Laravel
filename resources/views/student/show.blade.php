@extends('layout/app')
@section('content')
<div class="container mt-3">
    <h3 class="text-center">Student Data</h3>
    <td>
    <a href="{{route('student.index') }}" class="btn btn-danger float-end">Back</a>
        <a href="{{route('student.edit', $data->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('student.destroy', $data->id)}}" method="post" style="display:inline" onsubmit="confirm('Are you sure you want to delete!')">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
        </td>
    <div class="col-md-6">
        <p><b>Firstname:</b> {{$data->firstname}}</p>
        <p><b>Lastname:</b> {{$data->lastname}}</p>
        <p><b>Companyname:</b> {{$data->companyname}}</p>
        <p><b>Mobile:</b> {{$data->mobile}}</p>
    </div>
</div>
@endsection
@extends('layout/app')
@section('content')

<div class="container mt-3">
  <h2>Student Table</h2>
  <p>The Table class</p>

  @if(session()->has('success'))
  <div class="alert alert-info">
    <b>{{session()->get('success')}}</b>
  </div>
  @endif

  <a href="{{route('student.create')}}" class="btn btn-info float-end">Add Student</a>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Companyname</th>
        <th>Mobile</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $dt)
      <tr>
        <td>{{$dt->firstname}}</td>
        <td>{{$dt->lastname}}</td>
        <td>{{$dt->companyname}}</td>
        <td>
        <a href="{{route('student.show', $dt->id)}}" class="btn btn-info">Show</a>
        <a href="{{route('student.edit', $dt->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('student.destroy', $dt->id)}}" method="post" style="display:inline" onsubmit=" return confirm('Are you sure you want to delete!')">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

@endsection
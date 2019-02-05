
@extends('master')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Subname</th>
    <th>Email</th>
    <th>Password</th>
    <th>user</th>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td><a href="{{action('UserDetailController@downloadPDF', $user->id)}}">PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
<!-- form.blade.php -->

@extends('master')
@section('content')
<form method="post" action="{{url('submitForm')}}">
    {{csrf_field()}}

    <div class="form-group"> <!-- Nombre -->
      <label for="street1_id" class="control-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre real sin apellidos">
    </div>

    <div class="form-group"> <!-- Email -->
      <label for="zip_id" class="control-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="yourname@example.com">
    </div>

    <div class="form-group"> <!-- Password -->
      <label for="full_name_id" class="control-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>

    <div class="form-group"> <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Buy!</button>
    </div>

    </form>
@endsection
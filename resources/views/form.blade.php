@extends('master')
@section('content')
<form method="post" action="{{url('submitForm')}}">
    {{csrf_field()}}

    <div class="form-group"> <!-- PrecioTotal -->
      <label for="totalprice" class="control-label">Total Price</label>
      <input type="number" class="form-control" id="totalprice" name="totalprice" placeholder="Total price">
    </div>

    <div class="form-group"> <!-- Fecha -->
      <label for="full_name_id" class="control-label">Date of purchase</label>
      <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Password">
    </div>

    <div class="form-group"> <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Buy!</button>
    </div>

    </form>
@endsection

@extends('master')
@section('content')
<table class="table table-striped">
  <thead>
    <th>Order ID</th>
    <th>Your ID</th>
    <th>Total Price</th>
    <th>Purchased at</th>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <td>{{ $order->id }}</td>
      <td>{{ $order->id_user }}</td>
      <td>{{ $order->totalprice }}</td>
      <td>{{ $order->date }}</td>
      <td><a href="{{action('Order@downloadPDF', $order->id)}}">PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-5 py-5">
<div class="col-10">
<div class="table-responsive ">
<table class="table table-sm ">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Plat</th>
      <th scope="col">quantite</th>
      <th scope="col">Date de commande</th>
      <th scope="col">Date livraison</th>
      <th scope="col">prix a payer</th>
      <th scope="col">Etat</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $order)
    <tr>
      <th class="py-3" scope="row"><img src="{{ asset('resource/'.$order->plat->imag) }}" alt="photo" style="width:30px"></th>
      <td class="py-3">{{$order->plat->name}}</td>
      <td class="py-3">{{$order->quantity}}</td>
      <td class="py-3">{{$order->created_at}}</td>
      <td class="py-3">{{$order->created_at}}</td>
      <td class="py-3">{{$order->quantity * $order->plat->price }}</td>
      <td class="d-flex p-3">
      @if($order->status == 0)
      En Attendant
      @elseif($order->status == 1)
      Accepter
      @else
      Livre
    @endif
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection



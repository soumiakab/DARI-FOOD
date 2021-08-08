@extends('chefs.cheflayout')

@section('content')
<div class="col-12 command">
<div class="table-responsive">
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Plat</th>
      <th scope="col">quantite</th>
      <th scope="col">Date de commande</th>
      <th scope="col">Date livraison</th>
      <th scope="col">Adress</th>
      <th scope="col">prix a payer</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach (Auth::user()->order() as $order)
    <tr>
      <th scope="row"><img src="{{ asset('resource/'.$order->plat->imag) }}" alt="photo"></th>
      <td>{{$order->plat->name}}</td>
      <td>{{$order->quantity}}</td>
      <td>{{$order->created_at}}</td>
      <td>{{$order->created_at}}</td>
      <td><a href="#">voir</a></td>
      <td>{{$order->quantity * $order->plat->price }}</td>
      <td class="d-flex">
      @if($order->status == 0)
      <a href="{{url('command/update/'.$order->id .'/1')}}" class="btn">Accepter</a>
      @elseif($order->status == 1)
      <a href="{{url('command/update/'.$order->id .'/2')}}" class="btn">Envoyer</a>
      @else
      <span>Livre</span>
    @endif
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</div>

@endsection

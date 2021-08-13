@extends('layouts.app')
@section('content')
<div class="card panier">
    <div class="row align-items-end">
        <panier/>
    </div>
    <div class="row px-5">
    <a href="{{route('checkout')}}" class="btn " >Passer la commande</a>

    </div>
</div>
@endsection



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">

        @if(Auth::user())
        <div class="card mt-3">
                <div class="card-body">
                    <form method="POST" action="{{ route('savecommand') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-12">
                            <label for="street" class="text-md-right">Envoyer la command a votre Adress le:</label>
                            <input type="datetime-local" name="livraison" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mb-0">
                            <div class="col-lg-6 col-md-12 offset-md-4">
                                <button class="btn btn-danger">
                                   Confirmer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        @endif



            <div class="card mt-3">
                <div class="card-header">Envoyer la commande a cet Adress le:
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('savecommand') }}">
                        @csrf
                        <input  type="datetime-local" name="livraison" required>
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-12">
                            <label for="street" class="text-md-right">Rue:</label>
                                <input id="street" type="text" class="form-control @error('name') is-invalid @enderror" name="street" value="{{ old('street') }}" required autocomplete="street" autofocus>
                            </div>
                            <div class="col-lg-6 col-md-12">
                            <label for="zipcode" class="text-md-right">Code postal:</label>
                                <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="lastname" autofocus>

                            </div>
                            <div class="col-lg-12 col-md-12">
                            <label for="adress" class="text-md-right">Adresse:</label>
                                <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress">

                            </div>
                        </div>


                        <div class="form-group row justify-content-center mb-0">
                            <div class="col-lg-6 col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                   Confirmer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="card mt-3">



                    @php $total = 0 @endphp
                    @if(session('cart'))
                    <div class="card-body">
                        @foreach(session('cart') as $order)
                            @php $total += $order['price'] * $order['quantity'] @endphp

                                <div class="row mb-3">
                                    <img src="{{ asset('resource/'.$order['image']) }}" style="width:40px" alt="img">
                                    {{$order['name']}}
                                </div>
                        @endforeach
                    </div>

                    <div class="card-body">
                        <div class="row justify-content-center">

                        <strong>Total ${{ $total }}</strong>
                        </div>

                    </div>
                     @endif




            </div>
        </div>
    </div>
</div>
@endsection

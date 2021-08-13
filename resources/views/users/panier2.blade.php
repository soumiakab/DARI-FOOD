@extends('layouts.app')
@push('styles')

    <link rel="stylesheet" href="{{ asset('css/panierStyle.css') }}">

@endpush

@section('content')

<div class="card panier">
        <div class="row align-items-end">
            <div class="col-md-12 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Les plats choisis</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">{{ count((array) session('cart')) }} Plats</div>
                    </div>
                </div>
                @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <div class="row border-top border-bottom" >
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="{{ asset('resource/'.$details['image']) }}"></div>
                        <div class="col">
                            <div class="row text-muted">{{ $details['name'] }}t</div>
                            <div class="row">Categorie</div>
                        </div>
                        <div class="col">{{ $details['price'] }} DH</div>
                        <div class="col" data-id="{{ $id }}"><p> <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" /></p></div>
                        <div class="col" >{{ $details['price'] * $details['quantity'] }}DH</div>
                        <div class="col" data-id="{{ $id }}"><span class="delet" style="cursor:pointer">&#10005;</span></div>
                    </div>
                </div>
            @endforeach
        @endif


                <div class="row mt-2" style=" padding: 2vh 0;">
                    <div class="col">TOTAL :</div>
                    <div class="col text-right">DH {{ $total }}</div>

                <button class="btn">Passer la commande</button>
                </div>
                <div class="back-to-shop">
                    <a href="{{ url('/') }}">&leftarrow;<span class="text-muted">Ajouter un autre plat</span></a>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("div").attr("data-id"),
                quantity: ele.parents("p").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".delet").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("div").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection

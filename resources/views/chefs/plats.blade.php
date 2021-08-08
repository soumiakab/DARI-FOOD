@extends('chefs.cheflayout')

@section('content')
@foreach (Auth::user()->plat() as $plat)
    <div class="row align-items-center justify-content-start p-2 mb-5">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="{{ asset('resource/'.$plat->imag)}}" style="width: 80%;height: 15vw;" class="px-auto" alt="image" >
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                   <div class="row align-items-center mb-3"><h5>{{$plat->name}}</h5></div>
                   <div class="row mb-3"> <h6>{{$plat->category->name}}</h6>/<h6>{{$plat->price}} DH</h6></div>
                   <div class="row ">
                    <a href="{{route('chef-plat',$plat->id)}}" class="btn btn-danger">Voir les details</a>
                </div>
            </div>
    </div>
@endforeach

@endsection

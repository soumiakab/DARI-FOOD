@extends('layouts.app')

@section('content')

    <div class="row py-2 px-2">
        <div class="col-lg-10 col-sm-12 mx-lg-auto">
    <div class="row coveruser">
        <div class="col-lg-4 col-md-6 col-sm-12 align-self-end">
            <div class="row px-5 mt-3 mb-2">
                <img src="{{asset('ressources/'.$chef->photo) }}" alt="chefphoto"  class="chefimage img-thumbnail">

            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-12 align-self-end">
                    <div class="row px-5 px-md-0 px-lg-0">
                        <p><b>{{$chef->firstname.' '.$chef->lastname}}</b></p>
                    </div>
                    <div class="row px-5 px-md-0 px-lg-0">
                        <p>Marrakech</p>
                    </div>
                    <div class="row px-5 px-md-0 px-lg-0">
                        <p>{{count($chef->order())}} commandes</p>
                    </div>



        </div>
    </div>
    <div class="row px-5 m-3">
        <div class="col-lg-4 col-md-6 col-sm-12 align-self-end">
        {{count($chef->plat())}} Plats
        </div>
    </div>
    <div class="row px-lg-4 px-sm-0 py-lg-3 py-sm-4 bg-light mb-5">
        <div class="col-lg-8 col-md-9 col-sm-12 p-lg-4  p-md-4 p-sm-0">
            <h1>Apropos</h1>
            <p>
                {{$chef->description}}
            </p>

        </div>
    </div>
    <div class="row">
        @foreach($chef->plat() as $plat)
        <div class="col-lg-6 mb-2 "><a style="padding:0;" href="{{route('user-plat',$plat->id)}}" ><img src="{{ asset('resource/'.$plat->imag) }}" style="width:100%;height:70%" class="img-fluid rounded "></a></div>
        @endforeach
    </div>
    </div>
    </div>
</div>

<!-- fin corps -->

<!-- fin contenu page -->


@endsection

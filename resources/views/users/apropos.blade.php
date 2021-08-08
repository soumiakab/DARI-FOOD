@extends('layouts.app')

@section('content')

<div class="row align-items-center about mb-5">
<div class="col-lg-6 col-sm-12">
    <img src="{{asset('ressources/images/about2.jpg')}}" width="100%" alt="plat traditionel">
</div>
<div class="col-lg-6 col-sm-12">
    <div class="row abouttitre">
        <!-- <h2>Dari FooD</h2> -->
        <img src="{{asset('ressources/images/lgxl.png')}}" width="100%" alt="">
    </div>
    <div class="row">
        <p>
            DARI FOOD est une plateforme qui vous permet de commander des plats preparer a la maison ,comme si vous qui les a preparer a mains.
            un menu riche pour des prix raisonnables , n hisitez pas a essayer nos repas .
        </p>
    </div>
</div>
</div>

<div class="row align-items-center about mb-5">
<div class="col-lg-6 col-sm-12">
    <div class="row abouttitre">
        <h2 style="color:#dc3545;font-size:30px;">Nos Chefs</h2>

    </div>
    <div class="row">
        <p>
            Des femmes marocaines ont plus de 10 ans d experience dans la cuisine sont a votre service pour vous aidez a bien manger
        </p>
    </div>
</div>
<div class="col-lg-6 col-sm-12">
    <img src="{{asset('ressources/images/chef2.jpg')}}" width="100%" alt="plat traditionel">
</div>

</div>

<div class="row align-items-center about mb-5">
<div class="col-lg-6 col-sm-12">
    <img src="{{asset('ressources/images/coursier.jpg')}}" width="100%" alt="plat traditionel">
</div>
<div class="col-lg-6 col-sm-12">
    <div class="row abouttitre">
        <h2 style="color:#dc3545;font-size:30px;">Nos Livreurs</h2>
    </div>
    <div class="row">
        <p>
            

    </p>
    </div>
</div>
</div>


@endsection

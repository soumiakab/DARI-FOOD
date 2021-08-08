@extends('admin.adminlayout')

@section('content')
<div class="row justify-content-center ">
<div class="col-lg-5 col-md-6 col-sm-12 m-2 ">

    <div class="card ">
        <div class="card-body stat">
           <p>{{$chefs}} chefs</p>
        </div>
    </div>

</div>



<div class="col-lg-5 col-md-6 col-sm-12 m-2">

    <div class="card ">
        <div class="card-body stat">
           <p>{{$plats}} plats</p>
        </div>
    </div>

</div>


<div class="col-lg-5 col-md-6 col-sm-12 m-2">

    <div class="card ">
        <div class="card-body stat">
           <p>{{$users}} utilisateurs </p>
        </div>
    </div>

</div>

<div class="col-lg-5 col-md-6 col-sm-12 m-2">

    <div class="card ">
        <div class="card-body stat">
           <p>{{$orders}} plats commander</p>
        </div>
    </div>

</div>

</div>
@endsection

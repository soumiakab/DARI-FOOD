@extends('admin.adminlayout')

@section('content')
<div class="row justify-content-center ">
<div class="col-lg-5 col-md-6 col-sm-12 m-2 ">

    <div class="card ">
        <div class="card-body stat">
            <div class="row justify-content-between  p-2">
                <p>Nombre total des chefs</p>
                <span>{{$chefs}}</span>
            </div>

        </div>
    </div>

</div>



<div class="col-lg-5 col-md-6 col-sm-12 m-2">

    <div class="card ">
        <div class="card-body stat">
        <div class="row justify-content-between  p-2">
                <p>Nombre total des plats</p>
                <span>{{$plats}}</span>
            </div>
        </div>
    </div>

</div>


<div class="col-lg-5 col-md-6 col-sm-12 m-2">

    <div class="card ">
        <div class="card-body stat">
        <div class="row justify-content-between  p-2">
                <p>Nombre total des utilisateurs</p>
                <span>{{$users}}</span>
            </div>
        </div>
    </div>

</div>

<div class="col-lg-5 col-md-6 col-sm-12 m-2">

    <div class="card ">
        <div class="card-body stat">
        <div class="row justify-content-between  p-2">
                <p>Nombre total des plats commander</p>
                <span>{{$orders}}</span>
            </div>
        </div>
    </div>

</div>

</div>
@endsection

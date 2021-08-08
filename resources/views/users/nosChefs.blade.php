@extends('layouts.app')

@section('content')
<div class="row noschefs">
    @foreach($chefs as $chef)

        <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="{{ asset('ressources/'.$chef->photo) }}" alt="" class="rounded-circle"> </div>
                   <div class="h3">Chef {{$chef->firstname}}</div>
                   <p class="designation text-muted text-uppercase px-2">{{substr($chef->description,0,10)}}... </p>
                   <a  href="{{'chef/profil/'.$chef->id}}" class="btn btn-danger">profil</a>
               </div>


           </div>
       </div>

@endforeach
<!--
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="{{ asset('ressources/images/f2.jpg') }}" alt="" class="rounded-circle"> </div>
                   <div class="h3">Chef mina</div>
                   <p class="designation text-muted text-uppercase px-2">femme marocaine habit a marrakech..... </p>
               </div>

           </div>
       </div>
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="{{ asset('ressources/images/f3.jpg') }}" alt="" class="rounded-circle"> </div>
                   <div class="h3">Chef fatiha</div>
                   <p class="designation text-muted text-uppercase px-2">femme marocaine habit a marrakech..... </p>
               </div>

           </div>
       </div>
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="{{ asset('ressources/images/f4.jpg') }}" alt="" class="rounded-circle"> </div>
                   <div class="h3">Chef hakima</div>
                   <p class="designation text-muted text-uppercase px-2">femme marocaine habit a marrakech..... </p>
               </div>

           </div>
       </div>
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="{{ asset('ressources/images/f1.jpg') }}" alt="" class="rounded-circle"> </div>
                   <div class="h3">Chef aicha</div>
                   <p class="designation text-muted text-uppercase px-2">femme marocaine habit a marrakech..... </p>
               </div>

           </div>
       </div>
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="{{ asset('ressources/images/f5.jpg') }}" alt="" class="rounded-circle"> </div>
                   <div class="h3">Nom du chef</div>
                   <p class="designation text-muted text-uppercase">Petite Description</p>
               </div>

           </div>
       </div>
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="../src/images/assets/images/crd.png" alt="" class="rounded-circle"> </div>
                   <div class="h3">Nom du chef</div>
                   <p class="designation text-muted text-uppercase">Petite Description</p>
               </div>

           </div>
       </div>
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="../src/images/assets/images/crd.png" alt="" class="rounded-circle"> </div>
                   <div class="h3">Nom du chef</div>
                   <p class="designation text-muted text-uppercase">Petite Description</p>
               </div>

           </div>
       </div>
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="../src/images/assets/images/crd.png" alt="" class="rounded-circle"> </div>
                   <div class="h3">Nom du chef</div>
                   <p class="designation text-muted text-uppercase">Petite Description</p>
               </div>

           </div>
       </div>
       <div class="col-md-4 mb-md-0 mt-3">
           <div class="card d-flex flex-column align-items-center justify-content-center">
               <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                   <div class="img-container rounded-circle"> <img src="../src/images/assets/images/crd.png" alt="" class="rounded-circle"> </div>
                   <div class="h3">Nom du chef</div>
                   <p class="designation text-muted text-uppercase">Petite Description</p>
               </div>

           </div>
       </div> -->

   </div>

@endsection

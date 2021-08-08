@extends('chefs.cheflayout')

@section('content')
<div class="">
            <!-- <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="{{ asset('resource/'.$plat->imag)}}" style="width: 80%;height: 15vw;" class="px-auto" alt="image" >
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                   <div class="row align-items-center mb-3"><h5>{{$plat->name}}</h5></div>
                   <div class="row mb-3"> <h6>{{$plat->category->name}}</h6>/<h6>{{$plat->price}} DH</h6></div>
                   <div class="row ">
                    <a href="{{route('chef-plat',$plat->id)}}" class="btn btn-danger">Voir les details</a>
                </div>
            </div> -->



            <form method="POST" action="{{ route('plat.update',$plat->id) }}" class="row align-items-center justify-content-start p-2 mb-5" >
            <input type="hidden" name="_method" value="PUT" hidden>
                @csrf
                <div class="col-8">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="name" class="text-md-right">Nom du plat</label>
                            <input id="nom" type="text" class="form-control " name="nom" value="{{$plat->name}}" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="name" class="text-md-right">Prix du plat(DH):</label>
                            <input id="prix" type="text" class="form-control " name="prix" value="{{$plat->price}}" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="name" class="text-md-right">Nombre de personne</label>
                            <input id="name" type="text" class="form-control " name="nbr" value="{{$plat->nbr_pers}}" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="name" class="text-md-right">Categorie</label>
                            <select name="categorie" class="form-control">
                                @foreach ($categories as $categorie)
                                @if($categorie->id == $plat->category_id)
                                <option value="{{$categorie->id}}" selected>{{$categorie->name}}</option>
                                @else
                                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                @endif
                                @endforeach
                            </select>
                         </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="description" class="text-md-right">Description:</label>
                            <!-- <textarea id="name" type="text" rows="5" class="form-control " name="name" value="{{$plat->description}}">

                            {{$plat->description}}
                            </textarea> -->
                            <textarea class="form-control rounded-0" name="description" id="description" rows="5"> {{$plat->description}}</textarea>

                        </div>
                    </div>
                    <div class="row justify-content-end p-2 mb-5">
                                <a href="/plat" class="btn btn-info">Annuller</a>&nbsp;
                                <button type="submit" class="btn btn-primary">Modifer informations
                                </button>&nbsp;
                                <a href="{{ route('chef-plat_sup',$plat->id )}}" class="btn btn-danger">Supprimer</a>
                        </div>
                </div>
                <div class="col-4">
                    <img src="{{asset('resource/'.$plat->imag)}}" style="width:100%" alt="">
                    <div class="row mt-2">
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="customFile" lang="es">
                        <label class="custom-file-label" for="customFile">choisir une photo</label>
                    </div>
                    </div>
                </div>
            </form>
    </div>
@endsection

@extends('chefs.cheflayout')

@section('content')

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('upchef') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-12">
                            <label for="name" class="text-md-right">Prenom:</label>
                                <input id="firstname" type="text" class="form-control " name="firstname" value="{{ $chef->firstname }}" required >


                            </div>
                            <div class="col-lg-6 col-md-12">
                            <label for="lastname" class="text-md-right">Nom</label>
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $chef->lastname}}" required >

                            </div>
                            <div class="col-lg-6 col-md-12">
                            <label for="username" class="text-md-right">Nom d utilistaeur</label>
                                <input id="username" type="text" class="form-control " name="username" value="{{ $chef->username}}" required >

                            </div>
                            <div class="col-lg-6 col-md-12">
                            <label for="tel" class="text-md-right">tel</label>
                                <input id="tel" type="text" class="form-control" name="tel" value="{{ $chef->tel }}" required >

                            </div>
                            <div class="col-lg-12 col-md-12">
                            <label for="email" class="text-md-right">Adress Email</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ $chef->email}}" required >

                            </div>
                            <div class="col-lg-6 col-md-12">
                            <label for="street" class="text-md-right">Rue:</label>
                                <input id="street" type="text" class="form-control" name="street" value="{{ $chef->adress->street }}" required >


                            </div>
                            <div class="col-lg-6 col-md-12">
                            <label for="zipcode" class="text-md-right">Code postal:</label>
                                <input id="zipcode" type="text" class="form-control " name="zipcode" value="{{ $chef->adress->zipcode }}" required >

                            </div>
                            <div class="col-lg-12 col-md-12">
                            <label for="adress" class="text-md-right">Adresse:</label>
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ $chef->adress->adress }}" required >

                            </div>


                        </div>
                        <div class="row justify-content-end p-2">
                                <a href="/plat" class="btn btn-info">Annuller</a>&nbsp;
                                <button type="submit" class="btn btn-danger">Modifer informations
                                </button>
                        </div>

                </form>
            </div>
        </div>

@endsection

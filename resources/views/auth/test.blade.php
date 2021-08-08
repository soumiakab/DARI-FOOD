@extends('layouts.app')

@section('content')

<div class="row justify-content-center ">
        <div class="col-lg-9 col-md-10 col-sm-10 contact p-5 ">
        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="lastname">Nom:</label>
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" placeholder="Nom" name="lastname" value="{{ old('lastname') }}" required autocomplete="lasttname" autofocus>
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="firstname">Prenom:</label>
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="Prenom" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            <div class="form-group">
                                <label for="userName">Nom d utilistaeur:</label>
                                <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" placeholder="Nom d utilistaeur" value="{{ old('userName') }}" required autocomplete="userName">
                            </div>
                            <div class="form-group">
                                <label for="tel">Tel:</label>
                                <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel">
                            </div>
                            <div class="form-group">
                                <label for="city">ville:</label>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('adresse') }}" required autocomplete="city">
                            </div>
                            <div class="form-group">
                                <label for="street">rue:</label>
                                <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" required autocomplete="street">
                            </div>
                            <div class="form-group">
                                <label for="zipcode">Code Postal:</label>
                                <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode">
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adress:</label>
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse">
                            </div>

                            <div class="form-group row">
                            <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <div class="col-md-6">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                            <div class="row justify-content-end">
                                <input type="submit" class="btn btn-danger" value="S'inscrir">
                            </div>

            </form>
        </div>
    </div>
@endsection

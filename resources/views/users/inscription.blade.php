@extends('layouts.app')

@section('content')

<div class="row justify-content-center ">
        <div class="col-lg-9 col-md-10 col-sm-10 contact p-5 ">
            <form action="" method="post">
                            <div class="form-group">
                                <label for="inputName">Nom:</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Nom" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPrenom">Prenom:</label>
                                <input type="text" class="form-control" id="inputPrenom" placeholder="Prenom" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email:</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="inputTel">Tel:</label>
                                <input type="text" class="form-control" id="inputTel" placeholder="TEl" required>
                            </div>
                            <div class="form-group">
                                <label for="Adress">Adress:</label>
                                <input type="text" class="form-control" id="Adress" placeholder="Adress" required>
                            </div>
                            <div class="form-group">
                                <label for="inputUtilNom">Nom d utilistaeur:</label>
                                <input type="text" class="form-control" id="inputUtilNom" placeholder="Nom d utilistaeur" required/>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Mot de passe:</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" required/>
                            </div>
                            <div class="row justify-content-end">
                                <input type="submit" class="btn btn-danger" value="S'inscrir">
                            </div>

            </form>
        </div>
    </div>
@endsection

@extends('chefs.cheflayout')

@section('content')
    <form action="{{ route('plat.store') }}" method="post" enctype="multipart/form-data">
                @csrf
        <div class="form-group">
            <label for="first-name">Nom du plat:</label>
            <input type="text" name="nom" class="form-control" id="first-name" placeholder="Nom du plat">
        </div>
        <div class="form-group">
            <label for="Mobile-Number">Prix:</label>
            <input type="text" name="prix" class="form-control" id="Mobile-Number" placeholder="Prix">
        </div>
        <div class="form-group">
            <label for="nbr">Nombre de personne:</label>
            <input type="text" name="nbr" class="form-control" id="nbr" placeholder="Nombre persponnes">
        </div>

        <div class="form-group">
            <label for="inputEmail4">Categorie</label>
            <select name="categorie" class="form-control">
            @foreach ($categories as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
            @endforeach
            </select></div>
        <div class="form-group files">
            <label class="my-auto">photo du plat </label>
            <input id="file" type="file" name="photo" class="form-control" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea2">Description</label>
            <textarea class="form-control rounded-0" name="description" id="exampleFormControlTextarea2" rows="5"></textarea>
        </div>
        <input type="submit" value="Ajouter" class="btn btn-primary">
    </form>

@endsection

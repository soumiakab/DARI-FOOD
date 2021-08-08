@extends('admin.adminlayout')

@section('content')
<div class="row">
@if(isset($category))
<form action="{{ route('admin-category.update',$category->id) }}" method="post" style="width:90%" class="m-3">
<input type="hidden" name="_method" value="PUT" hidden>
                @csrf
        <div class="form-group" >
            <label for="name">Categorie:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nom du categorie" value="{{$category->name}}">
        </div>
        <input type="submit" value="modifier" class="btn btn-primary">
    </form>
@else
<form action="{{ route('admin-category.store') }}" method="post" style="width:90%" class="m-3">
                @csrf
        <div class="form-group" >
            <label for="first-name">Categorie:</label>
            <input type="text" name="name" class="form-control" id="first-name" placeholder="Nom du categorie">
        </div>
        <input type="submit" value="Ajouter" class="btn btn-primary">
    </form>

@endif

</div>

<div class="table-responsive">
<table class="table table-sm table-dark ">
  <thead>
    <tr>
      <th scope="col">Categorie</th>
      <th scope="col">nombre de plat</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>{{count($category->plats())}}</td>
            <td> <a href="{{route('admin-category.edit',$category->id)}}" class="btn btn-primary m-2">Modifier</a></td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>


@endsection

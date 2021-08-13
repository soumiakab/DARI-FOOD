@extends('admin.adminlayout')

@section('content')

<div class="col-12 command">
<div class="table-responsive">
<table class="table table-sm ">
  <thead>
    <tr>
      <th scope="col">Nom Chef </th>
      <th scope="col">Nombre de plat</th>
      <th scope="col">Nombre de commandes</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($chefs as $chef)
        <tr>
            <td>{{ $chef->firstname }}</td>
            <td>{{ count($chef->plat()) }}</td>
            <td>{{ count($chef->order()) }}</td>
            <td> <a href="{{route('admin.destroy',$chef->id)}}" class="btn btn-danger m-2">Supprimer</a> </td>
        </tr>
    @endforeach

  </tbody>
</table>
</div>

</div>

@endsection

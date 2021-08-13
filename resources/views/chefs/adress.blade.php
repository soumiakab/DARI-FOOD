@extends('chefs.cheflayout')

@section('content')
<div class="row m-3 p-2">

<div class="form-group row">
    <div class="col-lg-6 col-md-12">
    <label for="street" class="text-md-right">Rue:</label>
        <input id="street" type="text" class="form-control " name="street" value="{{$adress->street}}" required readonly>
    </div>
    <div class="col-lg-6 col-md-12">
    <label for="zipcode" class="text-md-right">Code postal:</label>
        <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{$adress->zipcode }}" required  readonly>

    </div>
    <div class="col-lg-12 col-md-12">
    <label for="adress" class="text-md-right">Adresse:</label>
        <input id="adress" type="text" class="form-control " name="adress" value="{{$adress->adress }}" required readonly>

    </div>
    <div class="col-lg-12 col-md-12">
    <a href="{{route('command.index')}}" class="btn btn-danger mt-5">Revenir</a>

    </div>
</div>


</div>

@endsection

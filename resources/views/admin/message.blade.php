@extends('admin.adminlayout')

@section('content')

<div class="col-12 ">
<div class="table-responsive">
<table class="table table-sm ">
  <thead>
    <tr>
      <th scope="col">email</th>
      <th scope="col">tel</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($messages as $message)
        <tr>
            <td>{{$message->email}}</td>
            <td>{{$message->tel}}</td>
            <td>{{$message->message}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

</div>

@endsection

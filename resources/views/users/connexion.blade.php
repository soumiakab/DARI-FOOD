@extends('layouts.app')

@section('content')
<div class="row justify-content-center ">
        <div class="col-lg-9 col-md-10 col-sm-10 contact p-5 ">
            <form action="" method="post">
                            <div class="form-group">
                                <label for="inputEmail">Email:</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="password" required>
                            </div>
                            <div class="row justify-content-end">
                                <input type="submit" class="btn btn-danger" value="se connecter">
                            </div>

            </form>
        </div>
    </div>

@endsection

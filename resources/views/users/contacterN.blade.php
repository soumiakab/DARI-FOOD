@extends('layouts.app')

@section('content')

<div class="row justify-content-center ">
        <div class="col-lg-9 col-md-10 col-sm-10 contact p-5 ">
            <form action="/contact-store" method="post">
            @csrf
                            <div class="form-group">
                                <label for="inputEmail">Email:</label>
                                <input type="email" class="form-control"name="email" id="inputEmail" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="inputTel">Tel:</label>
                                <input type="text" class="form-control" name="tel" id="inputTel" placeholder="TEl" required>
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">Message:</label>
                                <textarea class="form-control" id="inputMessage" name="message" placeholder="Message" rows="4" required></textarea>
                            </div>
                            <div class="row justify-content-end">
                                <input type="submit" class="btn btn-danger" value="Envoyer">
                            </div>

            </form>
        </div>
    </div>
@endsection

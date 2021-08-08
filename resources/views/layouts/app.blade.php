<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Dar-FooD</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="{{ asset('ressources/css/style.css') }}" rel="stylesheet">
@stack('styles')

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/"><img class="logoN" src="{{ asset('ressources/images/logo.png') }}" alt="logo"></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="/" class="nav-item nav-link">Accueil</a>
			<a href="/noschefs" class="nav-item nav-link ">Nos-chefs</a>
			<a href="/apropos" class="nav-item nav-link">Apropos</a>
			<a href="/contacterN" class="nav-item nav-link">Contacter-Nous</a>
        </div>

		<div class="navbar-nav ml-auto action-buttons">
        @guest
           @if (Route::has('login'))
           <a href="{{ route('panier') }}" class="nav-item nav-link"><img src="{{ asset('ressources/images/crd.png') }}" alt=""><span class="my-card">{{ count((array) session('cart')) }}</span></a>
           <div class="nav-item ">
				<a  href="{{ route('login') }}"  class="btn btn-primary  sign-up-btn">Se connecter</a>
			</div>
            @endif

            @if (Route::has('register'))
                <div class="nav-item ">
                    <a  href="{{ route('register') }}"  class="btn btn-primary  mr-4">Creer compte</a>
                </div>
            @endif
            @else
            <a href="{{ route('panier') }}" class="nav-item nav-link"><img src="{{ asset('ressources/images/crd.png') }}" alt=""><span class="my-card">{{ count((array) session('cart')) }}</span></a>
            <a href="{{ route('wish') }}"  style="color:#bd2c29;float:right; padding:0;"><i class="fa fa-heart-o " style="font-size: 2em;"></i></a>
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/orders" class="d-flex">Mes commandes</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            @endguest

        </div>
	</div>
</nav>
<!-- fin navbar -->
<div id="app">
<!-- debut contenu page -->
<div class="container-fluid cont">
<!-- @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif -->
@yield('content')
</div>
</div>
<!-- fin contenu page -->


<!-- debut footer -->

<div class="footer-dari">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Liens Utiles</h3>
                    <ul>
                        <li><a href="/">Commander</a></li>
                        <li><a href="/apropos">Aprpos</a></li>
                        <li><a href="/contacterN">Contacter-Nous</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Opportunites</h3>
                    <ul>
                        <li><a href="inscrir">Rejoinez Nous Comme Chef</a></li>
                        <li><a href="#">Rejoinez Nous Comme livreur</a></li>
                        <li><a href="#">Rejoinez Nous Comme Partenaire</a></li>
                    </ul>
                </div>

                <div class="col-md-6 item social">
                    <h3>Suivez nous</h3>
                    <a href="#"><span class="iconify" data-icon="bx:bxl-facebook" data-inline="false"></span></a>
                    <a href="#"><span class="iconify" data-icon="ant-design:instagram-outlined" data-inline="false"></span></a>
                    <a href="#"><span class="iconify" data-icon="bx:bxl-twitter" data-inline="false"></span></a></div>
            </div>
            <p class="copyright">@copyright Dari Food </p>
        </div>
    </footer>
</div>
<!-- fin footer -->

@yield('scripts')

<!-- icon reseaux sociaux -->
<script src="{{asset('js/app.js')}}"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

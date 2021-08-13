<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="{{ asset('ressources/css/adminstyle.css') }}" rel="stylesheet">


</head>
<body>
<!-- debut corps -->
<div class="container-fluid admindash">
    <div class="dash shadow align-items-end">
        <p><a  href="/">
            <img src="{{ asset('ressources/images/logo.png')}}" alt="image" class="" width="30%">
</a>
        </p>
        <ul class="mt-5 pt-2">
            <li class="mb-3 {{(request()->segment(1) == 'command') ? 'actv' : ''}}"><a href="{{route('command.index')}}">Mes commandes</a></li>
            <li class="mb-3 {{(request()->segment(2) == 'create') ? 'actv' : ''}}"><a href="{{route('plat.create')}}">Ajouter un Plat </a></li>
            <li class="mb-3 {{(request()->segment(1) == 'plat' && request()->segment(2)==null) ? 'actv' : ''}}"><a href="{{route('plat.index')}}">Mes Plats </a></li>
            <li class="mb-3 {{(request()->segment(1) == 'profilchef') ? 'actv' : ''}}"><a href="{{url('/profilchef')}}">Mes informations</a></li>
        </ul>


    </div>
    <div class="row justify-content-end panel shadow p-2 pr-4">
    <a href="#menu-t" class="btn btn-default" id="menu-t"><em class="fa fa-bars"></em></a>
    <div class="dropdown user-dropdown  text-md-right"><a class="btn btn-stripped dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="{{asset('ressources/'.Auth::user()->photo) }}" alt="profile photo" class="circle float-left profile-photo" width="30px" height="auto">
						<div class="username mt-1">
							<h6 class="mb-1">{{Auth::user()->username}}</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
							 <a class="dropdown-item logout" href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em class="fa fa-power-off mr-1"></em>Se deconnecter</a></div>
					</div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
   <div class="content">
   @yield('content')


   </div>

</div>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script>
    $("#menu-t").click(function(e) {
        e.preventDefault();
        $(".admindash").toggleClass("dashmobile");
    });

</script>
</body>
</html>

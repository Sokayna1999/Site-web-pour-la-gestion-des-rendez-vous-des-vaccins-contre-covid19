
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Acceuil</title>
</head>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<body style="background-color:#1E90FF">
	<!--menu-->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

                <a class="nav-link" href="{{ url('/')}}">Page Principale</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-50 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a  class="btn btn-primary mb-2" href="{{ url('/ville')}}">Prendre un rendez-vous</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Se connecter</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
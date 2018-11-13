<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Energoprojekt Entel</title>
    <link rel="icon" href="#" type="image/png" sizes="16x16">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#">
            <img src="{{asset('images/logo.png')}}"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/')}}">Zaposleni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/proslaZaposlenja')}}">Istorija promene firmi zaposlenih</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/firme')}}">Bivse firme zaposlenih</a>
                </li>
            </ul><a href="{{asset('/unesi')}}">
            <span class="navbar-text">
      Unesi novog zaposlenog
            </span></a>
        </div>
    </nav>

    @yield('content')

</div>



</body>
</html>
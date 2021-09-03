<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
        <title>@yield('titulo')</title>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js" ></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('bienvenido')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cliente.index')}}">Cotizaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cliente.solicitud')}}">Registrar Solicitud</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}">@csrf<input class="nav-link" type="submit" value="Cerrar Sesión"></form>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        @yield('content')



    </body>
</html>

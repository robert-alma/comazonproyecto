<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bienvenido') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ejecutivo.index') }}">Listado de Solicitudes</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">@csrf<input class="nav-link" type="submit"
                            value="Cerrar Sesión"></form>
                </li>
            </ul>
        </div>
    </div>
</nav>

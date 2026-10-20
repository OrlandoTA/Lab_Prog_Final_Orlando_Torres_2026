<nav class="navbar navbar-expand-lg navbar-fixium">
    <div class="container-fluid">

        <!-- Logo a la izquierda -->
        <a class="navbar-brand" href="#">FIXIUM</a>

        <!-- Botón responsive -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links a la derecha -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/home/index.html">
                        <i class="bi bi-house"></i>
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/orders/index.html">
                        <i class="bi bi-clipboard-check"></i>
                        Órdenes
                    </a>
                </li>

                <li class="nav-item">
                    
                    <a class="nav-link" href="#"><i class="bi bi-laptop"></i>Equipos</a>
                </li>

                <li class="nav-item">
                    
                    <a class="nav-link" href="#"><i class="bi bi-people"></i>Clientes</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"> 
                        <i class="bi bi-person"></i>
                        Perfil
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Cuenta</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Cerrar sesión</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
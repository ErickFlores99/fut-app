<!-- Navbar solo para pantallas medianas y grandes -->
<nav class="navbar d-none d-md-block">
  <div class="container-fluid">
    <a href="{{ route('admin_home') }}" class="text-decoration-none text-dark navbar-brand">
      <img src="assets/images/logo.webp" alt="Logo" width="32" height="32" class="d-inline-block align-text-center">
        @yield('home','404')
    </a>

    <ul class="nav nav-underline justify-content-center">
      <li class="nav-item">
        <a class="nav-link @if( isset( $opcionActiva ) && $opcionActiva === 'competencia' ) active @endif" 
          href="{{ route('competencias.index') }}"
        >
            <i class="fa-solid fa-trophy"></i>
            Competencias
        </a>
      </li>
      <li class="nav-item">
          <a 
              class="nav-link" href="#">
              <i class="fa-solid fa-shirt"></i>
              Equipos
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa-solid fa-futbol"></i>
              Partidos/Decretos
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa-solid fa-clipboard"></i>
              Resultados
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa-solid fa-gear"></i>
              Sistema
          </a>
      </li>
    </ul>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa-solid fa-user"></i>
            {{ auth()->user()->name }} <!-- Muestra el nombre del usuario autenticado -->
        </a>
      </li>
      <li class="nav-item">
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-link text-decoration-none"" type="submit">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  Salir
              </button>
          </form>
      </li>
    </ul>
  </div>
</nav>


<!-- Navbar solo para móvil -->
<nav class="navbar fixed-bottom d-block d-md-none bg-white shadow-sm">
  <ul class="nav nav-pills nav-fill justify-content-center w-100">
    <li class="nav-item">
      <a href="{{ route('admin_home') }}" class="nav-link">
        <i class="fa-solid fa-house"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link @if( isset( $opcionActiva ) && $opcionActiva === 'competencia' ) active @endif"
         aria-current="page"
         href="{{ route('competencias.index') }}">
        <i class="fa-solid fa-trophy"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fa-solid fa-shirt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fa-solid fa-futbol"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fa-solid fa-clipboard"></i>
      </a>
    </li>

    <!-- Dropdown hacia arriba -->
    <li class="nav-item dropdown dropup">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-gear"></i>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <a class="dropdown-item" href="#">
            <i class="fa-solid fa-gears"></i> Config
          </a>
        </li>
        <li>
          <a class="dropdown-item" href="#">
            <i class="fa-solid fa-user-gear"></i> Perfil
          </a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="dropdown-item btn btn-link text-start text-decoration-none" type="submit">
              <i class="fa-solid fa-right-from-bracket"></i> Salir
            </button>
          </form>
        </li>
      </ul>
    </li>
  </ul>
</nav>

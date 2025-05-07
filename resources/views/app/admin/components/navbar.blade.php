<!-- Navbar solo para pantallas medianas y grandes -->
<nav class="navbar d-none d-md-block">
  <div class="container-fluid">
    <a href="{{ route('admin_home') }}" class="text-decoration-none text-dark navbar-brand">
      <img src="assets/images/logo.webp" alt="Logo" size="32" width="32" height="32" class="d-inline-block align-text-center">
        @yield('home','404')
    </a>

    <ul class="nav nav-underline justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa-solid fa-trophy"></i>
            Ligas/Torneos
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
<nav class="navbar fixed-bottom d-block d-md-none">
  <ul class="nav nav-pills nav-fill justify-content-center">
    <li class="nav-item">
      <a href="{{ route('admin_home') }}" class="nav-link">
        <i class="fa-solid fa-house"></i>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">
          <i class="fa-solid fa-table-list"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa-solid fa-futbol"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
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
          <i class="fa-solid fa-web-awesome"></i>
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
</nav>

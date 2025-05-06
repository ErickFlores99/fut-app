<!-- Navbar solo para pantallas medianas y grandes -->
<nav class="navbar d-none d-md-block">
  <div class="container-fluid">
    <a href="{{ route('public_home') }}" class="text-decoration-none text-dark navbar-brand">
      <img src="assets/images/logo.webp" alt="Logo" size="32" width="32" height="32" class="d-inline-block align-text-center">
        @yield('home','404')
    </a>

    <ul class="nav nav-underline justify-content-center">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
              <i class="fa-solid fa-table-list"></i>
              Tabla
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
              <i class="fa-solid fa-trophy"></i>
              Ligas / Torneos
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa-solid fa-shirt"></i>
              Equipos
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa-solid fa-web-awesome"></i>
              Destacado
          </a>
      </li>
    </ul>

    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<!-- Navbar solo para móvil -->
<nav class="navbar fixed-bottom d-block d-md-none">
  <ul class="nav nav-pills nav-fill justify-content-center">
    <li class="nav-item">
      <a href="{{ route('public_home') }}" class="nav-link">
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
  </ul>
</nav>

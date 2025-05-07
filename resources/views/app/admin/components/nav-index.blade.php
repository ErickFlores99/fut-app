<!-- Navbar solo para pantallas medianas y grandes -->
<nav class="navbar d-none d-md-block">
  <div class="container-fluid">
    <a href="{{ route('admin_home') }}" class="text-decoration-none text-dark navbar-brand">
      <img src="assets/images/logo.webp" alt="Logo" size="32" width="32" height="32" class="d-inline-block align-text-center">
        @yield('home','404')
    </a>

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
        <a class="nav-link" href="#">
            {{ auth()->user()->name }}
        </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('admin_home') }}" class="nav-link">
        <i class="fa-solid fa-house"></i>
      </a>
    </li>
    <li class="nav-item">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-link text-decoration-none" type="submit">
              <i class="fa-solid fa-right-from-bracket"></i>
            </button>
        </form>
    </li>
  </ul>
</nav>

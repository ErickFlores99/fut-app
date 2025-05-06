<nav class="menu">
  Barra de navegacion
  <ul>
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Sobre nosotros</a></li>
    <li><a href="#">Contacto</a></li>
    <li>
      <!-- Authentication -->
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit">
              Salir
          </button>
      </form>
    </li>
  </ul>
</nav>
<nav class="navbar navbar-menu-dark default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{ url('/') }}">
      <img src="{{ url('assets/images/logo_2.jpg') }}" alt="logo" /> </a>
    <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
      <img src="{{ url('assets/images/logo_2.jpg') }}" alt="logo" /> </a>
  </div>
  <div class="navbar-menu-wrapper navbar-menu-dark d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-left header-links">
      <li class="nav-item active d-none d-lg-flex">
        <a href="{{ url('home') }}" class="nav-link">
          <i class="mdi mdi-elevation-rise"></i>Reportes</a>
      </li>
    </ul>

    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text d-none d-md-inline-flex">HOLA {{ strtoupper(Auth::user()->name) }} {{ strtoupper(Auth::user()->last_name) }}</span>
          <img class="img-xs rounded-circle"  src="{{ url('assets/images/faces-clipart/pic-1.png') }}" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item"> Cambiar Contraseña </a>
          <a class="dropdown-item" href="{{ url('/logout') }}">Cerrar sesión</a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu icon-menu"></span>
    </button>
  </div>
</nav>
<nav class="navbar navbar-expand-lg main-navbar" style="background-color: #DEB887;">
  <!-- Kiri: Menu Beranda -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="{{ route('guru.dashboard') }}" class="nav-link"><strong>Beranda</strong></a>
    </li>
  </ul>

  <!-- Kanan: Profil dan Dropdown User -->
  <ul class="navbar-nav ml-auto">
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Guru</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in 5 min ago</div>
        <a href="features-profile.html" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>

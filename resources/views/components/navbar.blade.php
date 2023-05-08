<nav class="navbar navbar-expand-lg bg-body-tertiary py-4">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="/">KSU e-Inspeksi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item d-flex align-items-center">
          <a class="nav-link text-light" aria-current="page" href={{ route('about') }}>Tentang</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a class="nav-link text-light" aria-current="page" href={{ route('guide') }}>Panduan</a>
        </li>
        @auth
        <li class="nav-item">
          <div class="btn-group">
            <button type="button" class="btn text-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href={{ route('area') }}>Manage Area</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action={{ route('logout') }} method="GET">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </li>
        @else
        <li class="nav-item ms-3 btn btn-light">
          <a class="fw-bold text-decoration-none" href="/login">Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
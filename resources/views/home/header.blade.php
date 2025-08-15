
<nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
  <div class="new">
    <a class="navbar-brand" href="{{ url('/index') }}">
      <span class="text-green">Green</span><span class="div_deeg">Bloom</span>
    </a>

    <!-- Desktop Menu -->
    <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="{{ url('/index') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/categories') }}">Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/deals') }}">Deals</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
      </ul>
      

      <form class="d-flex ms-3" role="search" style="margin-right: 30px;">
        <div class="search-wrapper">
          <input type="search" class="form-control" placeholder="Search"/>
          <i class="bi bi-search"></i>
        </div>
      </form>
    </div>

    <!-- Cart and Account Icons -->
    <div class="nav-icons">
      <a href="#" aria-label="Cart" class="text-dark"><i class="bi bi-cart"></i></a>
      <a href="#" aria-label="Account" class="text-dark"><i class="bi bi-person"></i></a>
    </div>

    <!-- Hamburger for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<!-- Offcanvas Mobile Menu (opens from left) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
    <form class="d-flex mb-3" role="search">
      <div class="search-wrapper w-100">
        <input type="search" class="form-control" placeholder="Search"/>
        <i class="bi bi-search"></i>
      </div>
    </form>

    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link active" href="{{ url('/index') }}">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ url('/categories') }}">Categories</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ url('/deals') }}">Deals</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
    </ul>
  </div>
</div>
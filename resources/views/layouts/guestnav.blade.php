<nav class="navbar">

  <!-- Navbar brand -->
  <a href="/" class="navbar-brand">
    Shopavel
  </a>

  <!-- Navbar nav -->

    <ul class="navbar-nav"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->

    </ul>


  <div class="navbar-content ml-auto">
    <ul class="navbar-nav float-right"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
      <li class="nav-item active">
        {{-- <a href="/bricks" class="nav-link">Bricks</a> --}}
        <a href="{{ route('login') }}" class="nav-link">Login</a>
      </li>
      @if (Route::has('register'))
        <li class="nav-item active">
          <a href="{{ route('register') }}" class="nav-link">Register</a>
        </li>
      @endif
    </ul>

    <button class="btn btn-action mr-5" type="button" onclick="halfmoon.toggleDarkMode()" aria-label="Toggle dark mode">
      <i class="fa fa-moon-o" aria-hidden="true"></i>
    </button>
  </div>
  <!-- Navbar content (with the dropdown menu) -->
  <div class="navbar-content d-md-none ml-auto"> <!-- d-md-none = display: none on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
    <div class="dropdown with-arrow">
      <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">
        Menu
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right w-200" aria-labelledby="navbar-dropdown-toggle-btn-1"> <!-- w-200 = width: 20rem (200px) -->
        {{-- <a href="/bricks" class="dropdown-item">Bricks</a> --}}
        <div class="dropdown-divider"></div>

      </div>
    </div>
  </div>
</nav>

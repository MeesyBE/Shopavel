<nav class="navbar">
<button class="btn btn-link" type="button" onclick="halfmoon.toggleSidebar()" style="color: #000;"><span class="fas fa-bars"><span></button>
  <!-- Navbar brand -->
  <a href="/" class="navbar-brand">
    Shopavel
  </a>

  <!-- Navbar nav -->
  <ul class="navbar-nav d-none d-md-flex"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
    <li class="nav-item active">
      {{-- <a href="/bricks" class="nav-link">Bricks</a> --}}
    </li>
  </ul>
  <div class="float-right">
    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}
  </div>

  <!-- Navbar form (inline form) -->
  <form class="form-inline d-none d-md-flex ml-auto" action="/search" method="GET"> <!-- ml-auto = margin-left: auto -->
    {{-- {{ csrf_field() }} --}}
    <div class="input-group">
      <input type="text" class="form-control" name="q" placeholder="Search" required="required">
      <div class="input-group-append">
        <button class="btn" type="submit">
          <i class="fa fa-search" aria-hidden="true"></i>
          <span class="sr-only">Search</span> <!-- sr-only = show only on screen readers -->
        </button>
      </div>
    </div>
  </form>
  <div class="navbar-content">
    <button class="btn btn-action mr-5" type="button" onclick="halfmoon.toggleDarkMode()" aria-label="Toggle dark mode">
      <i class="fa fa-moon-o" aria-hidden="true"></i>
    </button>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button href="route('logout')" class="btn"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Logout') }}
        </button>
    </form>

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
        <div class="dropdown-content">
          <form class="form-inline ml-auto" action="/search" method="GET"> <!-- ml-auto = margin-left: auto -->
            {{-- {{ csrf_field() }} --}}
            <div class="input-group">
              <input type="text" class="form-control" name="q" placeholder="Search" required="required">
              <div class="input-group-append">
                <button class="btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <span class="sr-only">Search</span> <!-- sr-only = show only on screen readers -->
                </button>
              </div>
            </div>
          </form>




        </div>
      </div>
    </div>
  </div>
</nav>

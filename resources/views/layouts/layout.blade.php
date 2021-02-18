<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shopavel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <script data-ad-client="ca-pub-7561135709145217" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    @auth
        <body class="page-wrapper with-navbar with-sidebar">
        @include('layouts.nav')
        @include('layouts.sidebar')
    @else
        <body class="page-wrapper with-navbar">

        @include('layouts.guestnav')

    @endauth

          <div class="content-wrapper">
            <div class="container-fluid">
              <div class="content">
                @yield('content')
              </div>
            </div>
          </div>

        </body>


  <script src="https://kit.fontawesome.com/cd3fc1e065.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
  <script type="text/javascript">
  if (halfmoon.getPreferredMode() == "light-mode") {
    // Light mode is preferred
  }
  else if (halfmoon.getPreferredMode() == "dark-mode") {
    halfmoon.toggleDarkMode();
    // Dark mode is preferred
  }
  else if (halfmoon.getPreferredMode() == "not-set") {
    // Cookie does not exist
  }
    // Dark mode toggle demo
    function toggleDemo() {
      halfmoon.toggleDarkMode();
    }
  </script>

</html>

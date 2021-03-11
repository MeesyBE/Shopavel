<html lang="">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon-16x16.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png">


    <!-- Splash screen styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/css/layout.css"> --}}
</head>

<body class="" >
  @include('frontend.nav')
  
  <div class="flex bg-gray-400 m-4">
  </div>
        @yield('content')
</body>

</html>

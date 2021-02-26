<html lang="">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon-16x16.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png">


    <!-- Splash screen styles -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/layout.css">
    @livewireStyles

    @livewireScripts
    <script src="{{ asset('/js/app.js') }}" ></script>

</head>


<body class="shopavel-splash-screen-hidden shopavel-theme h-full" x-data="{ userInterface: false, sideBar: true}">

  @yield('content')

    {{-- <script type="text/javascript" src="/js/app.js"></script> --}}
</body>

</html>

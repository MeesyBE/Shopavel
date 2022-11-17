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
</head>



<body class="shopavel-splash-screen-hidden shopavel-theme" x-data="{ userInterface: false, SeoTab: false, sideBar: true, ContentTab: false, LayoutTab: false, SalesTab: false}">
    <div class="layout">
        @include('layouts.components.sidebar')
        <div class="wrapper">
            @include('layouts.components.header')
            <div class="justify-between">
                <div class="flex flex-col flex-auto w-full px-4 pt-4 xs:p-2">
                    <div class="flex flex-wrap w-full">
                        <div class="flex items-center justify-between w-full mt-4 px-4 xs:pr-0">
                            <div class="mr-6">
                                @isset($title)
                                <h2 class="m-0"> {{ $title }} </h2>
                                @endisset
                                @isset($subtitle)
                                <div class="text-secondary tracking-tight">{{ $subtitle }}</div>
                                @endisset
                            </div>
                            <div class="flex items-center">

                            </div>
                            <div class="flex items-right">
                                @isset($buttontekst)
                                @isset($buttonlink)
                                <a href="{{ $buttonlink }}">
                                    @endisset
                                    <button class="flex flex-row bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded" type="button" name="button">
                                        @isset($buttonicon)
                                        <div class="inline">
                                            <span class="material-icons">{{ $buttonicon }}</span>
                                        </div>
                                        @endisset
                                        <p class="inline">{{ $buttontekst }}</p>
                                    </button>
                                    @isset($buttonlink)
                                </a>
                                @endisset
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @isset($view)
            @if ($view == 'default')
            <div class="content h-full">
                <div class="flex flex-col flex-auto w-full px-4 py-8 xs:p-2">
                    <div class="flex flex-wrap w-full">
                        <div class="flex flex-auto min-w-80  p-4">
                            <div class="flex flex-col flex-auto bg-card shadow-md rounded overflow-hidden">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            @yield('content')
            @endif
            @else
            <div class="content justify-between h-full">
                <div class="flex flex-col flex-auto w-full px-4 py-8 xs:p-2">
                    <div class="flex flex-wrap w-full">
                        <div class="flex flex-auto min-w-80  p-4">
                            <div class="flex flex-col flex-auto bg-card shadow-md rounded overflow-hidden">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endisset


    @include('layouts.components.footer')
    </div>
    @livewireScripts
    <script type="text/javascript" src="/js/app.js"></script>
</body>

</html>

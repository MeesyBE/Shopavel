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

</head>

<script type="text/javascript" src="/js/main.js"></script>


<body class="shopavel-splash-screen-hidden shopavel-theme-light">
    <div class="layout">
        @include('layouts.components.sidebar')

        <div class="wrapper">
            @include('layouts.components.header')

            <div class="content">
                <div class="flex flex-col flex-auto w-full p-8 xs:p-2">
                    <div class="flex flex-wrap w-full">
                       <div class="flex items-center justify-between w-full my-4 px-4 xs:pr-0">
                            <div class="mr-6">
                                @isset($title) <h2 class="m-0"> {{ $title }} </h2> @endisset
                                @isset($subtitle) <div class="text-secondary tracking-tight">{{ $subtitle }}</div> @endisset
                            </div>
                            <div class="flex items-center">

                            </div>
                        </div>
                        <div class="flex flex-auto min-w-80  p-4">
                          <div class="flex flex-col flex-auto bg-card shadow-md rounded overflow-hidden">
                            @yield('content')
                          </div>
                        </div>
                        {{--  <div class="flex flex-auto min-w-80 h-100 p-4">
                            <div class="flex flex-col flex-auto bg-card shadow-md rounded overflow-hidden">
                                <div class="flex flex-col p-4 pl-6">
                                    <div class="flex items-center justify-between">
                                        <div class="font-bold text-md text-secondary uppercase tracking-wider">Orders</div>
                                        <div>
                                            <button aria-haspopup="true" mat-button="" class="mat-focus-indicator mat-menu-trigger h-8 min-h-8 px-2 mat-button mat-button-base">
                                                <span class="mat-button-wrapper">
                                                    <span lass="font-medium text-sm text-hint">30 days</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-6 font-semibold text-2xl leading-tight"><span class="text-teal-600">Desktop</span> is the most popular device </div>
                                </div>

                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
            <div class="footer"> Shopavel © 2021 </div>
        </div>
    </div>
    <script src="/js/runtime-es2015.8e3c2b0fe8f90be6aecb.js" type="module"></script>
    <!-- <script src="/js/runtime-es5.8e3c2b0fe8f90be6aecb.js" nomodule="" defer=""></script> -->
    <!-- <script src="/js/polyfills-es5.9ae4966512fd23c1c9ef.js" nomodule="" defer=""></script> -->
    <script src="/js/polyfills-es2015.7d5e288edb756feaa80f.js" type="module"></script>
    <script src="/js/main-es2015.823f4e2b19391286bb55.js" type="module"></script>
    <!-- <script src="/js/main-es5.823f4e2b19391286bb55.js" nomodule="" defer=""></script> -->

</body>
{{-- <script charset="utf-8" src="/js/32-es2015.3e7af9d7cc9aa3b43646.js"></script>
<script charset="utf-8" src="/js/3-es2015.a02aacdb52f98d4e3b31.js"></script>
<script charset="utf-8" src="/js/6-es2015.a5380fd18f41de83b5d2.js"></script>
<script charset="utf-8" src="/js/83-es2015.8744bc9771e084b1a4d3.js"></script>
<script charset="utf-8" src="/js/84-es2015.fe40ed13a454e1b14a2a.js"></script>
<script charset="utf-8" src="/js/85-es2015.ee274635369f9ee81a96.js"></script>
<script charset="utf-8" src="/js/86-es2015.abd543e37104602f9a16.js"></script>
<script charset="utf-8" src="/js/33-es2015.15dfc9ac0def443c2145.js"></script>
<script charset="utf-8" src="/js/87-es2015.1fed5e4ec5e2108ed9b8.js"></script>
<script charset="utf-8" src="/js/88-es2015.8cc19eccfac84eefcf06.js"></script>
<script charset="utf-8" src="/js/42-es2015.81547fb9cd5b49334a3c.js"></script>
<script charset="utf-8" src="/js/1-es2015.3b6f1f0e7df88d831a72.js"></script>
<script charset="utf-8" src="/js/4-es2015.012a61be44042589cf39.js"></script>
<script charset="utf-8" src="/js/5-es2015.88f929cd6e3ed52ad7b0.js"></script>
<script charset="utf-8" src="/js/41-es2015.baf17bdbb608a23352f1.js"></script>
<script charset="utf-8" src="/js/8-es2015.3f1deae532c2710f80c8.js"></script>
<script charset="utf-8" src="/js/9-es2015.99c35e8c9ed6b07c5c45.js"></script>
<script charset="utf-8" src="/js/15-es2015.2f8c3e38240c66a95813.js"></script>
<script charset="utf-8" src="/js/36-es2015.41e312a3bcce97f36230.js"></script>
<script charset="utf-8" src="/js/37-es2015.20a77e194f6f2542e644.js"></script>
<script charset="utf-8" src="/js/38-es2015.fc5795842c2a0ab8c97c.js"></script>
<script charset="utf-8" src="/js/34-es2015.fce42d6d3b7159975ac2.js"></script>
<script charset="utf-8" src="/js/39-es2015.ef7ad56b6e296c02dbc3.js"></script>
<script charset="utf-8" src="/js/23-es2015.e37cd488ab0f7948531a.js"></script>
<script charset="utf-8" src="/js/45-es2015.693301e1f22454ee7136.js"></script>
<script charset="utf-8" src="/js/46-es2015.bad657e5b417a2cca083.js"></script>
<script charset="utf-8" src="/js/47-es2015.08aaa2ac791177c76725.js"></script>
<script charset="utf-8" src="/js/48-es2015.85007ea62be4a8b1eb85.js"></script>
<script charset="utf-8" src="/js/24-es2015.41702a1e3c13440bad6b.js"></script>
<script charset="utf-8" src="/js/49-es2015.d551cefff67625f3dc2b.js"></script>
<script charset="utf-8" src="/js/50-es2015.1ca3ab8274d1810f32b8.js"></script>
<script charset="utf-8" src="/js/16-es2015.b843a842bd00ffb46464.js"></script>
<script charset="utf-8" src="/js/51-es2015.a879c827060ceeb09103.js"></script>
<script charset="utf-8" src="/js/52-es2015.efb44b024851e0632f89.js"></script>
<script charset="utf-8" src="/js/53-es2015.f9192f598b3e2eca74d3.js"></script>
<script charset="utf-8" src="/js/25-es2015.8965a5ef936edebb6cf9.js"></script>
<script charset="utf-8" src="/js/26-es2015.ac418b77269b549fe2d6.js"></script>
<script charset="utf-8" src="/js/27-es2015.7eb56c4cf90bc20e4f54.js"></script>
<script charset="utf-8" src="/js/28-es2015.8d43c43a10bb5681e0bf.js"></script>
<script charset="utf-8" src="/js/29-es2015.feed841e872a82287110.js"></script>
<script charset="utf-8" src="/js/54-es2015.8b75fc1813b5d3d094c1.js"></script>
<script charset="utf-8" src="/js/81-es2015.caae6b9fb0fffc894ef1.js"></script>
<script charset="utf-8" src="/js/7-es2015.4b3361e0a38a2f567b50.js"></script>
<script charset="utf-8" src="/js/55-es2015.286b9f7087788a468533.js"></script>
<script charset="utf-8" src="/js/30-es2015.9374eb1129065e0bcbc3.js"></script>
<script charset="utf-8" src="/js/56-es2015.211bfe8cb23d94c0eb59.js"></script>
<script charset="utf-8" src="/js/68-es2015.fe860a6bcc30211659de.js"></script>
<script charset="utf-8" src="/js/2-es2015.71a3400b1d8c2d4791f5.js"></script>
<script charset="utf-8" src="/js/57-es2015.4d0cdc124954bcf99fd5.js"></script>
<script charset="utf-8" src="/js/58-es2015.ef79c2816e6abccfd460.js"></script>
<script charset="utf-8" src="/js/60-es2015.0e74bea3db92eaa92e14.js"></script>
<script charset="utf-8" src="/js/59-es2015.a0632a8dd1e5f664ca1a.js"></script>
<script charset="utf-8" src="/js/64-es2015.b6bae900e8afc1e24c2f.js"></script>
<script charset="utf-8" src="/js/65-es2015.b33f750b5ae8189ddbc7.js"></script>
<script charset="utf-8" src="/js/67-es2015.ff544e66a46fe2dc30ae.js"></script>
<script charset="utf-8" src="/js/66-es2015.ea2e16780c89d796be7f.js"></script>
<script charset="utf-8" src="/js/61-es2015.1a7c3ff44309604585ed.js"></script>
<script charset="utf-8" src="/js/63-es2015.8eaef27eb7bef9dcc48d.js"></script>
<script charset="utf-8" src="/js/62-es2015.fdd6e14f7d8d83a25c82.js"></script>
<script charset="utf-8" src="/js/72-es2015.1a0175228af90e12b65b.js"></script>
<script charset="utf-8" src="/js/73-es2015.3218bda414cf87e6bed3.js"></script>
<script charset="utf-8" src="/js/75-es2015.eada76eb9a3989efdd06.js"></script>
<script charset="utf-8" src="/js/74-es2015.d7205ce72e03beac4c52.js"></script>
<script charset="utf-8" src="/js/69-es2015.1af65aa5e44bdf85ace1.js"></script>
<script charset="utf-8" src="/js/71-es2015.9f499f8cecf5b3f43ebf.js"></script>
<script charset="utf-8" src="/js/70-es2015.8222f7fd0f1c0c686d33.js"></script>
<script charset="utf-8" src="/js/76-es2015.057df727def44a792403.js"></script>
<script charset="utf-8" src="/js/17-es2015.e4d9f15714ed2df788ab.js"></script>
<script charset="utf-8" src="/js/77-es2015.43a9513725548d6752b8.js"></script>
<script charset="utf-8" src="/js/78-es2015.994814900b423bebe472.js"></script>
<script charset="utf-8" src="/js/79-es2015.723daab2f505457379c9.js"></script>
<script charset="utf-8" src="/js/31-es2015.07dc61ebc370ec808175.js"></script>
<script charset="utf-8" src="/js/80-es2015.e6da777b283919340fc3.js"></script>
<script charset="utf-8" src="/js/82-es2015.8071c91162ceec76d8c4.js"></script>
<script charset="utf-8" src="/js/43-es2015.4a1258b52cda0c47e62e.js"></script>
<script charset="utf-8" src="/js/14-es2015.2ac2b6073c1884b6dd0b.js"></script>
<script charset="utf-8" src="/js/44-es2015.874413cbdcc96970d20a.js"></script>
<script charset="utf-8" src="/js/22-es2015.9f0355a75a28024b9634.js"></script>
<script charset="utf-8" src="/js/35-es2015.1189fc720101ff156bba.js"></script> --}}

</html>

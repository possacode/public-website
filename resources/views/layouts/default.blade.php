@php $description = "PossaCode, une communauté innovante et dynamique dédiée à la formation et à l'organisation d'événements de rencontre pour les développeurs en Afrique"; @endphp
    <!doctype html>
<html lang="fr" class="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Acceuil') - PossaCode</title>
    <meta name="description" content="@yield('description', $description)"/>
    <meta property="og:site_name" content="PossaCode"/>
    <meta property="og:title" content="@yield('title', 'Acceuil')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="@yield('description', $description)"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="flex h-full flex-col">
<header class="header">
    <div class="navbar contained">
        <nav>
            <a href="/">
                <img
                    src="/images/logo-dark.png"
                    alt='Logo Possacode'
                    class='navbar-brand'
                />
            </a>
            <div class='navbar-nav'>
                <a href="/#activities" class="nav-link">Activités</a>
                <a href="/#latest-events" class="nav-link">Évènements</a>
                <a href="{{ route('blog') }}" class="nav-link">Blog</a>
            </div>
            <div class='hidden lg:flex items-center'>
                <a href="#" class="nav-link-main animated-button hover:fill-white">
                    <span>Nous soutenir</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                    </svg>
                </a>
            </div>
            <div class="flex lg:hidden">
                <a class="navlink-mobile-main" href="#">
                    Soutenir
                </a>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer class="bg-slate-900 text-white py-4">
    <div class="contained">
        <div class="grid grid-cols-2 lg:grid-cols-3 items-center gap-4 lg:gap-0 justify-between">
            <a href="/" class="col-span-full lg:col-span-1">
                <img src="/images/logo.png" class="max-w-full w-36 lg:w-42" alt="Possacode Logo">
            </a>
            <span class="block text-left lg:text-center text-sm lg:text-base text-slate-300">&copy PossaCode {{ date('Y') }}</span>

            <div class="flex items-center gap-5 justify-end">

                <div class="flex gap-4">
                    <a href="#" title="Facebook" class="px-1.5 lg:px-0 py-0 lg:py-2">
                        <svg class="w-5 lg:w-6 h-5 lg:h-6" fill="currentColor" viewBox="0 0 512 512"><g><path d="M512,256c0,-141.385 -114.615,-256 -256,-256c-141.385,0 -256,114.615 -256,256c0,127.777 93.616,233.685 216,252.89l0,-178.89l-65,0l0,-74l65,0l0,-56.4c0,-64.16 38.219,-99.6 96.695,-99.6c28.009,0 57.305,5 57.305,5l0,63l-32.281,0c-31.801,0 -41.719,19.733 -41.719,39.978l0,48.022l71,0l-11.35,74l-59.65,0l0,178.89c122.385,-19.205 216,-125.113 216,-252.89Z" style="fill:#1877f2;fill-rule:nonzero;"/><path d="M355.65,330l11.35,-74l-71,0l0,-48.022c0,-20.245 9.917,-39.978 41.719,-39.978l32.281,0l0,-63c0,0 -29.297,-5 -57.305,-5c-58.476,0 -96.695,35.44 -96.695,99.6l0,56.4l-65,0l0,74l65,0l0,178.89c13.033,2.045 26.392,3.11 40,3.11c13.608,0 26.966,-1.065 40,-3.11l0,-178.89l59.65,0Z" style="fill:#fff;fill-rule:nonzero;"/></g></svg>
                    </a>
                    <a href="#" title="Twitter" class="px-1.5 lg:px-0 py-0 lg:py-2">
                        <svg class="w-5 lg:w-6 h-5 lg:h-6" fill="currentColor" viewBox="0 0 512 512" width="100%"><rect height="400" style="fill:none;" width="400" x="56" y="56"/><path d="M161.014,464.013c193.208,0 298.885,-160.071 298.885,-298.885c0,-4.546 0,-9.072 -0.307,-13.578c20.558,-14.871 38.305,-33.282 52.408,-54.374c-19.171,8.495 -39.51,14.065 -60.334,16.527c21.924,-13.124 38.343,-33.782 46.182,-58.102c-20.619,12.235 -43.18,20.859 -66.703,25.498c-19.862,-21.121 -47.602,-33.112 -76.593,-33.112c-57.682,0 -105.145,47.464 -105.145,105.144c0,8.002 0.914,15.979 2.722,23.773c-84.418,-4.231 -163.18,-44.161 -216.494,-109.752c-27.724,47.726 -13.379,109.576 32.522,140.226c-16.715,-0.495 -33.071,-5.005 -47.677,-13.148l0,1.331c0.014,49.814 35.447,93.111 84.275,102.974c-15.464,4.217 -31.693,4.833 -47.431,1.802c13.727,42.685 53.311,72.108 98.14,72.95c-37.19,29.227 -83.157,45.103 -130.458,45.056c-8.358,-0.016 -16.708,-0.522 -25.006,-1.516c48.034,30.825 103.94,47.18 161.014,47.104" style="fill:#1da1f2;fill-rule:nonzero;"/></svg>
                    </a>
                    <a href="#" title="Youtube" class="px-1.5 lg:px-0 py-0 lg:py-2">
                        <svg class="w-5 lg:w-6 h-5 lg:h-6" fill="currentColor" viewBox="0 0 512 512"><g><path d="M501.299,132.766c-5.888,-22.03 -23.234,-39.377 -45.264,-45.264c-39.932,-10.701 -200.037,-10.701 -200.037,-10.701c0,0 -160.105,0 -200.038,10.701c-22.025,5.887 -39.376,23.234 -45.264,45.264c-10.696,39.928 -10.696,123.236 -10.696,123.236c0,0 0,83.308 10.696,123.232c5.888,22.03 23.239,39.381 45.264,45.268c39.933,10.697 200.038,10.697 200.038,10.697c0,0 160.105,0 200.037,-10.697c22.03,-5.887 39.376,-23.238 45.264,-45.268c10.701,-39.924 10.701,-123.232 10.701,-123.232c0,0 0,-83.308 -10.701,-123.236Z" style="fill:#ed1f24;fill-rule:nonzero;"/><path d="M204.796,332.803l133.018,-76.801l-133.018,-76.801l0,153.602Z" style="fill:#fff;fill-rule:nonzero;"/></g></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

@vite(['resources/js/app.js'])
@stack('scripts')
</body>
</html>

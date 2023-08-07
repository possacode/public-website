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
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
          rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="flex h-full flex-col">
<header class="header">
    <div class="navbar contained">
        <nav>
            <img
                src="/images/logo-dark.png"
                alt='Logo Possacode'
                class='navbar-brand'
            />
            <div class='navbar-nav'>
                <a href="#" class="nav-link">Activités</a>
                <a href="#" class="nav-link">Évènements</a>
                <a href="#" class="nav-link">Blog</a>
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


@vite(['resources/js/app.js'])
@stack('scripts')
</body>
</html>

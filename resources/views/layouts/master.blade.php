<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Café Luxe - Premium Coffee in Cambodia')</title>
    <meta name="description" content="@yield('meta_description', 'Discover Café Luxe: a premium coffee experience with artisan brews and a relaxing atmosphere in Phnom Penh.')">
    <meta name="keywords" content="café luxe, phnom penh coffee, artisan coffee cambodia, espresso cambodia, iced latte phnom penh, caramel macchiato, premium café cambodia, best coffee shop in phnom penh, specialty coffee, relaxing café cambodia">
    <meta name="google-site-verification" content="SumcZvRSTL1NU02UzrRcMy4JehLtFjdsTacuuMldV-w" />
    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta property="og:title" content="@yield('meta_og_title', 'Café Luxe - Premium Coffee in Cambodia')" />
    <meta property="og:description" content="@yield('meta_og_description', 'Savor the taste of artisan coffee at Café Luxe. Hot, cold, and signature blends served fresh.')" />
    <meta property="og:image" content="@yield('meta_og_image', asset('assets/images/logo.png'))" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('meta_twitter_title', 'Café Luxe')" />
    <meta name="twitter:description" content="@yield('meta_twitter_description', 'Premium coffee blends crafted in Cambodia.')" />
    <meta name="twitter:image" content="@yield('meta_twitter_image', asset('assets/images/logo.png'))" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite('resources/css/app.css')

    @yield('css')
    {!! SEOTools::generate() !!}
</head>

<body class="bg-[#fefaf6] text-[#3e2f2f] font-sans">
    <header class="bg-white shadow-md" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold tracking-wide">Café Luxe</a>

            <!-- Desktop Nav -->
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-6 text-lg">
                <a href="{{ route('home') }}" class="hover:text-[#8b5e3c]">Home</a>
                <a href="{{ route('about') }}" class="hover:text-[#8b5e3c]">About</a>
                <a href="{{ route('product') }}" class="hover:text-[#8b5e3c]">Product</a>
                <a href="{{ route('contact') }}" class="hover:text-[#8b5e3c]">Contact</a>

            </nav>


            <!-- Hamburger (Mobile) -->
            <button @click="open = !open" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6 text-[#3e2f2f]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path x-show="!open" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" x-cloak d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Nav -->
        <div x-show="open" x-transition class="md:hidden px-4 pb-4 space-y-2 bg-white">
            <a href="{{ route('home') }}" class="block text-lg hover:text-[#8b5e3c]">Home</a>
            <a href="{{ route('about') }}" class="block text-lg hover:text-[#8b5e3c]">About</a>
            <a href="{{ route('product') }}" class="block text-lg hover:text-[#8b5e3c]">Product</a>
            <a href="{{ route('contact') }}" class="block text-lg hover:text-[#8b5e3c]">Contact</a>
        </div>
    </header>
    <div class="mt-2">
        @yield('content')
    </div>

    <x-footer/>

    @yield('js')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

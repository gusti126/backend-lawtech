<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="@yield('meta_desc', 'LawTalk Solusi Hukum Terbaru Di Indonesia | LAWTALK Memudahkan Layanan Hukum')">
    <meta name="keywords"
        content="@yield('meta_key', 'Layanan Hukum Indonesia lengkap : Hukum Pidana, Hukum Perdata ')">
    <meta itemprop="image" content="@yield('meta_image', asset('image/logo.png'))">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://gusti.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('met_title', 'Layanan Hukum Hanya Tinggal Sekali Klik')">
    <meta property="og:description"
        content="@yield('meta_desc', 'LawTalk Solusi Hukum Terbaru Di Indonesia | LAWTALK Memudahkan Layanan Hukum')">
    <meta property="og:image" content="@yield('meta_image', asset('image/logo.png'))">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap">

    <!-- Styles -->
    @stack('style')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" defer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles
</head>

<body>
    {{-- navbar --}}
    @include('includes.navbar')
    {{-- endnavbar --}}

    {{-- bottombar --}}
    <div class="md:hidden">
        @include('includes.bottombar')
    </div>
    {{-- endbottombar --}}

    @yield('header')
    <div class="font-sans text-gray-900 antialiased container px-6 md:px-20  md:pt-2">
        @yield('content')
    </div>
    @include('includes.footer')
    @stack('script')
    @livewireScripts
</body>

</html>

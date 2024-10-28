<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ session('theme') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="text-base-content">
        <livewire:components.landing-navbar />
        {{ $slot }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeController = document.querySelector('.theme-controller');
            const currentTheme = localStorage.getItem('theme') || 'cupcake';
            document.documentElement.setAttribute('data-theme', currentTheme);

            themeController.checked = currentTheme === 'synthwave';

            themeController.addEventListener('change', function() {
                if (this.checked) {
                    document.documentElement.setAttribute('data-theme', 'synthwave');
                    localStorage.setItem('theme', 'synthwave');
                } else {
                    document.documentElement.setAttribute('data-theme', 'cupcake');
                    localStorage.setItem('theme', 'cupcake');
                }
            });
        });
    </script>
    @livewireScripts
</body>

</html>

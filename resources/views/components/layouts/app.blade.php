<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME', 'Henge2')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=abeezee:400,400i|figtree:300" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        
    </head>
    <body class="h-full bg-blue-200 dark:bg-blue-950 dark:text-white/80">
        <x-nav>
            <x-nav-pebble year="1"/>
            <x-nav-pebble year="2"/>
            <x-nav-pebble year="3"/>
            <x-nav-pebble year="4"/>
            <x-nav-pebble year="5"/>
            <x-nav-pebble year="6"/>
        </x-nav>

        <div class="font-serif">

            {!! Vite::asset('resources/css/app.css') !!}

            <div class="italic">
                {{ $slot }}
            </div>
        </div>
        

        @livewireScripts
    </body>
</html>


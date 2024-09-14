<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/css/themes/orange.css", "resources/css/custom.css", "resources/js/app.js"])
    </head>
    <body class="font-sans antialiased">
        
        <main id="app" class="flex flex-grow flex-col flex-1 justify-between min-h-dvh">            
            <navigation
                :user="{{ json_encode(Auth::user()) }}"
                :routes="{{ json_encode([
                    'dashboard' => route('dashboard'),
                    'profile' => route('profile.edit'),
                    'logout' => route('logout'),
                    'tests' => route('tests.index'),
                    'test-applications' => route('test-applications.index'),
                    'settings' => route('dashboard'),
                ]) }}"                
            ></navigation>

            {{ $slot }}

            <app-footer />
        </main>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>

    <body class="bg-white">
        <div class="mx-auto max-w-screen-xl">
            <div class="flex justify-center p-2">
                @include('components.partials.messages')
            </div>
            {{ $slot }}
        </div>
        @livewireScripts
    </body>

</html>

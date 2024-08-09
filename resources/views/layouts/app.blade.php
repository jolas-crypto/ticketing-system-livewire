<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <div class="min-h-full">
            @livewire('header-component')
        
            <main class="-mt-32">
                <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-6">
                    <div class="rounded-lg bg-gray-200 px-5 py-6 sm-px-6">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
        @livewireScripts
    </body>
</html>
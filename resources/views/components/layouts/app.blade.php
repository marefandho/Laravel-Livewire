<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    @livewireStyles
</head>
<body class="bg-gray-50 transition-all duration-300 lg:hs-overlay-layout-open:ps-65">
    <main id="content" class="min-h-screen">
        <livewire:breadcrumb :items="[]" />
        <livewire:sidebar />
        <div class="w-full lg:ps-4">
            <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                {{ $slot }} 
            </div>
        </div>
    </main>
    @livewireScripts
</body>
</html>

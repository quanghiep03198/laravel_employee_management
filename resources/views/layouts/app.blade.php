<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <div class="hidden xl:block">
            <x-sidebar />
        </div>

        <main class="xl:pl-72">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-full mx-auto py-6 px-4">
                        {{-- {{ $header }} --}}
                    </div>
                </header>
            @endif
            <!-- Page Content -->
            <div class="p-10">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>

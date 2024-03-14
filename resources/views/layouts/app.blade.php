<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>

   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/easyui.css') }}">
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icon.css') }}"> --}}
   {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color.css') }}"> --}}
   <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/js/jquery.easyui.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/js/jquery.datagrid.js') }}"></script>

   {{-- <script type="text/javascript" src="{{ asset('assets/js/easyloader.js') }}"></script> --}}

   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased [&>*]:!font-sans">
   <div class="min-h-screen bg-gray-100">
      <aside class="fixed hidden h-full xl:block">
         <x-layout.sidebar />
      </aside>
      <main class="xl:pl-72">
         <x-layout.navigation />
         <div class="!z-0 p-10 sm:p-2">
            {{ $slot }}
         </div>
      </main>
   </div>
</body>

</html>

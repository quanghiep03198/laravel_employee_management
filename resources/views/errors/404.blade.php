<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>404 - Not Found</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
   <main class="flex h-screen place-items-center items-center justify-center bg-white px-6 py-24 sm:py-32 xl:px-8">
      <div class="text-center">
         <p class="text-base font-semibold text-primary">404</p>
         <h1 class="mt-4 text-5xl font-bold tracking-tight text-gray-900">Page not found</h1>
         <p class="mt-6 text-base leading-7 text-muted">Sorry, we couldn’t find the page you’re looking for.</p>
         <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/"
               class="inline-flex items-center justify-center rounded-md bg-primary px-2.5 py-2 text-sm text-white">
               Go back home
            </a>
            <a href="#" class="text-sm font-semibold text-gray-900">
               Contact support <span aria-hidden="true">&rarr;</span></a>
         </div>
      </div>
   </main>
</body>

</html>

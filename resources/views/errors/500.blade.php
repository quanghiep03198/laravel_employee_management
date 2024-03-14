@php
   dd($exception);

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>500 - Internal Server Error</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
   <main class="flex h-screen place-items-center items-center justify-center bg-white px-6 py-24 sm:py-32 xl:px-8">
      <div class="text-center">
         <p class="text-base font-semibold text-primary">500</p>
         <h1 class="mt-4 text-5xl font-bold tracking-tight text-gray-900">Internal Server Error</h1>
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

      <div class="container mx-auto">
         <!-- notice here, the key rule is `[&_svg]:open:-rotate-180` -->
         <details class="border-2 border-dashed border-stone-500 p-4 [&_svg]:open:-rotate-180">
            <!-- notice here, we have disabled the summary's default triangle/arrow -->
            <summary class="flex cursor-pointer list-none items-center gap-4">
               <div>
                  <!-- notice here, we added our own triangle/arrow svg -->
                  <svg class="rotate-0 transform text-blue-700 transition-all duration-300" fill="none"
                     height="20" width="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24">
                     <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
               </div>
               <div>View details</div>
            </summary>

            {{-- <p>{{ $exception->getMessage() }}</p> --}}
         </details>
      </div>
   </main>
</body>

</html>

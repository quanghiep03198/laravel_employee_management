<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    <div class="bg-gray-900" x-data="{ open: false }">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <x-application-logo class="block h-9 w-auto fill-current text-primary" />
                    </a>
                </div>
                <div class="flex xl:hidden">
                    <button type="button" @click="open = true"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden xl:flex xl:gap-x-12">
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-foreground-contrast transition-colors duration-300 hover:text-primary">Product</a>
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-foreground-contrast transition-colors duration-300 hover:text-primary">Features</a>
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-foreground-contrast transition-colors duration-300 hover:text-primary">Marketplace</a>
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-foreground-contrast transition-colors duration-300 hover:text-primary">Company</a>
                </div>
                @if (Route::has('login'))
                    <div class="hidden items-center justify-end gap-x-6 xl:flex">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-semibold leading-6 text-foreground-contrast transition-colors duration-300 hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-semibold leading-6 text-foreground-contrast transition-colors duration-300 hover:text-primary">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-sm font-semibold leading-6 text-foreground-contrast transition-colors duration-300 hover:text-primary">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div role="dialog" aria-modal="true" @close.stop="open = false">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50 bg-gray-950/80" @click="open = false" x-show="open"
                    x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                <div x-show="open" x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <x-application-logo class="block h-9 w-auto fill-current text-primary" />
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400" @click="open = false">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d=" M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/25">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Product</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative isolate h-screen overflow-hidden pt-14">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
                alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div
                class="absolute left-1/2 top-1/2 mx-auto w-full max-w-2xl -translate-x-1/2 -translate-y-1/2 sm:max-w-full">
                <div class="mb-8 flex justify-center sm:hidden">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
                        Announcing our next round of funding. <a href="#" class="font-semibold text-white"><span
                                class="absolute inset-0" aria-hidden="true"></span>Read more <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white xl:text-6xl">
                        Data to enrich your online
                        business</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id
                        magna aliqua ad ad non deserunt sunt.
                        Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat
                        veniam occaecat fugiat aliqua.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm transition-opacity duration-300 hover:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get
                            started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-white">Learn
                            more <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </div>
</body>

</html>

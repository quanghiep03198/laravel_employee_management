<div x-data="{ open: false }" class="sticky top-0 !z-[100]">
    <nav class="border bg-background">
        <!-- Primary Navigation Menu -->
        <div class="mx-auto max-w-full px-4 lg:px-8">
            <div class="flex h-16 items-center justify-between xl:justify-end">

                <!-- Navigation Links -->

                <div class="flex flex-1 items-center divide-x divide-border xl:divide-x-0">
                    <div class="pr-4">

                        <button
                            class="aspect-square inline-flex h-8 w-8 items-center justify-center rounded p-2 text-foreground xl:hidden"
                            @click="open = ! open">
                            <i class="bi bi-list text-xl text-foreground"></i>
                        </button>
                    </div>

                    <div class="relative flex flex-1 items-center gap-x-2 bg-background pl-4 xl:p-0">
                        <i class="bi bi-search"></i>
                        <form action="">
                            <input type="text" class="block border-none text-sm focus:outline-none focus:!ring-0"
                                placeholder="Search ...">
                        </form>

                    </div>

                </div>

                <!-- Settings Dropdown -->
                <div class="flex items-center">
                    <x-ui.dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="group flex items-center gap-x-2 rounded-md border border-transparent bg-white text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">

                                <img class="h-18 w-8 rounded-full ring-offset-2 group-focus:ring-[2px] group-focus:ring-primary"
                                    src="https://ui-avatars.com/api/?name={{ substr(Auth::user()->name, 0, 1) }}"
                                    alt="">
                                <small class="line-clamp-1 sm:hidden">
                                    {{ Auth::user()->name }}
                                </small>
                                <i class="bi bi-chevron-down sm:hidden"></i>

                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-ui.dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-ui.dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-ui.dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-ui.dropdown-link>
                            </form>
                        </x-slot>
                    </x-ui.dropdown>
                </div>

            </div>
        </div>
    </nav>

    <div x-show="open" x-transition:enter="transition ease-in-out duration-300" @close.stop="open = false"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full" class="fixed inset-0 z-50 w-fit">
        <x-layout.sidebar />
    </div>
    <div x-show="open" @close.stop="open = false" x-transition:enter="transition ease-in-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 z-40 bg-gray-950/80 xl:hidden" @click="open = false">
    </div>
</div>

<div x-data="{ open: false }" class="sticky top-0">
    <nav class="bg-background border">
        <!-- Primary Navigation Menu -->
        <div class="max-w-full mx-auto px-4 lg:px-8">
            <div class="flex justify-between h-16 items-center xl:justify-end">



                <!-- Navigation Links -->

                <div class="divide-x divide-border flex items-center flex-1 xl:divide-x-0">
                    <div class="pr-4">

                        <button
                            class="p-2 xl:hidden aspect-square w-8 h-8 inline-flex items-center justify-center rounded text-foreground"
                            @click="open = ! open">
                            <i class="bi bi-list text-foreground text-xl"></i>
                        </button>
                    </div>

                    <div class="flex-1 relative pl-4 xl:p-0 bg-background flex items-center gap-x-2">
                        <i class="bi bi-search"></i>
                        <form action="">
                            <input type="text" class="border-none focus:outline-none focus:!ring-0 text-sm block"
                                placeholder="Search ...">
                        </form>

                    </div>

                </div>


                <!-- Settings Dropdown -->
                <div class="flex items-center ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="group flex items-center gap-x-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">

                                <img class="w-8 h-18 rounded-full group-focus:ring-[2px] ring-offset-2 group-focus:ring-primary"
                                    src="https://ui-avatars.com/api/?name={{ substr(Auth::user()->name, 0, 1) }}"
                                    alt="">
                                <small class="whitespace-nowrap">
                                    {{ Auth::user()->name }}
                                </small>
                                <i class="bi bi-chevron-down"></i>




                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>


            </div>
        </div>
    </nav>

    <div x-show="open" x-transition:enter="transition ease-in-out duration-300" @close.stop="open = false"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full" class="fixed z-50 w-fit inset-0">
        <x-layout.sidebar />
    </div>
    <div x-show="open" @close.stop="open = false" x-transition:enter="transition ease-in-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed z-40 bg-gray-950/80 inset-0 xl:hidden" @click="open = false">
    </div>
</div>

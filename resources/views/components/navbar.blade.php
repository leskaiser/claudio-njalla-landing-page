<header id="header" class="sticky top-0 z-50 transition-all duration-300">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="flex h-16 items-center justify-between">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <img src="{{ asset('logo.png') }}" alt="Digitwace" class="h-14 w-auto">
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden items-center gap-1 lg:flex">
                <a href="#" class="nav-link">Invest</a>
                <a href="#" class="nav-link">Markets</a>
                <a href="#" class="nav-link">Pricing</a>
                <a href="#" class="nav-link">Learn</a>
                <a href="#" class="nav-link">About</a>
            </div>

            {{-- Right Section --}}
            <div class="flex items-center gap-3">

                {{-- Language Switcher --}}
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.outside="open = false" type="button"
                            class="flex items-center gap-1.5 rounded-lg px-2 py-1.5 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        @if(app()->getLocale() === 'fr')
                            <span class="text-base leading-none">🇫🇷</span>
                            <span class="hidden sm:inline">FR</span>
                        @else
                            <span class="text-base leading-none">🇬🇧</span>
                            <span class="hidden sm:inline">EN</span>
                        @endif
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                         class="absolute right-0 mt-1 w-28 rounded-lg border border-gray-200 bg-white py-1 shadow-lg dark:border-gray-700 dark:bg-gray-900">
                        <a href="{{ route('lang.switch', 'en') }}"
                           class="flex items-center gap-2 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800 {{ app()->getLocale() === 'en' ? 'font-semibold' : '' }}">
                            <span>🇬🇧</span> English
                        </a>
                        <a href="{{ route('lang.switch', 'fr') }}"
                           class="flex items-center gap-2 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800 {{ app()->getLocale() === 'fr' ? 'font-semibold' : '' }}">
                            <span>🇫🇷</span> Français
                        </a>
                    </div>
                </div>

                {{-- Theme Toggle --}}
                <button id="theme-toggle" type="button"
                        class="rounded-lg p-2 text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white"
                        aria-label="Toggle theme">
                    <svg class="hidden h-5 w-5 dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                    </svg>
                    <svg class="h-5 w-5 dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"/>
                    </svg>
                </button>

                {{-- Mobile Menu Button --}}
                <button id="mobile-menu-btn" type="button"
                        class="rounded-lg p-2 text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800 lg:hidden"
                        aria-label="Open menu">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    {{-- Mobile Menu Overlay --}}
    <div id="mobile-menu-overlay" class="fixed inset-0 z-40 hidden bg-gray-950/80 backdrop-blur-sm"></div>

    {{-- Mobile Menu Panel --}}
    <div id="mobile-menu"
         class="fixed inset-y-0 right-0 z-50 w-full max-w-sm translate-x-full transform bg-white transition-transform duration-300 ease-out dark:bg-gray-900">
        <div class="flex h-16 items-center justify-between border-b border-gray-200 px-6 dark:border-gray-800">
            <span class="font-display font-bold text-gray-900 dark:text-white">Menu</span>
            <button id="mobile-menu-close" type="button"
                    class="rounded-lg p-2 text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800"
                    aria-label="Close menu">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <nav class="p-6">
            <div class="space-y-1">
                <a href="#" class="nav-link-mobile">Invest</a>
                <a href="#" class="nav-link-mobile">Markets</a>
                <a href="#" class="nav-link-mobile">Pricing</a>
                <a href="#" class="nav-link-mobile">Learn</a>
                <a href="#" class="nav-link-mobile">About</a>
            </div>
            {{-- Language Switcher Mobile --}}
            <div class="mt-6 border-t border-gray-200 pt-6 dark:border-gray-700">
                <p class="mb-2 px-4 text-xs font-semibold uppercase tracking-wider text-gray-400">Language</p>
                <a href="{{ route('lang.switch', 'en') }}"
                   class="nav-link-mobile flex items-center gap-3 {{ app()->getLocale() === 'en' ? 'bg-gray-100 dark:bg-gray-800' : '' }}">
                    <span>🇬🇧</span> English
                </a>
                <a href="{{ route('lang.switch', 'fr') }}"
                   class="nav-link-mobile flex items-center gap-3 {{ app()->getLocale() === 'fr' ? 'bg-gray-100 dark:bg-gray-800' : '' }}">
                    <span>🇫🇷</span> Français
                </a>
            </div>
        </nav>
    </div>
</header>

<header id="header" class="sticky top-0 z-50 transition-all duration-300">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="relative flex h-16 items-center justify-between">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <img src="{{ asset('logo.png') }}" alt="Digitwace" class="h-14 w-auto">
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden items-center gap-1 lg:flex">

                {{-- SOLUTIONS mega menu --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="nav-link flex items-center gap-1" :class="open ? 'text-gray-900 dark:text-white' : ''">
                        Solutions
                        <svg class="h-3.5 w-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="fixed left-1/2 top-16 z-50 mt-0 w-[640px] max-w-[95vw] -translate-x-1/2 rounded-2xl border border-gray-100 bg-white p-7 shadow-2xl ring-1 ring-black/5 dark:border-gray-800 dark:bg-gray-900 dark:ring-white/5">
                        <div class="grid grid-cols-2 gap-6 divide-x divide-gray-100 dark:divide-gray-800">
                            <div class="pr-7"><p class="mega-title">Payouts</p>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Pay-to-Mobile-Wallets
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Pay-to-Banks
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Pay-to-Cards
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Pay-to-Stablecoin-Wallets
                                </a>
                            </div>
                            <div class="pl-7"><p class="mega-title">Collections</p>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Accept Mobile Wallets
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Accept Bank Payments
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Accept Digital Vouchers
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Accept BNPL
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- INDUSTRIES mega menu --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="nav-link flex items-center gap-1" :class="open ? 'text-gray-900 dark:text-white' : ''">
                        Industries
                        <svg class="h-3.5 w-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="fixed left-1/2 top-16 z-50 mt-0 w-[680px] max-w-[95vw] -translate-x-1/2 rounded-2xl border border-gray-100 bg-white p-7 shadow-2xl ring-1 ring-black/5 dark:border-gray-800 dark:bg-gray-900 dark:ring-white/5">
                        <div class="grid grid-cols-2 gap-6 divide-x divide-gray-100 dark:divide-gray-800">
                            <div class="pr-7"><p class="mega-title">Financial Services</p>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Banks & Neobanks
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Money Transfer Operators
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Mobile Wallets
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Digital Asset Companies
                                </a>
                            </div>
                            <div class="pl-7"><p class="mega-title">Platforms & Commerce</p>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Gig Economy Platforms
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Payment Service Providers
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    E-commerce
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Payroll & EOR
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- COMPANY mega menu --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="nav-link flex items-center gap-1" :class="open ? 'text-gray-900 dark:text-white' : ''">
                        Company
                        <svg class="h-3.5 w-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="fixed left-1/2 top-16 z-50 mt-0 w-[640px] max-w-[95vw] -translate-x-1/2 rounded-2xl border border-gray-100 bg-white p-7 shadow-2xl ring-1 ring-black/5 dark:border-gray-800 dark:bg-gray-900 dark:ring-white/5">
                        <div class="grid grid-cols-2 gap-6 divide-x divide-gray-100 dark:divide-gray-800">
                            <div class="pr-7"><p class="mega-title">Who we are</p>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    About Us
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Careers
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    ESG Programme
                                </a>
                            </div>
                            <div class="pl-7"><p class="mega-title">Connect</p>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Partner Programme
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Press Centre
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Events
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- RESOURCES mega menu --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="nav-link flex items-center gap-1" :class="open ? 'text-gray-900 dark:text-white' : ''">
                        Resources
                        <svg class="h-3.5 w-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="fixed left-1/2 top-16 z-50 mt-0 w-[640px] max-w-[95vw] -translate-x-1/2 rounded-2xl border border-gray-100 bg-white p-7 shadow-2xl ring-1 ring-black/5 dark:border-gray-800 dark:bg-gray-900 dark:ring-white/5">
                        <div class="grid grid-cols-2 gap-6 divide-x divide-gray-100 dark:divide-gray-800">
                            <div class="pr-7"><p class="mega-title">Content</p>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Newsroom
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Insights
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Knowledge Base
                                </a>
                            </div>
                            <div class="pl-7"><p class="mega-title">Developers</p>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    Case Studies
                                </a>
                                <a href="#" class="block w-full rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                                    API Documentation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Simple links --}}
                <a href="#" class="nav-link">Pricing</a>

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
         class="fixed inset-0 z-50 transform transition-transform duration-300 ease-out"
         style="background-color: #ffffff; transform: translateX(100%)">
        <div class="flex h-16 items-center justify-between border-b border-gray-200 px-6" style="background-color: #ffffff;">
            <span class="font-display font-bold text-gray-900">Menu</span>
            <button id="mobile-menu-close" type="button"
                    class="rounded-lg p-2 text-gray-600 hover:bg-gray-100"
                    aria-label="Close menu">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <nav class="overflow-y-auto p-6" style="background-color: #ffffff; min-height: calc(100% - 64px);">
            <div class="space-y-1">
                {{-- Mobile: Solutions --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="nav-link-mobile flex w-full items-center justify-between">
                        Solutions
                        <svg class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open" class="ml-4 mt-1 space-y-1 border-l-2 border-gray-100 pl-3 dark:border-gray-800">
                        <a href="#" class="nav-link-mobile text-sm">Pay-to-Mobile-Wallets</a>
                        <a href="#" class="nav-link-mobile text-sm">Pay-to-Banks</a>
                        <a href="#" class="nav-link-mobile text-sm">Pay-to-Cards</a>
                        <a href="#" class="nav-link-mobile text-sm">Pay-to-Stablecoin-Wallets</a>
                        <a href="#" class="nav-link-mobile text-sm">Accept Mobile Wallets</a>
                        <a href="#" class="nav-link-mobile text-sm">Accept Bank Payments</a>
                        <a href="#" class="nav-link-mobile text-sm">Accept Digital Vouchers</a>
                        <a href="#" class="nav-link-mobile text-sm">Accept BNPL</a>
                    </div>
                </div>
                {{-- Mobile: Industries --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="nav-link-mobile flex w-full items-center justify-between">
                        Industries
                        <svg class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open" class="ml-4 mt-1 space-y-1 border-l-2 border-gray-100 pl-3 dark:border-gray-800">
                        <a href="#" class="nav-link-mobile text-sm">Banks & Neobanks</a>
                        <a href="#" class="nav-link-mobile text-sm">Money Transfer Operators</a>
                        <a href="#" class="nav-link-mobile text-sm">Mobile Wallets</a>
                        <a href="#" class="nav-link-mobile text-sm">Gig Economy Platforms</a>
                        <a href="#" class="nav-link-mobile text-sm">Digital Asset Companies</a>
                        <a href="#" class="nav-link-mobile text-sm">Payment Service Providers</a>
                        <a href="#" class="nav-link-mobile text-sm">E-commerce</a>
                        <a href="#" class="nav-link-mobile text-sm">Payroll & EOR</a>
                    </div>
                </div>
                {{-- Mobile: Company --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="nav-link-mobile flex w-full items-center justify-between">
                        Company
                        <svg class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open" class="ml-4 mt-1 space-y-1 border-l-2 border-gray-100 pl-3 dark:border-gray-800">
                        <a href="#" class="nav-link-mobile text-sm">About Us</a>
                        <a href="#" class="nav-link-mobile text-sm">Careers</a>
                        <a href="#" class="nav-link-mobile text-sm">ESG Programme</a>
                        <a href="#" class="nav-link-mobile text-sm">Partner Programme</a>
                        <a href="#" class="nav-link-mobile text-sm">Press Centre</a>
                        <a href="#" class="nav-link-mobile text-sm">Events</a>
                    </div>
                </div>
                {{-- Mobile: Resources --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="nav-link-mobile flex w-full items-center justify-between">
                        Resources
                        <svg class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open" class="ml-4 mt-1 space-y-1 border-l-2 border-gray-100 pl-3 dark:border-gray-800">
                        <a href="#" class="nav-link-mobile text-sm">Newsroom</a>
                        <a href="#" class="nav-link-mobile text-sm">Insights</a>
                        <a href="#" class="nav-link-mobile text-sm">Knowledge Base</a>
                        <a href="#" class="nav-link-mobile text-sm">Case Studies</a>
                        <a href="#" class="nav-link-mobile text-sm">API Documentation</a>
                    </div>
                </div>
                <a href="#" class="nav-link-mobile">Pricing</a>
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


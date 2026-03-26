<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/svg+xml" href="favicon.svg"><!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap"
              rel="stylesheet"><!-- Theme script (runs before render to prevent flash) -->
        <script>
            const theme = localStorage.getItem('theme');
            if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            }
        </script>
        <link rel="stylesheet" href="{{asset("_astro/Base.eMwR1-en.css")}}">

    </head>
    <body class="min-h-screen bg-gray-50 text-gray-900 dark:bg-gray-950 dark:text-gray-100"> <!-- Market Ticker Bar -->
    <div class="border-b border-gray-200 bg-gray-100 dark:border-gray-800 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl overflow-hidden px-4">
            <div class="ticker-animate flex items-center gap-8 py-2">
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">SPY</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$587.42</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +0.72% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">QQQ</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$518.91</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +1.54% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">BTC</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$104,892</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +2.28% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">ETH</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$3,342</span> <span
                        class="font-mono text-sm text-danger-600 dark:text-danger-400"> -1.33% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">AAPL</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$227.63</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +1.39% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">TSLA</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$424.07</span> <span
                        class="font-mono text-sm text-danger-600 dark:text-danger-400"> -2.06% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">NVDA</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$137.71</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +4.11% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">DIA</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$437.89</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +0.36% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">SPY</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$587.42</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +0.72% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">QQQ</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$518.91</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +1.54% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">BTC</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$104,892</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +2.28% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">ETH</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$3,342</span> <span
                        class="font-mono text-sm text-danger-600 dark:text-danger-400"> -1.33% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">AAPL</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$227.63</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +1.39% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">TSLA</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$424.07</span> <span
                        class="font-mono text-sm text-danger-600 dark:text-danger-400"> -2.06% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">NVDA</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$137.71</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +4.11% </span></div>
                <div class="flex shrink-0 items-center gap-3"><span
                        class="font-mono text-sm font-medium text-gray-600 dark:text-gray-400">DIA</span> <span
                        class="font-mono text-sm text-gray-900 dark:text-white">$437.89</span> <span
                        class="font-mono text-sm text-success-600 dark:text-success-400"> +0.36% </span></div>
            </div>
        </div>
    </div>
    <header id="header" class="sticky top-0 z-50 transition-all duration-300">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <nav class="flex h-16 items-center justify-between"> <!-- Logo --> <a href="index.html"
                                                                                  class="flex items-center gap-2">
                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-primary-500 to-accent-500">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <span class="font-display text-xl font-bold text-gray-900 dark:text-white">
Nex<span class="text-primary-600 dark:text-primary-400">Trade</span> </span> </a> <!-- Desktop Navigation -->
                <div class="hidden items-center gap-1 lg:flex"><a href="invest/index.html"
                                                                  class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Invest </a><a href="markets/index.html"
                                      class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Markets </a><a href="pricing/index.html"
                                       class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Pricing </a><a href="learn/index.html"
                                       class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Learn </a><a href="about/index.html"
                                     class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        About </a></div> <!-- Right Section -->
                <div class="flex items-center gap-3"> <!-- Live Market Status -->
                    <div class="hidden items-center gap-2 rounded-full bg-gray-100 px-3 py-1.5 dark:bg-gray-800 sm:flex"><span
                            class="relative flex h-2 w-2"> <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-success-400 opacity-75"></span> <span
                                class="relative inline-flex h-2 w-2 rounded-full bg-success-500"></span> </span> <span
                            class="text-xs font-medium text-gray-600 dark:text-gray-400">Markets Open</span></div>
                    <!-- Theme Toggle -->
                    <button id="theme-toggle" type="button"
                            class="rounded-lg p-2 text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white"
                            aria-label="Toggle theme">
                        <svg class="hidden h-5 w-5 dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"></path>
                        </svg>
                        <svg class="h-5 w-5 dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"></path>
                        </svg>
                    </button> <!-- Auth Links --> <a href="login/index.html"
                                                     class="hidden rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-300 dark:hover:text-white sm:block">
                        Log in
                    </a> <a href="signup/index.html"
                            class="hidden rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 px-5 py-2 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition-all hover:from-primary-400 hover:to-primary-500 sm:block">
                        Get Started
                    </a> <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" type="button"
                            class="rounded-lg p-2 text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800 lg:hidden"
                            aria-label="Open menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </button>
                </div>
            </nav>
        </div> <!-- Mobile Menu Overlay -->
        <div id="mobile-menu-overlay" class="fixed inset-0 z-40 hidden bg-gray-950/80 backdrop-blur-sm"></div>
        <!-- Mobile Menu Panel -->
        <div id="mobile-menu"
             class="fixed inset-y-0 right-0 z-50 w-full max-w-sm translate-x-full transform bg-white transition-transform duration-300 ease-out dark:bg-gray-900">
            <div class="flex h-16 items-center justify-between border-b border-gray-200 px-6 dark:border-gray-800"><span
                    class="font-display font-bold text-gray-900 dark:text-white">Menu</span>
                <button id="mobile-menu-close" type="button"
                        class="rounded-lg p-2 text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800"
                        aria-label="Close menu">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav class="p-6">
                <div class="space-y-1"><a href="invest/index.html"
                                          class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Invest </a><a href="markets/index.html"
                                      class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Markets </a><a href="pricing/index.html"
                                       class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Pricing </a><a href="learn/index.html"
                                       class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Learn </a><a href="about/index.html"
                                     class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        About </a></div>
                <div class="mt-8 space-y-3"><a href="login/index.html"
                                               class="block rounded-lg border border-gray-200 px-4 py-3 text-center font-medium text-gray-600 hover:bg-gray-100 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800">
                        Log in
                    </a> <a href="signup/index.html"
                            class="block rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 px-4 py-3 text-center font-semibold text-white">
                        Get Started Free
                    </a></div>
            </nav>
        </div>
    </header>
    <main>
        <section class="relative overflow-hidden bg-gray-50 pb-16 pt-24 dark:bg-gray-950 lg:pb-24 lg:pt-32">
            <!-- Background Elements -->
            <div class="absolute inset-0 grid-pattern opacity-50"></div>
            <div class="pointer-events-none absolute right-0 top-0 h-[600px] w-[600px] rounded-full bg-primary-500/10 blur-[120px]"></div>
            <div class="pointer-events-none absolute bottom-0 left-0 h-[400px] w-[400px] rounded-full bg-accent-500/10 blur-[100px]"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16"> <!-- Left Column - Content -->
                    <div class="text-center lg:text-left"> <!-- Badge -->
                        <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2">
            <span class="relative flex h-2 w-2"> <span
                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-accent-400 opacity-75"></span> <span
                    class="relative inline-flex h-2 w-2 rounded-full bg-accent-500"></span> </span> <span
                                class="text-sm font-medium text-accent-700 dark:text-accent-300">$0 Commission Trading</span></div>
                        <!-- Headline --> <h1
                            class="font-display text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                            Invest Smarter,
                            <br> <span class="gradient-text">Trade Better</span></h1> <!-- Subheadline --> <p
                            class="mx-auto mt-6 max-w-xl text-lg text-gray-600 dark:text-gray-400 lg:mx-0">
                            The modern investment platform for stocks, ETFs, crypto, and options. Start with as little as $1 and build
                            your wealth commission-free.
                        </p> <!-- CTAs -->
                        <div class="mt-8 flex flex-col items-center gap-4 sm:flex-row lg:justify-start"><a href="signup/index.html"
                                                                                                           class="btn-primary inline-flex w-full items-center justify-center gap-2 rounded-xl px-8 py-4 text-lg sm:w-auto">
                                Start Investing
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a> <a href="demo.html"
                                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-8 py-4 text-lg font-semibold text-gray-900 transition-colors hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 sm:w-auto">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z"></path>
                                </svg>
                                Watch Demo
                            </a></div> <!-- Trust Indicators -->
                        <div class="mt-10 flex flex-col items-center gap-6 lg:flex-row lg:items-center"> <!-- Avatars -->
                            <div class="flex items-center">
                                <div class="flex -space-x-3"><img
                                        class="h-10 w-10 rounded-full border-2 border-white dark:border-gray-900"
                                        src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&amp;h=100&amp;fit=crop"
                                        alt="User"> <img class="h-10 w-10 rounded-full border-2 border-white dark:border-gray-900"
                                                         src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&amp;h=100&amp;fit=crop"
                                                         alt="User"> <img
                                        class="h-10 w-10 rounded-full border-2 border-white dark:border-gray-900"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&amp;h=100&amp;fit=crop"
                                        alt="User"> <img class="h-10 w-10 rounded-full border-2 border-white dark:border-gray-900"
                                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&amp;h=100&amp;fit=crop"
                                                         alt="User">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-white bg-primary-500 text-xs font-bold text-white dark:border-gray-900">
                                        +12M
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <div class="flex text-yellow-400">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                </div>
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">4.9/5 from 50K+ reviews</span></div>
                        </div>
                    </div> <!-- Right Column - App Preview -->
                    <div class="relative">
                        <div class="relative mx-auto max-w-md lg:max-w-none">
                            <!-- Phone Frame - iPhone proportions (9:19.5 aspect ratio) -->
                            <div class="relative mx-auto aspect-[9/19.5] w-64 rounded-[3rem] border-8 border-gray-900 bg-gray-900 p-2 shadow-2xl dark:border-gray-700 lg:w-72">
                                <!-- Dynamic Island / Notch -->
                                <div class="absolute left-1/2 top-4 z-10 h-7 w-24 -translate-x-1/2 rounded-full bg-gray-900 dark:bg-gray-700"></div>
                                <div class="flex h-full flex-col overflow-hidden rounded-[2.25rem] bg-white dark:bg-gray-900">
                                    <!-- App Header -->
                                    <div class="bg-gradient-to-r from-primary-500 to-primary-600 px-4 pb-4 pt-10 text-white">
                                        <div class="flex items-center justify-between">
                                            <div><p class="text-xs opacity-80">Portfolio Value</p>
                                                <p class="font-mono text-xl font-bold">$47,382.54</p>
                                                <p class="flex items-center gap-1 text-xs text-accent-300">
                                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                    </svg>
                                                    +$2,341.20 (5.19%) today
                                                </p>
                                            </div>
                                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white/20">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div> <!-- Chart Placeholder -->
                                    <div class="relative h-28 bg-gray-50 dark:bg-gray-800"> <!-- Time Period Tabs -->
                                        <div class="absolute left-0 right-0 top-2 flex justify-center gap-2 px-4"><span
                                                class="rounded-full bg-primary-500 px-2 py-0.5 text-[10px] font-medium text-white">1D</span>
                                            <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500 dark:text-gray-400">1W</span>
                                            <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500 dark:text-gray-400">1M</span>
                                            <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500 dark:text-gray-400">1Y</span>
                                            <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500 dark:text-gray-400">ALL</span>
                                        </div>
                                        <svg class="h-full w-full pt-6" viewBox="0 0 300 100" preserveAspectRatio="none">
                                            <defs>
                                                <linearGradient id="chartGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                                    <stop offset="0%" style="stop-color: rgb(34, 197, 94); stop-opacity: 0.3"></stop>
                                                    <stop offset="100%" style="stop-color: rgb(34, 197, 94); stop-opacity: 0"></stop>
                                                </linearGradient>
                                            </defs>
                                            <path d="M0,80 Q30,70 60,65 T120,50 T180,55 T240,30 T300,20 V100 H0 Z"
                                                  fill="url(#chartGradient)"></path>
                                            <path d="M0,80 Q30,70 60,65 T120,50 T180,55 T240,30 T300,20" fill="none" stroke="rgb(34, 197, 94)"
                                                  stroke-width="2"></path>
                                        </svg>
                                    </div> <!-- Holdings Section -->
                                    <div class="flex-1 overflow-hidden">
                                        <div class="flex items-center justify-between border-b border-gray-100 px-4 py-2 dark:border-gray-800">
                                            <span class="text-xs font-semibold text-gray-900 dark:text-white">Holdings</span> <span
                                                class="text-xs text-primary-600 dark:text-primary-400">See all</span></div>
                                        <div class="divide-y divide-gray-100 px-4 dark:divide-gray-800">
                                            <div class="flex items-center justify-between py-2.5">
                                                <div class="flex items-center gap-2.5">
                                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-sm font-bold dark:bg-gray-800">
                                                        A
                                                    </div>
                                                    <div><p class="text-sm font-semibold text-gray-900 dark:text-white">AAPL</p>
                                                        <p class="text-[10px] text-gray-500">12.5 shares</p></div>
                                                </div>
                                                <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">
                                                        $2,845</p>
                                                    <p class="text-[10px] text-success-600 dark:text-success-400">+1.39%</p></div>
                                            </div>
                                            <div class="flex items-center justify-between py-2.5">
                                                <div class="flex items-center gap-2.5">
                                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-orange-100 text-sm font-bold text-orange-600 dark:bg-orange-900/30">
                                                        ₿
                                                    </div>
                                                    <div><p class="text-sm font-semibold text-gray-900 dark:text-white">BTC</p>
                                                        <p class="text-[10px] text-gray-500">0.42 BTC</p></div>
                                                </div>
                                                <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">
                                                        $44,054</p>
                                                    <p class="text-[10px] text-success-600 dark:text-success-400">+2.28%</p></div>
                                            </div>
                                            <div class="flex items-center justify-between py-2.5">
                                                <div class="flex items-center gap-2.5">
                                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-sm font-bold text-green-600 dark:bg-green-900/30">
                                                        N
                                                    </div>
                                                    <div><p class="text-sm font-semibold text-gray-900 dark:text-white">NVDA</p>
                                                        <p class="text-[10px] text-gray-500">3.2 shares</p></div>
                                                </div>
                                                <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">
                                                        $440</p>
                                                    <p class="text-[10px] text-success-600 dark:text-success-400">+4.11%</p></div>
                                            </div>
                                            <div class="flex items-center justify-between py-2.5">
                                                <div class="flex items-center gap-2.5">
                                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-600 dark:bg-blue-900/30">
                                                        S
                                                    </div>
                                                    <div><p class="text-sm font-semibold text-gray-900 dark:text-white">SPY</p>
                                                        <p class="text-[10px] text-gray-500">0.8 shares</p></div>
                                                </div>
                                                <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">
                                                        $469</p>
                                                    <p class="text-[10px] text-success-600 dark:text-success-400">+0.72%</p></div>
                                            </div>
                                        </div>
                                    </div> <!-- Bottom Navigation -->
                                    <div class="border-t border-gray-100 bg-white px-6 py-3 dark:border-gray-800 dark:bg-gray-900">
                                        <div class="flex items-center justify-between">
                                            <div class="flex flex-col items-center gap-1">
                                                <svg class="h-5 w-5 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                                                </svg>
                                                <span class="text-[9px] font-medium text-primary-600 dark:text-primary-400">Home</span></div>
                                            <div class="flex flex-col items-center gap-1">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                                </svg>
                                                <span class="text-[9px] font-medium text-gray-400">Search</span></div>
                                            <div class="flex flex-col items-center gap-1">
                                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary-500">
                                                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                         stroke-width="2.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center gap-1">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"></path>
                                                </svg>
                                                <span class="text-[9px] font-medium text-gray-400">Markets</span></div>
                                            <div class="flex flex-col items-center gap-1">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                                                </svg>
                                                <span class="text-[9px] font-medium text-gray-400">Profile</span></div>
                                        </div>
                                    </div> <!-- Home Indicator -->
                                    <div class="flex justify-center bg-white pb-2 dark:bg-gray-900">
                                        <div class="h-1 w-24 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                                    </div>
                                </div>
                            </div> <!-- Floating Cards -->
                            <div class="absolute -left-4 top-24 hidden animate-float rounded-xl border border-gray-200 bg-white p-3 shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:block"
                                 style="animation-delay: 0.5s;">
                                <div class="flex items-center gap-2.5">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-full bg-success-100 dark:bg-success-900/30">
                                        <svg class="h-4 w-4 text-success-600 dark:text-success-400" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <div><p class="text-[10px] text-gray-500">Order Filled</p>
                                        <p class="text-sm font-semibold text-gray-900 dark:text-white">Bought 5 TSLA</p></div>
                                </div>
                            </div>
                            <div class="absolute -right-2 bottom-44 hidden animate-float rounded-xl border border-gray-200 bg-white p-3 shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:block"
                                 style="animation-delay: 1s;">
                                <div class="flex items-center gap-2.5">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-100 dark:bg-primary-900/30">
                                        <svg class="h-4 w-4 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div><p class="text-[10px] text-gray-500">Dividend Received</p>
                                        <p class="text-sm font-semibold text-gray-900 dark:text-white">+$42.30 AAPL</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Stats Bar -->
                <div class="mt-16 grid grid-cols-2 gap-6 rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900 sm:grid-cols-4 lg:mt-24">
                    <div class="text-center"><p class="font-mono text-3xl font-bold text-gray-900 dark:text-white"
                                                data-counter="12M+"> 0 </p>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Active Investors</p></div>
                    <div class="text-center"><p class="font-mono text-3xl font-bold text-gray-900 dark:text-white"
                                                data-counter="$180B+"> $0 </p>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Assets Under Custody</p></div>
                    <div class="text-center"><p class="font-mono text-3xl font-bold text-gray-900 dark:text-white"
                                                data-counter="5M+"> 0 </p>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Trades Executed Daily</p></div>
                    <div class="text-center"><p class="font-mono text-3xl font-bold text-gray-900 dark:text-white"
                                                data-counter="50+"> 0 </p>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Countries Supported</p></div>
                </div>
            </div>
        </section>
        <section class="bg-white py-24 dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"> <!-- Section Header -->
                <div class="mx-auto max-w-3xl text-center"><span class="badge badge-primary mb-4">Platform Features</span>
                    <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                        Everything You Need to
                        <span class="gradient-text">Invest Confidently</span></h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                        Powerful tools and features designed for every type of investor, from beginners to professionals.
                    </p></div> <!-- Features Grid -->
                <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                        <div class="absolute -top-3 right-4"><span
                                class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white"> $0 </span></div>
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white"> Commission-Free Trading </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Trade stocks, ETFs, and options with zero commission
                            fees. Keep more of your returns. </p></div>
                    <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white"> Fractional Shares </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Invest in any stock or ETF with as little as $1. Own
                            a piece of your favorite companies. </p></div>
                    <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                        <div class="absolute -top-3 right-4"><span
                                class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white"> Instant </span></div>
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white"> Instant Deposits </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Get up to $50,000 instantly to start trading while
                            your transfer completes. </p></div>
                    <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white"> Professional Research </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Access analyst ratings, earnings reports, financial
                            statements, and market news. </p></div>
                    <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                        <div class="absolute -top-3 right-4"><span
                                class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white"> #1 Rated </span></div>
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white"> Award-Winning App </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Trade anywhere with our intuitive mobile app.
                            Real-time alerts and portfolio tracking. </p></div>
                    <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white"> Bank-Level Security </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Your assets are protected with SIPC insurance up to
                            $500K and 256-bit encryption. </p></div>
                    <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                        <div class="absolute -top-3 right-4"><span
                                class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white"> Pro </span></div>
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white"> Developer API </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Build custom trading bots and integrations with our
                            robust REST and WebSocket APIs. </p></div>
                    <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white"> Tax Optimization </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Automatic tax-loss harvesting and detailed tax
                            reports to maximize your returns. </p></div>
                </div> <!-- Bottom CTA -->
                <div class="mt-16 text-center"><a href="features.html"
                                                  class="inline-flex items-center gap-2 text-primary-600 transition-colors hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300">
                        Explore all features
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a></div>
            </div>
        </section>
        <section class="bg-gray-50 py-24 dark:bg-gray-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"> <!-- Section Header -->
                <div class="mx-auto max-w-3xl text-center"><span class="badge badge-accent mb-4">Markets</span>
                    <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                        Trade Multiple
                        <span class="gradient-text">Asset Classes</span></h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                        Access stocks, ETFs, crypto, options, bonds, and futures all in one platform.
                    </p></div> <!-- Markets Grid -->
                <div class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-3"><a href="markets/stocks/index.html"
                                                                               class="group card card-hover overflow-hidden p-6">
                        <div class="mb-4 flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"></path>
                                </svg>
                            </div>
                            <svg class="h-5 w-5 text-gray-400 transition-transform group-hover:translate-x-1" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white"> Stocks </h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2 dark:text-gray-400"> Trade 10,000+ US and international stocks
                            with zero commission. Access IPOs, fractional shares, and extended hours trading. </p>
                        <div class="mt-4 flex items-center gap-4 border-t border-gray-200 pt-4 dark:border-gray-700">
                            <div><p class="text-xs text-gray-500">Available</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">10,000+</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Min Investment</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">$1</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Hours</p>
                                <p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">4am - 8pm ET</p></div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2"><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> AAPL </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> TSLA </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> NVDA </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> MSFT </span>
                            <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-500 dark:bg-gray-800">
+2 </span></div>
                    </a><a href="markets/etfs/index.html" class="group card card-hover overflow-hidden p-6">
                        <div class="mb-4 flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                </svg>
                            </div>
                            <svg class="h-5 w-5 text-gray-400 transition-transform group-hover:translate-x-1" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white"> ETFs </h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2 dark:text-gray-400"> Diversify instantly with 2,000+ ETFs
                            covering every sector, region, and strategy. Build a balanced portfolio with ease. </p>
                        <div class="mt-4 flex items-center gap-4 border-t border-gray-200 pt-4 dark:border-gray-700">
                            <div><p class="text-xs text-gray-500">Available</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">2,000+</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Min Investment</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">$1</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Hours</p>
                                <p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">4am - 8pm ET</p></div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2"><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> SPY </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> QQQ </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> VTI </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> VOO </span>
                            <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-500 dark:bg-gray-800">
+2 </span></div>
                    </a><a href="markets/crypto/index.html" class="group card card-hover overflow-hidden p-6">
                        <div class="mb-4 flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <svg class="h-5 w-5 text-gray-400 transition-transform group-hover:translate-x-1" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white"> Crypto </h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2 dark:text-gray-400"> Buy, sell, and hold 50+ cryptocurrencies
                            24/7. Secure cold storage and instant transfers between trading and wallet. </p>
                        <div class="mt-4 flex items-center gap-4 border-t border-gray-200 pt-4 dark:border-gray-700">
                            <div><p class="text-xs text-gray-500">Available</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">50+</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Min Investment</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">$1</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Hours</p>
                                <p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">24/7</p></div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2"><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> BTC </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> ETH </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> SOL </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> XRP </span>
                            <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-500 dark:bg-gray-800">
+2 </span></div>
                    </a><a href="markets/options/index.html" class="group card card-hover overflow-hidden p-6">
                        <div class="mb-4 flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"></path>
                                </svg>
                            </div>
                            <svg class="h-5 w-5 text-gray-400 transition-transform group-hover:translate-x-1" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white"> Options </h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2 dark:text-gray-400"> Advanced options trading with multi-leg
                            strategies, real-time Greeks, and powerful analysis tools for experienced traders. </p>
                        <div class="mt-4 flex items-center gap-4 border-t border-gray-200 pt-4 dark:border-gray-700">
                            <div><p class="text-xs text-gray-500">Available</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">All optionable</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Min Investment</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">Varies</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Hours</p>
                                <p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">9:30am - 4pm ET</p></div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2"><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> SPY options </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> QQQ options </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> AAPL options </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> TSLA options </span>
                        </div>
                    </a><a href="markets/bonds.html" class="group card card-hover overflow-hidden p-6">
                        <div class="mb-4 flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path>
                                </svg>
                            </div>
                            <svg class="h-5 w-5 text-gray-400 transition-transform group-hover:translate-x-1" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white"> Bonds </h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2 dark:text-gray-400"> Access Treasury bonds, corporate bonds,
                            and bond ETFs for stable income and portfolio diversification. </p>
                        <div class="mt-4 flex items-center gap-4 border-t border-gray-200 pt-4 dark:border-gray-700">
                            <div><p class="text-xs text-gray-500">Available</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">1,000+</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Min Investment</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">$100</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Hours</p>
                                <p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">8am - 5pm ET</p></div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2"><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> T-Bills </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> Treasury Notes </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> Corporate AAA </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> Municipal Bonds </span>
                        </div>
                    </a><a href="markets/futures.html" class="group card card-hover overflow-hidden p-6">
                        <div class="mb-4 flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"></path>
                                </svg>
                            </div>
                            <svg class="h-5 w-5 text-gray-400 transition-transform group-hover:translate-x-1" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white"> Futures </h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2 dark:text-gray-400"> Trade futures on indices, commodities,
                            and currencies with competitive margin rates and 24-hour market access. </p>
                        <div class="mt-4 flex items-center gap-4 border-t border-gray-200 pt-4 dark:border-gray-700">
                            <div><p class="text-xs text-gray-500">Available</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">100+</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Min Investment</p>
                                <p class="font-mono font-semibold text-gray-900 dark:text-white">Margin based</p></div>
                            <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
                            <div><p class="text-xs text-gray-500">Hours</p>
                                <p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">Nearly 24/6</p></div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2"><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> ES </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> NQ </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> CL </span><span
                                class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300"> GC </span>
                            <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-500 dark:bg-gray-800">
+1 </span></div>
                    </a></div>
            </div>
        </section>
        <section class="relative overflow-hidden bg-primary-950 py-24"> <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="grid-pattern"></div>
            </div>
            <div class="pointer-events-none absolute right-0 top-0 h-96 w-96 rounded-full bg-primary-500/20 blur-[120px]"></div>
            <div class="pointer-events-none absolute bottom-0 left-0 h-64 w-64 rounded-full bg-accent-500/10 blur-[100px]"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 lg:grid-cols-2"> <!-- Left Content -->
                    <div> <span
                            class="inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2 text-sm font-medium text-accent-300"> <svg
                                class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"> <path
                                    stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path> </svg>
Security First
</span>
                        <h2 class="mt-6 font-display text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                            Your Assets Are <br> <span
                                class="bg-gradient-to-r from-accent-400 to-accent-300 bg-clip-text text-transparent">Protected & Secure</span>
                        </h2>
                        <p class="mt-6 text-lg text-primary-200">
                            We take security seriously. Your investments are protected by industry-leading security measures, regulatory
                            compliance, and insurance coverage.
                        </p> <!-- Key Stats -->
                        <div class="mt-8 grid grid-cols-3 gap-6">
                            <div><p class="font-mono text-3xl font-bold text-white">$500K</p>
                                <p class="mt-1 text-sm text-primary-300">SIPC Protection</p></div>
                            <div><p class="font-mono text-3xl font-bold text-white">$2M</p>
                                <p class="mt-1 text-sm text-primary-300">FDIC Insurance</p></div>
                            <div><p class="font-mono text-3xl font-bold text-white">256-bit</p>
                                <p class="mt-1 text-sm text-primary-300">Encryption</p></div>
                        </div>
                        <a href="security/index.html"
                           class="mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-6 py-3 font-semibold text-primary-900 transition-colors hover:bg-primary-50">
                            Learn About Security
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a></div> <!-- Right - Security Features Grid -->
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                            <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path>
                                </svg>
                            </div>
                            <h3 class="font-display font-bold text-white">SIPC Protected</h3>
                            <p class="mt-1 text-sm text-primary-300">Your securities are protected up to $500,000 (including $250,000
                                for cash) by SIPC.</p></div>
                        <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                            <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"></path>
                                </svg>
                            </div>
                            <h3 class="font-display font-bold text-white">FDIC Insured Cash</h3>
                            <p class="mt-1 text-sm text-primary-300">Uninvested cash is swept to partner banks and FDIC insured up to $2
                                million.</p></div>
                        <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                            <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>
                                </svg>
                            </div>
                            <h3 class="font-display font-bold text-white">256-bit Encryption</h3>
                            <p class="mt-1 text-sm text-primary-300">All data is encrypted in transit and at rest using bank-level
                                AES-256 encryption.</p></div>
                        <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                            <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"></path>
                                </svg>
                            </div>
                            <h3 class="font-display font-bold text-white">Two-Factor Auth</h3>
                            <p class="mt-1 text-sm text-primary-300">Secure your account with biometric login, authenticator apps, or
                                hardware keys.</p></div>
                        <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                            <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.746 3.746 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"></path>
                                </svg>
                            </div>
                            <h3 class="font-display font-bold text-white">SEC Registered</h3>
                            <p class="mt-1 text-sm text-primary-300">NexTrade is a registered broker-dealer with the SEC and member of
                                FINRA.</p></div>
                        <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                            <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-display font-bold text-white">24/7 Monitoring</h3>
                            <p class="mt-1 text-sm text-primary-300">Our security team monitors for fraud and suspicious activity around
                                the clock.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-24 dark:bg-gray-900" id="pricing">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"> <!-- Section Header -->
                <div class="mx-auto max-w-3xl text-center"><span class="badge badge-primary mb-4">Pricing</span>
                    <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                        Simple, Transparent
                        <span class="gradient-text">Pricing</span></h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                        Start free and upgrade as you grow. No hidden fees, no surprises.
                    </p> <!-- Billing Toggle -->
                    <div class="mt-8 flex items-center justify-center gap-4"><span
                            class="text-sm font-medium text-gray-900 dark:text-white" data-billing-label="monthly">Monthly</span>
                        <button type="button" id="billing-toggle"
                                class="relative inline-flex h-7 w-14 shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:bg-gray-700"
                                role="switch" aria-checked="false" aria-label="Toggle billing period"><span
                                class="pointer-events-none inline-block h-6 w-6 translate-x-0 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                id="toggle-dot"></span></button>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400" data-billing-label="yearly">
Yearly
<span class="ml-1.5 rounded-full bg-accent-100 px-2 py-0.5 text-xs font-semibold text-accent-700 dark:bg-accent-900/50 dark:text-accent-300">
Save 20%
</span> </span></div>
                </div> <!-- Pricing Cards -->
                <div class="mt-12 grid gap-8 lg:grid-cols-3">
                    <div class="relative rounded-2xl border p-8 border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900"
                         data-pricing-card>
                        <div class="mb-6"><h3 class="font-display text-2xl font-bold text-gray-900 dark:text-white">Basic</h3>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Perfect for beginners starting their investment
                                journey.</p></div>
                        <div class="mb-6">
                            <div class="flex items-baseline"><span class="font-mono text-5xl font-bold text-gray-900 dark:text-white"
                                                                   data-price-monthly="$0" data-price-yearly="$0"> $0 </span></div>
                            <p class="mt-1 text-sm text-gray-500">Free forever</p></div>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Commission-free stocks &amp; ETFs</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Fractional shares from $1</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Basic market data</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Mobile app access</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">SIPC insurance protection</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Standard bank transfers</span></li>
                            <li class="flex items-start gap-3 opacity-60">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span class="text-sm text-gray-500">Limited research tools</span></li>
                            <li class="flex items-start gap-3 opacity-60">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span class="text-sm text-gray-500">3 day settlement</span></li>
                            <li class="flex items-start gap-3 opacity-60">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span class="text-sm text-gray-500">No options trading</span></li>
                        </ul>
                        <a href="signup/index7f03.html?plan=basic"
                           class="block w-full rounded-xl py-4 text-center font-semibold transition-all border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">
                            Get Started Free </a></div>
                    <div class="relative rounded-2xl border p-8 border-primary-500 bg-primary-50 shadow-xl dark:border-primary-500 dark:bg-primary-950/50"
                         data-pricing-card>
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2"><span
                                class="rounded-full px-4 py-1.5 text-sm font-semibold text-white badge-pulse bg-primary-500"> Most Popular </span>
                        </div>
                        <div class="mb-6"><h3 class="font-display text-2xl font-bold text-gray-900 dark:text-white">Pro</h3>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">For active traders who need advanced tools and
                                faster execution.</p></div>
                        <div class="mb-6">
                            <div class="flex items-baseline"><span class="font-mono text-5xl font-bold text-gray-900 dark:text-white"
                                                                   data-price-monthly="$9.99" data-price-yearly="$7.99"> $9.99 </span>
                                <span class="ml-2 text-gray-500">/month</span></div>
                            <p class="mt-1 text-sm text-gray-500"> <span data-billed-text data-yearly-total="$95.88">
Billed monthly
</span></p></div>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Everything in Basic</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Options trading</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Real-time Level 2 data</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Advanced charting tools</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Instant deposits up to $50K</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Extended hours trading</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Priority support</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">API access</span></li>
                        </ul>
                        <a href="signup/index7aaa.html?plan=pro"
                           class="block w-full rounded-xl py-4 text-center font-semibold transition-all btn-primary"> Start Pro
                            Trial </a></div>
                    <div class="relative rounded-2xl border p-8 border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900"
                         data-pricing-card>
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2"><span
                                class="rounded-full px-4 py-1.5 text-sm font-semibold text-white bg-accent-500"> Best Value </span>
                        </div>
                        <div class="mb-6"><h3 class="font-display text-2xl font-bold text-gray-900 dark:text-white">Premium</h3>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Institutional-grade tools for serious investors and
                                traders.</p></div>
                        <div class="mb-6">
                            <div class="flex items-baseline"><span class="font-mono text-5xl font-bold text-gray-900 dark:text-white"
                                                                   data-price-monthly="$29.99"
                                                                   data-price-yearly="$23.99"> $29.99 </span> <span
                                    class="ml-2 text-gray-500">/month</span></div>
                            <p class="mt-1 text-sm text-gray-500"> <span data-billed-text data-yearly-total="$287.88">
Billed monthly
</span></p></div>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Everything in Pro</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Futures trading</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Professional research reports</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Options flow data</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Instant deposits up to $250K</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">4.5% APY on uninvested cash</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Dedicated account manager</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Tax-loss harvesting</span></li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Custom alerts &amp; screeners</span></li>
                        </ul>
                        <a href="signup/index109c.html?plan=premium"
                           class="block w-full rounded-xl py-4 text-center font-semibold transition-all border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">
                            Go Premium </a></div>
                </div> <!-- FAQ Link -->
                <div class="mt-12 text-center"><p class="text-gray-600 dark:text-gray-400">
                        Have questions?
                        <a href="#faq" class="font-medium text-primary-600 hover:text-primary-500 dark:text-primary-400">
                            Check out our FAQ
                        </a></p></div>
            </div>
        </section>
        <script type="module">function c() {
                const e = document.getElementById("billing-toggle"), s = document.getElementById("toggle-dot");
                if (!e || !s) return;
                const l = document.querySelector('[data-billing-label="monthly"]'),
                    r = document.querySelector('[data-billing-label="yearly"]'),
                    o = document.querySelectorAll("[data-price-monthly]"), d = document.querySelectorAll("[data-billed-text]");
                let a = !1;

                function y() {
                    a ? (e.classList.add("bg-primary-500"), e.classList.remove("bg-gray-200", "dark:bg-gray-700"), s.classList.add("translate-x-7"), s.classList.remove("translate-x-0"), e.setAttribute("aria-checked", "true")) : (e.classList.remove("bg-primary-500"), e.classList.add("bg-gray-200", "dark:bg-gray-700"), s.classList.remove("translate-x-7"), s.classList.add("translate-x-0"), e.setAttribute("aria-checked", "false")), l && r && (a ? (l.classList.remove("text-gray-900", "dark:text-white"), l.classList.add("text-gray-500", "dark:text-gray-400"), r.classList.add("text-gray-900", "dark:text-white"), r.classList.remove("text-gray-500", "dark:text-gray-400")) : (l.classList.add("text-gray-900", "dark:text-white"), l.classList.remove("text-gray-500", "dark:text-gray-400"), r.classList.remove("text-gray-900", "dark:text-white"), r.classList.add("text-gray-500", "dark:text-gray-400"))), o.forEach(n => {
                        const t = n, i = t.dataset.priceMonthly, g = t.dataset.priceYearly;
                        t.style.opacity = "0", t.style.transform = "translateY(-4px)", setTimeout(() => {
                            t.textContent = a ? g || "" : i || "", t.style.opacity = "1", t.style.transform = "translateY(0)"
                        }, 150)
                    }), d.forEach(n => {
                        const t = n, i = t.dataset.yearlyTotal;
                        a && i ? t.textContent = `Billed ${i}/year` : t.textContent = "Billed monthly"
                    })
                }

                e.addEventListener("click", () => {
                    a = !a, y()
                }), o.forEach(n => {
                    const t = n;
                    t.style.transition = "opacity 0.15s ease, transform 0.15s ease"
                })
            }

            document.addEventListener("DOMContentLoaded", c);
            document.readyState !== "loading" && c();</script>
        <section class="bg-gray-50 py-24 dark:bg-gray-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"> <!-- Section Header -->
                <div class="mx-auto max-w-3xl text-center"><span class="badge badge-primary mb-4">Testimonials</span>
                    <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                        Loved by
                        <span class="gradient-text">12 Million+ Investors</span></h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                        See what our community has to say about their experience with NexTrade.
                    </p></div> <!-- Testimonials Grid -->
                <div class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="card p-6">
                        <div class="mb-4 flex text-yellow-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300">"NexTrade made investing accessible for me. I started with just
                            $100 and built a diversified portfolio using fractional shares. The app is incredibly intuitive."</p>
                        <div class="mt-4 inline-flex items-center gap-2 rounded-lg bg-accent-100 px-3 py-1.5 dark:bg-accent-900/30">
                            <svg class="h-4 w-4 text-accent-600 dark:text-accent-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-sm font-semibold text-accent-700 dark:text-accent-300"> Portfolio Growth: +47% </span>
                        </div>
                        <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700"><img
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&amp;h=100&amp;fit=crop"
                                alt="Sarah Chen" class="h-12 w-12 rounded-full object-cover">
                            <div><p class="font-semibold text-gray-900 dark:text-white">Sarah Chen</p>
                                <p class="text-sm text-gray-500">Software Engineer</p></div>
                        </div>
                    </div>
                    <div class="card p-6">
                        <div class="mb-4 flex text-yellow-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300">"The Pro tier is a game-changer. Level 2 data, advanced charts,
                            and the API let me execute my strategies flawlessly. Best platform I&#39;ve used in 10 years of
                            trading."</p>
                        <div class="mt-4 inline-flex items-center gap-2 rounded-lg bg-accent-100 px-3 py-1.5 dark:bg-accent-900/30">
                            <svg class="h-4 w-4 text-accent-600 dark:text-accent-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-sm font-semibold text-accent-700 dark:text-accent-300"> Trades/Month: 500+ </span></div>
                        <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700"><img
                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&amp;h=100&amp;fit=crop"
                                alt="Michael Torres" class="h-12 w-12 rounded-full object-cover">
                            <div><p class="font-semibold text-gray-900 dark:text-white">Michael Torres</p>
                                <p class="text-sm text-gray-500">Day Trader</p></div>
                        </div>
                    </div>
                    <div class="card p-6">
                        <div class="mb-4 flex text-yellow-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300">"I recommend NexTrade to all my clients. The combination of zero
                            commissions, great research tools, and strong security makes it the obvious choice."</p>
                        <div class="mt-4 inline-flex items-center gap-2 rounded-lg bg-accent-100 px-3 py-1.5 dark:bg-accent-900/30">
                            <svg class="h-4 w-4 text-accent-600 dark:text-accent-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-sm font-semibold text-accent-700 dark:text-accent-300"> Clients Referred: 200+ </span>
                        </div>
                        <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700"><img
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&amp;h=100&amp;fit=crop"
                                alt="Emily Watson" class="h-12 w-12 rounded-full object-cover">
                            <div><p class="font-semibold text-gray-900 dark:text-white">Emily Watson</p>
                                <p class="text-sm text-gray-500">Financial Advisor</p></div>
                        </div>
                    </div>
                    <div class="card p-6">
                        <div class="mb-4 flex text-yellow-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300">"Finally, a platform where I can trade stocks and crypto in one
                            place. The 24/7 crypto trading and cold storage give me peace of mind."</p>
                        <div class="mt-4 inline-flex items-center gap-2 rounded-lg bg-accent-100 px-3 py-1.5 dark:bg-accent-900/30">
                            <svg class="h-4 w-4 text-accent-600 dark:text-accent-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-sm font-semibold text-accent-700 dark:text-accent-300"> Crypto Holdings: $85K </span>
                        </div>
                        <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700"><img
                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&amp;h=100&amp;fit=crop"
                                alt="David Park" class="h-12 w-12 rounded-full object-cover">
                            <div><p class="font-semibold text-gray-900 dark:text-white">David Park</p>
                                <p class="text-sm text-gray-500">Crypto Investor</p></div>
                        </div>
                    </div>
                    <div class="card p-6">
                        <div class="mb-4 flex text-yellow-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300">"The IRA options and automatic investing features help me stay on
                            track for retirement. I love the tax-loss harvesting in Premium - it&#39;s already saved me thousands."</p>
                        <div class="mt-4 inline-flex items-center gap-2 rounded-lg bg-accent-100 px-3 py-1.5 dark:bg-accent-900/30">
                            <svg class="h-4 w-4 text-accent-600 dark:text-accent-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-sm font-semibold text-accent-700 dark:text-accent-300"> Tax Savings: $3,200 </span></div>
                        <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700"><img
                                src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&amp;h=100&amp;fit=crop"
                                alt="Jessica Liu" class="h-12 w-12 rounded-full object-cover">
                            <div><p class="font-semibold text-gray-900 dark:text-white">Jessica Liu</p>
                                <p class="text-sm text-gray-500">Retirement Saver</p></div>
                        </div>
                    </div>
                    <div class="card p-6">
                        <div class="mb-4 flex text-yellow-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300">"The options tools are incredible. Multi-leg strategies, real-time
                            Greeks, and the strategy builder make complex trades simple. Support team is also top-notch."</p>
                        <div class="mt-4 inline-flex items-center gap-2 rounded-lg bg-accent-100 px-3 py-1.5 dark:bg-accent-900/30">
                            <svg class="h-4 w-4 text-accent-600 dark:text-accent-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-sm font-semibold text-accent-700 dark:text-accent-300"> Win Rate: 68% </span></div>
                        <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700"><img
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&amp;h=100&amp;fit=crop"
                                alt="Robert Kim" class="h-12 w-12 rounded-full object-cover">
                            <div><p class="font-semibold text-gray-900 dark:text-white">Robert Kim</p>
                                <p class="text-sm text-gray-500">Options Trader</p></div>
                        </div>
                    </div>
                </div> <!-- Trust Badges -->
                <div class="mt-16 flex flex-wrap items-center justify-center gap-8 opacity-60">
                    <div class="text-center"><p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">4.9/5</p>
                        <p class="text-sm text-gray-500">App Store</p></div>
                    <div class="h-8 w-px bg-gray-300 dark:bg-gray-700"></div>
                    <div class="text-center"><p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">4.8/5</p>
                        <p class="text-sm text-gray-500">Google Play</p></div>
                    <div class="h-8 w-px bg-gray-300 dark:bg-gray-700"></div>
                    <div class="text-center"><p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">50K+</p>
                        <p class="text-sm text-gray-500">Reviews</p></div>
                    <div class="h-8 w-px bg-gray-300 dark:bg-gray-700"></div>
                    <div class="text-center"><p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">#1</p>
                        <p class="text-sm text-gray-500">Finance App</p></div>
                </div>
            </div>
        </section>
        <section class="bg-white py-24 dark:bg-gray-900" id="faq">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8"> <!-- Section Header -->
                <div class="text-center"><span class="badge badge-primary mb-4">FAQ</span>
                    <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
                        Frequently Asked Questions
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                        Everything you need to know about NexTrade.
                    </p></div> <!-- FAQ Accordion -->
                <div class="mt-12 space-y-4">
                    <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50"
                         data-accordion-item>
                        <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger><span
                                class="font-semibold text-gray-900 dark:text-white">Is NexTrade really free?</span>
                            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden" style data-accordion-content>
                            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700"><p
                                    class="text-gray-600 dark:text-gray-400">Yes! Our Basic plan is completely free with no hidden fees.
                                    You can trade stocks and ETFs commission-free. We make money through premium subscriptions, interest on
                                    uninvested cash, and payment for order flow (which is standard industry practice).</p></div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50"
                         data-accordion-item>
                        <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger><span
                                class="font-semibold text-gray-900 dark:text-white">How is my money protected?</span>
                            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
                            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700"><p
                                    class="text-gray-600 dark:text-gray-400">Your securities are protected by SIPC up to $500,000
                                    (including $250,000 for cash). Additionally, uninvested cash is swept to FDIC-insured partner banks for up
                                    to $2 million in protection. We use 256-bit encryption and offer two-factor authentication.</p></div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50"
                         data-accordion-item>
                        <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger><span
                                class="font-semibold text-gray-900 dark:text-white">Can I transfer my existing portfolio?</span>
                            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
                            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700"><p
                                    class="text-gray-600 dark:text-gray-400">Absolutely! We offer free ACATS transfers from other
                                    brokers. Most transfers complete within 5-7 business days. We&#39;ll even reimburse up to $100 in transfer
                                    fees from your old broker.</p></div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50"
                         data-accordion-item>
                        <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger><span
                                class="font-semibold text-gray-900 dark:text-white">What are fractional shares?</span>
                            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
                            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700"><p
                                    class="text-gray-600 dark:text-gray-400">Fractional shares let you buy a portion of a stock or ETF.
                                    Instead of paying $500+ for one share of a company, you can invest as little as $1 and own a fraction.
                                    This makes diversification accessible to everyone.</p></div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50"
                         data-accordion-item>
                        <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger><span
                                class="font-semibold text-gray-900 dark:text-white">Do you offer retirement accounts?</span>
                            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
                            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700"><p
                                    class="text-gray-600 dark:text-gray-400">Yes! We offer Traditional IRA, Roth IRA, and SEP IRA
                                    accounts with no account minimums and no maintenance fees. Premium members get automatic tax-loss
                                    harvesting and rebalancing.</p></div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50"
                         data-accordion-item>
                        <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger><span
                                class="font-semibold text-gray-900 dark:text-white">How fast are deposits and withdrawals?</span>
                            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
                            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700"><p
                                    class="text-gray-600 dark:text-gray-400">Standard bank transfers take 3-5 business days. Pro and
                                    Premium members get instant deposits (up to $50K and $250K respectively) to start trading immediately.
                                    Withdrawals are typically processed within 1-2 business days.</p></div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50"
                         data-accordion-item>
                        <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger><span
                                class="font-semibold text-gray-900 dark:text-white">Is crypto trading available?</span>
                            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
                            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700"><p
                                    class="text-gray-600 dark:text-gray-400">Yes! Trade 50+ cryptocurrencies 24/7 including Bitcoin,
                                    Ethereum, Solana, and more. Crypto assets are stored in secure cold storage. Note: Crypto is not SIPC
                                    insured but we maintain comprehensive insurance coverage.</p></div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50"
                         data-accordion-item>
                        <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger><span
                                class="font-semibold text-gray-900 dark:text-white">Do you have an API for automated trading?</span>
                            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
                            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700"><p
                                    class="text-gray-600 dark:text-gray-400">Pro and Premium members have access to our REST and
                                    WebSocket APIs for building trading bots, custom integrations, and automated strategies. Full
                                    documentation and sandbox environment included.</p></div>
                        </div>
                    </div>
                </div> <!-- Contact CTA -->
                <div class="mt-12 text-center"><p class="text-gray-600 dark:text-gray-400">
                        Still have questions?
                    </p> <a href="contact/index.html"
                            class="mt-2 inline-flex items-center gap-2 font-semibold text-primary-600 hover:text-primary-500 dark:text-primary-400">
                        Contact our support team
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a></div>
            </div>
        </section>
        <section class="relative overflow-hidden bg-gray-50 py-24 dark:bg-gray-950"> <!-- Background -->
            <div class="absolute inset-0 grid-pattern opacity-50"></div>
            <div class="pointer-events-none absolute left-1/4 top-0 h-96 w-96 rounded-full bg-primary-500/10 blur-[120px]"></div>
            <div class="pointer-events-none absolute bottom-0 right-1/4 h-64 w-64 rounded-full bg-accent-500/10 blur-[100px]"></div>
            <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8"> <!-- Badge --> <span
                    class="mb-6 inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2 text-sm font-medium text-accent-700 dark:text-accent-300"> <span
                        class="relative flex h-2 w-2"> <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-accent-400 opacity-75"></span> <span
                            class="relative inline-flex h-2 w-2 rounded-full bg-accent-500"></span> </span>
Join 12M+ Investors Today
</span> <!-- Headline --> <h2
                    class="font-display text-4xl font-bold text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                    Ready to Start <br> <span class="gradient-text">Building Wealth?</span></h2> <!-- Subtext --> <p
                    class="mx-auto mt-6 max-w-2xl text-lg text-gray-600 dark:text-gray-400">
                    Open your free account in minutes. No minimum deposit required. Start investing with as little as $1.
                </p> <!-- CTAs -->
                <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row"><a href="signup/index.html"
                                                                                                  class="btn-primary inline-flex w-full items-center justify-center gap-2 rounded-xl px-10 py-5 text-lg sm:w-auto">
                        Get Started Free
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a> <a href="pricing/index.html"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-10 py-5 text-lg font-semibold text-gray-900 transition-colors hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 sm:w-auto">
                        View Pricing
                    </a></div> <!-- Trust Elements -->
                <div class="mt-12 flex flex-col items-center justify-center gap-6 sm:flex-row sm:gap-12">
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                        </svg>
                        No account minimums
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                        </svg>
                        Commission-free trading
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                        </svg>
                        SIPC protected
                    </div>
                </div> <!-- App Store Badges -->
                <div class="mt-10 flex flex-wrap items-center justify-center gap-4"><a href="#"
                                                                                       class="inline-flex items-center gap-2 rounded-lg bg-gray-900 px-5 py-3 text-white transition-colors hover:bg-gray-800 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"></path>
                        </svg>
                        <div class="text-left">
                            <div class="text-xs text-gray-400">Download on the</div>
                            <div class="text-sm font-semibold">App Store</div>
                        </div>
                    </a> <a href="#"
                            class="inline-flex items-center gap-2 rounded-lg bg-gray-900 px-5 py-3 text-white transition-colors hover:bg-gray-800 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 20.5v-17c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v17c0 .83-.67 1.5-1.5 1.5S3 21.33 3 20.5zm18-10l-6-5v3H9v4h6v3l6-5z"></path>
                        </svg>
                        <div class="text-left">
                            <div class="text-xs text-gray-400">Get it on</div>
                            <div class="text-sm font-semibold">Google Play</div>
                        </div>
                    </a></div>
            </div>
        </section>
    </main>
    <footer class="border-t border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-950">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8"> <!-- Main Footer Grid -->
            <div class="grid gap-12 lg:grid-cols-5"> <!-- Brand Column -->
                <div class="lg:col-span-2"><a href="index.html" class="flex items-center gap-2">
                        <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-primary-500 to-accent-500">
                            <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <span class="font-display text-xl font-bold text-gray-900 dark:text-white">
Nex<span class="text-primary-600 dark:text-primary-400">Trade</span> </span> </a>
                    <p class="mt-4 max-w-sm text-sm text-gray-600 dark:text-gray-400">
                        The modern investment platform for everyone. Trade stocks, ETFs, crypto, and options with zero commissions.
                    </p>
                    <div class="mt-6 flex items-center gap-4"><a href="https://twitter.com/nextrade"
                                                                 class="text-gray-400 transition-colors hover:text-gray-600 dark:hover:text-gray-300"
                                                                 aria-label="Twitter">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                            </svg>
                        </a> <a href="https://linkedin.com/company/nextrade"
                                class="text-gray-400 transition-colors hover:text-gray-600 dark:hover:text-gray-300"
                                aria-label="LinkedIn">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg>
                        </a> <a href="https://youtube.com/@nextrade"
                                class="text-gray-400 transition-colors hover:text-gray-600 dark:hover:text-gray-300"
                                aria-label="YouTube">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                            </svg>
                        </a> <a href="https://discord.gg/nextrade"
                                class="text-gray-400 transition-colors hover:text-gray-600 dark:hover:text-gray-300"
                                aria-label="Discord">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"></path>
                            </svg>
                        </a></div> <!-- App Store Badges -->
                    <div class="mt-6 flex flex-wrap gap-3"><a href="#"
                                                              class="inline-flex items-center gap-2 rounded-lg bg-gray-900 px-4 py-2 text-white transition-colors hover:bg-gray-800 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"></path>
                            </svg>
                            <div class="text-left">
                                <div class="text-xs text-gray-400">Download on the</div>
                                <div class="text-sm font-semibold">App Store</div>
                            </div>
                        </a> <a href="#"
                                class="inline-flex items-center gap-2 rounded-lg bg-gray-900 px-4 py-2 text-white transition-colors hover:bg-gray-800 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 20.5v-17c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v17c0 .83-.67 1.5-1.5 1.5S3 21.33 3 20.5zm18-10l-6-5v3H9v4h6v3l6-5z"></path>
                            </svg>
                            <div class="text-left">
                                <div class="text-xs text-gray-400">Get it on</div>
                                <div class="text-sm font-semibold">Google Play</div>
                            </div>
                        </a></div>
                </div> <!-- Link Columns -->
                <div><h3 class="text-sm font-semibold text-gray-900 dark:text-white">Products</h3>
                    <ul class="mt-4 space-y-3">
                        <li><a href="markets/stocks/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Stocks </a></li>
                        <li><a href="markets/etfs/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                ETFs </a></li>
                        <li><a href="markets/crypto/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Crypto </a></li>
                        <li><a href="markets/options/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Options </a></li>
                        <li><a href="retirement/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Retirement </a></li>
                    </ul>
                </div>
                <div><h3 class="text-sm font-semibold text-gray-900 dark:text-white">Company</h3>
                    <ul class="mt-4 space-y-3">
                        <li><a href="about/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                About Us </a></li>
                        <li><a href="careers/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Careers </a></li>
                        <li><a href="press/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Press </a></li>
                        <li><a href="blog/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Blog </a></li>
                        <li><a href="contact/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Contact </a></li>
                    </ul>
                </div>
                <div><h3 class="text-sm font-semibold text-gray-900 dark:text-white">Resources</h3>
                    <ul class="mt-4 space-y-3">
                        <li><a href="help/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Help Center </a></li>
                        <li><a href="developers/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                API Docs </a></li>
                        <li><a href="status/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Status </a></li>
                        <li><a href="security/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Security </a></li>
                        <li><a href="disclosures/index.html"
                               class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                Disclosures </a></li>
                    </ul>
                </div>
            </div> <!-- Bottom Section -->
            <div class="mt-12 border-t border-gray-200 pt-8 dark:border-gray-800"> <!-- Trust Badges -->
                <div class="mb-8 flex flex-wrap items-center justify-center gap-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path>
                        </svg>
                        SIPC Protected
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"></path>
                        </svg>
                        FDIC Insured
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>
                        </svg>
                        256-bit Encryption
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.746 3.746 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"></path>
                        </svg>
                        SEC Registered
                    </div>
                </div> <!-- Legal Links & Copyright -->
                <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                    <div class="flex flex-wrap justify-center gap-6"><a href="terms/index.html"
                                                                        class="text-xs text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                            Terms of Service </a><a href="privacy/index.html"
                                                    class="text-xs text-gray-500 hover:text-gray-700 dark:hover:text-gray-300"> Privacy
                            Policy </a><a href="cookies/index.html"
                                          class="text-xs text-gray-500 hover:text-gray-700 dark:hover:text-gray-300"> Cookie Policy </a><a
                            href="regulatory/index.html" class="text-xs text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                            Regulatory </a></div>
                    <p class="text-xs text-gray-500">
                        &copy; 2026 NexTrade. All rights reserved.
                    </p></div> <!-- Disclaimer -->
                <div class="mt-8 rounded-lg bg-gray-100 p-4 dark:bg-gray-900"><p class="text-xs leading-relaxed text-gray-500">
                        <strong>Important Disclosures:</strong> Securities trading is offered through NexTrade Securities LLC, member
                        <a href="#" class="underline">FINRA</a> / <a href="#" class="underline">SIPC</a>. Cryptocurrency trading is
                        offered through NexTrade Crypto LLC. Cryptocurrency is not insured by the SIPC. Securities products are:
                        Not FDIC Insured • No Bank Guarantee • May Lose Value. Investing involves risk, including possible loss of
                        principal. Past performance does not guarantee future results.
                    </p></div>
            </div>
        </div>
    </footer>
    <script type="module">
        function b() {
            const t = document.getElementById("theme-toggle");
            t && t.addEventListener("click", () => {
                const e = document.documentElement.classList.toggle("dark");
                localStorage.setItem("theme", e ? "dark" : "light")
            })
        }

        function v() {
            const t = document.getElementById("mobile-menu-btn"), e = document.getElementById("mobile-menu"),
                o = document.getElementById("mobile-menu-overlay"), s = document.getElementById("mobile-menu-close");
            if (!t || !e || !o) return;
            const c = () => {
                e.classList.remove("translate-x-full"), o.classList.remove("hidden"), document.body.style.overflow = "hidden"
            }, i = () => {
                e.classList.add("translate-x-full"), o.classList.add("hidden"), document.body.style.overflow = ""
            };
            t.addEventListener("click", c), o.addEventListener("click", i), s?.addEventListener("click", i), document.addEventListener("keydown", n => {
                n.key === "Escape" && i()
            })
        }

        function E() {
            const t = document.getElementById("header");
            t && window.addEventListener("scroll", () => {
                window.scrollY > 50 ? t.classList.add("bg-white/95", "dark:bg-gray-950/95", "backdrop-blur-lg", "shadow-sm") : t.classList.remove("bg-white/95", "dark:bg-gray-950/95", "backdrop-blur-lg", "shadow-sm")
            })
        }

        function L() {
            const t = document.querySelectorAll("[data-accordion-item]");
            t.forEach(e => {
                const o = e.querySelector("[data-accordion-trigger]"), s = e.querySelector("[data-accordion-content]"),
                    c = e.querySelector("[data-accordion-icon]");
                !o || !s || o.addEventListener("click", () => {
                    const i = s.style.maxHeight && s.style.maxHeight !== "0px";
                    t.forEach(n => {
                        const r = n.querySelector("[data-accordion-content]"), d = n.querySelector("[data-accordion-icon]");
                        r && n !== e && (r.style.maxHeight = "0px", d?.classList.remove("rotate-180"))
                    }), i ? (s.style.maxHeight = "0px", c?.classList.remove("rotate-180")) : (s.style.maxHeight = s.scrollHeight + "px", c?.classList.add("rotate-180"))
                })
            })
        }

        function x() {
            const t = document.querySelectorAll("[data-counter]"), e = new IntersectionObserver(o => {
                o.forEach(s => {
                    if (s.isIntersecting) {
                        const c = s.target, i = c.dataset.counter || "0";
                        p(c, i), e.unobserve(c)
                    }
                })
            }, {threshold: .5});
            t.forEach(o => e.observe(o))
        }

        function p(t, e) {
            const o = e.startsWith("$"),
                s = e.endsWith("+") || e.endsWith("%") || e.endsWith("M") || e.endsWith("B") || e.endsWith("K");
            let c = "", i = "", n = e;
            o && (c = "$", n = n.slice(1)), s && (i = n.slice(-1), e.endsWith("M+") || e.endsWith("B+") || e.endsWith("K+") ? (i = n.slice(-2), n = n.slice(0, -2)) : n = n.slice(0, -1));
            const r = parseFloat(n.replace(/,/g, "")), d = 2e3, h = performance.now();

            function a(f) {
                const g = f - h, u = Math.min(g / d, 1), y = 1 - Math.pow(1 - u, 3), m = r * y;
                let l;
                r >= 100 ? l = Math.round(m).toLocaleString() : l = m.toFixed(1), t.textContent = c + l + i, u < 1 ? requestAnimationFrame(a) : t.textContent = e
            }

            requestAnimationFrame(a)
        }

        document.addEventListener("DOMContentLoaded", () => {
            b(), v(), E(), L(), x()
        });
    </script>
    </body>
</html>

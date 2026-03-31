<x-layouts.app title="Digitwace — Payment Infrastructure for Africa">

    {{-- ============================================================
         HERO
    ============================================================ --}}
    <section class="relative overflow-hidden bg-gray-50 pb-16 pt-24 dark:bg-gray-950 lg:pb-24 lg:pt-32">
        <div class="absolute inset-0 grid-pattern opacity-50"></div>
        <div class="pointer-events-none absolute right-0 top-0 h-[600px] w-[600px] rounded-full bg-primary-500/10 blur-[120px]"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-[400px] w-[400px] rounded-full bg-accent-500/10 blur-[100px]"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

                {{-- Left Column --}}
                <div class="text-center lg:text-left">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-accent-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-accent-500"></span>
                        </span>
                        <span class="text-sm font-medium text-accent-700 dark:text-accent-300">Pan-African Payment Infrastructure</span>
                    </div>

                    <h1 class="font-display text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                        Move Money Across<br>
                        <span class="gradient-text">Africa, Instantly</span>
                    </h1>

                    <p class="mx-auto mt-6 max-w-xl text-lg text-gray-600 dark:text-gray-400 lg:mx-0">
                        One API to send and collect payments across 50+ African markets. Connect to mobile wallets, banks, cards and stablecoins — all in one platform.
                    </p>

                    <div class="mt-8 flex flex-col items-center gap-4 sm:flex-row lg:justify-start">
                        <a href="#" class="btn-primary inline-flex w-full items-center justify-center gap-2 rounded-xl px-8 py-4 text-lg sm:w-auto">
                            Get API Access
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-8 py-4 text-lg font-semibold text-gray-900 transition-colors hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 sm:w-auto">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            View Docs
                        </a>
                    </div>

                    <div class="mt-10 flex flex-wrap items-center justify-center gap-6 lg:justify-start">
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            No setup fees
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            99.9% uptime SLA
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            Go live in days
                        </div>
                    </div>
                </div>

                {{-- Right Column — Phone Mockup --}}
                <div class="relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Phone Frame -->
                        <div class="relative mx-auto aspect-[9/19.5] w-64 rounded-[3rem] border-8 border-gray-900 bg-gray-900 p-2 shadow-2xl dark:border-gray-700 lg:w-72">
                            <!-- Dynamic Island -->
                            <div class="absolute left-1/2 top-4 z-10 h-7 w-24 -translate-x-1/2 rounded-full bg-gray-900 dark:bg-gray-700"></div>
                            <div class="flex h-full flex-col overflow-hidden rounded-[2.25rem] bg-white dark:bg-gray-900">
                                <!-- App Header -->
                                <div class="bg-gradient-to-r from-primary-500 to-primary-600 px-4 pb-4 pt-10 text-white">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-xs opacity-80">Portfolio Value</p>
                                            <p class="font-mono text-xl font-bold">$47,382.54</p>
                                            <p class="flex items-center gap-1 text-xs text-accent-300">
                                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                                </svg>
                                                +$2,341.20 (5.19%) today
                                            </p>
                                        </div>
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white/20">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Chart -->
                                <div class="relative h-28 bg-gray-50 dark:bg-gray-800">
                                    <div class="absolute left-0 right-0 top-2 flex justify-center gap-2 px-4">
                                        <span class="rounded-full bg-primary-500 px-2 py-0.5 text-[10px] font-medium text-white">1D</span>
                                        <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500 dark:text-gray-400">1W</span>
                                        <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500 dark:text-gray-400">1M</span>
                                        <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500 dark:text-gray-400">1Y</span>
                                        <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500 dark:text-gray-400">ALL</span>
                                    </div>
                                    <svg class="h-full w-full pt-6" viewBox="0 0 300 100" preserveAspectRatio="none">
                                        <defs>
                                            <linearGradient id="chartGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                                <stop offset="0%" style="stop-color: rgb(34, 197, 94); stop-opacity: 0.3"/>
                                                <stop offset="100%" style="stop-color: rgb(34, 197, 94); stop-opacity: 0"/>
                                            </linearGradient>
                                        </defs>
                                        <path d="M0,80 Q30,70 60,65 T120,50 T180,55 T240,30 T300,20 V100 H0 Z" fill="url(#chartGradient)"/>
                                        <path d="M0,80 Q30,70 60,65 T120,50 T180,55 T240,30 T300,20" fill="none" stroke="rgb(34, 197, 94)" stroke-width="2"/>
                                    </svg>
                                </div>
                                <!-- Holdings -->
                                <div class="flex-1 overflow-hidden">
                                    <div class="flex items-center justify-between border-b border-gray-100 px-4 py-2 dark:border-gray-800">
                                        <span class="text-xs font-semibold text-gray-900 dark:text-white">Holdings</span>
                                        <span class="text-xs text-primary-600 dark:text-primary-400">See all</span>
                                    </div>
                                    <div class="divide-y divide-gray-100 px-4 dark:divide-gray-800">
                                        <div class="flex items-center justify-between py-2.5">
                                            <div class="flex items-center gap-2.5">
                                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-sm font-bold dark:bg-gray-800">A</div>
                                                <div><p class="text-sm font-semibold text-gray-900 dark:text-white">AAPL</p><p class="text-[10px] text-gray-500">12.5 shares</p></div>
                                            </div>
                                            <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">$2,845</p><p class="text-[10px] text-success-600 dark:text-success-400">+1.39%</p></div>
                                        </div>
                                        <div class="flex items-center justify-between py-2.5">
                                            <div class="flex items-center gap-2.5">
                                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-orange-100 text-sm font-bold text-orange-600 dark:bg-orange-900/30">₿</div>
                                                <div><p class="text-sm font-semibold text-gray-900 dark:text-white">BTC</p><p class="text-[10px] text-gray-500">0.42 BTC</p></div>
                                            </div>
                                            <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">$44,054</p><p class="text-[10px] text-success-600 dark:text-success-400">+2.28%</p></div>
                                        </div>
                                        <div class="flex items-center justify-between py-2.5">
                                            <div class="flex items-center gap-2.5">
                                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-sm font-bold text-green-600 dark:bg-green-900/30">N</div>
                                                <div><p class="text-sm font-semibold text-gray-900 dark:text-white">NVDA</p><p class="text-[10px] text-gray-500">3.2 shares</p></div>
                                            </div>
                                            <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">$440</p><p class="text-[10px] text-success-600 dark:text-success-400">+4.11%</p></div>
                                        </div>
                                        <div class="flex items-center justify-between py-2.5">
                                            <div class="flex items-center gap-2.5">
                                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-600 dark:bg-blue-900/30">S</div>
                                                <div><p class="text-sm font-semibold text-gray-900 dark:text-white">SPY</p><p class="text-[10px] text-gray-500">0.8 shares</p></div>
                                            </div>
                                            <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">$469</p><p class="text-[10px] text-success-600 dark:text-success-400">+0.72%</p></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bottom Nav -->
                                <div class="border-t border-gray-100 bg-white px-6 py-3 dark:border-gray-800 dark:bg-gray-900">
                                    <div class="flex items-center justify-between">
                                        <div class="flex flex-col items-center gap-1">
                                            <svg class="h-5 w-5 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                                            </svg>
                                            <span class="text-[9px] font-medium text-primary-600 dark:text-primary-400">Home</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                                            </svg>
                                            <span class="text-[9px] font-medium text-gray-400">Search</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary-500">
                                                <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                                            </svg>
                                            <span class="text-[9px] font-medium text-gray-400">Markets</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                            </svg>
                                            <span class="text-[9px] font-medium text-gray-400">Profile</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Home Indicator -->
                                <div class="flex justify-center bg-white pb-2 dark:bg-gray-900">
                                    <div class="h-1 w-24 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Cards -->
                        <div class="absolute -left-4 top-24 hidden animate-float rounded-xl border border-gray-200 bg-white p-3 shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:block" style="animation-delay: 0.5s;">
                            <div class="flex items-center gap-2.5">
                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-success-100 dark:bg-success-900/30">
                                    <svg class="h-4 w-4 text-success-600 dark:text-success-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <div><p class="text-[10px] text-gray-500">Order Filled</p><p class="text-sm font-semibold text-gray-900 dark:text-white">Bought 5 TSLA</p></div>
                            </div>
                        </div>
                        <div class="absolute -right-2 bottom-44 hidden animate-float rounded-xl border border-gray-200 bg-white p-3 shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:block" style="animation-delay: 1s;">
                            <div class="flex items-center gap-2.5">
                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-100 dark:bg-primary-900/30">
                                    <svg class="h-4 w-4 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div><p class="text-[10px] text-gray-500">Dividend Received</p><p class="text-sm font-semibold text-gray-900 dark:text-white">+$42.30 AAPL</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Stats Bar --}}
            <div class="mt-16 grid grid-cols-2 gap-6 rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900 sm:grid-cols-4 lg:mt-24">
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white" data-counter="50+">0</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">African Markets</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white" data-counter="$2B+">$0</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Processed Annually</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white" data-counter="200+">0</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Enterprise Clients</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white" data-counter="99.9%">0</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Uptime SLA</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         SOLUTIONS
    ============================================================ --}}
    <section class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">Our Solutions</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Everything You Need to
                    <span class="gradient-text">Pay & Collect</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    A unified payment infrastructure built for businesses operating across Africa.
                </p>
            </div>

            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                {{-- Card 1 --}}
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Pay-to-Mobile Wallets</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Disburse funds directly to Orange Money, MTN MoMo, Wave and 30+ mobile wallets across Africa.</p>
                </div>

                {{-- Card 2 --}}
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Pay-to-Banks</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Send payouts to local bank accounts across WAEMU, CEMAC and East Africa in local currencies.</p>
                </div>

                {{-- Card 3 --}}
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="absolute -top-3 right-4">
                        <span class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white">New</span>
                    </div>
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Stablecoin Payouts</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Pay in USDC or USDT to crypto wallets — ideal for cross-border settlements and treasury management.</p>
                </div>

                {{-- Card 4 --}}
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Collections</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Accept payments from mobile wallets, bank transfers, cards and BNPL — all through a single checkout.</p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center gap-2 text-primary-600 transition-colors hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300">
                    Explore all solutions
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================
         COVERAGE MAP / MARKETS
    ============================================================ --}}
    <section class="bg-gray-50 py-24 dark:bg-gray-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-accent mb-4">Coverage</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    50+ Markets,
                    <span class="gradient-text">One Integration</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    From Dakar to Nairobi, our network covers the most important payment corridors on the continent.
                </p>
            </div>

            <div class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                {{-- West Africa --}}
                <div class="card card-hover p-6">
                    <div class="mb-4 flex items-start justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>
                            </svg>
                        </div>
                        <span class="badge badge-primary">WAEMU</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">West Africa</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Senegal, Côte d'Ivoire, Mali, Burkina Faso, Togo, Bénin, Niger, Guinea-Bissau and more.</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">Orange Money</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">Wave</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">MTN MoMo</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-500 dark:bg-gray-800">+12</span>
                    </div>
                </div>

                {{-- Central Africa --}}
                <div class="card card-hover p-6">
                    <div class="mb-4 flex items-start justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>
                            </svg>
                        </div>
                        <span class="badge badge-primary">CEMAC</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Central Africa</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Cameroon, DRC, Congo, Gabon, Chad, Central African Republic and more.</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">MTN MoMo</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">Airtel Money</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">M-Pesa</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-500 dark:bg-gray-800">+8</span>
                    </div>
                </div>

                {{-- East Africa --}}
                <div class="card card-hover p-6">
                    <div class="mb-4 flex items-start justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>
                            </svg>
                        </div>
                        <span class="badge badge-accent">EAC</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">East Africa</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Kenya, Tanzania, Uganda, Rwanda, Ethiopia and more.</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">M-Pesa</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">Airtel Money</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-700 dark:bg-gray-800 dark:text-gray-300">Equity Bank</span>
                        <span class="rounded-md bg-gray-100 px-2 py-1 font-mono text-xs text-gray-500 dark:bg-gray-800">+10</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         SECURITY / COMPLIANCE
    ============================================================ --}}
    <section class="relative overflow-hidden bg-primary-950 py-24">
        <div class="absolute inset-0 opacity-10"><div class="grid-pattern h-full w-full"></div></div>
        <div class="pointer-events-none absolute right-0 top-0 h-96 w-96 rounded-full bg-primary-500/20 blur-[120px]"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-64 w-64 rounded-full bg-accent-500/10 blur-[100px]"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2 text-sm font-medium text-accent-300">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                        Compliance & Security
                    </span>
                    <h2 class="mt-6 font-display text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                        Built for Regulated<br>
                        <span class="bg-gradient-to-r from-accent-400 to-accent-300 bg-clip-text text-transparent">Financial Markets</span>
                    </h2>
                    <p class="mt-6 text-lg text-primary-200">
                        We operate under strict regulatory frameworks across Africa, ensuring your business stays compliant while scaling fast.
                    </p>
                    <div class="mt-8 grid grid-cols-3 gap-6">
                        <div>
                            <p class="font-mono text-3xl font-bold text-white">PCI</p>
                            <p class="mt-1 text-sm text-primary-300">DSS Level 1</p>
                        </div>
                        <div>
                            <p class="font-mono text-3xl font-bold text-white">ISO</p>
                            <p class="mt-1 text-sm text-primary-300">27001 Certified</p>
                        </div>
                        <div>
                            <p class="font-mono text-3xl font-bold text-white">AML</p>
                            <p class="mt-1 text-sm text-primary-300">KYC/KYB Built-in</p>
                        </div>
                    </div>
                    <a href="#" class="mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-6 py-3 font-semibold text-primary-900 transition-colors hover:bg-primary-50">
                        Learn About Compliance
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-white">256-bit Encryption</h3>
                        <p class="mt-1 text-sm text-primary-300">All data encrypted in transit and at rest using AES-256.</p>
                    </div>
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.746 3.746 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-white">Regulatory Licenses</h3>
                        <p class="mt-1 text-sm text-primary-300">Licensed by central banks and financial regulators across Africa.</p>
                    </div>
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-white">24/7 Fraud Monitoring</h3>
                        <p class="mt-1 text-sm text-primary-300">Real-time transaction monitoring with AI-powered fraud detection.</p>
                    </div>
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-white">Developer-First API</h3>
                        <p class="mt-1 text-sm text-primary-300">REST & Webhooks with sandbox, SDKs and full documentation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         USE CASES / INDUSTRIES
    ============================================================ --}}
    <section class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">Industries</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Built for Every
                    <span class="gradient-text">Business Model</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Whether you're a bank, a gig platform or an e-commerce marketplace, Digitwace fits your payment flow.
                </p>
            </div>

            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">Banks & Neobanks</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Power cross-border transfers and domestic payouts for your customers.</p>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-accent-100 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">Gig Economy</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Pay drivers, couriers and freelancers instantly to their preferred wallet.</p>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">E-commerce</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Accept local payment methods and pay out merchants across the continent.</p>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-accent-100 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">Payroll & EOR</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Automate salary disbursements to employees across multiple African countries.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         TESTIMONIALS
    ============================================================ --}}
    <section class="bg-gray-50 py-24 dark:bg-gray-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">Testimonials</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Trusted by
                    <span class="gradient-text">200+ Businesses</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    From startups to enterprise, companies across Africa rely on Digitwace to move money.
                </p>
            </div>

            <div class="mt-16 grid gap-6 md:grid-cols-3">
                <div class="card p-6">
                    <div class="mb-4 flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-700 dark:text-gray-300">"Digitwace cut our payout integration time from 6 months to 2 weeks. We now pay 10,000+ drivers daily across 8 countries with a single API call."</p>
                    <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 font-bold text-primary-600 dark:bg-primary-900/30">AK</div>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Amadou Koné</p>
                            <p class="text-sm text-gray-500">CTO, RideAfrique</p>
                        </div>
                    </div>
                </div>
                <div class="card p-6">
                    <div class="mb-4 flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-700 dark:text-gray-300">"The compliance layer is a game-changer. We don't have to worry about local regulations — Digitwace handles it all so we can focus on growth."</p>
                    <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-accent-100 font-bold text-accent-600 dark:bg-accent-900/30">FN</div>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Fatima Ndiaye</p>
                            <p class="text-sm text-gray-500">Head of Payments, FinServ Group</p>
                        </div>
                    </div>
                </div>
                <div class="card p-6">
                    <div class="mb-4 flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-700 dark:text-gray-300">"We process payroll for 5,000 employees across 12 African countries. Digitwace's reliability and 99.9% uptime is critical to our operations."</p>
                    <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 font-bold text-primary-600 dark:bg-primary-900/30">JO</div>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">James Osei</p>
                            <p class="text-sm text-gray-500">VP Operations, PanAfrica EOR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         CTA FINAL
    ============================================================ --}}
    <section class="relative overflow-hidden bg-gray-50 py-24 dark:bg-gray-950">
        <div class="absolute inset-0 grid-pattern opacity-50"></div>
        <div class="pointer-events-none absolute left-1/4 top-0 h-96 w-96 rounded-full bg-primary-500/10 blur-[120px]"></div>
        <div class="pointer-events-none absolute bottom-0 right-1/4 h-64 w-64 rounded-full bg-accent-500/10 blur-[100px]"></div>

        <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <span class="mb-6 inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2 text-sm font-medium text-accent-700 dark:text-accent-300">
                <span class="relative flex h-2 w-2">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-accent-400 opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-accent-500"></span>
                </span>
                Join 200+ Businesses Across Africa
            </span>

            <h2 class="font-display text-4xl font-bold text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                Ready to Scale Your<br>
                <span class="gradient-text">Payment Operations?</span>
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-600 dark:text-gray-400">
                Get API access in minutes. No setup fees. Go live in days, not months.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="#" class="btn-primary inline-flex w-full items-center justify-center gap-2 rounded-xl px-10 py-5 text-lg sm:w-auto">
                    Get API Access
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-10 py-5 text-lg font-semibold text-gray-900 transition-colors hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 sm:w-auto">
                    Talk to Sales
                </a>
            </div>

            <div class="mt-12 flex flex-col items-center justify-center gap-6 sm:flex-row sm:gap-12">
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                    </svg>
                    No setup fees
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                    </svg>
                    Sandbox available
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                    </svg>
                    Dedicated support
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>

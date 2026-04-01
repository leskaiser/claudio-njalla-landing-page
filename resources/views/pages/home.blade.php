<x-layouts.app title="Digitwace — Solutions Digitales & Fintech pour l'Afrique">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-gray-50 pb-16 pt-24 dark:bg-gray-950 lg:pb-24 lg:pt-32">
        <div class="absolute inset-0 grid-pattern opacity-50"></div>
        <div class="pointer-events-none absolute right-0 top-0 h-[600px] w-[600px] rounded-full bg-primary-500/10 blur-[120px]"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-[400px] w-[400px] rounded-full bg-accent-500/10 blur-[100px]"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
                <div class="text-center lg:text-left">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-accent-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-accent-500"></span>
                        </span>
                        <span class="text-sm font-medium text-accent-700 dark:text-accent-300">{{ __('app.hero.badge') }}</span>
                    </div>
                    <h1 class="font-display text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                        {{ __('app.hero.headline') }}<br>
                        <span class="text-primary-500">{{ __('app.hero.headline_2') }}</span>
                    </h1>
                    <p class="mx-auto mt-6 max-w-xl text-lg text-gray-600 dark:text-gray-400 lg:mx-0">
                        {{ __('app.hero.subheadline') }}
                    </p>
                    <div class="mt-8 flex flex-col items-center gap-4 sm:flex-row lg:justify-start">
                        <a href="#solutions" class="btn-primary inline-flex w-full items-center justify-center gap-2 rounded-xl px-6 py-3 text-sm sm:w-auto">
                            {{ __('app.hero.cta_primary') }}
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </a>
                        <a href="#technologie" class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-6 py-3 text-sm font-semibold text-gray-900 transition-colors hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 sm:w-auto">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/></svg>
                            {{ __('app.hero.cta_secondary') }}
                        </a>
                    </div>
                    <div class="mt-10 flex flex-wrap items-center justify-center gap-6 lg:justify-start">
                        @foreach(['stat_1','stat_2','stat_3'] as $s)
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ __('app.hero.'.$s) }}
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- Phone mockup --}}
                <div class="relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <div class="relative mx-auto aspect-[9/19.5] w-64 rounded-[3rem] border-8 border-gray-900 bg-gray-900 p-2 shadow-2xl dark:border-gray-700 lg:w-72">
                            <div class="absolute left-1/2 top-4 z-10 h-7 w-24 -translate-x-1/2 rounded-full bg-gray-900 dark:bg-gray-700"></div>
                            <div class="flex h-full flex-col overflow-hidden rounded-[2.25rem] bg-white dark:bg-gray-900">
                                <div class="bg-gradient-to-r from-primary-500 to-primary-600 px-4 pb-4 pt-10 text-white">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-xs opacity-80">Solde WacePay</p>
                                            <p class="font-mono text-xl font-bold">XAF 2 850 000</p>
                                            <p class="flex items-center gap-1 text-xs text-accent-300">
                                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                                +XAF 125 000 (4.6%) aujourd'hui
                                            </p>
                                        </div>
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white/20">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative h-28 bg-gray-50 dark:bg-gray-800">
                                    <svg class="h-full w-full pt-6" viewBox="0 0 300 100" preserveAspectRatio="none">
                                        <defs><linearGradient id="cg" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgb(55,84,160);stop-opacity:0.3"/><stop offset="100%" style="stop-color:rgb(55,84,160);stop-opacity:0"/></linearGradient></defs>
                                        <path d="M0,80 Q30,70 60,65 T120,50 T180,55 T240,30 T300,20 V100 H0 Z" fill="url(#cg)"/>
                                        <path d="M0,80 Q30,70 60,65 T120,50 T180,55 T240,30 T300,20" fill="none" stroke="#3754a0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <div class="flex items-center justify-between border-b border-gray-100 px-4 py-2 dark:border-gray-800">
                                        <span class="text-xs font-semibold text-gray-900 dark:text-white">Transactions récentes</span>
                                        <span class="text-xs text-primary-600 dark:text-primary-400">Voir tout</span>
                                    </div>
                                    <div class="divide-y divide-gray-100 px-4 dark:divide-gray-800">
                                        <div class="flex items-center justify-between py-2.5">
                                            <div class="flex items-center gap-2.5">
                                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-orange-100 text-sm font-bold text-orange-600">M</div>
                                                <div><p class="text-sm font-semibold text-gray-900 dark:text-white">MTN MoMo</p><p class="text-[10px] text-gray-500">Envoi Yaoundé</p></div>
                                            </div>
                                            <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">-50 000</p><p class="text-[10px] text-success-600">Succès</p></div>
                                        </div>
                                        <div class="flex items-center justify-between py-2.5">
                                            <div class="flex items-center gap-2.5">
                                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-yellow-100 text-sm font-bold text-yellow-600">W</div>
                                                <div><p class="text-sm font-semibold text-gray-900 dark:text-white">Wave</p><p class="text-[10px] text-gray-500">Reçu Dakar</p></div>
                                            </div>
                                            <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">+120 000</p><p class="text-[10px] text-success-600">Succès</p></div>
                                        </div>
                                        <div class="flex items-center justify-between py-2.5">
                                            <div class="flex items-center gap-2.5">
                                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-600">B</div>
                                                <div><p class="text-sm font-semibold text-gray-900 dark:text-white">Virement</p><p class="text-[10px] text-gray-500">Afriland Bank</p></div>
                                            </div>
                                            <div class="text-right"><p class="font-mono text-sm font-semibold text-gray-900 dark:text-white">-200 000</p><p class="text-[10px] text-success-600">Succès</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center bg-white pb-2 dark:bg-gray-900"><div class="h-1 w-24 rounded-full bg-gray-300 dark:bg-gray-600"></div></div>
                            </div>
                        </div>
                        <div class="absolute -left-4 top-24 hidden animate-float rounded-xl border border-gray-200 bg-white p-3 shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:block" style="animation-delay:0.5s">
                            <div class="flex items-center gap-2.5">
                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-success-100"><svg class="h-4 w-4 text-success-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div>
                                <div><p class="text-[10px] text-gray-500">Transfert envoyé</p><p class="text-sm font-semibold text-gray-900 dark:text-white">XAF 50 000 → Dakar</p></div>
                            </div>
                        </div>
                        <div class="absolute -right-2 bottom-44 hidden animate-float rounded-xl border border-gray-200 bg-white p-3 shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:block" style="animation-delay:1s">
                            <div class="flex items-center gap-2.5">
                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-100"><svg class="h-4 w-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                                <div><p class="text-[10px] text-gray-500">Paiement reçu</p><p class="text-sm font-semibold text-gray-900 dark:text-white">+XAF 120 000</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Stats --}}
            <div class="mt-16 grid grid-cols-2 gap-6 rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900 sm:grid-cols-4 lg:mt-24">
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white" data-counter="110+">0</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ __('app.hero.stats_countries_label') }}</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white" data-counter="2015">0</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ __('app.hero.stats_founded_label') }}</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white" data-counter="3">0</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ __('app.hero.stats_products_label') }}</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white" data-counter="99.9%">0</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ __('app.hero.stats_uptime_label') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- WACEPAY --}}
    <section id="solutions" class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">{{ __('app.wacepay.badge') }}</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    {{ __('app.wacepay.headline') }}<br><span class="text-primary-500">{{ __('app.wacepay.headline_2') }}</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">{{ __('app.wacepay.sub') }}</p>
            </div>
            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">{{ __('app.wacepay.card_1_title') }}</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('app.wacepay.card_1_desc') }}</p>
                </div>
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">{{ __('app.wacepay.card_2_title') }}</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('app.wacepay.card_2_desc') }}</p>
                </div>
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:bg-gray-800">
                    <div class="absolute -top-3 right-4"><span class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white">{{ __('app.wacepay.card_3_badge') }}</span></div>
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">{{ __('app.wacepay.card_3_title') }}</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('app.wacepay.card_3_desc') }}</p>
                </div>
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3"/></svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">{{ __('app.wacepay.card_4_title') }}</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('app.wacepay.card_4_desc') }}</p>
                </div>
            </div>
            <div class="mt-16 text-center">
                <a href="https://wacepay.io" target="_blank" class="inline-flex items-center gap-2 text-primary-600 hover:text-primary-500 dark:text-primary-400">
                    {{ __('app.wacepay.cta') }} <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- PROCESSUS --}}
    <section id="technologie" class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-accent mb-4">{{ __("app.process.badge") }}</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    {{ __("app.process.headline") }}<br><span class="text-primary-500">{{ __("app.process.headline_2") }}</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">{{ __("app.process.sub") }}</p>
            </div>

            {{-- SVG Flow Diagram --}}
            <div class="relative mt-16 overflow-x-auto pb-4">
                <div style="min-width:860px;">
                    <svg viewBox="0 0 860 420" xmlns="http://www.w3.org/2000/svg" class="w-full" style="min-width:860px;max-width:960px;margin:0 auto;display:block;">
                        <defs>
                            <marker id="arr" markerWidth="8" markerHeight="8" refX="6" refY="3" orient="auto">
                                <path d="M0,0 L0,6 L8,3 z" fill="#94a3b8"/>
                            </marker>
                            <marker id="arr-dashed" markerWidth="8" markerHeight="8" refX="6" refY="3" orient="auto">
                                <path d="M0,0 L0,6 L8,3 z" fill="#94a3b8"/>
                            </marker>
                        </defs>

                        {{-- === NODES === --}}

                        {{-- Node 1: Client (col1, row1) x=60 y=60 --}}
                        <rect x="20" y="30" width="110" height="110" rx="20" fill="#3754a0"/>
                        <text x="75" y="105" text-anchor="middle" fill="white" font-size="12" font-weight="700" font-family="Plus Jakarta Sans, sans-serif">{{ app()->getLocale() === "fr" ? "Client" : "Payer" }}</text>
                        <text x="75" y="155" text-anchor="middle" fill="#94a3b8" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Initie le paiement" : "Initiates payment" }}</text>
                        {{-- icon person --}}
                        <circle cx="75" cy="62" r="12" fill="none" stroke="white" stroke-width="1.5"/>
                        <path d="M55 85 Q75 75 95 85" fill="none" stroke="white" stroke-width="1.5"/>

                        {{-- Node 2: Marchand (col2, row1) x=370 y=60 --}}
                        <rect x="330" y="30" width="110" height="110" rx="20" fill="#3754a0"/>
                        <text x="385" y="105" text-anchor="middle" fill="white" font-size="12" font-weight="700" font-family="Plus Jakarta Sans, sans-serif">{{ app()->getLocale() === "fr" ? "Marchand" : "Merchant" }}</text>
                        <text x="385" y="155" text-anchor="middle" fill="#94a3b8" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Reçoit la demande" : "Receives request" }}</text>
                        {{-- icon cart --}}
                        <path d="M368 58 h4 l8 20 h16 l4-14 h-22" fill="none" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                        <circle cx="378" cy="82" r="2.5" fill="white"/>
                        <circle cx="390" cy="82" r="2.5" fill="white"/>

                        {{-- Node 3: WacePay (col3, row1) x=680 y=60 --}}
                        <rect x="640" y="30" width="120" height="110" rx="20" fill="#fe8005"/>
                        <text x="700" y="100" text-anchor="middle" fill="white" font-size="12" font-weight="700" font-family="Plus Jakarta Sans, sans-serif">WacePay</text>
                        <text x="700" y="115" text-anchor="middle" fill="white" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Gateway" : "Gateway" }}</text>
                        <text x="700" y="155" text-anchor="middle" fill="#94a3b8" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Traite la transaction" : "Processes transaction" }}</text>
                        {{-- icon gear --}}
                        <circle cx="700" cy="68" r="10" fill="none" stroke="white" stroke-width="1.5"/>
                        <circle cx="700" cy="68" r="4" fill="none" stroke="white" stroke-width="1.5"/>

                        {{-- Node 4: Banque Acquéreur (col3, row2) x=680 y=240 --}}
                        <rect x="640" y="210" width="120" height="110" rx="20" fill="#3754a0"/>
                        <text x="700" y="280" text-anchor="middle" fill="white" font-size="11" font-weight="700" font-family="Plus Jakarta Sans, sans-serif">{{ app()->getLocale() === "fr" ? "Banque" : "Acquirer" }}</text>
                        <text x="700" y="295" text-anchor="middle" fill="white" font-size="11" font-weight="700" font-family="Plus Jakarta Sans, sans-serif">{{ app()->getLocale() === "fr" ? "Acquéreur" : "Bank" }}</text>
                        <text x="700" y="335" text-anchor="middle" fill="#94a3b8" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Vérifie les données" : "Verify transaction data" }}</text>
                        {{-- icon bank --}}
                        <path d="M682 248 h36 M685 248 v14 M700 248 v14 M715 248 v14 M682 262 h36" fill="none" stroke="white" stroke-width="1.5"/>
                        <path d="M700 240 l18 8 h-36 z" fill="white"/>

                        {{-- Node 5: Banque Émettrice (col2, row3) x=370 y=310 --}}
                        <rect x="330" y="310" width="110" height="110" rx="20" fill="#fe8005"/>
                        <text x="385" y="380" text-anchor="middle" fill="white" font-size="11" font-weight="700" font-family="Plus Jakarta Sans, sans-serif">{{ app()->getLocale() === "fr" ? "Banque" : "Issuer" }}</text>
                        <text x="385" y="395" text-anchor="middle" fill="white" font-size="11" font-weight="700" font-family="Plus Jakarta Sans, sans-serif">{{ app()->getLocale() === "fr" ? "Émettrice" : "Bank" }}</text>
                        {{-- icon bank --}}
                        <path d="M367 348 h36 M370 348 v14 M385 348 v14 M400 348 v14 M367 362 h36" fill="none" stroke="white" stroke-width="1.5"/>
                        <path d="M385 340 l18 8 h-36 z" fill="white"/>

                        {{-- Node 6: Système Paiement (col3, row3) x=680 y=310 --}}
                        <rect x="640" y="380" width="120" height="40" rx="12" fill="#3754a0"/>
                        <text x="700" y="405" text-anchor="middle" fill="white" font-size="11" font-weight="700" font-family="Plus Jakarta Sans, sans-serif">{{ app()->getLocale() === "fr" ? "Système Paiement" : "Payment System" }}</text>

                        {{-- === ARROWS === --}}

                        {{-- Client  Marchand (row1, solid) --}}
                        <line x1="130" y1="85" x2="328" y2="85" stroke="#94a3b8" stroke-width="1.5" marker-end="url(#arr)"/>
                        {{-- label pill --}}
                        <rect x="185" y="68" width="80" height="22" rx="11" fill="#f1f5f9"/>
                        <text x="225" y="83" text-anchor="middle" fill="#64748b" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Achat" : "Purchase" }}</text>

                        {{-- Marchand  WacePay (row1, solid) --}}
                        <line x1="440" y1="85" x2="638" y2="85" stroke="#94a3b8" stroke-width="1.5" marker-end="url(#arr)"/>
                        {{-- label pill --}}
                        <rect x="468" y="68" width="100" height="22" rx="11" fill="#f1f5f9"/>
                        <text x="518" y="83" text-anchor="middle" fill="#64748b" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Données envoyées" : "Data sent to gateway" }}</text>

                        {{-- WacePay  Banque Acquéreur (col3, solid) --}}
                        <line x1="700" y1="140" x2="700" y2="208" stroke="#94a3b8" stroke-width="1.5" marker-end="url(#arr)"/>
                        {{-- label pill --}}
                        <rect x="640" y="165" width="120" height="22" rx="11" fill="#f1f5f9"/>
                        <text x="700" y="180" text-anchor="middle" fill="#64748b" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Initier transaction" : "Initiate transaction" }}</text>

                        {{-- Banque Acquéreur  Système Paiement (col3, solid) --}}
                        <line x1="700" y1="320" x2="700" y2="378" stroke="#94a3b8" stroke-width="1.5" marker-end="url(#arr)"/>
                        {{-- label pill --}}
                        <rect x="640" y="340" width="120" height="22" rx="11" fill="#f1f5f9"/>
                        <text x="700" y="355" text-anchor="middle" fill="#64748b" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Vérif. données" : "Verify transaction" }}</text>

                        {{-- Système Paiement  Banque Émettrice (row3, solid) --}}
                        <line x1="638" y1="400" x2="442" y2="380" stroke="#94a3b8" stroke-width="1.5" marker-end="url(#arr)"/>
                        {{-- label pill --}}
                        <rect x="490" y="378" width="110" height="22" rx="11" fill="#f1f5f9"/>
                        <text x="545" y="393" text-anchor="middle" fill="#64748b" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Vérif. disponibilité" : "Check availability" }}</text>

                        {{-- Banque Émettrice  Client (dashed, retour) --}}
                        <path d="M330 365 Q160 365 75 140" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-dasharray="6,4" marker-end="url(#arr-dashed)"/>
                        {{-- label pill --}}
                        <rect x="100" y="330" width="110" height="22" rx="11" fill="#f1f5f9"/>
                        <text x="155" y="345" text-anchor="middle" fill="#64748b" font-size="10" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Statut transaction" : "Transaction status" }}</text>

                        {{-- Banque Émettrice  Marchand (dashed, settlement) --}}
                        <path d="M385 310 Q385 265 385 140" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-dasharray="6,4" marker-end="url(#arr-dashed)"/>
                        {{-- label pill --}}
                        <rect x="310" y="220" width="110" height="22" rx="11" fill="#e0e7ff"/>
                        <text x="365" y="235" text-anchor="middle" fill="#3754a0" font-size="10" font-weight="600" font-family="sans-serif">{{ app()->getLocale() === "fr" ? "Règlement fonds" : "Funds settlement" }}</text>

                        {{-- OTP label (dashed from Client) --}}
                        <path d="M75 140 Q75 200 200 200" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <rect x="130" y="188" width="100" height="22" rx="11" fill="#f1f5f9"/>
                        <text x="180" y="203" text-anchor="middle" fill="#64748b" font-size="10" font-family="sans-serif">OTP / 3DS</text>

                    </svg>
                </div>
            </div>

            {{-- Steps cards --}}
            <div class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach([["01","step_1"],["02","step_2"],["03","step_3"],["04","step_4"]] as [$num,$key])
                <div class="card card-hover p-6">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl {{ $loop->even ? "bg-accent-100 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400" : "bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400" }}">
                        <span class="font-display text-xl font-bold">{{ $num }}</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">{{ __("app.process.".$key."_title") }}</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __("app.process.".$key."_desc") }}</p>
                </div>
                @endforeach
            </div>
        </div>
            {{-- Steps cards --}}
            <div class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach([['01','step_1'],['02','step_2'],['03','step_3'],['04','step_4']] as [$num,$key])
                <div class="card card-hover p-6">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl {{ $loop->even ? 'bg-accent-100 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400' : 'bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400' }}">
                        <span class="font-display text-xl font-bold">{{ $num }}</span>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">{{ __('app.process.'.$key.'_title') }}</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('app.process.'.$key.'_desc') }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SÉCURITÉ --}}    {{-- SÉCURITÉ --}}
    <section class="relative overflow-hidden bg-primary-950 py-24">
        <div class="absolute inset-0 opacity-10"><div class="grid-pattern h-full w-full"></div></div>
        <div class="pointer-events-none absolute right-0 top-0 h-96 w-96 rounded-full bg-primary-500/20 blur-[120px]"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-64 w-64 rounded-full bg-accent-500/10 blur-[100px]"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2 text-sm font-medium text-accent-300">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                        {{ __('app.security.badge') }}
                    </span>
                    <h2 class="mt-6 font-display text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                        {{ __('app.security.headline') }}<br>
                        <span class="text-accent-400">{{ __('app.security.headline_2') }}</span>
                    </h2>
                    <p class="mt-6 text-lg text-primary-200">{{ __('app.security.sub') }}</p>
                    <div class="mt-8 grid grid-cols-3 gap-6">
                        <div><p class="font-mono text-3xl font-bold text-white">PCI</p><p class="mt-1 text-sm text-primary-300">{{ __('app.security.stat_1') }}</p></div>
                        <div><p class="font-mono text-3xl font-bold text-white">ISO</p><p class="mt-1 text-sm text-primary-300">{{ __('app.security.stat_2') }}</p></div>
                        <div><p class="font-mono text-3xl font-bold text-white">AML</p><p class="mt-1 text-sm text-primary-300">{{ __('app.security.stat_3') }}</p></div>
                    </div>
                    <a href="#" class="mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-6 py-3 font-semibold text-primary-900 hover:bg-primary-50">
                        {{ __('app.security.cta') }} <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    @foreach([
                        ['card_1','M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z'],
                        ['card_2','M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.746 3.746 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z'],
                        ['card_3','M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z'],
                        ['card_4','M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5'],
                    ] as [$card,$path])
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $path }}"/></svg>
                        </div>
                        <h3 class="font-display font-bold text-white">{{ __('app.security.'.$card.'_title') }}</h3>
                        <p class="mt-1 text-sm text-primary-300">{{ __('app.security.'.$card.'_desc') }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUITS avec logos --}}
    <section class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">{{ __('app.products.badge') }}</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    {{ __('app.products.headline') }} <span class="text-primary-500">{{ __('app.products.headline_2') }}</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">{{ __('app.products.sub') }}</p>
            </div>
            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                {{-- WacePay --}}
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-8 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:bg-gray-800">
                    <div class="absolute -top-3 right-4"><span class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white">Lead</span></div>
                    <div class="mb-5">
                        <img src="{{ asset('nos-produits/wacepay.png') }}" alt="WacePay" class="h-14 w-auto object-contain dark:brightness-0 dark:invert">
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">WacePay</h3>
                    <p class="mt-3 text-gray-600 dark:text-gray-400">{{ __('app.products.wacepay_desc') }}</p>
                    <a href="https://wacepay.io" target="_blank" class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium text-primary-600 hover:text-primary-500 dark:text-primary-400">
                        {{ __('app.products.learn_more') }} <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
                {{-- Nufisms --}}
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-8 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:bg-gray-800">
                    <div class="mb-5">
                        <img src="{{ asset('nos-produits/nufisms.png') }}" alt="Nufisms" class="h-14 w-auto object-contain dark:brightness-0 dark:invert">
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Nufisms</h3>
                    <p class="mt-3 text-gray-600 dark:text-gray-400">{{ __('app.products.nufisms_desc') }}</p>
                    <a href="https://nufisms.com" target="_blank" class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium text-primary-600 hover:text-primary-500 dark:text-primary-400">
                        {{ __('app.products.learn_more') }} <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
                {{-- DigitStore --}}
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-8 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:bg-gray-800">
                    <div class="mb-5">
                        <img src="{{ asset('nos-produits/digitstore.png') }}" alt="DigitStore" class="h-14 w-auto object-contain dark:brightness-0 dark:invert">
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">DigitStore</h3>
                    <p class="mt-3 text-gray-600 dark:text-gray-400">{{ __('app.products.digitstore_desc') }}</p>
                    <a href="https://www.digit-store.cm" target="_blank" class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium text-primary-600 hover:text-primary-500 dark:text-primary-400">
                        {{ __('app.products.learn_more') }} <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="bg-gray-50 py-24 dark:bg-gray-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-accent mb-4">{{ __('app.services.badge') }}</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    {{ __('app.services.headline') }}<br><span class="text-primary-500">{{ __('app.services.headline_2') }}</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">{{ __('app.services.sub') }}</p>
            </div>
            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach([
                    ['dev','M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5','primary'],
                    ['mkt','M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z','accent'],
                    ['train','M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5','primary'],
                    ['design','M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42','accent'],
                ] as [$key,$path,$color])
                <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-{{ $color }}-100 text-{{ $color }}-600 dark:bg-{{ $color }}-900/30 dark:text-{{ $color }}-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $path }}"/></svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">{{ __('app.services.'.$key.'_title') }}</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('app.services.'.$key.'_desc') }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- À PROPOS --}}
    <section class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <span class="badge badge-primary mb-4">{{ __('app.about.badge') }}</span>
                    <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                        {{ __('app.about.headline') }}<br><span class="text-primary-500">{{ __('app.about.headline_2') }}</span>
                    </h2>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">{{ __('app.about.desc') }}</p>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">{{ __('app.about.desc_2') }}</p>
                    <div class="mt-8 grid grid-cols-2 gap-6">
                        <div class="rounded-xl border border-gray-200 bg-gray-50 p-4 dark:border-gray-800 dark:bg-gray-800">
                            <p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">🌍</p>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ __('app.about.stat_1_label') }}</p>
                        </div>
                        <div class="rounded-xl border border-gray-200 bg-gray-50 p-4 dark:border-gray-800 dark:bg-gray-800">
                            <p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">LLC</p>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ __('app.about.stat_2_label') }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-6">
                    <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">{{ __('app.about.vision_title') }}</h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-400">{{ __('app.about.vision_desc') }}</p>
                    </div>
                    <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">{{ __('app.about.mission_title') }}</h3>
                        <div class="mt-3 space-y-2">
                            @foreach(['mission_1','mission_2','mission_3'] as $m)
                            <div class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <svg class="h-4 w-4 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                {{ __('app.about.'.$m) }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CLIENTS SLIDER --}}
    <section class="bg-gray-50 py-20 dark:bg-gray-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">{{ __('app.testimonials.badge') }}</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
                    {{ __('app.testimonials.headline') }} <span class="text-primary-500">{{ __('app.testimonials.headline_2') }}</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">{{ __('app.testimonials.sub') }}</p>
            </div>
        </div>

        {{-- Infinite scroll track --}}
        <div class="relative mt-14 overflow-hidden">
            {{-- fade edges --}}
            <div class="pointer-events-none absolute inset-y-0 left-0 z-10 w-24 bg-gradient-to-r from-gray-50 to-transparent dark:from-gray-950"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 z-10 w-24 bg-gradient-to-l from-gray-50 to-transparent dark:from-gray-950"></div>

            <div class="logos-track flex gap-12">
                @php
                    $logos = [
                        ['name' => 'MTN MoMo',    'abbr' => 'MTN'],
                        ['name' => 'Orange Money', 'abbr' => 'OM'],
                        ['name' => 'Wave',         'abbr' => 'Wave'],
                        ['name' => 'Afriland',     'abbr' => 'AFB'],
                        ['name' => 'UBA',          'abbr' => 'UBA'],
                        ['name' => 'Ecobank',      'abbr' => 'ECO'],
                        ['name' => 'Airtel Money', 'abbr' => 'AM'],
                        ['name' => 'M-Pesa',       'abbr' => 'MP'],
                    ];
                @endphp

                {{-- Double the list for seamless loop --}}
                @foreach([$logos, $logos] as $group)
                    @foreach($group as $logo)
                    <div class="logos-item flex shrink-0 items-center justify-center rounded-xl border border-gray-200 bg-white px-8 py-5 shadow-sm dark:border-gray-800 dark:bg-gray-900">
                        <span class="font-display text-lg font-bold text-gray-500 dark:text-gray-400">{{ $logo['name'] }}</span>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

    {{-- CERTIFICATIONS --}}
    <section class="bg-white py-16 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">{{ app()->getLocale() === 'fr' ? 'Certifications & Conformité' : 'Certifications & Compliance' }}</span>
                <h2 class="font-display text-2xl font-bold text-gray-900 dark:text-white sm:text-3xl">
                    {{ app()->getLocale() === 'fr' ? 'Une plateforme certifiée et conforme' : 'A certified and compliant platform' }}
                </h2>
                <p class="mt-3 text-gray-600 dark:text-gray-400">
                    {{ app()->getLocale() === 'fr'
                        ? 'Digitwace respecte les standards internationaux les plus stricts en matière de sécurité des paiements et de conformité réglementaire.'
                        : 'Digitwace meets the strictest international standards for payment security and regulatory compliance.' }}
                </p>
            </div>

            <div class="mt-12 flex flex-col items-center justify-center gap-8 sm:flex-row sm:gap-16">
                {{-- PCI DSS --}}
                <div class="flex flex-col items-center gap-4 rounded-2xl border border-gray-200 bg-gray-50 px-10 py-8 shadow-sm dark:border-gray-800 dark:bg-gray-800/50">
                    <div class="flex h-20 w-20 items-center justify-center rounded-xl bg-white p-2 shadow-sm ring-1 ring-gray-200 dark:bg-gray-700 dark:ring-gray-600">
                        <img src="{{ asset('pci.png') }}" alt="PCI DSS" class="h-16 w-16 object-contain">
                    </div>
                    <div class="text-center">
                        <p class="font-display font-bold text-gray-900 dark:text-white">PCI DSS</p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ app()->getLocale() === 'fr' ? 'Sécurité des données de paiement' : 'Payment Card Industry Data Security' }}</p>
                    </div>
                </div>

                {{-- ANTIC --}}
                <div class="flex flex-col items-center gap-4 rounded-2xl border border-gray-200 bg-gray-50 px-10 py-8 shadow-sm dark:border-gray-800 dark:bg-gray-800/50">
                    <div class="flex h-20 w-20 items-center justify-center rounded-xl bg-white p-2 shadow-sm ring-1 ring-gray-200 dark:bg-gray-700 dark:ring-gray-600">
                        <img src="{{ asset('antic.jpg') }}" alt="ANTIC" class="h-16 w-16 object-contain">
                    </div>
                    <div class="text-center">
                        <p class="font-display font-bold text-gray-900 dark:text-white">ANTIC</p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ app()->getLocale() === 'fr' ? 'Agence Nationale des TIC — Cameroun' : 'National Agency for ICT — Cameroon' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden bg-gray-50 py-24 dark:bg-gray-950">
        <div class="absolute inset-0 grid-pattern opacity-50"></div>
        <div class="pointer-events-none absolute left-1/4 top-0 h-96 w-96 rounded-full bg-primary-500/10 blur-[120px]"></div>
        <div class="pointer-events-none absolute bottom-0 right-1/4 h-64 w-64 rounded-full bg-accent-500/10 blur-[100px]"></div>
        <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <span class="mb-6 inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2 text-sm font-medium text-accent-700 dark:text-accent-300">
                <span class="relative flex h-2 w-2"><span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-accent-400 opacity-75"></span><span class="relative inline-flex h-2 w-2 rounded-full bg-accent-500"></span></span>
                {{ __('app.cta.badge') }}
            </span>
            <h2 class="font-display text-4xl font-bold text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                {{ __('app.cta.headline') }}<br><span class="text-primary-500">{{ __('app.cta.headline_2') }}</span>
            </h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-600 dark:text-gray-400">{{ __('app.cta.sub') }}</p>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="#" class="btn-primary inline-flex w-full items-center justify-center gap-2 rounded-xl px-10 py-5 text-lg sm:w-auto">
                    {{ __('app.cta.primary') }} <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <a href="#" class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-10 py-5 text-lg font-semibold text-gray-900 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 sm:w-auto">
                    {{ __('app.cta.secondary') }}
                </a>
            </div>
            <div class="mt-12 flex flex-col items-center justify-center gap-6 sm:flex-row sm:gap-12">
                @foreach(['feat_1','feat_2','feat_3'] as $f)
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    {{ __('app.cta.'.$f) }}
                </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.app>

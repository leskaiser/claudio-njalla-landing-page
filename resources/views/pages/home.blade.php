<x-layouts.app title="Digitwace — Solutions Digitales & Fintech pour l'Afrique">

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
                        <span class="text-sm font-medium text-accent-700 dark:text-accent-300">La nouvelle génération des solutions digitales en Afrique</span>
                    </div>

                    <h1 class="font-display text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                        L'infrastructure digitale<br>
                        <span class="gradient-text">de l'Afrique de demain</span>
                    </h1>

                    <p class="mx-auto mt-6 max-w-xl text-lg text-gray-600 dark:text-gray-400 lg:mx-0">
                        Digitwace conçoit des solutions fintech innovantes permettant des paiements rapides, sécurisés et sans frontières à travers sa technologie WacePay.
                    </p>

                    <div class="mt-8 flex flex-col items-center gap-4 sm:flex-row lg:justify-start">
                        <a href="#solutions" class="btn-primary inline-flex w-full items-center justify-center gap-2 rounded-xl px-6 py-3 text-sm sm:w-auto">
                            Découvrir nos solutions
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="#technologie" class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-6 py-3 text-sm font-semibold text-gray-900 transition-colors hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 sm:w-auto">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                            </svg>
                            Explorer notre technologie
                        </a>
                    </div>

                    <div class="mt-10 flex flex-wrap items-center justify-center gap-6 lg:justify-start">
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            110+ pays connectés
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            Transactions en temps réel
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            Cryptage avancé
                        </div>
                    </div>
                </div>

                {{-- Right Column — Phone Mockup --}}
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
                                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                                </svg>
                                                +XAF 125 000 (4.6%) aujourd'hui
                                            </p>
                                        </div>
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white/20">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative h-28 bg-gray-50 dark:bg-gray-800">
                                    <div class="absolute left-0 right-0 top-2 flex justify-center gap-2 px-4">
                                        <span class="rounded-full bg-primary-500 px-2 py-0.5 text-[10px] font-medium text-white">1J</span>
                                        <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500">1S</span>
                                        <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500">1M</span>
                                        <span class="rounded-full px-2 py-0.5 text-[10px] font-medium text-gray-500">1A</span>
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
                                <div class="border-t border-gray-100 bg-white px-6 py-3 dark:border-gray-800 dark:bg-gray-900">
                                    <div class="flex items-center justify-between">
                                        <div class="flex flex-col items-center gap-1">
                                            <svg class="h-5 w-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                                            <span class="text-[9px] font-medium text-primary-600">Accueil</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
                                            <span class="text-[9px] font-medium text-gray-400">Transfert</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary-500">
                                                <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                                            <span class="text-[9px] font-medium text-gray-400">Historique</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                                            <span class="text-[9px] font-medium text-gray-400">Profil</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center bg-white pb-2 dark:bg-gray-900">
                                    <div class="h-1 w-24 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -left-4 top-24 hidden animate-float rounded-xl border border-gray-200 bg-white p-3 shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:block" style="animation-delay: 0.5s;">
                            <div class="flex items-center gap-2.5">
                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-success-100 dark:bg-success-900/30">
                                    <svg class="h-4 w-4 text-success-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                </div>
                                <div><p class="text-[10px] text-gray-500">Transfert envoyé</p><p class="text-sm font-semibold text-gray-900 dark:text-white">XAF 50 000 → Dakar</p></div>
                            </div>
                        </div>
                        <div class="absolute -right-2 bottom-44 hidden animate-float rounded-xl border border-gray-200 bg-white p-3 shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:block" style="animation-delay: 1s;">
                            <div class="flex items-center gap-2.5">
                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-100 dark:bg-primary-900/30">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div><p class="text-[10px] text-gray-500">Paiement reçu</p><p class="text-sm font-semibold text-gray-900 dark:text-white">+XAF 120 000</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Stats Bar --}}
            <div class="mt-16 grid grid-cols-2 gap-6 rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900 sm:grid-cols-4 lg:mt-24">
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white">110+</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Pays connectés</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white">2015</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Fondée à Douala</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white">3</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Produits phares</p>
                </div>
                <div class="text-center">
                    <p class="font-mono text-3xl font-bold text-gray-900 dark:text-white">99.9%</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Uptime garanti</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         WACEPAY — FINTECH PRINCIPALE
    ============================================================ --}}
    <section id="solutions" class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">WacePay — Fintech by Digitwace</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Connecter l'Afrique au
                    <span class="gradient-text">reste du monde</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Des systèmes de paiement modernes et sécurisés pour particuliers, PME et entreprises à travers 110+ pays.
                </p>
            </div>

            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Transfert d'argent</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Transferts internationaux vers 110+ pays. Rapide, sécurisé, accessible via wallet, banque ou cash.</p>
                </div>

                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Paiements intelligents</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">B2B, B2P, P2B, P2P. Paiement de factures et transactions en temps réel pour tous les cas d'usage.</p>
                </div>

                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="absolute -top-3 right-4">
                        <span class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white">Multi-canal</span>
                    </div>
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Moyens de paiement</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Virement bancaire, Wallet, Cash, Mobile Money — tous les canaux en une seule intégration.</p>
                </div>

                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3"/></svg>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Portée internationale</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Afrique + international. Diaspora, PME, startups et e-commerce connectés à l'économie mondiale.</p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center gap-2 text-primary-600 transition-colors hover:text-primary-500 dark:text-primary-400">
                    Explorer WacePay
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================
         PROCESSUS — STEPPER
    ============================================================ --}}
    <section id="technologie" class="bg-gray-50 py-24 dark:bg-gray-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-accent mb-4">Processus</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Démarrez en
                    <span class="gradient-text">4 étapes simples</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    De l'inscription à la première transaction, tout est conçu pour être rapide et sans friction.
                </p>
            </div>

            <div class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="card card-hover p-6">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                        <span class="font-display text-xl font-bold">01</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Inscription</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Créez votre compte en quelques minutes sur la plateforme WacePay.</p>
                </div>
                <div class="card card-hover p-6">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-accent-100 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400">
                        <span class="font-display text-xl font-bold">02</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Vérification KYC</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Vérification d'identité rapide et sécurisée pour activer votre compte.</p>
                </div>
                <div class="card card-hover p-6">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                        <span class="font-display text-xl font-bold">03</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Intégration</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Connectez votre système via notre API REST ou utilisez notre dashboard.</p>
                </div>
                <div class="card card-hover p-6">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-accent-100 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400">
                        <span class="font-display text-xl font-bold">04</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Utilisation</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Envoyez et recevez des paiements partout dans le monde instantanément.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         SÉCURITÉ / CONFORMITÉ
    ============================================================ --}}
    <section class="relative overflow-hidden bg-primary-950 py-24">
        <div class="absolute inset-0 opacity-10"><div class="grid-pattern h-full w-full"></div></div>
        <div class="pointer-events-none absolute right-0 top-0 h-96 w-96 rounded-full bg-primary-500/20 blur-[120px]"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-64 w-64 rounded-full bg-accent-500/10 blur-[100px]"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-accent-500/30 bg-accent-500/10 px-4 py-2 text-sm font-medium text-accent-300">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                        Conformité & Sécurité
                    </span>
                    <h2 class="mt-6 font-display text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                        Conçu pour les<br>
                        <span class="bg-gradient-to-r from-accent-400 to-accent-300 bg-clip-text text-transparent">marchés réglementés</span>
                    </h2>
                    <p class="mt-6 text-lg text-primary-200">
                        Digitwace opère sous des cadres réglementaires stricts, garantissant la conformité de votre activité tout en vous permettant de scaler rapidement.
                    </p>
                    <div class="mt-8 grid grid-cols-3 gap-6">
                        <div>
                            <p class="font-mono text-3xl font-bold text-white">PCI</p>
                            <p class="mt-1 text-sm text-primary-300">DSS Level 1</p>
                        </div>
                        <div>
                            <p class="font-mono text-3xl font-bold text-white">ANTIC</p>
                            <p class="mt-1 text-sm text-primary-300"> Certifié</p>
                        </div>
                        <div>
                            <p class="font-mono text-3xl font-bold text-white">AML</p>
                            <p class="mt-1 text-sm text-primary-300">KYC/KYB intégré</p>
                        </div>
                    </div>
                    <a href="#" class="mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-6 py-3 font-semibold text-primary-900 transition-colors hover:bg-primary-50">
                        En savoir plus
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                        </div>
                        <h3 class="font-display font-bold text-white">Chiffrement 256-bit</h3>
                        <p class="mt-1 text-sm text-primary-300">Toutes les données chiffrées en transit et au repos via AES-256.</p>
                    </div>
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.746 3.746 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
                        </div>
                        <h3 class="font-display font-bold text-white">Licences réglementaires</h3>
                        <p class="mt-1 text-sm text-primary-300">Agréé par les banques centrales et régulateurs financiers africains.</p>
                    </div>
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h3 class="font-display font-bold text-white">Surveillance 24/7</h3>
                        <p class="mt-1 text-sm text-primary-300">Monitoring en temps réel avec détection de fraude par IA.</p>
                    </div>
                    <div class="rounded-xl border border-primary-800 bg-primary-900/50 p-5 backdrop-blur">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-800 text-accent-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/></svg>
                        </div>
                        <h3 class="font-display font-bold text-white">API Developer-First</h3>
                        <p class="mt-1 text-sm text-primary-300">REST & Webhooks avec sandbox, SDKs et documentation complète.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         PRODUITS DIGITWACE
    ============================================================ --}}
    <section class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">Nos Produits</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Un écosystème
                    <span class="gradient-text">complet</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Trois produits phares pour couvrir tous vos besoins digitaux et financiers.
                </p>
            </div>

            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-8 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="absolute -top-3 right-4">
                        <span class="rounded-full bg-accent-500 px-3 py-1 text-xs font-bold text-white">Lead</span>
                    </div>
                    <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">WacePay</h3>
                    <p class="mt-3 text-gray-600 dark:text-gray-400">Solution fintech complète pour les transferts d'argent, paiements B2B/B2C et collections à travers 110+ pays.</p>
                    <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium text-primary-600 hover:text-primary-500 dark:text-primary-400">
                        En savoir plus <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>

                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-8 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-accent-100 text-accent-600 transition-colors group-hover:bg-accent-500 group-hover:text-white dark:bg-accent-900/30 dark:text-accent-400">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Nufisms</h3>
                    <p class="mt-3 text-gray-600 dark:text-gray-400">Plateforme de communication et SMS marketing pour engager vos clients à travers l'Afrique et au-delà.</p>
                    <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium text-accent-600 hover:text-accent-500 dark:text-accent-400">
                        En savoir plus <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>

                <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-8 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
                    <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">DigitStore</h3>
                    <p class="mt-3 text-gray-600 dark:text-gray-400">Solution e-commerce clé en main pour créer et gérer votre boutique en ligne avec paiements intégrés.</p>
                    <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium text-primary-600 hover:text-primary-500 dark:text-primary-400">
                        En savoir plus <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         SERVICES DIGITAUX
    ============================================================ --}}
    <section class="bg-gray-50 py-24 dark:bg-gray-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-accent mb-4">Services Digitaux</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Nos services pour accompagner
                    <span class="gradient-text">votre croissance</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Au-delà de la fintech, Digitwace vous accompagne dans toute votre transformation digitale.
                </p>
            </div>

            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/></svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">Développement</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Applications web et mobile sur mesure pour votre business.</p>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-accent-100 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">Marketing Digital</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">SEO, publicité en ligne et stratégies de croissance digitale.</p>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">Formation</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Formations en développement, Cloud, ERP et outils digitaux.</p>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-accent-100 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/></svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 dark:text-white">Design & Branding</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Identité visuelle, UI/UX et branding pour votre entreprise.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         À PROPOS / VISION
    ============================================================ --}}
    <section class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <span class="badge badge-primary mb-4">Notre Histoire</span>
                    <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                        Fondée à Douala,<br>
                        <span class="gradient-text">pensée pour l'Afrique</span>
                    </h2>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Fondée par Chakam Roméo en 2015, Digitwace est née d'une vision simple : rendre le digital accessible à tous en Afrique. De ses débuts en développement web et software, l'entreprise a évolué vers la création de Digitwace LLC aux États-Unis, avant de s'étendre à travers tout le continent africain.
                    </p>
                    <div class="mt-8 grid grid-cols-2 gap-6">
                        <div class="rounded-xl border border-gray-200 bg-gray-50 p-4 dark:border-gray-800 dark:bg-gray-800">
                            <p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">2015</p>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Fondation à Douala, Cameroun</p>
                        </div>
                        <div class="rounded-xl border border-gray-200 bg-gray-50 p-4 dark:border-gray-800 dark:bg-gray-800">
                            <p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">LLC</p>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Digitwace LLC enregistrée aux USA</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-6">
                    <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Notre Vision</h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-400">Construire l'infrastructure digitale et financière de l'Afrique — connecter chaque individu, chaque entreprise à l'économie mondiale.</p>
                    </div>
                    <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                        <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Notre Mission</h3>
                        <div class="mt-3 space-y-2">
                            <div class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <svg class="h-4 w-4 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                Inclusion financière pour tous
                            </div>
                            <div class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <svg class="h-4 w-4 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                Paiements sans frontières
                            </div>
                            <div class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <svg class="h-4 w-4 shrink-0 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                Digitalisation des entreprises africaines
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         TÉMOIGNAGES
    ============================================================ --}}
    <section class="bg-gray-50 py-24 dark:bg-gray-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="badge badge-primary mb-4">Témoignages</span>
                <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Ils nous font
                    <span class="gradient-text">confiance</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Des startups aux grandes entreprises, Digitwace accompagne la croissance digitale en Afrique.
                </p>
            </div>

            <div class="mt-16 grid gap-6 md:grid-cols-3">
                <div class="card p-6">
                    <div class="mb-4 flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-700 dark:text-gray-300">"WacePay a transformé notre façon de payer nos livreurs. En quelques secondes, 500 paiements envoyés simultanément à travers 5 pays africains."</p>
                    <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 font-bold text-primary-600 dark:bg-primary-900/30">AK</div>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Amadou Koné</p>
                            <p class="text-sm text-gray-500">CTO, LogiAfrique</p>
                        </div>
                    </div>
                </div>
                <div class="card p-6">
                    <div class="mb-4 flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-700 dark:text-gray-300">"Digitwace a développé notre plateforme e-commerce avec DigitStore et intégré WacePay. Résultat : +40% de conversions dès le premier mois."</p>
                    <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-accent-100 font-bold text-accent-600 dark:bg-accent-900/30">FN</div>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Fatima Ndiaye</p>
                            <p class="text-sm text-gray-500">CEO, ShopCamer</p>
                        </div>
                    </div>
                </div>
                <div class="card p-6">
                    <div class="mb-4 flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-700 dark:text-gray-300">"La formation Cloud dispensée par Digitwace a permis à notre équipe de migrer notre infrastructure en 3 semaines. Support exceptionnel."</p>
                    <div class="mt-6 flex items-center gap-4 border-t border-gray-200 pt-6 dark:border-gray-700">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 font-bold text-primary-600 dark:bg-primary-900/30">JO</div>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Jean Owona</p>
                            <p class="text-sm text-gray-500">DSI, Groupe Horizon</p>
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
                Rejoignez l'écosystème Digitwace
            </span>

            <h2 class="font-display text-4xl font-bold text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                Prêt à digitaliser<br>
                <span class="gradient-text">votre activité ?</span>
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-600 dark:text-gray-400">
                Accédez à nos solutions en quelques minutes. Sans frais d'installation. Démarrez en jours, pas en mois.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="#" class="btn-primary inline-flex w-full items-center justify-center gap-2 rounded-xl px-10 py-5 text-lg sm:w-auto">
                    Découvrir nos solutions
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <a href="#" class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-10 py-5 text-lg font-semibold text-gray-900 transition-colors hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 sm:w-auto">
                    Nous contacter
                </a>
            </div>

            <div class="mt-12 flex flex-col items-center justify-center gap-6 sm:flex-row sm:gap-12">
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    Sans frais d'installation
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    Sandbox disponible
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    Support dédié
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>

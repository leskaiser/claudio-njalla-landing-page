<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body class="min-h-screen bg-gray-50 text-gray-900 dark:bg-gray-950 dark:text-gray-100">
<!-- <div class="border-b border-gray-200 bg-gray-100 dark:border-gray-800 dark:bg-gray-900">
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
    </div> -->


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
                Nex<span class="text-primary-600 dark:text-primary-400">Trade</span>
               </span> </a> <!-- Desktop Navigation -->


                <div class="hidden items-center gap-1 lg:flex">
                    <a href="/" class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">Home </a>
                    <a href="/services" class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">Services </a>
                    <a href="/about" class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">About </a>
                    <a href="/faq" class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white"> FAQs </a>
                </div> <!-- Right Section -->

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
        <div id="mobile-menu" class="fixed inset-y-0 right-0 z-50 w-full max-w-sm translate-x-full transform bg-white transition-transform duration-300 ease-out dark:bg-gray-900">
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
              <div class="space-y-1">
                <a href="/" class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                    Home </a>
                <a href="/services" class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Services </a>
                <a href="/about" class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        About </a>
                <a href="learn/index.html" class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        Learn </a>
                <a href="/faq" class="block rounded-lg px-4 py-3 font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white">
                        FAQs </a>
                    </div>
                <div class="mt-8 space-y-3">
                    <a href="login/index.html" class="block rounded-lg border border-gray-200 px-4 py-3 text-center font-medium text-gray-600 hover:bg-gray-100 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800">
                        Log in
                    </a> 
                    <a href="signup/index.html" class="block rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 px-4 py-3 text-center font-semibold text-white">
                        Get Started Free
                    </a>
                </div>
            </nav>
        </div>
    </header>






















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
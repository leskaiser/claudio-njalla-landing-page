<!DOCTYPE html>
<html lang="en">
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
<body>
    
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
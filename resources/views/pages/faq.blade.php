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

   
  @include('pages.header')
    
<main>
    <section class="relative bg-gray-950 py-24 overflow-hidden min-h-[45vh] flex items-center" style="background: linear-gradient(45deg, blue, green);">
  
  <!-- <img 
    src="https://images.unsplash.com/photo-1557862921-37829c790f19?auto=format&fit=crop&q=80&w=1600&h=900" 
    alt="DigitWace guidance expert" 
    class="absolute inset-0 h-full w-full object-cover opacity-40 filter grayscale"> -->

  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary-900/30 via-gray-950/90 to-gray-950"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl text-left">
      <span class="inline-block rounded-full bg-primary-500/10 px-4 py-1.5 text-xs font-semibold tracking-widest text-primary-400 uppercase border border-primary-500/20 mb-6">
        Knowledge Base
      </span>
      
      <h1 class="font-display text-5xl font-extrabold tracking-tighter text-white sm:text-6xl lg:text-7xl">
        Clear Answers.<br>
        <span class="gradient-text">Zero Guesswork.</span>
      </h1>
      
      <p class="mt-8 text-xl leading-relaxed text-gray-400">
        You have questions; we have transparent answers. Explore our comprehensive FAQ to understand our process, technology, and how we ensure your project success.
      </p>

    </div>
  </div>
</section>

  <section class="bg-white py-24 dark:bg-gray-900" id="faq">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <span class="badge badge-primary mb-4">FAQ</span>
        <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
          Frequently Asked Questions
        </h2>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
          Everything you need to know about partnering with DigitWace.
        </p>
      </div>

      <div class="mt-12 space-y-4">
        
        <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50" data-accordion-item>
          <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger>
            <span class="font-semibold text-gray-900 dark:text-white">Where is DigitWace located?</span>
            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="overflow-hidden" style data-accordion-content>
            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700">
              <p class="text-gray-600 dark:text-gray-400">
                We are a global tech firm with a strong presence in Africa and North America. Our main operations are based in Douala, Cameroon, and we have strategic offices in Abidjan, Côte d'Ivoire, and the USA to serve our international clientele.
              </p>
            </div>
          </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50" data-accordion-item>
          <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger>
            <span class="font-semibold text-gray-900 dark:text-white">How long does a typical project take?</span>
            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700">
              <p class="text-gray-600 dark:text-gray-400">
                Timelines vary based on complexity. A standard corporate website typically takes 4-6 weeks, while complex custom software or mobile applications can take 3-6 months. We provide a detailed roadmap during our initial discovery phase.
              </p>
            </div>
          </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50" data-accordion-item>
          <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger>
            <span class="font-semibold text-gray-900 dark:text-white">Can you integrate Mobile Money payments?</span>
            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700">
              <p class="text-gray-600 dark:text-gray-400">
                Yes! Through our WacePay infrastructure and extensive fintech experience, we specialize in integrating Mobile Money (MTN, Orange), credit cards, and cross-border payment gateways into your digital platforms.
              </p>
            </div>
          </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50" data-accordion-item>
          <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger>
            <span class="font-semibold text-gray-900 dark:text-white">Do you offer post-launch support?</span>
            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700">
              <p class="text-gray-600 dark:text-gray-400">
                Absolutely. We don't just "build and leave." We offer monthly maintenance packages that include security updates, cloud hosting management, and performance optimization to ensure your software continues to grow with your business.
              </p>
            </div>
          </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-800/50" data-accordion-item>
          <button class="flex w-full items-center justify-between px-6 py-5 text-left" data-accordion-trigger>
            <span class="font-semibold text-gray-900 dark:text-white">Which technologies do you use?</span>
            <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" data-accordion-icon>
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="overflow-hidden" style="max-height: 0px;" data-accordion-content>
            <div class="border-t border-gray-200 px-6 py-5 dark:border-gray-700">
              <p class="text-gray-600 dark:text-gray-400">
                We use modern, scalable tech stacks including React, Next.js, Node.js, Flutter, and Python. For cloud infrastructure, we leverage AWS and Google Cloud to ensure your data is secure and highly available.
              </p>
            </div>
          </div>
        </div>

      </div>

      <div class="mt-12 text-center">
        <p class="text-gray-600 dark:text-gray-400">
          Still have questions about your specific project?
        </p>
        <a href="contact/index.html" class="mt-2 inline-flex items-center gap-2 font-semibold text-primary-600 hover:text-primary-500 dark:text-primary-400">
          Talk to a Consultant
          <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
</main>




  @include('pages.footer')




















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
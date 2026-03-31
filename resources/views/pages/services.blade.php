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
    <section class="relative bg-gray-900 py-32 overflow-hidden min-h-[60vh] flex items-center" style="padding:50px;">
  
  <img 
    src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=1600&h=900" 
    alt="Successful digital transformation" 
    class="absolute inset-0 h-full w-full object-cover opacity-40 transition-opacity duration-500"
    onload="this.style.opacity='0.4'"
    onerror="this.src='https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=1600&h=900'">

  <div class="absolute inset-0 bg-gradient-to-r from-gray-950 via-gray-950/80 to-transparent"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl">
      <span class="inline-block rounded-full bg-primary-500/10 px-4 py-1.5 text-xs font-semibold tracking-widest text-primary-400 uppercase border border-primary-500/20 mb-6">
        Growth-Driven Solutions
      </span>
      
      <h1 class="font-display text-5xl font-extrabold tracking-tighter text-white sm:text-6xl lg:text-7xl">
        Precision Engineering.<br>
        <span class="text-primary-500">Impactful Results.</span>
      </h1>
      
      <p class="mt-8 text-xl leading-relaxed text-gray-300">
        We merge technical expertise with a deep understanding of your business goals. DigitWace provides the complete digital ecosystem required to scale your operations and dominate your market.
      </p>
      
      <div class="mt-10 flex gap-4">
         <div class="flex -space-x-2">
            <div class="h-10 w-10 rounded-full border-2 border-gray-900 bg-gray-800 flex items-center justify-center text-xs font-bold text-white">250+</div>
         </div>
         <p class="text-sm text-gray-400 self-center">Projects delivered successfully across 3 continents.</p>
      </div>
    </div>
  </div>

  <div class="absolute bottom-0 right-0 p-8 hidden lg:block">
    <div class="flex items-center gap-2 text-primary-500/50">
      <span class="text-xs font-mono uppercase tracking-widest">DigitWace Global</span>
      <div class="h-px w-12 bg-primary-500/50"></div>
    </div>
  </div>
</section>

  <section class="bg-white py-24 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-3xl text-center">
        <span class="badge badge-primary mb-4">Enterprise Solutions</span>
        <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
          Everything You Need to
          <span class="gradient-text">Scale Digitally</span>
        </h2>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
          From Cameroon to the world, we provide the technical muscle and creative spark to transform your business into a digital powerhouse.
        </p>
      </div>

      <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        
        <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
          <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"></path>
            </svg>
          </div>
          <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Web Engineering</h3>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Not just websites, but high-performance web applications. We build secure, scalable, and SEO-optimized platforms using the latest tech stacks.</p>
        </div>

        <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
          <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
            </svg>
          </div>
          <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Mobile Innovation</h3>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Native and cross-platform mobile apps (iOS/Android) that provide seamless user experiences and deep hardware integration.</p>
        </div>

        <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
          <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Fintech Infrastructure</h3>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Leveraging WacePay expertise to integrate cross-border payment gateways, mobile money APIs, and digital wallet solutions.</p>
        </div>

        <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
          <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122l9.37-9.445m-1.121 2.807l1.121-1.121m.458-1.541a2.25 2.25 0 00-3.182 0l-12.91 13.047a2.25 2.25 0 00-.578 1.028l-1.946 5.84a.75.75 0 00.944.944l5.84-1.947a2.25 2.25 0 001.028-.578L18.837 7.443a2.25 2.25 0 000-3.182z"></path>
            </svg>
          </div>
          <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Creative Branding & UI/UX</h3>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Crafting visual identities and user interfaces that are both beautiful and functional, ensuring high conversion rates and brand loyalty.</p>
        </div>

        <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
          <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
            </svg>
          </div>
          <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Growth & SEO</h3>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Data-driven marketing and search engine dominance. We ensure your brand doesn't just exist—it gets seen by the right people.</p>
        </div>

        <div class="group relative rounded-2xl border border-gray-200 bg-gray-50 p-6 transition-all hover:border-primary-300 hover:bg-white dark:border-gray-800 dark:bg-gray-800/50 dark:hover:border-primary-700 dark:hover:bg-gray-800">
          <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600 transition-colors group-hover:bg-primary-500 group-hover:text-white dark:bg-primary-900/30 dark:text-primary-400 dark:group-hover:bg-primary-500 dark:group-hover:text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"></path>
            </svg>
          </div>
          <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Business Intelligence</h3>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Transforming your business data into actionable insights with custom BI dashboards and analytical tools to guide your decision-making.</p>
        </div>

      </div>

      <div class="mt-16 text-center">
        <a href="contact.html" class="inline-flex items-center gap-2 text-primary-600 transition-colors hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300">
          Request a Custom Quote
          <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>

<section class="bg-gray-50 py-24 transition-colors duration-300 dark:bg-gray-900" style="margin-bottom:50px;">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    
    <div class="mb-16 text-center" style="margin-bottom:30px;">
      <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
        How We Bring Your Ideas to Life
      </h2>
      <p class="mt-4 text-gray-600 dark:text-gray-400">
        A streamlined, transparent process designed for speed and quality.
      </p>
    </div> <br><br>

    <div class="grid gap-8 md:grid-cols-4">
      
      <div class="relative text-center">
        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-primary-600 text-xl font-bold text-white shadow-lg shadow-primary-500/20">
          1
        </div>
        <h4 class="font-bold text-gray-900 dark:text-white">Discovery</h4>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
          We dive deep into your business goals and user needs.
        </p>
        <div class="absolute top-8 left-full hidden h-px w-full bg-gray-200 dark:bg-gray-700 md:block"></div>
      </div> 

      <div class="relative text-center">
        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-primary-600 text-xl font-bold text-white shadow-lg shadow-primary-500/20">
          2
        </div>
        <h4 class="font-bold text-gray-900 dark:text-white">Strategy</h4>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
          Architecting the perfect roadmap and tech stack.
        </p>
        <div class="absolute top-8 left-full hidden h-px w-full bg-gray-200 dark:bg-gray-700 md:block"></div>
      </div>

      <div class="relative text-center">
        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-primary-600 text-xl font-bold text-white shadow-lg shadow-primary-500/20">
          3
        </div>
        <h4 class="font-bold text-gray-900 dark:text-white">Execution</h4>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
          Agile development with continuous feedback loops.
        </p>
        <div class="absolute top-8 left-full hidden h-px w-full bg-gray-200 dark:bg-gray-700 md:block"></div>
      </div>

      <div class="text-center">
          <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-primary-600 text-xl font-bold text-white shadow-lg shadow-primary-500/20">
          4
        </div>
        <h4 class="font-bold text-gray-900 dark:text-white">Launch</h4>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
          Deployment and 24/7 monitoring for growth.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="relative overflow-hidden bg-primary-600 py-20" style="padding:80px; margin-bottom:50px;;">
  <div class="absolute -top-24 -left-24 h-64 w-64 rounded-full bg-primary-500 opacity-20"></div>
  <div class="absolute -bottom-24 -right-24 h-96 w-96 rounded-full bg-primary-700 opacity-20"></div>

  <div class="relative z-10 mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
    <h2 class="font-display text-3xl font-bold text-white sm:text-4xl">Ready to build the future?</h2>
    <p class="mt-6 text-lg text-primary-100">
      Join 250+ businesses that have scaled their digital presence with DigitWace. Let's discuss your next breakthrough.
    </p>
    <div class="mt-10 flex flex-wrap justify-center gap-4">
      <a href="contact.html" class="rounded-full bg-white px-8 py-4 text-lg font-bold text-primary-600 transition-transform hover:scale-105 shadow-xl">
        Start Your Project
      </a>
      <a href="tel:+237..." class="rounded-full border-2 border-primary-400 px-8 py-4 text-lg font-bold text-white transition-colors hover:bg-primary-500">
        Book a Discovery Call
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
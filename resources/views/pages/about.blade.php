<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="icon" type="image/svg+xml" href="favicon.svg">
      <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap" rel="stylesheet"><!-- Theme script (runs before render to prevent flash) -->

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
    
<section class="relative bg-gray-900 py-32 overflow-hidden" style="padding:100px;">
  <img 
    src="https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?q=80&w=1600&h=900&auto=format&fit=crop" 
    alt="DigitWace global collaboration banner" 
    class="absolute inset-0 w-full h-full object-cover opacity-30">

  <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/80 to-transparent"></div>

  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
    <span class="badge badge-accent mb-4">Our DNA</span>
    <h1 class="font-display text-5xl font-extrabold text-white sm:text-6xl lg:text-7xl">
      Innovation
      <span class="gradient-text">Without Borders</span>
    </h1>
    <p class="mt-6 mx-auto max-w-2xl text-xl text-gray-300">
     At DigitWace, we don't just build software; we engineer growth. From our roots in Cameroon to our offices in the USA, we are the bridge between ambitious ideas and global digital reality.
    </p>
    
    <div class="mt-12 flex justify-center">
      <svg class="h-10 w-10 text-primary-400 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"></path>
      </svg>
    </div>

  </div>
</section>

<main>
<section class="relative overflow-hidden bg-white py-24 dark:bg-gray-900">
      <div class="absolute inset-0 grid-pattern opacity-30"></div>
      <div class="pointer-events-none absolute left-1/4 top-0 h-96 w-96 rounded-full bg-primary-500/10 blur-[120px]">
      </div>
      <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center"> <span class="badge badge-primary mb-4">About DigitWace</span>
          <h1 class="font-display text-4xl font-bold text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
            Empowering Your
            <span class="gradient-text">Digital Future</span>
          </h1>
          <p class="mt-6 text-xl text-gray-600 dark:text-gray-400">
            DigitWace is a 360° digital agency based in Cameroon, Ivory Coast and the USA. We combine financial technology with high-end engineering to deliver Web Development, Mobile Apps, and Data-Driven Marketing solutions that scale businesses across Africa and beyond.
          </p>
        </div> 
        <div class="mt-16 grid grid-cols-2 gap-8 lg:grid-cols-4">
          <div class="text-center">
            <p class="font-mono text-4xl font-bold text-primary-600 dark:text-primary-400" data-counter="250+">0</p>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Projects Delivered</p>
          </div>
          <div class="text-center">
            <p class="font-mono text-4xl font-bold text-primary-600 dark:text-primary-400" data-counter="100+">0</p>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Global Partners</p>
          </div>
          <div class="text-center">
            <p class="font-mono text-4xl font-bold text-primary-600 dark:text-primary-400" data-counter="35+">0</p>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Tech Experts</p>
          </div>
          <div class="text-center">
            <p class="font-mono text-4xl font-bold text-primary-600 dark:text-primary-400" data-counter="99%">0</p>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Client Satisfaction</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-50 py-24 dark:bg-gray-950">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-2">
          <div> <span class="badge badge-accent mb-4">Our Expertise</span>
            <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
            A Complete Digital Ecosystem
            </h2>
            <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
              While we lead in Fintech through WacePay, our core strength lies in building robust digital products. From SEO-optimized corporate websites to high-performance mobile applications, we handle the full technical lifecycle.
            </p>
            <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
              <div class="flex items-center gap-2"> <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg> <span class="text-gray-700 dark:text-gray-300">Web & Mobile Dev</span> </div>
              <div class="flex items-center gap-2"> <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg> <span class="text-gray-700 dark:text-gray-300">Digital Marketing & SEO</span> </div>
              <div class="flex items-center gap-2"> <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg> <span class="text-gray-700 dark:text-gray-300">UI/UX Graphic Design</span> </div>
              <div class="flex items-center gap-2"> <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg> <span class="text-gray-700 dark:text-gray-300">Fintech Infrastructure</span> </div>
                   <div class="flex items-center gap-2"> <svg class="h-5 w-5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg> <span class="text-gray-700 dark:text-gray-300">Many more</span> </div>
            </div>
          </div>
          <div class="relative"> 
            <div class="bg-primary-600 rounded-xl" style="padding: 100px;">
                  <img
              src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop"
              alt="DigitWace creative team collaborating" class="rounded-2xl shadow-2xl">
            </div>
            <div class="absolute -bottom-6 -left-6 rounded-xl bg-white p-4 shadow-lg dark:bg-gray-800">
              <p class="text-sm text-gray-500 dark:text-gray-400">Innovating across</p>
              <p class="font-mono text-2xl font-bold text-gray-900 dark:text-white">the world</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white py-24 dark:bg-gray-900">
      <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center"> <span class="badge badge-primary mb-4">Our Journey</span>
          <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
            The Global Digital Leader
          </h2>
        </div>
        <div class="relative mt-16"> 
          <div class="absolute left-8 top-0 h-full w-0.5 bg-gray-200 dark:bg-gray-700 md:left-1/2"></div>
          
          <div class="relative mb-12 md:pr-1/2">
            <div class="flex items-start gap-4 md:flex-row-reverse md:text-right">
              <div class="relative z-10 flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-primary-500 font-mono text-lg font-bold text-white">
                2015 </div>
              <div class="card p-6 md:mr-8">
                <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">The Birth of DIGITWACE</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Digitwace Sarl launched with a clear vision: to bridge the gap between complex technology and everyday business needs and started with web development and Graphic Design.
                </p>
              </div>
            </div>
          </div>

          <div class="relative mb-12 md:ml-1/2 md:pl-12">
            <div class="flex items-start gap-4 ">
              <div class="relative z-10 flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-primary-500 font-mono text-lg font-bold text-white">
                2018 </div>
              <div class="card p-6 md:ml-8">
                <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white"> Creation of DIGITWACE LLC in the United States</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-400">
       E-commerce, dropshipping, hosting with a revenue of 34,000,000 FCFA in Cameroon and $7,000 in the USA. Some projects Websites for Sotrabus, Group KAMI, and LJD Consulting
 and a number of Clients of about 21</p>
              </div>
            </div>
          </div>

          <div class="relative mb-12 md:pr-1/2">
            <div class="flex items-start gap-4 md:flex-row-reverse md:text-right">
              <div class="relative z-10 flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-primary-500 font-mono text-lg font-bold text-white">
                2022 </div>
              <div class="card p-6 md:mr-8">
                <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Creation of DIGITWACE CAMEROUN SARL</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-400">
       Engaged in services such as financial platform development, remittance, e-commerce, digital marketing, training
       with partners like MAGMA, IMPALAPAY, PAY-CI
      and a revenue of about $25,000 in DIGITWACE LLC</p>
              </div>
            </div>
          </div>

          <div class="relative mb-12 md:ml-1/2 md:pl-12">
            <div class="flex items-start gap-4 ">
              <div class="relative z-10 flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-primary-500 font-mono text-lg font-bold text-white">
                2023 </div>
              <div class="card p-6 md:ml-8">
                <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white">Achievements - DIGITWACE CAMEROUN SARL</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-400">
  Wacepay Business, Dr. Moudio website (Switzerland), TSC-PAY application, digital marketing for MAD Academy
  with a revenue – DIGITWACE CAMEROUN SARL: 22,000,000 FCFA
 and a revenue – DIGITWACE LLC: $2,000</p>
              </div>
            </div>
          </div>

          <div class="relative mb-12 md:pr-1/2">
            <div class="flex items-start gap-4 md:flex-row-reverse md:text-right">
              <div class="relative z-10 flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-primary-500 font-mono text-lg font-bold text-white">
                2024 </div>
              <div class="card p-6 md:mr-8">
                <h3 class="font-display text-xl font-bold text-gray-900 dark:text-white"> Creation of DIGITWACE Côte d’Ivoire SARL</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-400">
              Engaged in services like money transfer, remittance with a revenue of DIGITWACE CAMEROUN SARL: 34,000,000 FCFA
and a revenue – DIGITWACE LLC: $7,000</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="bg-gray-50 py-24 dark:bg-gray-950">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center"> <span class="badge badge-accent mb-4">Our Values</span>
          <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
            The Digitwace Promise
          </h2>
        </div>
        <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
          <div class="card-hover p-6 text-center cursor-pointer hover:border-blue-500">
            <div
              class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/50 dark:text-primary-400">
              <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
              </svg> </div>
            <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Accessibility</h3>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Financial services should be available to everyone, regardless of location.</p>
          </div>
          <div class="card-hover p-6 text-center cursor-pointer hover:border-blue-500">
            <div
              class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/50 dark:text-primary-400">
              <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z">
                </path>
              </svg> </div>
            <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Integrity</h3>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Your funds and data are protected by bank-grade security and ethical practices.</p>
          </div>
          <div class="card-hover p-6 text-center cursor-pointer hover:border-blue-500">
            <div
              class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/50 dark:text-primary-400">
              <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
              </svg> </div>
            <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Innovation</h3>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">We continuously develop cutting-edge fintech tools to simplify your life.</p>
          </div>
          <div class="card-hover p-6 text-center cursor-pointer hover:border-blue-500">
            <div
              class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-100 text-primary-600 dark:bg-primary-900/50 dark:text-primary-400">
              <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                </path>
              </svg> </div>
            <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Community</h3>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Empowering the local economy by supporting small businesses and families.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white py-24 dark:bg-gray-900">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center"> <span class="badge badge-primary mb-4">Leadership</span>
          <h2 class="font-display text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
            Meet the Visionaries
          </h2>
          <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
            Tech experts and financial strategists committed to transforming how Cameroon moves money.
          </p>
        </div>
        <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
          <div class="card-hover overflow-hidden">
            <!-- <img
              src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&amp;h=400&amp;fit=crop&amp;crop=face"
              alt="Sarah Chen" class="aspect-square w-full object-cover"> -->
            <div class="p-6">
              <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Dora M.</h3>
              <p class="text-sm font-medium text-primary-600 dark:text-primary-400">CEO &amp; Co-Founder</p>
              <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Visionary leader with 10+ years in international finance and business development.</p>
            </div>
          </div>
          <div class="card-hover overflow-hidden"> 
            <!-- <img
              src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&amp;h=400&amp;fit=crop&amp;crop=face"
              alt="Marcus Johnson" class="aspect-square w-full object-cover"> -->
            <div class="p-6">
              <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Jean-Paul N.</h3>
              <p class="text-sm font-medium text-primary-600 dark:text-primary-400">CTO &amp; Co-Founder</p>
              <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Full-stack engineer specialized in secure payment gateway architecture.</p>
            </div>
          </div>
          <div class="card-hover overflow-hidden"> 
            <!-- <img
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&amp;h=400&amp;fit=crop&amp;crop=face"
              alt="Elena Rodriguez" class="aspect-square w-full object-cover"> -->
            <div class="p-6">
              <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">Elena R.</h3>
              <p class="text-sm font-medium text-primary-600 dark:text-primary-400">Chief Product Officer</p>
              <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Expert in UI/UX design and digital transformation for African markets.</p>
            </div>
          </div>
          <div class="card-hover overflow-hidden"> 
            <!-- <img
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&amp;h=400&amp;fit=crop&amp;crop=face"
              alt="David Park" class="aspect-square w-full object-cover"> -->
            <div class="p-6">
              <h3 class="font-display text-lg font-bold text-gray-900 dark:text-white">David P.</h3>
              <p class="text-sm font-medium text-primary-600 dark:text-primary-400">Chief Security Officer</p>
              <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Leading our data encryption and regulatory compliance departments.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary-600 py-16">
      <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-white sm:text-4xl">
          Join the Payment Revolution
        </h2>
        <p class="mt-4 text-lg text-primary-100">
          Be part of the Digitwace Sarl network. Simplify your transfers and grow your business today.
        </p> <a href="../signup/index.html"
          class="mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-8 py-4 font-semibold text-primary-600 transition-colors hover:bg-primary-50">
          Get Started Now
          <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg> </a>
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
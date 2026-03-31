<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Digitwace' }}</title>

    <link rel="icon" href="{{ asset('logo.png') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    {{-- Dark mode init (avant render pour éviter le flash) --}}
    <script>
        const theme = localStorage.getItem('theme');
        if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>

    {{-- CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Slot head (meta, scripts additionnels par page) --}}
    {{ $head ?? '' }}
</head>
<body class="min-h-screen bg-gray-50 text-gray-900 dark:bg-gray-950 dark:text-gray-100">

    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    {{-- Scripts globaux --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Theme toggle
            const toggle = document.getElementById('theme-toggle');
            toggle?.addEventListener('click', () => {
                const isDark = document.documentElement.classList.toggle('dark');
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
            });

            // Mobile menu
            const btn     = document.getElementById('mobile-menu-btn');
            const menu    = document.getElementById('mobile-menu');
            const overlay = document.getElementById('mobile-menu-overlay');
            const close   = document.getElementById('mobile-menu-close');

            const openMenu  = () => { menu.classList.remove('translate-x-full'); overlay.classList.remove('hidden'); document.body.style.overflow = 'hidden'; };
            const closeMenu = () => { menu.classList.add('translate-x-full');    overlay.classList.add('hidden');    document.body.style.overflow = ''; };

            btn?.addEventListener('click', openMenu);
            overlay?.addEventListener('click', closeMenu);
            close?.addEventListener('click', closeMenu);
            document.addEventListener('keydown', e => e.key === 'Escape' && closeMenu());

            // Header scroll
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                header?.classList.toggle('scrolled', window.scrollY > 50);
            });

            // Accordion
            document.querySelectorAll('[data-accordion-item]').forEach(item => {
                const trigger = item.querySelector('[data-accordion-trigger]');
                const content = item.querySelector('[data-accordion-content]');
                const icon    = item.querySelector('[data-accordion-icon]');
                if (!trigger || !content) return;
                trigger.addEventListener('click', () => {
                    const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';
                    document.querySelectorAll('[data-accordion-content]').forEach(c => { c.style.maxHeight = '0px'; });
                    document.querySelectorAll('[data-accordion-icon]').forEach(i => i.classList.remove('rotate-180'));
                    if (!isOpen) { content.style.maxHeight = content.scrollHeight + 'px'; icon?.classList.add('rotate-180'); }
                });
            });

            // Animated counters
            const animateCounter = (el, target) => {
                const isPrefix = target.startsWith('$');
                const raw      = target.replace(/[$,+MBK%]/g, '');
                const suffix   = target.replace(/^[$\d,\.]+/, '');
                const prefix   = isPrefix ? '$' : '';
                const end      = parseFloat(raw);
                const duration = 2000;
                const start    = performance.now();
                const step = now => {
                    const progress = Math.min((now - start) / duration, 1);
                    const eased    = 1 - Math.pow(1 - progress, 3);
                    const value    = end * eased;
                    el.textContent = prefix + (end >= 100 ? Math.round(value).toLocaleString() : value.toFixed(1)) + suffix;
                    if (progress < 1) requestAnimationFrame(step);
                    else el.textContent = target;
                };
                requestAnimationFrame(step);
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        animateCounter(e.target, e.target.dataset.counter);
                        observer.unobserve(e.target);
                    }
                });
            }, { threshold: 0.5 });

            document.querySelectorAll('[data-counter]').forEach(el => observer.observe(el));
        });
    </script>

    {{-- Slot scripts (scripts additionnels par page) --}}
    {{ $scripts ?? '' }}

</body>
</html>

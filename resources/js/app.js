import './bootstrap';

// Mobile menu
const btn     = document.getElementById('mobile-menu-btn');
const close   = document.getElementById('mobile-menu-close');
const menu    = document.getElementById('mobile-menu');
const overlay = document.getElementById('mobile-menu-overlay');

function openMenu() {
    menu.style.transform = 'translateX(0)';
    document.body.style.overflow = 'hidden';
}

function closeMenu() {
    menu.style.transform = 'translateX(100%)';
    document.body.style.overflow = '';
}

// Init closed
if (menu) menu.style.transform = 'translateX(100%)';

btn?.addEventListener('click', openMenu);
close?.addEventListener('click', closeMenu);

// Header scroll effect
const header = document.getElementById('header');
window.addEventListener('scroll', () => {
    header?.classList.toggle('scrolled', window.scrollY > 10);
});

// Theme toggle
const themeBtn = document.getElementById('theme-toggle');
const html = document.documentElement;

if (localStorage.theme === 'dark') html.classList.add('dark');

themeBtn?.addEventListener('click', () => {
    html.classList.toggle('dark');
    localStorage.theme = html.classList.contains('dark') ? 'dark' : 'light';
});

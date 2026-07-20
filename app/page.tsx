"use client";

import { useEffect, useState } from "react";
import { AnimatePresence, motion } from "framer-motion";
import { ChevronDown, ChevronUp, Menu, X } from "lucide-react";
import dynamic from "next/dynamic";
import { useI18n } from "@/lib/i18n/context";

const AboutSection    = dynamic(() => import("@/components/sections/AboutSection").then(m => m.AboutSection),    { ssr: false });
const GallerySection  = dynamic(() => import("@/components/sections/GallerySection").then(m => m.GallerySection),  { ssr: false });
const ServicesSection = dynamic(() => import("@/components/sections/ServicesSection").then(m => m.ServicesSection), { ssr: false });
const ContactSection  = dynamic(() => import("@/components/sections/ContactSection").then(m => m.ContactSection),  { ssr: false });

const NAV_ITEMS = [
  { id: "about",    key: "about"   },
  { id: "gallery",  key: "gallery" },
  { id: "services", key: "services" },
  { id: "contact",  key: "contact" },
] as const;

function TopBar() {
  const { t, lang, setLang } = useI18n();
  const [scrolled, setScrolled] = useState(false);
  const [menuOpen, setMenuOpen] = useState(false);
  const [active, setActive] = useState("about");

  useEffect(() => {
    const onScroll = () => {
      setScrolled(window.scrollY > 40);
      const y = window.scrollY + window.innerHeight * 0.4;
      for (const item of NAV_ITEMS) {
        const el = document.getElementById(item.id);
        if (el && y >= el.offsetTop) setActive(item.id);
      }
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  useEffect(() => {
    if (!menuOpen) return;
    const fn = (e: KeyboardEvent) => { if (e.key === "Escape") setMenuOpen(false); };
    window.addEventListener("keydown", fn);
    return () => window.removeEventListener("keydown", fn);
  }, [menuOpen]);

  const jump = (id: string) => { setMenuOpen(false); document.getElementById(id)?.scrollIntoView({ behavior: "smooth" }); };

  return (
    <header className={`fixed inset-x-0 top-0 z-50 transition-all ${scrolled ? "bg-[var(--bg)]/90 backdrop-blur-md border-b border-[var(--border)]" : ""}`}>
      <div className="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 md:px-6">
        <button onClick={() => window.scrollTo({ top: 0, behavior: "smooth" })} className="font-hero text-lg font-bold text-[var(--accent)]">
          Stacy
        </button>

        <nav className="hidden items-center gap-5 md:flex">
          {NAV_ITEMS.map(n => (
            <button key={n.id} onClick={() => jump(n.id)}
              className={`text-sm font-medium transition-colors ${active === n.id ? "text-[var(--accent)]" : "text-[var(--text-2)] hover:text-[var(--text)]"}`}>
              {t.nav[n.key as keyof typeof t.nav]}
            </button>
          ))}
          <div className="flex rounded-full border border-[var(--border)] bg-[var(--bg-alt)] text-xs font-semibold">
            <button onClick={() => setLang("fr")} className={`px-2.5 py-1 rounded-full transition-colors ${lang === "fr" ? "bg-[var(--accent)] text-white" : ""}`}>FR</button>
            <button onClick={() => setLang("en")} className={`px-2.5 py-1 rounded-full transition-colors ${lang === "en" ? "bg-[var(--accent)] text-white" : ""}`}>EN</button>
          </div>
          <a href="#contact" className="rounded-full bg-[var(--accent)] px-4 py-2 text-sm font-semibold text-white hover:opacity-90 transition-opacity">
            {t.nav.contact}
          </a>
        </nav>

        <div className="flex items-center gap-2 md:hidden">
          <div className="flex rounded-full border border-[var(--border)] bg-[var(--bg-alt)] text-[10px] font-semibold">
            <button onClick={() => setLang("fr")} className={`px-2 py-1 rounded-full transition-colors ${lang === "fr" ? "bg-[var(--accent)] text-white" : ""}`}>FR</button>
            <button onClick={() => setLang("en")} className={`px-2 py-1 rounded-full transition-colors ${lang === "en" ? "bg-[var(--accent)] text-white" : ""}`}>EN</button>
          </div>
          <button onClick={() => setMenuOpen(!menuOpen)} className="p-2" aria-label="Menu">
            {menuOpen ? <X className="h-5 w-5" /> : <Menu className="h-5 w-5" />}
          </button>
        </div>
      </div>

      <AnimatePresence>
        {menuOpen && (
          <motion.div initial={{ opacity: 0 }} animate={{ opacity: 1 }} exit={{ opacity: 0 }}
            className="fixed inset-0 z-40 bg-[var(--bg)]/95 backdrop-blur-lg pt-20 px-6 md:hidden">
            <nav className="flex flex-col gap-4">
              {NAV_ITEMS.map((n, i) => (
                <motion.button key={n.id} initial={{ opacity: 0, x: -20 }} animate={{ opacity: 1, x: 0 }} transition={{ delay: i * 0.05 }}
                  onClick={() => jump(n.id)}
                  className="font-hero text-4xl font-bold text-left text-[var(--text)] hover:text-[var(--accent)] transition-colors">
                  {t.nav[n.key as keyof typeof t.nav]}
                </motion.button>
              ))}
              <a href="#contact" onClick={() => setMenuOpen(false)}
                className="mt-4 inline-flex w-fit rounded-full bg-[var(--accent)] px-6 py-3 text-sm font-semibold text-white">
                {t.nav.contact}
              </a>
            </nav>
          </motion.div>
        )}
      </AnimatePresence>
    </header>
  );
}

export default function App() {
  const { t } = useI18n();
  const [showTop, setShowTop] = useState(false);

  useEffect(() => {
    const fn = () => setShowTop(window.scrollY > 400);
    window.addEventListener("scroll", fn, { passive: true });
    return () => window.removeEventListener("scroll", fn);
  }, []);

  return (
    <main>
      <TopBar />

      {/* HERO */}
      <section className="relative min-h-[90vh] flex items-center justify-center overflow-hidden px-4">
        <div className="absolute inset-0 -z-10">
          <img src="/gallery/IMG_9770.JPG- Compressed.webp" alt="" className="h-full w-full object-cover" loading="eager" />
          <div className="absolute inset-0 bg-gradient-to-b from-[var(--bg)]/80 via-[var(--bg)]/50 to-[var(--bg)]" />
        </div>

        <div className="text-center max-w-3xl mx-auto">
          <span className="inline-block rounded-full bg-[var(--accent)]/10 border border-[var(--accent)]/20 px-4 py-1.5 text-xs font-semibold text-[var(--accent)] mb-6">
            {t.hero.badge}
          </span>
          <h1 className="font-hero text-[clamp(2.5rem,10vw,5rem)] leading-[1.05] tracking-tight">
            <span className="block text-[var(--text)]">STACY</span>
            <span className="block gold-text">FULL OF ACRYLICS</span>
          </h1>
          <p className="mt-5 text-[var(--text-2)] text-base md:text-lg max-w-xl mx-auto leading-relaxed">
            {t.hero.tagline}
          </p>
          <div className="mt-8 flex flex-wrap justify-center gap-3">
            <a href="#gallery" className="rounded-full bg-[var(--accent)] px-6 py-3 text-sm font-semibold text-white hover:opacity-90 transition-opacity">
              {t.hero.cta_gallery}
            </a>
            <a href="#contact" className="rounded-full border border-[var(--border)] bg-[var(--card)] px-6 py-3 text-sm font-semibold text-[var(--text)] hover:border-[var(--accent)] transition-colors">
              {t.hero.cta_contact}
            </a>
          </div>
          <motion.div animate={{ y: [0, 6, 0] }} transition={{ duration: 2, repeat: Infinity, ease: "easeInOut" }}
            className="mt-16 text-[var(--muted)]">
            <ChevronDown className="h-5 w-5 mx-auto" />
          </motion.div>
        </div>
      </section>

      <AboutSection />
      <GallerySection />
      <ServicesSection />
      <ContactSection />

      <footer className="border-t border-[var(--border)] bg-[var(--bg-alt)] py-10 px-4">
        <div className="max-w-6xl mx-auto flex flex-col md:flex-row md:items-center md:justify-between gap-4">
          <div>
            <h3 className="font-hero text-2xl gold-text">STACY FULL OF ACRYLICS</h3>
            <p className="text-sm text-[var(--muted)] mt-1">Prothésiste Ongulaire</p>
          </div>
          <p className="text-sm text-[var(--text-2)] italic max-w-sm">&ldquo;{t.footer.quote}&rdquo;</p>
        </div>
        <div className="max-w-6xl mx-auto mt-6 pt-4 border-t border-[var(--border)] flex flex-col md:flex-row justify-between text-xs text-[var(--muted)]">
          <span>© 2026 Stacy Full Of Acrylics. {t.footer.rights}</span>
          <span>{t.footer.made}</span>
        </div>
      </footer>

      <AnimatePresence>
        {showTop && (
          <motion.button initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} exit={{ opacity: 0, y: 20 }}
            onClick={() => window.scrollTo({ top: 0, behavior: "smooth" })}
            className="fixed bottom-4 right-4 z-50 h-10 w-10 rounded-full bg-[var(--accent)] text-white shadow-lg flex items-center justify-center hover:opacity-90 transition-opacity">
            <ChevronUp className="h-5 w-5" />
          </motion.button>
        )}
      </AnimatePresence>
    </main>
  );
}

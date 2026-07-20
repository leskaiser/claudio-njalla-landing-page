"use client";
import { motion } from "framer-motion";
import { ABOUT } from "@/lib/data";
import { useI18n } from "@/lib/i18n/context";

export function AboutSection() {
  const { t } = useI18n();
  return (
    <section id="about" className="py-16 md:py-24 bg-[var(--bg-alt)]">
      <div className="max-w-6xl mx-auto px-4 md:px-6">
        <span className="font-hero text-xs font-semibold uppercase tracking-widest text-[var(--accent)]">{t.about.label}</span>
        <div className="mt-8 grid gap-10 lg:grid-cols-2 lg:items-center">
          <motion.div initial={{ opacity: 0, x: -20 }} whileInView={{ opacity: 1, x: 0 }} viewport={{ once: true }} transition={{ duration: 0.5 }}>
            <div className="overflow-hidden rounded-2xl">
              <img src={ABOUT.photo} alt="Stacy" loading="lazy" className="w-full h-80 lg:h-[420px] object-cover" />
            </div>
          </motion.div>

          <motion.div initial={{ opacity: 0, y: 20 }} whileInView={{ opacity: 1, y: 0 }} viewport={{ once: true }} transition={{ duration: 0.5, delay: 0.1 }}>
            <h2 className="font-hero text-3xl md:text-4xl font-bold">
              {t.about.heading} <span className="gradient-text">{t.about.name}</span>
            </h2>
            <p className="mt-4 text-[var(--text-2)] leading-relaxed">{ABOUT.shortBio}</p>

            <h3 className="font-hero mt-8 text-xs font-semibold uppercase tracking-widest text-[var(--accent)]">{t.about.parcours}</h3>
            <div className="mt-4 space-y-3 border-l-2 border-[var(--accent)]/20 pl-4">
              {ABOUT.parcours.map(item => (
                <div key={item.year}>
                  <span className="text-xs font-bold text-[var(--accent)]">{item.year}</span>
                  <p className="text-sm text-[var(--text-2)]">{item.event}</p>
                </div>
              ))}
            </div>

            <div className="mt-8 grid sm:grid-cols-2 gap-4">
              <div className="rounded-xl bg-[var(--card)] border border-[var(--border)] p-4">
                <h4 className="font-hero text-sm font-bold text-[var(--accent)]">{t.about.vision}</h4>
                <p className="mt-1 text-sm text-[var(--text-2)]">{ABOUT.vision}</p>
              </div>
              <div className="rounded-xl bg-[var(--card)] border border-[var(--border)] p-4">
                <h4 className="font-hero text-sm font-bold text-[var(--accent-2)]">{t.about.mission}</h4>
                <p className="mt-1 text-sm text-[var(--text-2)]">{ABOUT.mission}</p>
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
}

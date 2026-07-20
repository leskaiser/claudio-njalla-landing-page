"use client";
import { useState, useEffect, useRef, useCallback } from "react";
import { motion, AnimatePresence } from "framer-motion";
import { X, ChevronLeft, ChevronRight } from "lucide-react";
import { GALLERY_PHOTOS, type GalleryPhoto } from "@/lib/data";
import { useI18n } from "@/lib/i18n/context";

function Lightbox({ photos, index, onClose }: { photos: readonly GalleryPhoto[]; index: number; onClose: () => void }) {
  const [current, setCurrent] = useState(index);
  const touchX = useRef(0);

  const go = useCallback((d: number) => setCurrent(c => (c + d + photos.length) % photos.length), [photos.length]);

  useEffect(() => {
    const fn = (e: KeyboardEvent) => {
      if (e.key === "ArrowRight") go(1);
      if (e.key === "ArrowLeft") go(-1);
      if (e.key === "Escape") onClose();
    };
    window.addEventListener("keydown", fn);
    document.body.style.overflow = "hidden";
    return () => { window.removeEventListener("keydown", fn); document.body.style.overflow = ""; };
  }, [go, onClose]);

  return (
    <motion.div initial={{ opacity: 0 }} animate={{ opacity: 1 }} exit={{ opacity: 0 }}
      className="fixed inset-0 z-[100] bg-black/90 flex items-center justify-center"
      onTouchStart={e => { touchX.current = e.touches[0].clientX; }}
      onTouchEnd={e => { const dx = e.changedTouches[0].clientX - touchX.current; if (Math.abs(dx) > 50) go(dx < 0 ? 1 : -1); }}>
      <button onClick={onClose} className="absolute top-4 right-4 z-10 text-white/70 hover:text-white transition-colors"><X className="h-6 w-6" /></button>
      <button onClick={() => go(-1)} className="absolute left-4 z-10 text-white/70 hover:text-white transition-colors"><ChevronLeft className="h-8 w-8" /></button>
      <button onClick={() => go(1)} className="absolute right-4 z-10 text-white/70 hover:text-white transition-colors"><ChevronRight className="h-8 w-8" /></button>
      <img src={photos[current].src} alt={photos[current].alt} className="max-h-[85vh] max-w-[90vw] object-contain" />
      <div className="absolute bottom-4 left-1/2 -translate-x-1/2 text-white/60 text-sm">{current + 1} / {photos.length}</div>
    </motion.div>
  );
}

export function GallerySection() {
  const { t } = useI18n();
  const [lb, setLb] = useState<number | null>(null);

  return (
    <section id="gallery" className="py-16 md:py-24">
      <div className="max-w-6xl mx-auto px-4 md:px-6">
        <span className="font-hero text-xs font-semibold uppercase tracking-widest text-[var(--accent)]">{t.gallery.label}</span>
        <h2 className="mt-3 font-hero text-3xl md:text-4xl font-bold">
          {t.gallery.heading} <span className="gradient-text">{t.gallery.accent}</span>
        </h2>
        <p className="mt-2 text-[var(--text-2)]">{t.gallery.sub}</p>

        <div className="mt-8 masonry">
          {GALLERY_PHOTOS.map((photo, i) => (
            <div key={photo.src}
              className="group relative cursor-pointer overflow-hidden rounded-xl border border-[var(--border)] hover:border-[var(--accent)] transition-colors"
              onClick={() => setLb(i)}>
              <img src={photo.src} alt={photo.alt} loading="lazy" className="w-full object-cover transition-transform duration-300 group-hover:scale-105" />
              <div className="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity" />
            </div>
          ))}
        </div>
      </div>

      <AnimatePresence>
        {lb !== null && <Lightbox photos={GALLERY_PHOTOS} index={lb} onClose={() => setLb(null)} />}
      </AnimatePresence>
    </section>
  );
}

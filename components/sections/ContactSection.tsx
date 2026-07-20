"use client";
import { useState } from "react";

import { Send, MessageCircle, Mail, MapPin, CheckCircle } from "lucide-react";
import { CONTACT } from "@/lib/data";
import { useI18n } from "@/lib/i18n/context";

export function ContactSection() {
  const { t } = useI18n();
  const [sent, setSent] = useState(false);
  const [sending, setSending] = useState(false);

  const submit = (e: React.FormEvent) => {
    e.preventDefault();
    setSending(true);
    setTimeout(() => { setSending(false); setSent(true); }, 1200);
  };

  return (
    <section id="contact" className="py-16 md:py-24">
      <div className="max-w-6xl mx-auto px-4 md:px-6">
        <span className="font-hero text-xs font-semibold uppercase tracking-widest text-[var(--accent)]">{t.contact.label}</span>
        <h2 className="mt-3 font-hero text-3xl md:text-4xl font-bold">
          {t.contact.heading} <span className="gradient-text">{t.contact.accent}</span>
        </h2>
        <p className="mt-2 text-[var(--text-2)]">{t.contact.sub}</p>

        <div className="mt-10 grid gap-6 lg:grid-cols-2">
          <div className="space-y-3">
            <a href={CONTACT.whatsapp} target="_blank" rel="noopener noreferrer"
              className="flex items-center gap-4 rounded-xl bg-[var(--card)] border border-[var(--border)] p-4 hover:border-[#25D366] transition-colors">
              <div className="rounded-xl bg-[#25D366]/10 p-3"><MessageCircle className="h-5 w-5 text-[#25D366]" /></div>
              <div>
                <span className="font-hero text-sm font-bold">{t.contact.whatsapp}</span>
                <p className="text-xs text-[var(--muted)]">Réponse rapide</p>
              </div>
            </a>
            <div className="flex items-center gap-4 rounded-xl bg-[var(--card)] border border-[var(--border)] p-4">
              <div className="rounded-xl bg-[var(--accent)]/10 p-3"><Mail className="h-5 w-5 text-[var(--accent)]" /></div>
              <div>
                <span className="font-hero text-sm font-bold">{t.contact.email_label}</span>
                <p className="text-xs text-[var(--muted)]">{CONTACT.email}</p>
              </div>
            </div>
            <div className="flex items-center gap-4 rounded-xl bg-[var(--card)] border border-[var(--border)] p-4">
              <div className="rounded-xl bg-[var(--accent-2)]/10 p-3"><MapPin className="h-5 w-5 text-[var(--accent-2)]" /></div>
              <div>
                <span className="font-hero text-sm font-bold">{t.contact.location_label}</span>
                <p className="text-xs text-[var(--muted)]">{CONTACT.location}</p>
              </div>
            </div>
          </div>

          <div className="rounded-2xl bg-[var(--card)] border border-[var(--border)] p-6">
            {sent ? (
              <div className="flex flex-col items-center justify-center py-12 text-center">
                <CheckCircle className="mb-4 h-10 w-10 text-[var(--accent)]" />
                <h3 className="font-hero text-xl font-bold">{t.contact.sent_title}</h3>
                <p className="mt-2 text-sm text-[var(--text-2)]">{t.contact.sent_sub}</p>
              </div>
            ) : (
              <form onSubmit={submit} className="space-y-4">
                <h3 className="font-hero text-lg font-bold">{t.contact.form_title}</h3>
                <input type="text" required placeholder={t.contact.name_placeholder}
                  className="w-full rounded-xl border border-[var(--border)] bg-[var(--bg)] px-4 py-3 text-sm outline-none focus:border-[var(--accent)] transition-colors" />
                <input type="email" required placeholder={t.contact.email_placeholder}
                  className="w-full rounded-xl border border-[var(--border)] bg-[var(--bg)] px-4 py-3 text-sm outline-none focus:border-[var(--accent)] transition-colors" />
                <textarea required rows={4} placeholder={t.contact.message_placeholder}
                  className="w-full rounded-xl border border-[var(--border)] bg-[var(--bg)] px-4 py-3 text-sm outline-none focus:border-[var(--accent)] transition-colors resize-none" />
                <button type="submit" disabled={sending}
                  className="w-full flex items-center justify-center gap-2 rounded-xl bg-[var(--accent)] px-6 py-3 text-sm font-semibold text-white hover:opacity-90 transition-opacity disabled:opacity-50">
                  {sending ? <span className="h-4 w-4 animate-spin rounded-full border-2 border-white/30 border-t-white" /> : <Send className="h-4 w-4" />}
                  {sending ? t.contact.sending : t.contact.send}
                </button>
              </form>
            )}
          </div>
        </div>
      </div>
    </section>
  );
}

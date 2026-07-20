/* ================================================================
   STACY FULL OF ACRYLICS — Central data file
   Prothésiste ongulaire · Gel · Acryl · Nail Art
================================================================ */

export const ABOUT = {
  shortBio:
    "Passionnée par l'art ongulaire depuis toujours, je transforme chaque main en une œuvre d'art. Spécialisée en gel, acryl et nail art, je crée des designs uniques qui reflètent la personnalité de chaque cliente.",
  parcours: [
    { year: "2019", event: "Formation en prothèses ongulaires" },
    { year: "2020", event: "Spécialisation gel & acryl" },
    { year: "2021", event: "Lancement de Stacy Full Of Acrylics" },
    { year: "2022", event: "Certification en nail art avancé" },
    { year: "2023", event: "500+ clientes satisfaites" },
    { year: "2024", event: "Reconnaissance dans la communauté ongulaire" },
  ],
  vision:
    "Rendre chaque femme plus confiante à travers des ongles artistiques et de qualité.",
  mission:
    "Créer des designs uniques qui allient technique, créativité et tendances pour sublimer les mains de chaque cliente.",
  photo: "/gallery/IMG_9770.JPG- Compressed.webp",
} as const;

/* ── SERVICES ─────────────────────────────────────────────────── */
export const SERVICES = [
  {
    title: "Pose Complète",
    description:
      "Extensions gel, acryl ou capsules sur mesure. Pose complète avec décoloration, mise en forme et finition parfaite.",
    features: ["Gel", "Acryl", "Capsules", "Refill"],
    icon: "nails",
  },
  {
    title: "Nail Art & Décoration",
    description:
      "Designs créatifs, pierres, strass, motifs sur mesure. Chaque set est une œuvre d'art unique qui vous ressemble.",
    features: ["Strass & Pierres", "Motifs Peints", "Effets Speciaux", "Tendances"],
    icon: "sparkles",
  },
] as const;

/* ── GALLERY ───────────────────────────────────────────────────── */
export interface GalleryPhoto {
  src: string;
  alt: string;
}

export const GALLERY_PHOTOS: GalleryPhoto[] = [
  { src: "/gallery/IMG_0696.JPG- Compressed.webp", alt: "Création ongulaire gel" },
  { src: "/gallery/IMG_0699.JPG- Compressed.webp", alt: "Nail art décoratif" },
  { src: "/gallery/IMG_0997.JPG- Compressed.webp", alt: "Pose acryl professionnelle" },
  { src: "/gallery/IMG_2092.JPG- Compressed.webp", alt: "Design créatif ongles" },
  { src: "/gallery/IMG_2106.JPG- Compressed.webp", alt: "Set gel élégant" },
  { src: "/gallery/IMG_8625.JPG- Compressed.webp", alt: "Nail art tendance" },
  { src: "/gallery/IMG_9333.JPG- Compressed.webp", alt: "Création artistique ongulaire" },
  { src: "/gallery/IMG_9346.JPG- Compressed.webp", alt: "Pose complète finition premium" },
  { src: "/gallery/IMG_9448.JPG- Compressed.webp", alt: "Design strass et pierres" },
  { src: "/gallery/IMG_9458.JPG- Compressed.webp", alt: "Ongles gel harmonieux" },
  { src: "/gallery/IMG_9770.JPG- Compressed.webp", alt: "Nail art original" },
  { src: "/gallery/IMG_9779.JPG- Compressed.webp", alt: "Création ongulaire signature" },
  { src: "/gallery/IMG_9945.JPG- Compressed.webp", alt: "Set acryl tendance" },
] as const;

export const GALLERY_CATEGORIES = ["Tous", "Gel", "Acryl", "Nail Art"] as const;

/* ── CONTACT ───────────────────────────────────────────────────── */
export const CONTACT = {
  whatsapp: "https://wa.me/237000000000",
  email: "stacy.full.of.acrylics@gmail.com",
  location: "Douala, Cameroun",
} as const;

# Takumi Stamping Canada — Redesigned Website

Modern, polished, professional static website for Takumi Stamping Canada. Built with plain HTML, CSS, and a small sprinkle of JavaScript so it deploys cleanly to Cloudflare Pages today and ports easily to WordPress tomorrow.

## Stack

- **Plain HTML / CSS / JS** — no build step, no framework lock-in.
- **Deployment:** Cloudflare Pages (static).
- **Future state:** content blocks are semantic and cleanly isolated per page, so each page maps directly to a WordPress template/partial when the time comes.

## Pages

| Page                       | Route                      |
|----------------------------|----------------------------|
| Home                       | `/`                        |
| About                      | `/about.html`              |
| Capabilities               | `/capabilities.html`       |
| Quality                    | `/quality.html`            |
| Industries                 | `/industries.html`         |
| Careers                    | `/careers.html`            |
| Contact                    | `/contact.html`            |
| Accessibility statement    | `/accessibility.html`      |
| Privacy policy (placeholder) | `/privacy.html`          |
| 404                        | `/404.html`                |

## Accessibility — WCAG 2.0 Level AA / AODA

Implemented:

- Semantic landmarks (`header`, `nav`, `main`, `footer`) on every page.
- Proper heading order (`h1` → `h2` → `h3`), one `h1` per page.
- Descriptive `alt` text on meaningful images; decorative SVGs marked `aria-hidden`.
- Visible keyboard focus styles (`:focus-visible`) everywhere.
- **Skip to main content** link on every page.
- Colour contrast: body text ≥ 16:1 on white; primary CTA ≥ 7:1; focus ring is high-contrast blue for visibility on any background.
- Touch targets are at least 44 × 44 px (WCAG 2.5.5).
- Responsive layout works at 320 px up to 1920+ px, supports 200% zoom.
- Respects `prefers-reduced-motion`.
- Form fields have visible labels, required indicators, `aria-required`, and `aria-invalid` on validation failure. Status updates use `role="status" aria-live="polite"`.
- Breadcrumb navigation uses a proper `<nav aria-label="Breadcrumb">` with `<ol>` and `aria-current="page"` on the current page.
- Language declared: `<html lang="en">`.
- Current page in main nav is marked with `aria-current="page"`.

## Logo

`/assets/img/logo.svg` — a clean vector reconstruction of the Takumi Stamping Canada wordmark with the artisan kanji (匠) seal, using the brand red `#C8102E`. The SVG is self-contained, includes a `<title>` and `<desc>` for assistive tech, and scales cleanly at any size.

> **Note:** The live logo JPG at `takumistampingcanada.ca/wp-content/uploads/2020/02/logo-1.jpg` could not be fetched from this build environment (network-restricted). The SVG in this repository is a typographic reconstruction that matches the brand concept (wordmark + red seal mark with kanji). If you need a pixel-exact trace of the existing bitmap, swap `assets/img/logo.svg` with a re-traced version — every HTML page references the file by that path, so a drop-in replacement updates the whole site.

## Colour palette

- Primary red: `#C8102E` (`--color-primary`)
- Primary red (hover / text on white, AA-compliant): `#9E0C24` (`--color-primary-dark`)
- Ink / headlines: `#1a1a1a`
- Body text: `#212121`
- Secondary text: `#4a4a4a`
- Surface: `#ffffff` / alt `#f5f5f5` / dark `#0f0f0f`

## Deploying to Cloudflare Pages

This repo is already Cloudflare Pages-ready.

1. Push to GitHub.
2. In the Cloudflare dashboard: **Workers & Pages → Create → Pages → Connect to Git**.
3. Select this repository and the branch (`main` once merged, or the feature branch for a preview).
4. **Build settings:**
   - Framework preset: *None*
   - Build command: *(leave blank)*
   - Output directory: `/` (the repository root)
5. Deploy.

Security headers, caching, and the `404.html` fallback are handled automatically by Cloudflare via the included `_headers` and `_redirects` files and the root `404.html`.

### Local preview

Any static file server works. Two quick options:

```bash
# Python 3
python3 -m http.server 8080

# Node
npx serve@latest .
```

Then open <http://localhost:8080>.

## Migrating to WordPress later

The site is structured to make this straightforward:

- **Header + footer** repeat identically on every page → map to `header.php` / `footer.php`.
- **Primary nav** is a single `<nav id="primary-nav">` block → map to `wp_nav_menu( 'primary' )`.
- **Each page** has a single `<main id="main">` with clearly delimited sections → map each HTML page to a page template (`page-about.php`, `page-capabilities.php`, etc.) or a single `page.php` driven by ACF / block content.
- **Contact form** (`/contact.html`) is a plain HTML form → swap for Contact Form 7, Gravity Forms, or Fluent Forms; keep the field labels and `aria-*` attributes to retain accessibility.
- **Assets** are already under `/assets/...` — the same structure fits a child theme's `assets/` directory with no path changes.
- **SEO:** Per-page `<title>`, `meta description`, canonical, Open Graph tags, and `schema.org` JSON-LD on the homepage are already in place.

## File layout

```
.
├── index.html
├── about.html
├── capabilities.html
├── quality.html
├── industries.html
├── careers.html
├── contact.html
├── accessibility.html
├── privacy.html
├── 404.html
├── assets/
│   ├── css/styles.css
│   ├── js/main.js
│   └── img/logo.svg
├── _headers            # Cloudflare Pages security / cache headers
├── _redirects          # Cloudflare Pages redirects
├── robots.txt
├── sitemap.xml
├── .gitignore
└── README.md
```

## Things to replace before launch

- Real phone number, email addresses, and plant address (currently placeholders).
- Real hero / production photography in the `.split__image` blocks.
- Finalized privacy policy text.
- Replace the reconstructed logo SVG with a pixel-exact vector if required.
- Hook the contact form to a real backend (Cloudflare Workers, Formspree, or WordPress Contact Form 7 after migration).

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

Two SVG assets ship with the site:

- **`/assets/img/logo.svg`** — full lockup: red **hanko seal + kanji 匠** beside the `TAKUMI` wordmark and a `STAMPING CANADA` subline. Used in the site header and footer.
- **`/assets/img/logo-mark.svg`** — seal-only mark for square / favicon contexts.

Both are:

- Pure SVG — no font dependency for the kanji. The 匠 character is drawn from paths (`<path>` / `<rect>`), so it renders identically on every OS without loading a CJK font.
- Crisp at any size (rendered to the pixel grid via `shape-rendering`/proper viewBox).
- Self-contained: each includes a `<title>` and `<desc>` for assistive tech and a short inline `<style>` block for wordmark typography (safe system font stack).
- Coloured with the brand red `#C8102E` for the seal.

> **Note on sourcing:** The live JPG logo at `takumistampingcanada.ca/wp-content/uploads/2020/02/logo-1.jpg` is not reachable from this build environment (outbound fetches blocked, including Wayback Machine mirrors). The SVGs in this repository are a clean vector reconstruction of the brand concept — a red hanko seal carrying the artisan kanji beside a bold wordmark. If you have the original artwork, drop a replacement SVG at `/assets/img/logo.svg` and the whole site updates automatically.

## Content sources

- **Brand facts** — incorporated from public profiles of Takumi Stamping Canada Inc.: subsidiary of **Takagi Manufacturing Company, Ltd.** of Okazaki, Japan; plant opened January 2008 in St. Thomas, Ontario; ~300 team members; supplies Toyota Motor Manufacturing Canada; uses **DMAIC** and **Six Sigma** for quality discipline.
- **Site structure** — the five-department model (Stamping / Welding / Tooling / Quality / Maintenance + Logistics) and the five-pillar values (Safety / Quality / Customer service / Sustainability / Innovation) are modelled on the similar-company reference site futabanorthamerica.com, adapted to Takumi's Canadian context.
- Because live site scraping is blocked from the build environment, verify any sensitive specifics (press tonnages, exact job titles, phone number, email aliases, plant photos) against the client's current materials before launch.

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

## Things to verify / replace before launch

- **Real phone, email, and address.** The current values (`(519) 633-6070`, `info@tsi-cn.ca`, `100 Dennis Rd, St. Thomas, ON N5P 0B6`) were drawn from public directory listings — confirm with the client.
- **Production photography.** Swap the stylised SVG illustrations in each `.split__image` block with real press-line, weld-cell, and CMM photos. Keep `alt=""` on purely decorative shots or add a descriptive `alt` on shots that carry information.
- **Privacy policy.** `/privacy.html` is a placeholder — replace with the client's final PIPEDA-aligned policy.
- **Vector logo.** If the client has the original Illustrator/SVG artwork, drop it in at `/assets/img/logo.svg` (the whole site picks it up).
- **Contact form backend.** Currently the form validates client-side and shows a friendly confirmation message; wire it up to a real backend (Cloudflare Workers email routing, Formspree, or WordPress Contact Form 7 after migration).
- **Open Graph image.** Replace the logo-as-OG-image with a real 1200×630 social card once production photography is available.

# Upgrading the Takumi theme from v1.0.0 → v2.0.0

## What changed

v2.0.0 turns the theme into a **hybrid-editable** build:

- **Hero banners, breadcrumbs, footer, CTA bands** — still templated, locked for brand consistency.
- **Page body content** — now lives in the WordPress editor. Each section that the client sees (e.g. "Our heritage", "Our values", "Roles we hire for") is its own **Custom HTML block** they can edit, reorder, duplicate or delete from `Pages → [page] → Edit`.

No new plugins. No paid software. Just standard Gutenberg.

## How it migrates safely

The theme ships a `default-content/` folder with each page's body sections wrapped as Gutenberg blocks. On first activation it runs once:

1. For every known page slug (about, capabilities, quality, industries, careers, contact, accessibility, privacy):
2. If the WP page exists **and** its editor content is empty,
3. Pre-fill it from `default-content/{slug}.php`.
4. Set the option `takumi_pages_seeded_v1 = '1'` so it never runs again.

Pages with existing editor content are **never** overwritten.

## Upgrade steps (≈3 minutes on dev.takumistampingcanada.ca)

1. Download the new zip from GitHub:
   <https://github.com/qindarka/takumi-futaba/blob/wordpress-theme/wordpress-theme/takumi-theme.zip>
   → click **Download raw file**
2. wp-admin → **Appearance → Themes**
3. Click the active **Takumi Stamping Canada** theme card → **Theme Details** → **Delete** *(this is safe — pages, plugins, settings all stay intact; only the theme files go)*
   - *Alternative:* upload via FTP/cPanel and overwrite `wp-content/themes/takumi-theme/`. Skip step 4 if you do this.
4. **Add New Theme → Upload Theme** → choose the new `takumi-theme.zip` → **Install Now** → **Activate**
5. Visit `https://dev.takumistampingcanada.ca/` and click through every page in the nav.

You should see **identical** rendering to v1 — same colors, same layout, same content. The difference is invisible until you go to wp-admin → Pages → click any page → and now you see editable Custom HTML blocks for each section.

## How the client edits a page

1. wp-admin → **Pages → click any page** (e.g. About)
2. They see a stack of Custom HTML blocks, one per section.
3. Click any block → small toolbar appears → "Edit as HTML" or just click into the block to edit.
4. Edit text inside the block. **Don't touch the wrapping `<section>` tag or the `class=` attributes** — those drive the styling.
5. Click **Update** at top right. Done.

### Things they can safely edit

- Any text between `<p>` and `</p>` tags
- Any text inside `<li>` list items
- Any text inside `<h2>`, `<h3>`, `<strong>`
- Phone numbers, email addresses
- Adding a new bullet (copy a `<li>` line, change the text)

### Things they should not edit (will break the look)

- Class names: `class="section"`, `class="card"`, `class="check-list"`, etc.
- The wrapping `<section>` tag's attributes
- Any inline `style="…"`

If they want to change a section's structure (not just text), that's still a developer task — but it's a much smaller universe of changes.

## Rolling back to v1.0.0

Pages already had editor content (auto-populated by v2). v1 templates ignore editor content. So if you re-install v1.0.0:

1. Pages will revert to the v1 hardcoded content visually.
2. Editor content stays in the database, untouched.
3. Re-installing v2 brings everything back.

No data is destroyed in either direction. Safe to experiment.

## If something looks off after upgrade

| Symptom | Likely cause | Fix |
|---|---|---|
| Page is blank between hero and CTA | Page's editor is empty AND the seeding hook didn't run | wp-admin → Tools → Site Health → check for fatal errors. Or in DB: `delete_option( 'takumi_pages_seeded_v1' )` then re-activate the theme |
| Two copies of every section | Page editor was populated and the template is also rendering hardcoded content (shouldn't happen) | Confirm you uploaded `takumi-theme.zip` from the wordpress-theme branch |
| Styling broken on one page | Client edited a class name or wrapping tag | View revisions of that page → restore previous version |

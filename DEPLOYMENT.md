# Deployment notes

This file records how the site is currently hosted, the gotcha that bit us once,
and the two cleanest ways to make sure code in `main` always reaches the live URL.

## Current state (as of last commit)

- **Repository:** `qindarka/takumi-futaba` on GitHub
- **Default branch (production):** `main`
- **Live URL:** <https://takumi-futaba.keystonetech.workers.dev/>
- **Hosting product:** Cloudflare **Workers** (account subdomain: `keystonetech`)

> Important: the live URL is a Cloudflare **Worker**, not a Cloudflare **Pages**
> site. Those two Cloudflare products behave very differently — see below.

## What went wrong once, and how to avoid it again

### The incident

1. The site was first deployed to Cloudflare **Workers** with an early version
   that used a red palette and a placeholder logo.
2. Subsequent commits landed on GitHub: rebrand to brand blue (`#007BFF`),
   real contact details, `HR@tsi-cn.ca` email, etc.
3. The live `*.workers.dev` URL kept serving the old red version for days.
4. The fix was to manually redeploy the Worker, which finally pulled the
   current code.

### Why

| Product | URL pattern | Auto-deploys from GitHub? |
|---|---|---|
| Cloudflare **Pages** | `*.pages.dev` | **Yes** — every push to the production branch rebuilds |
| Cloudflare **Workers** | `*.workers.dev` | **No** by default — needs manual `wrangler deploy` or a CI workflow |

GitHub had the latest code. The Worker was not watching GitHub. So pushes
silently piled up without ever reaching the live URL.

## Keeping live in sync with `main` — pick one

### Option A — Migrate to Cloudflare Pages (recommended)

Cloudflare Pages is purpose-built for static sites like this one and
auto-deploys on every push.

1. Cloudflare dashboard → make sure you're in the `keystonetech` account.
2. **Workers & Pages → Create → Pages tab → Connect to Git**.
3. Pick `qindarka/takumi-futaba`.
4. Build settings:

   | Field | Value |
   |---|---|
   | Production branch | `main` |
   | Framework preset | None |
   | Build command | *(leave empty)* |
   | Build output directory | `/` |
   | Root directory | *(leave empty)* |

5. **Save and Deploy.** New URL: `https://<project-name>.pages.dev`.
6. Once it works, **delete the old Worker** so visitors don't land on the
   stale version: Workers & Pages → `takumi-futaba` Worker → Settings → Delete.
7. Optional: in the Pages project, **Custom domains → `takumistampingcanada.ca`**.

### Option B — Stay on Workers, but add a GitHub Action

If you want to keep the existing `*.workers.dev` URL, automate the deploy:

1. Add a `wrangler.toml` to the repo root.
2. Add `.github/workflows/deploy.yml` that runs `wrangler deploy` on every
   push to `main`.
3. In the GitHub repo, add a **`CLOUDFLARE_API_TOKEN`** secret
   (Settings → Secrets and variables → Actions).
4. Push `main` once — the Action runs and the Worker updates.

Ask Claude to scaffold this if needed.

## If neither is set up yet — manual rule

Until one of the options above is in place, **a push to GitHub does not update
the live site.** After every push to `main`, you must trigger a Worker
redeploy from the Cloudflare dashboard yourself, or the live URL will
silently fall behind.

## Quick verification checklist

After any deploy, hard-refresh the live URL (`Cmd/Ctrl + Shift + R`) and
confirm:

- Header logo shows seven **blue** diamonds (#007BFF) — not red.
- Footer email reads `HR@tsi-cn.ca`.
- Footer phone reads `(519) 633-6070`.
- Footer address reads `100 Dennis Rd, St. Thomas, ON N5P 0B6`.

If any of those is wrong, you're looking at a stale deployment, not a code
problem in this repo.

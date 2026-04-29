# How to install the Takumi WordPress theme on HostGator

This is a step-by-step. Don't skip steps. Do them in order. If something doesn't match what's in this guide, **stop and ask** — don't improvise.

---

## What you have in this folder

```
wordpress-theme/
├── INSTALL.md          ← this file
└── takumi-theme/       ← the actual WordPress theme (everything inside this folder)
```

The `takumi-theme/` folder is the thing WordPress will run. You'll zip it up and upload it to WordPress.

---

## Before you start — what you need

- [ ] Your HostGator login (cPanel)
- [ ] About 60 minutes
- [ ] A computer (not a phone)
- [ ] An email address to receive WordPress login info

---

## STEP 1 — Make a zip file of the theme (5 minutes)

You're going to upload the theme as a single zip file.

1. On your computer, find the `wordpress-theme/takumi-theme/` folder.
2. **Right-click** the `takumi-theme` folder.
3. Choose **Compress** (Mac) or **Send to → Compressed (zipped) folder** (Windows).
4. You should now have a file called **`takumi-theme.zip`** sitting next to the original folder.

> ⚠️ **Important:** make sure the zip file's name is `takumi-theme.zip` and that opening it shows a folder called `takumi-theme/` inside, with files like `style.css`, `functions.php`, etc. directly in that folder. If you accidentally zipped the *contents* instead of the folder, redo it.

---

## STEP 2 — Add the staging subdomain in HostGator (5 minutes)

We're going to make a separate website for testing, so the live `tsi-cn.ca` site keeps working while we build.

1. Go to <https://portal.hostgator.com/> and log in.
2. Click **Hosting** → click your hosting account → **cPanel admin** (a button somewhere on that page).
3. cPanel opens. Find the search box at the top and type **"Domains"** → click **Domains**.
4. Click **Create A New Domain**.
5. In the **Domain** field, type exactly: `dev.takumistampingcanada.ca`
6. Leave the **Document Root** (folder) as whatever HostGator suggests by default — probably `public_html/dev.takumistampingcanada.ca`. Write that path down on a sticky note.
7. Click **Submit** (or **Create**).

> ⚠️ HostGator may say "you need to point this domain at our nameservers." If it does, that's a separate step — your domain registrar (wherever you bought `takumistampingcanada.ca`) needs to add a DNS A record for `dev` pointing to HostGator's IP. **If you see this message, stop and ask me before continuing.**

You should now see `dev.takumistampingcanada.ca` listed under your domains.

---

## STEP 3 — Install WordPress on the staging subdomain (10 minutes)

1. Back in cPanel, search for **"WordPress"** → click the **WordPress** icon (it's usually under "Software" — uses a tool called Softaculous).
2. Click the big blue **Install** button (or **Install Now**).
3. Fill in the form:

   | Field | What to type |
   |---|---|
   | **Choose Protocol** | `https://` |
   | **Choose Domain** | pick `dev.takumistampingcanada.ca` from the dropdown |
   | **In Directory** | **leave this BLANK** (delete anything that's there) |
   | **Site Name** | `Takumi Stamping Canada (DEV)` |
   | **Site Description** | `Precision metal stamping & welded assemblies` |
   | **Admin Username** | something memorable but **not** "admin". e.g., `tsc_admin` |
   | **Admin Password** | click the key icon to generate a strong one. **SAVE IT in your password manager.** |
   | **Admin Email** | your real email address (you'll get login confirmation) |

4. Scroll down. Leave everything else at the defaults.
5. Click **Install** at the bottom.
6. Wait 1–2 minutes.
7. When done, you'll see two URLs. Save them:
   - The site: `https://dev.takumistampingcanada.ca`
   - The login: `https://dev.takumistampingcanada.ca/wp-admin`

8. **Test it.** Open `https://dev.takumistampingcanada.ca` in a new browser tab. You should see a generic WordPress site with the default theme. ✅

---

## STEP 4 — Log into WordPress (1 minute)

1. Open `https://dev.takumistampingcanada.ca/wp-admin`.
2. Type the **Admin Username** and **Admin Password** from Step 3.
3. You're now in the WordPress dashboard.

---

## STEP 5 — Upload the Takumi theme (3 minutes)

1. In the WordPress dashboard's left sidebar, click **Appearance** → **Themes**.
2. At the top, click **Add New Theme**.
3. Click **Upload Theme**.
4. Click **Choose File** and pick the **`takumi-theme.zip`** file you made in Step 1.
5. Click **Install Now**.
6. Wait for "Theme installed successfully."
7. Click the **Activate** link.
8. **Test it.** Open `https://dev.takumistampingcanada.ca` in a new tab. The site won't look right yet (no pages exist), but you should see a generic page with the **blue diamond logo at the top**. ✅

> If you see a broken-looking page or PHP errors, stop and tell me. Don't proceed.

---

## STEP 6 — Set up "pretty" URLs (2 minutes)

By default WordPress URLs look like `?p=42`. We need them to look like `/about/`.

1. WP dashboard sidebar → **Settings** → **Permalinks**.
2. Pick **Post name** (the radio button that shows `/sample-post/`).
3. Click **Save Changes** at the bottom.

---

## STEP 7 — Create the 8 pages (15 minutes)

You need to create one Page in WordPress for each section. The theme automatically uses the right design for each one based on the page's URL slug.

For each row in the table below, do these 5 things:

1. WP dashboard sidebar → **Pages** → **Add New Page**.
2. In the **Title** field at the top, type the **Title** from the table.
3. **DON'T add any content** — leave the page body blank. (The theme already has the content inside it.)
4. On the right sidebar, find the **URL** or **Permalink** section and make sure the **slug** matches the table exactly. If it doesn't, click "Edit" next to the URL and change it.
5. Click **Publish** (top right). Confirm if asked.

| Title | URL slug (must be EXACTLY this) |
|---|---|
| Home | `home` |
| About | `about` |
| Capabilities | `capabilities` |
| Quality | `quality` |
| Industries | `industries` |
| Careers | `careers` |
| Contact | `contact` |
| Accessibility | `accessibility` |
| Privacy | `privacy` |

> ⚠️ If a slug shows up as something like `home-2` because that name is taken, click "Edit" next to the URL, change it to exactly `home`, and save. The slug **must match** for the theme to find the right design.

---

## STEP 8 — Make "Home" the homepage (1 minute)

By default, WordPress shows a list of blog posts on the front page. We want our Home page instead.

1. WP dashboard sidebar → **Settings** → **Reading**.
2. **Your homepage displays:** select **A static page**.
3. **Homepage:** pick **Home** from the dropdown.
4. **Posts page:** leave this empty (we don't have a blog).
5. Click **Save Changes**.

Now visit `https://dev.takumistampingcanada.ca` — you should see the **blue Takumi homepage** with the hero, stats, capabilities cards, etc. 🎉

Click around the menu (About, Capabilities, etc.) — every page should look like the original site. The Contact page will say something about a missing form — that's expected; we set it up next.

---

## STEP 9 — Install the WPForms plugin (3 minutes)

This is the contact-form software.

1. WP dashboard sidebar → **Plugins** → **Add New Plugin**.
2. In the search box on that page, type **`WPForms Lite`**.
3. Find the one by **WPForms** with millions of installs. Click **Install Now**.
4. After installation, click **Activate**.
5. WPForms might show a welcome screen — close it / skip it.

---

## STEP 10 — Build the contact form (10 minutes)

1. WP dashboard sidebar → **WPForms** → **Add New**.
2. Choose **Simple Contact Form** template.
3. Name the form `Takumi Contact Form`.
4. The form builder opens. The default form has Name, Email, Comment. We'll customize.

### 10a. Edit the existing fields

- Click the **Name** field → change "Label" to `Full name` → check **Required**.
- Click the **Email** field → make sure it's **Required**.
- Click the **Comment or Message** field → change "Label" to `Message` → keep **Required**.

### 10b. Add four more fields

In the left panel (Standard Fields), drag these into the form, in this order:

1. **Single Line Text** → label it `Company` → **not** required.
2. **Phone** → label it `Phone` → not required.
3. **Dropdown** → label it `How can we help?` → required → in **Choices**, replace the defaults with:
   - `Request a quote`
   - `Schedule a plant visit`
   - `Engineering / APQP discussion`
   - `General enquiry`

Drag the fields so the order top-to-bottom is:
**Full name → Company → Email → Phone → How can we help? → Message**

### 10c. Set up the email notification

1. At the top of the form builder, click the **Settings** tab (left side panel) → click **Notifications**.
2. **Send To Email Address:** type `HR@tsi-cn.ca`
3. **Email Subject Line:** `New website enquiry — {field_id="2"}` *(this auto-fills with the sender's email — leave the default if it's already similar)*
4. **From Name:** `Takumi Stamping Canada website`
5. **From Email:** leave the default (`{admin_email}`)

### 10d. Save and grab the form ID

1. Click **Save** (top right).
2. Click **Embed** at the top → choose **Use a Shortcode**.
3. Copy the shortcode WPForms shows you. It will look like `[wpforms id="123"]` — **note that number**.

### 10e. Update the contact page to use this form ID

1. WP dashboard sidebar → **Appearance** → **Theme File Editor**.
2. WordPress will show a warning — click **I understand**.
3. On the right side, find **`page-contact.php`** and click it.
4. Use **Ctrl+F** (Cmd+F on Mac) to find: `id="1"`
5. Change the `1` to **the number from Step 10d**.
6. Click **Update File**.

---

## STEP 11 — Make sure form emails actually arrive (5 minutes)

HostGator sometimes blocks emails sent from PHP. We use **WP Mail SMTP** to fix this.

1. WP dashboard sidebar → **Plugins** → **Add New Plugin** → search `WP Mail SMTP`.
2. Install and activate **WP Mail SMTP by WPForms**.
3. WP dashboard → **WP Mail SMTP** → **Settings**.
4. **From Email:** `noreply@tsi-cn.ca` (or another mailbox you own on `tsi-cn.ca`)
5. **From Name:** `Takumi Stamping Canada website`
6. **Mailer:** the easiest free option is **Other SMTP**. With this, you'll need:
   - SMTP host (ask whoever hosts your `tsi-cn.ca` email — it's likely something like `mail.tsi-cn.ca` or `smtp.gmail.com` if you use Google Workspace)
   - SMTP port (usually 587 or 465)
   - The username and password for that mailbox
7. Save Settings.
8. Click the **Email Test** tab at the top → send a test to **your own email** → confirm you receive it within 30 seconds.

> ⚠️ **If the test email doesn't arrive**, that's the moment to stop and call HostGator support. Don't go live until form emails work.

---

## STEP 12 — Final test before launch (10 minutes)

1. Open `https://dev.takumistampingcanada.ca` in a fresh browser window (logged out, or in a private/incognito window).
2. Click through every page in the top nav. Each should look like the original site.
3. Go to the Contact page. Fill out the form with **your own** name and email.
4. Click Send.
5. Within 1 minute, check **`HR@tsi-cn.ca`** — the form submission should appear there.
6. ✅ If it does — you're done with staging.
7. ❌ If it doesn't — go back to Step 11 and fix email before doing anything else.

---

## STEP 13 — When you're ready to go LIVE (production cutover)

**Don't do this until everything in Step 12 worked.**

This is the step that points the real `takumistampingcanada.ca` URL at the new WordPress site.

1. **Back up the current Cloudflare Worker URL.** Open `https://takumi-futaba.keystonetech.workers.dev/` in a tab and confirm it still works. Don't close it. This is your fallback.
2. In Cloudflare DNS, change the A record for `takumistampingcanada.ca` to point at HostGator's server IP. (HostGator gives you the IP in cPanel → "General Information" sidebar.)
3. Wait 5–15 minutes for DNS to propagate.
4. Open `https://takumistampingcanada.ca/` — you should see the WordPress site.
5. Repeat the form test from Step 12 on the production URL.

### If something breaks during cutover

- Open Cloudflare DNS, change the A record back to whatever it was pointing at before (the Worker).
- Within 5 minutes, the live URL serves the working static site again.
- The WordPress site at `dev.takumistampingcanada.ca` keeps running, untouched, while we fix things.

---

## STEP 14 — After it's been live and stable for 2 weeks

Only after 2 weeks of working WordPress site:

1. Optional: delete the old Cloudflare Worker (`Workers & Pages → takumi-futaba → Settings → Delete`).
2. Optional: delete the static site files from this GitHub repo's `main` branch.

You don't have to do either. They cost nothing to keep.

---

## What to do if you get stuck at any step

Tell me **the step number** you got stuck on and **the exact error message** (or paste a screenshot). Don't try to fix WordPress errors by trial and error — small wrong moves can cascade.

## Things you can change yourself, after launch

- **Plant photos:** WP dashboard → Media → Add New, then ask me to wire them into the theme.
- **Phone, email, address:** ask me — these live in `header.php` and `footer.php` and need to be edited once.
- **Open job postings:** ask me — these live in `page-careers.php`.
- **Privacy policy text:** ask me — this lives in `page-privacy.php`.

## Things to AVOID doing

- ❌ Don't install random plugins to "make it look better" — they often break custom themes.
- ❌ Don't switch themes (Appearance → Themes → Activate something else). The Takumi theme is the design.
- ❌ Don't delete the WP Mail SMTP plugin — it's what makes form emails actually send.
- ❌ Don't add the "Hello Dolly" or "Akismet" plugins unless I say so.

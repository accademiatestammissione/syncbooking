# SyncBooking Theme — Masseria Le Cerase

A static, hand-coded PHP theme. **Every text, link and image lives in one file:
`data_general.php`** — edit that and the whole site updates.

## Structure

```
syncbooking_theme/
├── data_general.php        ← EDIT EVERYTHING HERE (texts, images, contacts, nav, cards)
├── index.php               ← Home
├── hospitality.php         ← Hospitality (stay, gallery, services, experiences)
├── events-weddings.php     ← Events & Weddings (overview)
├── wedding-in-masseria.php ← Wedding in Masseria
├── partys-meeting.php      ← Partys & Meeting
├── surroundings.php        ← Surroundings
├── contacts.php            ← Contacts (form + map)
├── inc/
│   ├── header.php          ← <head> + top menu + mobile drawer (loads data_general.php)
│   └── footer.php          ← footer + scroll-to-top + lightbox + <script>
└── assets/
    ├── site.css            ← all styles
    └── theme.js            ← front-end interactions (menu, reveal, lightbox)
```

## How to edit content

Open **`data_general.php`**. It is organised top-to-bottom:

- `$BASE` — base URL of the media library (change once to repoint all images).
- `$SITE` — name, tagline, phone, email, address, social links, VAT/CIN, YouTube id, map.
- `$IMG` — all images, by friendly key (e.g. `$IMG['welcome']`).
- `$GALLERY` / `$WEDDING_GALLERY` — lightbox photo sets.
- `$NAV` — the navigation menu (labels, links, dropdown items).
- `$ICON` — reusable SVG icons for services.
- `$SERVICES`, `$EXPERIENCES`, `$TEASERS`, `$DESTINATIONS`, `$PARTY_FORMATS` — card data.
- `$C['<page>']` — per-page texts (home, hospitality, events, wedding, partys, surroundings, contacts).

Change a string → the page changes. No HTML editing required.

## Requirements

- PHP 7.4+ (no database, no dependencies).
- Run locally with: `php -S localhost:8000` then open `http://localhost:8000/index.php`.
- Or drop the folder on any PHP-capable web host.

## Note on preview

The visual preview in the design tool uses the **HTML** copies in the project root
(`Masseria Le Cerase.html`, `Hospitality.html`, …) because the previewer runs HTML/JS
only, not PHP. The HTML and PHP builds are visually identical; this PHP theme is the
one to deploy on the server.

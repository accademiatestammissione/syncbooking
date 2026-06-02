# SyncBooking Theme 01 — Villa Rosa Resort

A static, hand-coded PHP theme. **Every text, link and image lives in one file:
`data_general.php`** — edit that and the whole site updates.

## Structure

```
syncbooking_theme/
├── data_general.php        ← EDIT EVERYTHING HERE (texts, images, contacts, nav, cards)
├── index.php               ← Home
├── villa.php               ← Villa
├── houses.php              ← Houses (listing)
├── house-for-2.php         ← House detail (2 guests)
├── house-for-3.php         ← House detail (3 guests)
├── house-for-4.php         ← House detail (4 guests)
├── price-and-condition.php ← Rates & conditions
├── spa-wellness.php        ← SPA & Wellness
├── experiences.php         ← Experiences
├── surroundings.php        ← Surroundings
├── contacts.php            ← Contacts (form + map)
├── offers.php              ← Offers
├── inc/
│   ├── header.php          ← <head> + top menu + mobile drawer (loads data_general.php)
│   ├── footer.php          ← footer + scroll-to-top + lightbox + <script>
│   └── house-detail.php    ← shared body for the three house pages
└── assets/
    ├── site.css            ← all styles
    └── theme.js            ← front-end interactions (menu, reveal, lightbox)
```

## How to edit content

Open **`data_general.php`**. It is organised top-to-bottom:

- `$BASE` — base URL of the media library (change once to repoint all images).
- `$IMG` — all images, by friendly key (e.g. `$IMG['welcome']`).
- `$SITE` — name, phones, email, address, social links, VAT/CIN, Vimeo id, map.
- `$NAV` — the navigation menu (labels, links, dropdown items).
- `$ICON` — reusable SVG icons for services/amenities.
- `$C['<page>']` — per-page texts and card data (home, villa, houses, house2/3/4,
  price, spa, experiences, surroundings, contacts, offers).

Change a string → the page changes. No HTML editing required.

## Requirements

- PHP 7.4+ (no database, no dependencies).
- Run locally with: `php -S localhost:8000` then open `http://localhost:8000/index.php`.
- Or drop the folder on any PHP-capable web host.

## Note on preview

The visual preview in the design tool uses the **HTML** copies in the project root
(`Villa Rosa Resort.html`, `Villa.html`, …) because the previewer runs HTML/JS only,
not PHP. The HTML and PHP builds are visually identical; this PHP theme is the one to
deploy on the server.

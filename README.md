# SyncBooking Hospitality

WordPress theme with selectable hospitality subthemes, editable content, visual frontend edit controls and downloadable demo media.

## Source Of Truth

When a new clean HTML package is provided for a subtheme, treat it as the absolute visual source.

- Keep the original Claude HTML package outside the WordPress theme package, under `C:\SyncBookingTheme\syncbooking_sources\`.
- Do not copy original `.html` files or heavy `uploads` folders into this WordPress theme.
- Rebuild the matching PHP templates, shared header, shared footer, CSS data and default content from the clean HTML.
- Preserve the WordPress bridge features: options panel, multilingual content, visual editor, gallery modal, media downloader, page generation and WordPress.org compliance.
- If the HTML package includes a version comment or version meta tags, expose the same source version/build date in the generated PHP pages.

Current Theme 01 source package:

- Path: `C:\SyncBookingTheme\syncbooking_sources\theme01\claude-html-2026-06-07-desktop-v6`
- Source version: `1.0.2`
- Build date: `2026-06-07`

## Admin Editing

From WordPress, open `Appearance > SyncBooking Theme`.

- `Header & Menu` manages navigation, global links, fonts and color palette.
- `General Settings` manages required plugin checks, subtheme, languages and unit type/count.
- `Home` manages the active subtheme homepage.
- `Pages` opens the unified editor for generated pages.
- `Visual Edit` enables frontend pencil controls for logged-in admins.

## Media

The WordPress.org theme zip must stay light and must not bundle large demo uploads. Real demo media is downloaded after installation through the SyncBooking admin panel.

The theme keeps only optimized local assets required for layout fidelity, while demo upload URLs are resolved through the media downloader/importer.

## WordPress.org

Before packaging:

- No PHP short echo tags.
- No bundled `uploads` directory.
- Text domain must match the theme slug: `syncbooking-hospitality`.
- Theme version in `style.css`, `readme.txt` and `SBT_VERSION` must move forward.
- The zip must stay below the WordPress.org upload limit.
- Included assets must be GPL-compatible or replaced with owner-approved assets.

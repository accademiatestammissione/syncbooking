# SyncBooking Hospitality

WordPress theme with selectable hospitality subthemes, editable content, visual frontend edit controls and downloadable demo media.

## Source Of Truth

When a new clean HTML package is provided for a subtheme, treat it as the absolute visual source.

- Keep the original Claude HTML package outside the WordPress theme package, under `C:\SyncBookingTheme\syncbooking_source\sourcethemeHTML\`.
- Do not copy original `.html` files or heavy `uploads` folders into this WordPress theme.
- Rebuild the matching PHP templates, shared header, shared footer, CSS data and default content from the clean HTML.
- Preserve the WordPress bridge features: options panel, multilingual content, visual editor, gallery modal, media downloader, page generation and WordPress.org compliance.
- If the HTML package includes a version comment or version meta tags, expose the same source version/build date in the generated PHP pages.

Current Theme 01 source package:

- Path: `C:\SyncBookingTheme\syncbooking_source\sourcethemeHTML\theme01`
- Source version: `2.1`
- Build date: `2026-06-11`

## Admin Editing

From WordPress, open `Appearance > SyncBooking Theme`.

- `Header & Menu` manages navigation, global links, fonts and color palette.
- `General Settings` manages required plugin checks, subtheme, languages and unit type/count.
- `Pages` opens the unified editor for Home and generated pages.
- `Visual Edit` enables frontend pencil controls for logged-in admins.

## Media

The WordPress.org theme zip must not bundle demo media or subtheme asset folders. Real demo media, CSS, JavaScript, video and brochure files are downloaded after installation through the SyncBooking admin panel.

The importer has no local fallback: assets are downloaded online from the configured `assets.zip` for the selected subtheme.

## WordPress.org

Before packaging:

- No PHP short echo tags.
- No bundled `uploads` directory.
- No bundled `subthemes/*/assets` directories.
- Text domain must match the theme slug: `syncbooking-hospitality`.
- Theme version in `style.css`, `readme.txt` and `SBT_VERSION` must move forward.
- The zip must stay below the WordPress.org upload limit.
- Online assets must be GPL-compatible or owner-approved before being published in `assets.zip`.

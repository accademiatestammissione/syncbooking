# Theme 01 - Villa Rosa Resort

Theme 01 is generated from the clean Villa Rosa Resort HTML package and then adapted to the SyncBooking WordPress bridge.

## Absolute HTML Model

Use this source package as the visual reference for Theme 01:

`C:\SyncBookingTheme\syncbooking_sources\theme01\claude-html-2026-06-07-v5`

Current source metadata:

- Source version: `1.0.0`
- Build date: `2026-06-07`

Every PHP page rendered by this subtheme must expose the source metadata through:

- the `<!-- VERSION ... -->` HTML comment before `<!DOCTYPE html>`
- `<meta name="version" ...>`
- `<meta name="build-date" ...>`
- `data-template-version` on `<body>`

## WordPress Adaptation Rules

- Do not copy the original `.html` files into this folder.
- Do not copy the source `uploads` folder into the WordPress theme.
- Keep shared header/footer in `inc/header.php` and `inc/footer.php`.
- Keep all editable default content in `data_general.php`.
- Keep WordPress-specific visual edit controls and gallery modal support intact.
- Keep large demo media handled through the media downloader/importer.

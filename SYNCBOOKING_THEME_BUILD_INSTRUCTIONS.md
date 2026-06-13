# SyncBooking Hospitality Build Instructions

These instructions are part of the theme maintenance workflow and must be followed whenever a new clean HTML package is provided.

## Source Of Truth

- Treat the newest clean HTML package in `C:\SyncBookingTheme\syncbooking_source\sourcethemeHTML` as the visual and structural source of truth.
- Do not copy the raw Claude HTML files into the WordPress theme package.
- Keep the raw HTML package only in `syncbooking_source\sourcethemeHTML`; generate/update the WordPress theme files in `syncbooking_upload`.

## Full Theme Refresh Rule

When a new Theme 01 or Theme 02 HTML package is loaded, refresh the WordPress subtheme from top to bottom:

- Compare every HTML page against the matching PHP template.
- Compare shared assets, CSS, JavaScript, menu behavior, galleries, forms, buttons, links, typography, colors, spacing, and image references.
- Compare header, footer, drawer/mobile menu, floating buttons, lightbox, and other shared layout code.
- If the HTML package generates header/footer from JavaScript, such as `assets/site.js`, that file is also a source template and must be mirrored in the PHP header/footer.
- If the HTML package does not include header/footer code, document that explicitly before changing the WordPress header/footer.

## WordPress Conversion Rules

- Keep WordPress.org theme requirements valid: no PHP short echo tags, matching text domain `syncbooking-hospitality`, valid `style.css` headers, escaped output, translatable admin text where appropriate, and consistent line endings.
- Keep the theme package below the WordPress.org upload size limit.
- Do not bundle demo uploads or `subthemes/*/assets` directories in the theme zip; assets are downloaded online from the configured `assets.zip` through the progressive admin importer.
- Preserve the admin editor system, Visual Edit pencil controls, Media Library image/gallery replacement, multilingual content, menu settings, and required SyncBooking plugin notice.
- Header and footer remain centrally managed from the theme backend, but their frontend markup must still match the latest clean HTML source.

## Release Rule

Every shipped update must:

- Increase the theme version by one patch number.
- Update `style.css`, `functions.php`, and `readme.txt`.
- Rebuild the zip as `C:\SyncBookingTheme\syncbooking-hospitality-{version}.zip`.
- Keep build output under `C:\SyncBookingTheme\syncbooking_source\build`, not in a root-level `C:\SyncBookingTheme\build` folder.
- At the end of the release, delete old build folders, old zip files, and previous-version package artifacts. Keep only the latest installable zip and the latest build output.
- Run static checks for PHP short tags, line endings, bundled `subthemes/*/assets` directories, and unwanted `uploads` content.
- Commit and push the updated theme to GitHub.

Versioning note: every release must update SBT_VERSION, style.css Version, readme.txt changelog, and the dashboard badge shown by sbt_display_version() (for example SyncBooking Theme V2.01).

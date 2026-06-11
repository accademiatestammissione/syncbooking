=== SyncBooking Hospitality ===
Contributors: accademiatestammissione
Requires at least: 6.0
Tested up to: 6.9
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hospitality theme with selectable subthemes, editable pages, media galleries and multilingual page generation.

== Description ==

SyncBooking Hospitality provides a WordPress theme package for hospitality websites. It includes selectable subthemes, editable header and menu fields, page-level content editing, media-library galleries, and language-aware page creation.

== External Services ==

This theme can display embedded video and maps when the site owner configures the related fields.

* Vimeo player: used by the Villa Rosa Resort homepage video background. The configured Vimeo video id is used in an iframe from https://player.vimeo.com/. Vimeo privacy policy: https://vimeo.com/privacy
* YouTube player: used by the Masseria Le Cerase homepage video background when a YouTube id is configured. The configured YouTube video id is used in an iframe from https://www.youtube.com/. Google privacy policy: https://policies.google.com/privacy
* Google Maps embed: used on contact pages when a map embed URL is configured. Google privacy policy: https://policies.google.com/privacy
* Demo media import: when an administrator clicks "Download assets.zip online" in General Settings, the active subtheme assets.zip is downloaded from https://syncbooking.com/clone-theme/theme-01/assets.zip or https://syncbooking.com/clone-theme/theme-02/assets.zip into the local WordPress uploads directory. Assets are not bundled in the theme/plugin and there is no local fallback. The download, extraction and image registration are processed in small AJAX batches to avoid nginx/PHP timeout errors. No visitor data is sent by the theme for this import.

== Changelog ==

= 2.1.3 =
* Changed the online assets importer to run progressively in small AJAX steps.
* Downloads assets.zip with HTTP byte ranges, extracts a limited number of zip entries per request, and registers media-library images in small batches.
* Removed automatic assets download on theme activation to avoid blocking activation or causing nginx/PHP timeouts.

= 2.1.2 =
* Removed local demo asset fallback and bundled subtheme assets. The theme imports media only from the online assets.zip configured for the active subtheme.
* Updated General Settings copy to state clearly that assets are downloaded online and are not included in the theme/plugin package.

= 2.1.1 =
* Added disable and restore actions for generated internal pages in the Pages tab.

= 2.1.0 =
* Added Theme 01 and Theme 02 support for online assets.zip packages.
* Changed translated page generation to nested URLs such as /it/villa/.
* Restored the original Accommodation dropdown labels and added Book Now.
* Added EN/IT seed posts for Experiences, Surroundings and Offers single articles.

= 2.0.1 =
* Displayed the dashboard release as SyncBooking Theme V2.01 and aligned the package version with GitHub.
* Rebuilt Theme 01 and Theme 02 page templates from the latest HTML source version 2.1.
* Updated the sellable structure settings to English-only Entire vs Rooms/Houses behavior.
* Hid Rooms/Houses count and page-name controls when Entire mode is selected.
* Removed internal inquiry storage; forms now send WordPress email only and recommend SMTP/logging plugins for diagnostics.
* Added optimized bundled demo images for the regenerated templates while keeping the package lightweight.
= 1.0.33 =
* Added the default frontend language option with EN as the initial base language.
* Generated the Italian homepage at /it/ while preserving translated page slugs from that release.
* Connected the header language switcher to real translated page URLs.
* Replaced demo contact and wedding quote forms with WordPress AJAX submissions and email delivery without storing inquiries in WordPress.
* Rebuilt the Theme 02 Weddings page from the latest clean HTML package, including gallery, sidebar quote card, mobile bar and modal.

= 1.0.32 =
* Refreshed Theme 01 and Theme 02 source HTML references and frontend styling from the latest packages.
* Added the General Settings rental mode for separate Houses/Rooms versus Entire Villa/Masseria/House.
* Regenerated Theme 02 page templates for Masseria, Rooms, Whole Masseria, Price, SPA, Experiences, Weddings and Offers.

= 1.0.31 =
* Removed manual primary and secondary header language fields from Header & Menu.
* Rendered header language toggles automatically from the enabled site languages.

= 1.0.30 =
* Improved the frontend Visual Edit gallery modal so admins can replace an entire gallery from the WordPress Media Library.
* Preselected existing imported demo images when opening the gallery editor whenever matching attachments are available.

= 1.0.29 =
* Loaded Theme 01 CSS after WordPress and SyncBooking plugin styles so interior-page headers match the homepage header.
* Printed Theme 01 design variables after the main stylesheet to preserve admin color and font settings.

= 1.0.28 =
* Realigned Theme 01 header and footer rendering on interior pages with the clean HTML source model.
* Removed extra dropdown dividers from the Houses menu and synchronized the mobile drawer with the active menu data.
* Added theme-version cache busting for Theme 01 CSS and JavaScript assets.

= 1.0.27 =
* Migrated legacy Theme 01 card links from the generic Article page to their generated seed posts.
* Added runtime normalization for old Surroundings, Experiences and Offers card-link overrides.

= 1.0.26 =
* Added initial WordPress seed posts for the four Theme 01 Experiences articles.
* Connected Experience cards to the generated post permalinks.

= 1.0.25 =
* Added a SyncBooking booking-page resolver for theme booking links.
* Connected Theme 01 request availability and booking CTA buttons to the generated SyncBooking booking page.
* Preserved the special SyncBooking booking target in admin and visual link editors.

= 1.0.24 =
* Added initial WordPress seed posts for the four Theme 01 Offers articles.
* Connected Offers cards to the generated post permalinks.
* Assigned seed articles to their matching Surroundings or Offers category.

= 1.0.23 =
* Added initial WordPress seed posts for the four Theme 01 Surroundings articles.
* Connected Surroundings cards to the generated post permalinks.
* Added article hero image fallback from theme-managed post meta.

= 1.0.22 =
* Added editable generated unit names in General Settings.
* Changed the generated unit logic so the selected count creates that exact number of pages, such as House 1, House 2 and House 3.
* Updated menu, cards, page titles and slugs to use the configured unit names.

= 1.0.21 =
* Rebuilt Theme 01 from the latest clean HTML package "SyncBooking Theme 01 (5).zip" using source version 1.0.0 from 2026-06-07.
* Removed the obsolete generic House template and aligned generated unit pages to House for 2, House for 3 and House for 4.
* Moved Home editing into Pages and removed the separate Home admin tab.
* Cleaned the local source workflow to use syncbooking_source/sourcethemeHTML as the only raw HTML source folder.

= 1.0.20 =
* Rebuilt Theme 01 PHP templates, CSS and JavaScript from the clean HTML source package version 1.0.2 from 2026-06-07.
* Added the new Theme 01 home gallery mosaic and the single House template from the source package.
* Reworked Theme 01 header, drawer, footer, page templates and single/article layout to match the latest HTML source.

= 1.0.19 =
* Synced Theme 01 with clean HTML source package version 1.0.0 from 2026-06-07.
* Added source version/build-date meta tags to every generated Theme 01 page.
* Updated Theme 01 home house cards and band imagery to match the latest HTML source.
* Documented the clean HTML source-of-truth workflow for future Theme 01 imports.

= 1.0.18 =
* Added page/post target selectors for editable button and menu links.
* Kept direct https URL entry as an alternative for external links.

= 1.0.17 =
* Changed frontend Visual Edit galleries to use one gallery-level Media Library modal.
* Removed per-image Visual Edit wrappers from gallery images so the original gallery layout remains intact.

= 1.0.16 =
* Re-aligned Theme 01 internal-page header rendering with the clean HTML source fonts and colors.
* Removed old WordPress menu CSS from Theme 01 header and added admin-bar offset handling.

= 1.0.15 =
* Normalized editable button/link fields to absolute https/http URLs instead of internal PHP template filenames.
* Added a WordPress single post template.

= 1.0.14 =
* Re-aligned Theme 01 homepage structure and image data with the latest clean HTML source package.
* Restored the main Villa Rosa home image as an explicit fallback hero/welcome asset.
* Forced Theme 01 header navigation to use the original clean HTML markup instead of WordPress list menu markup.

= 1.0.13 =
* Added a single frontend Visual Edit gallery button that opens the Media Library modal for complete gallery replacement.
* Removed the full-gallery action from the single-image modal so gallery layouts stay unchanged while editing.

= 1.0.12 =
* Added permanent source-of-truth build instructions for refreshing subthemes from new clean HTML packages.
* Documented that JavaScript-generated header and footer sources must be mirrored in the WordPress PHP templates.
* Synced Theme 01 header actions and mobile drawer with the latest clean HTML source.

= 1.0.11 =
* Added Media Library support to the frontend Visual Edit controls.
* Added single-image replacement and full-gallery replacement from Visual Edit.
* Improved AJAX sanitization for image and gallery values.

= 1.0.10 =
* Added a standard fallback sidebar widget area.
* Documented optional external embeds and demo media import endpoints.

= 1.0.9 =
* Replaced large local wellness PNG assets with compressed JPG assets.
* Added additional recommended theme supports and editor styling hooks.
* Added fallback blog markup for thumbnails, tags and post pagination.

= 1.0.8 =
* Removed bundled demo upload media from the theme package.
* Added an on-demand demo media downloader in General Settings.
* Added remote media fallback URLs until demo media is imported locally.

= 1.0.7 =
* Re-aligned Theme 01 defaults with the latest clean HTML source.
* Added optimized local PNG wellness assets used by the Theme 01 HTML source.
* Restored the Theme 01 homepage Vimeo background video id and iframe parameters.

= 1.0.6 =
* Replaced PHP short echo tags with full PHP echo tags for WordPress.org scanning.
* Updated the text domain to match the public theme slug.
* Added required WordPress theme supports and standard page markup hooks.

= 1.0.5 =
* Updated the public theme name for WordPress.org validation.
* Added the required theme tags to style.css.

= 1.0.4 =
* Updated Theme 01 visual assets and homepage house cards from the latest clean HTML source.
* Added the Theme 01 Article template with editable fields.
* Kept clean HTML sources outside the WordPress theme package.

= 1.0.3 =
* Regenerated Theme 01 page templates from the clean HTML source.
* Aligned internal page sections, carousel blocks, CTA bands, contact map and booking CTA markup.

= 1.0.2 =
* Rebuilt Theme 01 homepage sections from the clean HTML source.
* Added editable media carousels and the new house CTA band.
* Improved Theme 01 visual styling while preserving WordPress edit controls.

= 1.0.1 =
* Updated theme package version for WordPress.org upload.
* Added WordPress.org required theme assets.
* Removed unused duplicate demo media from the package.

= 1.0.0 =
* Initial WordPress theme package.

== Resources ==

Bundled theme code: SyncBooking Theme, Copyright Accademia Test Ammissione, GPLv2 or later.

No demo images, media, CSS or JavaScript assets are bundled in subthemes/theme01/assets or subthemes/theme02/assets. Theme assets are downloaded online from the configured assets.zip source for the active subtheme.

No third-party font files are bundled. Font selections use local/system font stacks.

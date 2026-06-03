<?php
/* ============================================================
   MASSERIA LE CERASE — data_general.php
   CENTRAL CONTENT / CONFIG — edit the whole site from here.
   ------------------------------------------------------------
   Every text, link and image lives here. The page templates
   only read from these variables, so the whole site is
   editable in one place. Loaded by inc/header.php on every page.
   ============================================================ */

/* Base URL of the media library — change once to repoint all images. */
$BASE = function_exists('sbt_media_base_url') ? rtrim(sbt_media_base_url(), '/') : 'assets/uploads';

/* ---- SITE: identity, contacts, social, legal ---- */
$SITE = [
  'name'      => 'Masseria Le Cerase',
  'tagline'   => 'An Apulian Masseria',
  'address'   => 'Via Martuccello n. 8<br>70014 Conversano (Bari)<br>Puglia, Italy',
  'phone1'    => '+39 338 250 7545',
  'phone1_t'  => '+393382507545',
  'email'     => 'masserialecerase@gmail.com',
  'wa'        => 'https://wa.me/393382507545',
  'facebook'  => 'https://www.facebook.com/masserialecerase/',
  'instagram' => 'https://www.instagram.com/masseria_lecerase_montefieno/',
  'lang_primary' => 'EN',
  'lang_secondary' => 'IT',
  'whatsapp_label' => 'WhatsApp',
  'shop'      => 'https://shop.masserialecerase.com/',
  'map'       => 'https://maps.google.com/?q=Masseria+Le+Cerase+Conversano',
  'map_embed' => '',
  'youtube'   => '',
  'year'      => '2026',
  'vat'       => 'IT08825490728',
  'cin'       => 'IT072019B400085362',
  'webdev'    => ['label' => 'web dev logovia', 'url' => 'https://www.logovia.it/'],
];

/* ---- IMAGES (by friendly key) ---- */
$IMG = [
  'favicon'   => "$BASE/2025/05/cropped-favicon-masseria-le-cerase-conversano-270x270.png",
  'logo'      => "$BASE/2025/05/new-logo-black-masseria-le-cerase-conversano.png",
  'logo_foot' => "$BASE/2025/05/new-logo01-black-masseria-le-cerase-conversano.png",

  'welcome'   => "$BASE/2025/06/11.jpg",
  'teaser_hospitality' => "$BASE/2025/06/18.jpg",
  'teaser_wedding'     => "$BASE/2025/06/wedding-2.jpg",
  'teaser_events'      => "$BASE/2025/06/30.jpg",
  'band'      => "$BASE/2025/06/30.jpg",

  'hosp_hero'     => "$BASE/2025/06/30.jpg",
  'events_hero'   => "$BASE/2025/07/IMG_5086.jpg",
  'wedding_hero'  => "$BASE/2025/06/wedding-2.jpg",
  'partys_hero'   => "$BASE/2025/06/51378832_2245360615704005_4065300950707863552_n-min-qvudz0ogcww0qheuhmf0vyfruhcta447laf72278v0.jpg",
  'surr_hero'     => "$BASE/2025/06/18.jpg",
  'contacts_hero' => "$BASE/2025/06/26-1024x682.jpg",

  // experience tile images
  'exp_massage' => "$BASE/2025/06/14-1024x682.jpg",
  'exp_boat'    => "$BASE/2025/06/25-1024x682.jpg",
  'exp_cooking' => "$BASE/2025/06/12-1024x682.jpg",
  'exp_dinner'  => "$BASE/2025/06/13-1024x682.jpg",
];

/* Hospitality photo gallery (lightbox). */
$GALLERY = [
  "$BASE/2025/06/28-1024x682.jpg",
  "$BASE/2025/06/27-1-1024x682.jpg",
  "$BASE/2025/06/26-1024x682.jpg",
  "$BASE/2025/06/25-1024x682.jpg",
  "$BASE/2025/06/24-1024x682.jpg",
  "$BASE/2025/06/23-1024x682.jpg",
  "$BASE/2025/06/22-1024x682.jpg",
  "$BASE/2025/06/21-1024x682.jpg",
  "$BASE/2025/06/14-1024x682.jpg",
  "$BASE/2025/06/13-1024x682.jpg",
  "$BASE/2025/06/12-1024x682.jpg",
  "$BASE/2025/06/1-1024x682.jpg",
];

/* Wedding photo gallery (lightbox). */
$WEDDING_GALLERY = [
  "$BASE/2025/07/IMG_5086.jpg",
  "$BASE/2025/06/wedding-2.jpg",
  "$BASE/2025/07/IMG_5232-1024x683.jpg",
  "$BASE/2025/07/IMG_5212-1024x676.jpg",
  "$BASE/2025/07/IMG_5165-1024x683.jpg",
  "$BASE/2025/07/IMG_5148-1024x682.jpg",
];

/* ---- NAVIGATION ---- */
$NAV = [
  ['key'=>'home',         'label'=>'Home',              'url'=>'index.php'],
  ['key'=>'hospitality',  'label'=>'Hospitality',       'url'=>'hospitality.php'],
  ['key'=>'events',       'label'=>'Events &amp; Weddings', 'url'=>'events-weddings.php', 'sub'=>[
      ['label'=>'Wedding in Masseria', 'desc'=>'Your dream wedding in the masseria', 'url'=>'wedding-in-masseria.php'],
      ['label'=>'Partys &amp; Meeting','desc'=>'Celebrations, feasts &amp; meetings',  'url'=>'partys-meeting.php'],
  ]],
  ['key'=>'surroundings', 'label'=>'Surroundings',      'url'=>'surroundings.php'],
  ['key'=>'contacts',     'label'=>'Contacts',          'url'=>'contacts.php'],
];

/* ---- ICONS (reusable inline SVG paths) ---- */
$ICON = [
  'pool'      => '<path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/>',
  'tree'      => '<path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/>',
  'wifi'      => '<path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/>',
  'kitchen'   => '<path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/>',
  'bbq'       => '<path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/>',
  'car'       => '<path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/>',
  'party'     => '<path d="M12 3v18M5 8l7-5 7 5M5 8v9a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8"/>',
  'meeting'   => '<path d="M3 7h18v12H3zM3 7l9 6 9-6"/>',
];

/* ---- SERVICES (Hospitality) ---- icon key, title, text ---- */
$SERVICES = [
  ['pool',    'Pool',             'Enjoy our pool surrounded by green countryside, perfect for relaxing and sunbathing.'],
  ['tree',    'Countryside',      'Immerse yourself in the surrounding countryside of olive groves, cherry orchards and vineyards.'],
  ['wifi',    'Wi-Fi',            'To be, if you want, always reachable across the whole property.'],
  ['kitchen', 'Equipped Kitchen', 'The Masseria has an equipped kitchen, to prepare meals in complete autonomy.'],
  ['bbq',     'BBQ',              'Enjoy our BBQ area — experience outdoor grilling in style.'],
  ['car',     'Car Rental',       'A car rental service, to independently enjoy every corner of Puglia.'],
];

/* ---- APULIAN EXPERIENCE tiles ---- over, title, img key ---- */
$EXPERIENCES = [
  ['Wellness', 'Massage in nature',          'exp_massage'],
  ['Sea',      'Boat Tour',                  'exp_boat'],
  ['Taste',    'Cooking Class',              'exp_cooking'],
  ['Table',    'Typical dinner in Masseria', 'exp_dinner'],
];

/* ---- HOME teaser cards ---- over, title, img key, url ---- */
$TEASERS = [
  ['Stay',      'Hospitality',          'teaser_hospitality', 'hospitality.php'],
  ['Celebrate', 'Wedding in Masseria',  'teaser_wedding',     'wedding-in-masseria.php'],
  ['Gather',    'Events &amp; Weddings','teaser_events',      'events-weddings.php'],
];

/* ---- SURROUNDINGS destination cards ---- over, title, img ---- */
$DESTINATIONS = [
  ['A few minutes', 'Conversano',                "$BASE/2025/06/18.jpg"],
  ['~25 min',       'Polignano a Mare',          "$BASE/2025/06/25-1024x682.jpg"],
  ['~35 min',       'Alberobello &amp; Itria Valley', "$BASE/2025/06/24-1024x682.jpg"],
  ['~40 min',       'Bari',                      "$BASE/2025/06/23-1024x682.jpg"],
];

/* ---- PARTYS & MEETING formats ---- icon, title, text ---- */
$PARTY_FORMATS = [
  ['party',   'Private Parties',  'Birthdays, anniversaries and special celebrations in an exclusive setting.'],
  ['meeting', 'Meetings',         'Corporate days and retreats surrounded by the quiet of the countryside.'],
  ['bbq',     'Feasts &amp; Dinners', 'Long tables of authentic Apulian cuisine, indoors or under the pergola.'],
];

/* ============================================================
   PER-PAGE CONTENT
   ============================================================ */
$C = [];

/* ---------- HOME ---------- */
$C['home'] = [
  'title'        => 'Masseria Le Cerase – An Apulian Masseria',
  'hero_over'    => 'An Apulian Masseria · Conversano',
  'hero_h1'      => 'Your place in the<br>heart of Puglia',
  'hero_sub'     => 'A 17th-century masseria in white stone, immersed in olive groves, cherry orchards and organic vineyards.',
  'welcome_over' => 'Welcome',
  'welcome_h2'   => 'A 17th-century masseria,<br>in white Apulian stone',
  'welcome_p1'   => 'Crossing the country roads of Puglia, surrounded by spectacular centuries-old olive trees, you reach the Masseria Le Cerase, in white stone that has stood proudly since the 17th century, immersed in olive groves, cherry orchards and organic vineyards.',
  'welcome_p2'   => 'Expertly restored with traditional materials and techniques, the Masseria carries within itself all the tradition of the most typical Apulian masserie: the blinding white, the sheltered courtyards, the arches, the vaults, the stone.',
  'teasers_over' => 'Masseria Le Cerase',
  'teasers_h2'   => 'A surprising, unforgettable place',
  'teasers_p'    => 'A perfect setting between tradition, rusticity and modernity — an ideal destination for groups of friends, families and the most heartfelt celebrations.',
  'band_over'    => 'The Apulian masseria',
  'band_h2'      => 'The blinding white,<br>the arches, the stone',
  'band_p'       => 'Sheltered courtyards, cool vaulted rooms and sun-warmed stone — the timeless forms and spaces of the most typical masserie of Puglia.',
  'exp_over'     => 'Apulian Experience',
  'exp_h2'       => 'Live Puglia, your way',
  'exp_p'        => 'We craft tailor-made experiences for our guests — from the flavours of the Apulian table to the wonders of land and sea.',
  'cta_over'     => 'Up to 10 guests · the whole masseria',
  'cta_h2'       => 'Plan your stay',
  'cta_p'        => 'Rent the entire living area of Masseria Le Cerase — five bedrooms, a private pool and the open countryside — for an unforgettable holiday in sunny Puglia.',
];

/* ---------- HOSPITALITY ---------- */
$C['hospitality'] = [
  'title'    => 'Hospitality – Masseria Le Cerase',
  'over'     => 'Masseria Le Cerase',
  'h1'       => 'Hospitality',
  'stay_over'=> 'Your stay in Masseria',
  'stay_h2'  => 'The whole masseria,<br>just for you',
  'stay_p1'  => 'Masseria Le Cerase is the perfect destination for an unforgettable holiday in sunny Puglia, a base for exploring one of the most famous, beautiful and tradition-rich regions of Italy.',
  'stay_p2'  => 'We rent the entire living area of the Masseria, consisting of five double bedrooms with four bathrooms, an equipped kitchen, a covered terrace with pergola and a swimming pool for exclusive use — ideal for groups of friends and families, and able to accommodate up to 10 people.',
  'cta_over' => 'Up to 10 guests',
  'cta_h2'   => 'Book your stay in the Masseria',
];

/* ---------- EVENTS & WEDDINGS ---------- */
$C['events'] = [
  'title'  => 'Events & Weddings – Masseria Le Cerase',
  'over'   => 'Masseria Le Cerase',
  'h1'     => 'Events &amp; Weddings',
  'intro_over' => 'Masseria Le Cerase for your events in Puglia',
  'intro_h2'   => 'An intimate, evocative place',
  'intro_p'    => 'An intimate and evocative place for unforgettable days, immersed in the fascinating nature of Puglia. We design tailor-made Events &amp; Weddings, modeling them on the desires of our guests. Our spaces, both inside and outside, are transformed every time in an evocative, characteristic, unique way.',
  'band_over'  => 'Tailor-made for you',
  'band_h2'    => 'The refined, authentic<br>charm of the country',
  'band_p'     => 'The country charm of Masseria Le Cerase will surprise your guests — for a celebration that feels effortless, intimate and unmistakably Apulian.',
];

/* ---------- WEDDING IN MASSERIA ---------- */
$C['wedding'] = [
  'title'  => 'Wedding in Masseria – Masseria Le Cerase',
  'over'   => 'Events &amp; Weddings',
  'h1'     => 'Wedding in Masseria',
  'intro_over' => 'The wedding of your dreams',
  'intro_h2'   => 'Say &ldquo;yes&rdquo;<br>among the olive trees',
  'intro_p1'   => 'The dream of a wedding in a masseria, just as you imagine it. Among centuries-old olive trees, white stone and sheltered courtyards, Masseria Le Cerase becomes the setting for one of the most important days of your life.',
  'intro_p2'   => 'We design every detail around you — the ceremony under the open Apulian sky, long tables of authentic local cuisine, and the warm, intimate atmosphere that only a true masseria can offer.',
  'cta_over' => 'Your day, your way',
  'cta_h2'   => 'Let&rsquo;s plan your wedding',
];

/* ---------- PARTYS & MEETING ---------- */
$C['partys'] = [
  'title'  => 'Partys & Meeting – Masseria Le Cerase',
  'over'   => 'Events &amp; Weddings',
  'h1'     => 'Partys &amp; Meeting',
  'intro_over' => 'Celebrations &amp; meetings',
  'intro_h2'   => 'Every occasion,<br>beautifully hosted',
  'intro_p1'   => 'From private parties and anniversaries to corporate retreats and meetings, the spaces of Masseria Le Cerase adapt to every occasion — indoors among the vaults and stone, or outdoors under the Apulian sky.',
  'intro_p2'   => 'A versatile, characterful setting, just minutes from Conversano, where authentic hospitality and tailor-made organisation make every gathering effortless and memorable.',
  'formats_over' => 'What we host',
  'formats_h2'   => 'Made to measure',
];

/* ---------- SURROUNDINGS ---------- */
$C['surroundings'] = [
  'title'  => 'Surroundings – Masseria Le Cerase',
  'over'   => 'Conversano &amp; beyond',
  'h1'     => 'Surroundings',
  'intro_over' => 'In the heart of Puglia',
  'intro_h2'   => 'A region to fall in love with',
  'intro_p'    => "Masseria Le Cerase lies in the countryside of Conversano, one of Puglia's most charming towns, crowned by its Norman-Swabian Castle. From here, the wonders of the region are all within easy reach — whitewashed villages, the trulli of the Itria Valley and the turquoise Adriatic coast.",
  'band_over'  => 'Let us guide you',
  'band_h2'    => 'Discover Puglia with us',
];

/* ---------- CONTACTS ---------- */
$C['contacts'] = [
  'title'  => 'Contacts – Masseria Le Cerase',
  'over'   => 'We are here for you',
  'h1'     => 'Contacts',
  'intro_over' => 'Get in touch',
  'intro_h2'   => 'Plan your stay or event',
  'intro_p'    => 'For availability, tailored quotes or any request, our team will be delighted to help. Reach us by phone, email or WhatsApp — or send a message using the form and we will reply as soon as possible.',
];

if (function_exists('sbt_bootstrap_content')) {
  $TEXT = [];
  $HOUSE_CARDS = [];
  sbt_bootstrap_content($IMG, $SITE, $NAV, $C, $HOUSE_CARDS, $SERVICES, $TEXT, $GALLERY, $WEDDING_GALLERY, $EXPERIENCES);
}


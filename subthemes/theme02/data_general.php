<?php
/* ============================================================
   MASSERIA LE CERASE — data_general.php
   CENTRAL CONTENT / CONFIG — edit the whole site from here.
   ------------------------------------------------------------
   Every text, link and image lives here. The page templates
   only read from these variables, so the whole site is
   editable in one place. Loaded by header/header.php on every page.
   ============================================================ */

/* Base URL of the media library — change once to repoint all images. */
$BASE = function_exists('sbt_media_base_url') ? rtrim(sbt_media_base_url(), '/') : 'assets/uploads';

/* ---- SITE: identity, contacts, social, legal ---- */
$SITE = [
  'name'      => 'Masseria Le Cerase',
  'tagline'   => 'A 17th-century Masseria in Puglia',
  'address'   => 'Via Martuccello n. 8<br>70014 Conversano (Bari)<br>Puglia, Italy',
  'address_line_1' => 'Via Martuccello n. 8',
  'address_line_2' => '70014 Conversano (Bari)',
  'address_line_3' => 'Puglia, Italy',
  'phone1'    => '+39 338 250 7545',
  'phone1_t'  => '+393382507545',
  'email'     => 'masserialecerase@gmail.com',
  'wa'        => 'https://wa.me/393382507545',
  'facebook'  => 'https://www.facebook.com/masserialecerase/',
  'instagram' => 'https://www.instagram.com/masseria_lecerase_montefieno/',
  'lang_primary' => 'EN',
  'lang_secondary' => 'IT',
  'rental_mode' => 'units',
  'entire_label' => 'Entire Masseria',
  'unit_label' => 'Room',
  'unit_count' => '3',
  'whatsapp_label' => 'WhatsApp',
  'font_pairing' => 'classic',
  'color_bg' => '#f4efe5',
  'color_surface' => '#faf6ee',
  'color_ink' => '#2b2723',
  'color_muted' => '#7d7468',
  'color_line' => '#e3dbcf',
  'color_primary' => '#a98c5b',
  'color_primary_deep' => '#8a7349',
  'color_primary_soft' => '#bca06f',
  'color_accent' => '#a98c5b',
  'color_gold' => '#a98c5b',
  'color_header' => '#a98c5b',
  'color_header_deep' => '#8a7349',
  'shop'      => 'https://shop.masserialecerase.com/',
  'map'       => 'https://maps.google.com/?q=Masseria+Le+Cerase+Conversano',
  'map_embed' => '',
  'youtube'   => '',
  'year'      => '2026',
  'vat'       => 'IT08825490728',
  'cin'       => 'IT072019B400085362',
  'webdev'    => ['label' => 'SyncBooking', 'url' => 'https://syncbooking.com'],
  'source_version' => '2.1',
  'source_build_date' => '2026-06-11',
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

$IMG['masseria_aerial'] = $IMG['welcome'];
$IMG['masseria_facade'] = $IMG['teaser_hospitality'];
$IMG['masseria_courtyard'] = $IMG['contacts_hero'];
$IMG['masseria_pool'] = $IMG['band'];
$IMG['room_main'] = $IMG['contacts_hero'];
$IMG['whole'] = $IMG['welcome'];

if ( function_exists( 'sbt_asset_url' ) ) {
  $IMG['favicon'] = sbt_asset_url( 'assets/images/logo.png' );
  $IMG['logo'] = sbt_asset_url( 'assets/images/logo.png' );
  $IMG['logo_foot'] = sbt_asset_url( 'assets/images/logo.png' );
  $IMG['welcome'] = sbt_asset_url( 'assets/images/masseria-dusk.jpg' );
  $IMG['teaser_hospitality'] = sbt_asset_url( 'assets/images/facade-vines.jpg' );
  $IMG['teaser_wedding'] = sbt_asset_url( 'assets/images/facade-flowers.jpg' );
  $IMG['teaser_events'] = sbt_asset_url( 'assets/images/masseria-night.jpg' );
  $IMG['band'] = sbt_asset_url( 'assets/images/aerial-garden.jpg' );
  $IMG['hosp_hero'] = sbt_asset_url( 'assets/images/great-hall.jpg' );
  $IMG['events_hero'] = sbt_asset_url( 'assets/images/courtyard.jpg' );
  $IMG['wedding_hero'] = sbt_asset_url( 'assets/images/facade-glow.jpg' );
  $IMG['partys_hero'] = sbt_asset_url( 'assets/images/pool-pergola.jpg' );
  $IMG['surr_hero'] = sbt_asset_url( 'assets/images/conversano-castle.jpg' );
  $IMG['contacts_hero'] = sbt_asset_url( 'assets/images/facade-flowers.jpg' );
  $IMG['exp_massage'] = sbt_asset_url( 'assets/images/relax-lounge.png' );
  $IMG['exp_boat'] = sbt_asset_url( 'assets/images/aerial-pool.jpg' );
  $IMG['exp_cooking'] = sbt_asset_url( 'assets/images/apulian-breakfast.jpg' );
  $IMG['exp_dinner'] = sbt_asset_url( 'assets/images/apulian-table.jpg' );
  $IMG['masseria_aerial'] = sbt_asset_url( 'assets/images/aerial-pool.jpg' );
  $IMG['masseria_facade'] = sbt_asset_url( 'assets/images/facade-vines.jpg' );
  $IMG['masseria_courtyard'] = sbt_asset_url( 'assets/images/courtyard.jpg' );
  $IMG['masseria_pool'] = sbt_asset_url( 'assets/images/pool-pergola.jpg' );
  $IMG['room_main'] = sbt_asset_url( 'assets/images/room-01.jpg' );
  $IMG['whole'] = sbt_asset_url( 'assets/images/masseria-bluehour.jpg' );
  $IMG['hero_video'] = sbt_asset_url( 'assets/video/masseria.mp4' );
}

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

if ( function_exists( 'sbt_asset_url' ) ) {
  $GALLERY = [
    sbt_asset_url( 'assets/images/masseria-001.jpg' ),
    sbt_asset_url( 'assets/images/masseria-002.jpg' ),
    sbt_asset_url( 'assets/images/masseria-003.jpg' ),
    sbt_asset_url( 'assets/images/masseria-004.jpg' ),
    sbt_asset_url( 'assets/images/masseria-005.jpg' ),
    sbt_asset_url( 'assets/images/masseria-006.jpg' ),
    sbt_asset_url( 'assets/images/room-01.jpg' ),
    sbt_asset_url( 'assets/images/room-02.jpg' ),
    sbt_asset_url( 'assets/images/room-03.jpg' ),
    sbt_asset_url( 'assets/images/room-04.jpg' ),
    sbt_asset_url( 'assets/images/pool-pergola.jpg' ),
    sbt_asset_url( 'assets/images/courtyard.jpg' ),
  ];
  $WEDDING_GALLERY = [
    sbt_asset_url( 'assets/images/facade-glow.jpg' ),
    sbt_asset_url( 'assets/images/facade-flowers.jpg' ),
    sbt_asset_url( 'assets/images/courtyard.jpg' ),
    sbt_asset_url( 'assets/images/pool-pergola.jpg' ),
    sbt_asset_url( 'assets/images/aerial-garden.jpg' ),
    sbt_asset_url( 'assets/images/masseria-night.jpg' ),
  ];
}

/* ---- NAVIGATION ---- */
$NAV = [
  ['key'=>'home',         'label'=>'Home',              'url'=>'index.php'],
  ['key'=>'villa',        'label'=>'Masseria',          'url'=>'villa.php'],
  ['key'=>'house',        'label'=>'Accomodation',      'url'=>'house.php', 'sub'=>[
      ['label'=>'Rooms', 'desc'=>'Rooms only', 'url'=>'house.php'],
      ['label'=>'The whole Masseria', 'desc'=>'Exclusive rental', 'url'=>'whole-masseria.php'],
      ['label'=>'Price &amp; Condition','desc'=>'Rates, check-in &amp; terms', 'url'=>'price-and-condition.php', 'divide'=>true],
      ['label'=>'Book Now', 'desc'=>'Online booking', 'url'=>'syncbooking:booking'],
  ]],
  ['key'=>'spa',          'label'=>'SPA &amp; Wellness', 'url'=>'spa-wellness.php'],
  ['key'=>'experiences',  'label'=>'Experiences',       'url'=>'experiences.php'],
  ['key'=>'weddings',     'label'=>'Weddings',          'url'=>'weddings.php'],
  ['key'=>'surroundings', 'label'=>'Surroundings',      'url'=>'surroundings.php'],
  ['key'=>'offers',       'label'=>'Offers',            'url'=>'offers.php'],
  ['key'=>'contacts',     'label'=>'Contacts',          'url'=>'contacts.php'],
];

/* ---- ICONS (reusable inline SVG paths) ---- */
$ICON = [
  'pool'      => '<path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/>',
  'tree'      => '<path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/>',
  'wifi'      => '<path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/>',
  'kitchen'   => '<path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/>',
  'hall'      => '<path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/>',
  'bbq'       => '<path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/>',
  'car'       => '<path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/>',
  'fitness'   => '<path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/>',
  'party'     => '<path d="M12 3v18M5 8l7-5 7 5M5 8v9a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8"/>',
  'meeting'   => '<path d="M3 7h18v12H3zM3 7l9 6 9-6"/>',
];

/* ---- SERVICES (Hospitality) ---- icon key, title, text ---- */
$SERVICES = [
  ['pool',    'Private Pool',    'A pool framed by a pergola and olive trees, reserved entirely for your party.'],
  ['tree',    'Olive Groves',    'Acres of organic olive trees, cherry orchards and vineyards to wander freely.'],
  ['hall',    'Vaulted Halls',   'Grand stone halls under historic vaults, for long dinners and gatherings.'],
  ['wifi',    'Wi-Fi',           'Connectivity across the whole estate, for whenever you need it.'],
  ['kitchen', 'Country Kitchen', 'A fully equipped kitchen under the vaults, for meals made with local produce.'],
  ['bbq',     'Outdoor Dining',  'Long tables in the courtyard and garden, for slow days under the sun.'],
  ['car',     'On request',      'Private chef, transfers and car rental arranged to make every part of Puglia yours.'],
  ['fitness', 'Fitness Room',    'A private gym within the masseria, to stay active even on holiday.'],
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
  ['Stay',      'The Masseria',         'teaser_hospitality', 'villa.php'],
  ['Celebrate', 'Weddings',             'teaser_wedding',     'weddings.php'],
  ['Gather',    'Whole Masseria',       'teaser_events',      'whole-masseria.php'],
];

/* ---- SURROUNDINGS destination cards ---- over, title, img ---- */
$DESTINATIONS = [
  ['A few minutes', 'Conversano',                "$BASE/2025/06/18.jpg"],
  ['~25 min',       'Polignano a Mare',          "$BASE/2025/06/25-1024x682.jpg"],
  ['~35 min',       'Alberobello &amp; Itria Valley', "$BASE/2025/06/24-1024x682.jpg"],
  ['~40 min',       'Bari',                      "$BASE/2025/06/23-1024x682.jpg"],
];

if ( function_exists( 'sbt_asset_url' ) ) {
  $DESTINATIONS = [
    ['A few minutes', 'Conversano', sbt_asset_url( 'assets/images/conversano-castle.jpg' )],
    ['~25 min', 'Polignano a Mare', sbt_asset_url( 'assets/images/aerial-pool.jpg' )],
    ['~35 min', 'Alberobello &amp; Itria Valley', sbt_asset_url( 'assets/images/aerial-garden.jpg' )],
    ['~40 min', 'Bari', sbt_asset_url( 'assets/images/facade-flowers.jpg' )],
  ];
}

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

$C['home'] = array_merge($C['home'], [
  'title' => 'Masseria Le Cerase - A 17th-century Masseria in Puglia',
  'hero_over' => 'Masseria Le Cerase - Conversano - Puglia',
  'hero_h1' => 'A 17th-century<br>masseria, only yours',
  'hero_sub' => 'A fortified country house among olive groves, cherry orchards and vineyards - yours to live, for up to ten guests.',
  'scroll_label' => 'Scroll',
  'welcome_h2' => 'Centuries of stone,<br>surrounded by countryside',
  'welcome_p1' => 'Masseria Le Cerase is a fortified seventeenth-century farmhouse in the countryside of Conversano, in the heart of Puglia. Built in local limestone, it stands among organic olive groves, cherry orchards and vineyards - the trees that give the masseria its name.',
  'welcome_p2' => 'Restored with respect for its history, the masseria welcomes a single party at a time: vaulted halls, wrought-iron beds, a pool framed by olive trees, and the deep silence of the open land.',
  'welcome_url' => 'villa.php',
  'welcome_stamp' => 'XVII<br>century',
  'welcome_gallery' => [$IMG['masseria_aerial'], $IMG['masseria_facade'], $IMG['masseria_courtyard'], $IMG['masseria_pool']],
  'gallery_over' => 'A look inside',
  'gallery_h2' => 'Spaces that tell a story',
  'gallery' => [$IMG['masseria_aerial'], $IMG['masseria_facade'], $IMG['masseria_courtyard'], $IMG['masseria_pool'], $IMG['room_main']],
  'houses_over' => 'The Rooms',
  'houses_h2' => 'Sleeping under the vaults',
  'houses_p' => 'Five double bedrooms, each carved beneath ancient stone vaults and furnished with wrought-iron beds, antique wardrobes and warm linen.',
  'whole_over' => 'Exclusive use',
  'whole_h2' => 'Or take the whole masseria',
  'whole_p' => 'One booking, the entire estate: all five bedrooms, the vaulted halls, the country kitchen, the pool and the gardens - reserved exclusively for your party.',
  'whole_url' => 'whole-masseria.php',
  'whole_btn' => 'Discover the whole masseria',
  'whole_gallery' => [$IMG['whole'], $IMG['masseria_pool'], $IMG['masseria_facade'], $IMG['masseria_courtyard']],
  'weddings_over' => 'Masseria Le Cerase',
  'weddings_h2' => 'Weddings & Events',
  'weddings_p' => 'An exclusive setting for the most important day. Exchange your vows in the olive garden, dine beneath the stone vaults of the Salone delle Volte, and celebrate along the lantern-lit avenue - the whole estate reserved for you and your guests.',
  'weddings_url' => 'weddings.php',
  'weddings_btn' => 'Discover Weddings',
  'experience_over' => 'Masseria Le Cerase',
  'experience_h2' => 'Apulian Experience',
  'experience_p' => 'We craft tailor-made experiences for each guest, shaped around your wishes - from cooking classes and olive-oil and wine tastings to private tours of the surrounding wonders of Puglia.',
  'experience_url' => 'experiences.php',
  'experience_btn' => 'Explore experiences',
  'services_over' => 'Comfort & Care',
  'services_h2' => 'The estate at your service',
  'cta_url' => 'syncbooking:booking',
  'cta_btn' => 'Request availability',
]);

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

$C['villa'] = [
  'title' => 'Masseria - Masseria Le Cerase',
  'over' => 'Masseria Le Cerase',
  'h1' => 'The Masseria',
  'banner' => $IMG['masseria_facade'],
  'intro_over' => 'The soul of the estate',
  'intro_h2' => 'Centuries of stone,<br>restored with care',
  'intro_p' => 'A fortified country house in the countryside of Conversano, surrounded by olive groves, cherry orchards and vineyards. The masseria is designed for slow days, long tables and complete privacy.',
  'gallery' => [$IMG['masseria_aerial'], $IMG['masseria_facade'], $IMG['masseria_courtyard'], $IMG['masseria_pool']],
  'cta_over' => 'Plan your stay',
  'cta_h2' => 'Discover the whole estate',
  'cta_url' => 'whole-masseria.php',
  'cta_btn' => 'Whole Masseria',
  'cta_bg' => $IMG['whole'],
];

$C['house'] = [
  'title' => 'Rooms - Masseria Le Cerase',
  'over' => 'The Rooms',
  'h1' => 'Rooms',
  'banner' => $IMG['room_main'],
  'intro_over' => 'Sleeping under the vaults',
  'intro_h2' => 'A quiet room<br>inside the masseria',
  'intro_p' => 'Double bedrooms beneath ancient stone vaults, furnished with warm linen, antique details and the calm of the countryside.',
  'overview_gallery' => [$IMG['room_main'], $IMG['masseria_courtyard'], $IMG['masseria_pool']],
  'specs' => [['Type', 'Double room'], ['Use', 'Inside the estate'], ['Style', 'Vaulted stone room']],
  'gallery_over' => 'A look inside',
  'gallery_h2' => 'Room details',
  'gallery' => [$IMG['room_main'], $IMG['masseria_courtyard'], $IMG['masseria_facade'], $IMG['masseria_pool']],
  'included_over' => 'What is included',
  'included_h2' => 'Comfort in every corner',
  'included' => [['wifi', 'Wi-Fi', 'Connectivity across the property.'], ['tree', 'Countryside', 'Access to the estate atmosphere and outdoor spaces.'], ['kitchen', 'Country kitchen', 'Shared estate kitchen use depending on your booking.']],
  'cta_over' => 'Ready when you are',
  'cta_h2' => 'Request availability',
  'cta_btn' => 'Request availability',
  'cta_url' => 'syncbooking:booking',
  'cta_bg' => $IMG['whole'],
];

$C['whole'] = array_merge($C['house'], [
  'title' => 'The Whole Masseria - Masseria Le Cerase',
  'over' => 'Exclusive use',
  'h1' => 'The Whole Masseria',
  'banner' => $IMG['whole'],
  'intro_over' => 'The whole estate, only yours',
  'intro_h2' => 'Rent the entire<br>Masseria Le Cerase',
  'intro_p' => 'One booking, the entire estate: bedrooms, vaulted halls, country kitchen, pool and gardens reserved exclusively for your party.',
  'overview_gallery' => [$IMG['whole'], $IMG['masseria_pool'], $IMG['masseria_facade'], $IMG['masseria_courtyard']],
  'specs' => [['Guests', 'Up to 10'], ['Use', 'Entire estate'], ['Spaces', 'Pool, halls, gardens and kitchen']],
  'gallery_h2' => 'The estate in detail',
  'gallery' => [$IMG['whole'], $IMG['masseria_pool'], $IMG['masseria_facade'], $IMG['masseria_courtyard'], $IMG['room_main']],
  'cta_h2' => 'Request availability for the whole masseria',
]);

$C['price'] = [
  'title' => 'Price & Condition - Masseria Le Cerase',
  'over' => 'Rates & terms',
  'h1' => 'Price & Condition',
  'banner' => $IMG['whole'],
  'intro_over' => 'Clear conditions',
  'intro_h2' => 'Plan your stay<br>with clarity',
  'intro_p' => 'Rates and conditions may change by season, length of stay and booking type. Contact us for a tailored quote and updated availability.',
  'cta_over' => 'Ask for a quote',
  'cta_h2' => 'Request availability',
  'cta_url' => 'syncbooking:booking',
  'cta_btn' => 'Request availability',
  'cta_bg' => $IMG['masseria_pool'],
];

$C['spa'] = [
  'title' => 'SPA & Wellness - Masseria Le Cerase',
  'over' => 'Wellness',
  'h1' => 'SPA & Wellness',
  'banner' => $IMG['masseria_pool'],
  'intro_over' => 'Slow wellbeing',
  'intro_h2' => 'Quiet rituals<br>in the countryside',
  'intro_p' => 'Wellness moments can be arranged around your stay, from massages to private relaxation experiences.',
  'cta_over' => 'Your wellness stay',
  'cta_h2' => 'Tell us what you need',
  'cta_url' => 'contacts.php',
  'cta_btn' => 'Contact us',
  'cta_bg' => $IMG['whole'],
];

$C['experiences'] = [
  'title' => 'Experiences - Masseria Le Cerase',
  'over' => 'Apulian Experience',
  'h1' => 'Experiences',
  'banner' => $IMG['exp_cooking'],
  'intro_over' => 'Live Puglia, your way',
  'intro_h2' => 'Moments shaped<br>around you',
  'intro_p' => 'Cooking classes, wine tastings, private tours and seaside days can be arranged around your tastes and curiosities.',
  'cards' => [
    ['over' => 'Taste', 'h3' => 'Cooking Classes', 'img' => $IMG['exp_cooking'], 'url' => 'post:cooking-classes'],
    ['over' => 'Cellar', 'h3' => 'Wine Tastings', 'img' => $IMG['exp_dinner'], 'url' => 'post:wine-tastings'],
    ['over' => 'Discover', 'h3' => 'Private Tours', 'img' => $IMG['exp_boat'], 'url' => 'post:private-tours'],
    ['over' => 'Sea', 'h3' => 'Coast & Beaches', 'img' => $IMG['exp_boat'], 'url' => 'post:coast-beaches'],
  ],
  'cta_over' => 'Plan your experience',
  'cta_h2' => 'Ask us what is possible',
  'cta_url' => 'contacts.php',
  'cta_btn' => 'Contact us',
  'cta_bg' => $IMG['masseria_pool'],
];

$C['weddings'] = [
  'title' => 'Weddings - Masseria Le Cerase',
  'over' => 'Weddings',
  'h1' => 'Weddings',
  'banner' => $IMG['wedding_hero'],
  'gallery' => [
    $IMG['wedding_hero'],
    $IMG['events_hero'],
    $IMG['masseria_pool'],
    $IMG['contacts_hero'],
    $IMG['teaser_hospitality'],
    $IMG['whole'],
  ],
  'gallery_count' => '71',
  'tour_label' => 'Tour 360',
  'since' => 'Matrimoni dal 2011',
  'intro_over' => 'A wedding in masseria',
  'intro_h2' => 'Emozioni in Masseria',
  'intro_p' => 'Masseria Le Cerase e una location immersa nel cuore della Puglia, un luogo dove la tradizione rurale si fonde con l eleganza contemporanea. Tra uliveti secolari e la quiete della campagna, la Masseria offre scenari suggestivi e una calda ospitalita.',
  'intro_p2' => 'Gli spazi della Masseria permettono ricevimenti intimi o eventi piu ampi, sempre con un equilibrio tra architettura storica, natura e dettagli contemporanei.',
  'intro_p3' => 'Il nostro team segue ogni coppia con attenzione, dalla prima richiesta fino al giorno dell evento, per costruire un matrimonio coerente con il vostro stile.',
  'list_title' => 'La sala ricevimenti propone',
  'service_items' => [
    'Consulenza e supporto nell organizzazione dell evento',
    'Celebrazione di riti simbolici e civili',
    'Intrattenimento musicale e DJ set',
    'Allestimenti e scenografie personalizzate',
    'Servizio di animazione per bambini',
    'Servizio transfer e noleggio auto d epoca',
    'Sistemazione e suite per gli sposi',
    'Parcheggio custodito',
    'Convenzioni per alloggi nelle vicinanze',
  ],
  'kitchen_title' => 'La cucina',
  'kitchen_p' => 'La cucina di Masseria Le Cerase celebra le eccellenze del territorio pugliese, con menu flessibili e personalizzabili in base al mood dell evento.',
  'info_title' => 'Altre informazioni',
  'amenities_title' => 'Di quali ambienti disponi?',
  'amenities' => [ 'Sala ricevimenti', 'Cappella', 'Piscina', 'Aia', 'Terrazza', 'Giardini', 'Tensostrutture', 'Sala da ballo', 'Parcheggio', 'Spazi cerimonia civile' ],
  'offered_title' => 'Quali servizi offri?',
  'offered' => [ 'Ricevimento', 'Fotografia', 'Musica', 'Allestimenti', 'Cerimonia in loco', 'DJ set & intrattenimento' ],
  'lodging_title' => 'Disponi di alloggio per gli invitati?',
  'lodging_p' => 'Si, la struttura dispone di alloggi raffinati per vivere il soggiorno in totale serenita, con una suite dedicata agli sposi e camere per le famiglie.',
  'exclusive_title' => 'Ospiti piu di un evento al giorno?',
  'exclusive_p' => 'No, tutta la Masseria puo essere riservata esclusivamente a voi e ai vostri invitati.',
  'reviews_title' => 'Recensioni',
  'reviews_p' => 'Alcune delle coppie che hanno celebrato il loro giorno piu importante a Masseria Le Cerase.',
  'reviews' => [
    [ 'Giusy & Nicola', '108 foto - 2025', $IMG['wedding_hero'] ],
    [ 'Donato & Ada', '100 foto - 2025', $IMG['events_hero'] ],
    [ 'Flavio & Vania', '100 foto - 2024', $IMG['contacts_hero'] ],
    [ 'Gioia & Paolo', '100 foto - 2024', $IMG['masseria_pool'] ],
  ],
  'promos_title' => 'Promozioni',
  'promos' => [
    [ 'Regalo', 'Non e mai troppo presto, non e mai troppo tardi!', 'Scade il 11/01/2026', 'Scarica coupon', 'https://syncbooking.com' ],
    [ 'Regalo', 'Sposarsi a Natale', 'Scade il 11/01/2026', 'Scarica coupon', 'https://syncbooking.com' ],
  ],
  'map_title' => 'Mappa',
  'map_p' => 'Via Martuccello n. 8, 70014 Conversano (Bari) - Puglia.',
  'faq_title' => 'Domande frequenti',
  'faqs' => [
    [ 'In che contesto si trova Masseria Le Cerase?', 'E situata tra uliveti secolari, ciliegeti e vigneti biologici: un paesaggio rurale che conserva intatta l atmosfera tradizionale pugliese.' ],
    [ 'Che tipo di cucina propone per i banchetti di nozze?', 'La proposta valorizza la cucina naturale, tradizionale e mediterranea, con menu personalizzabili in base al mood dell evento.' ],
    [ 'Come funziona l open bar per i ricevimenti?', 'L open bar puo essere costruito su misura con formule diverse in base al tipo di evento e alle preferenze degli sposi.' ],
    [ 'A quante persone puo dare servizio per un ricevimento?', 'Indicativamente da 60 a 150 persone, con soluzioni adattabili in base all allestimento scelto.' ],
  ],
  'quote_score' => '5,0',
  'quote_rating' => 'Eccellente',
  'quote_reviews' => '184 recensioni',
  'quote_location' => 'Conversano, Bari',
  'quote_promos' => '2 promozioni attive',
  'quote_wedding_price' => 'da 110 - 150 - 190 EUR',
  'quote_event_price' => 'da 80 - 100 - 120 EUR',
  'quote_button' => 'Preventivo gratuito',
  'quote_response' => 'Risponde in 24 ore',
  'quote_badges' => [ 'Tra i piu popolari a Bari', 'Scelto da piu di 1250 coppie', 'Tra i piu consigliati a Bari' ],
  'quote_modal_over' => 'Masseria Le Cerase',
  'quote_modal_title' => 'Preventivo gratuito',
  'quote_modal_sub' => 'Compila il modulo: vi risponderemo entro 24 ore con una proposta su misura.',
  'quote_modal_notes' => 'Richiesta di informazioni per matrimonio',
  'quote_modal_ok_title' => 'Richiesta inviata!',
  'quote_modal_ok_p' => 'Grazie, vi ricontatteremo entro 24 ore all indirizzo indicato.',
  'mobile_bar_title' => 'Sogni un matrimonio in Masseria?',
  'mobile_bar_button' => 'Scrivici',
  'cta_over' => 'Risposta in 24 ore',
  'cta_h2' => 'Raccontaci il vostro<br>giorno piu importante',
  'cta_p' => 'Compila il modulo e il nostro team vi contattera a breve con una proposta su misura. Tutti i dati saranno trattati in modo confidenziale.',
  'cta_url' => 'contacts.php',
  'cta_btn' => 'Chiedi informazioni',
  'cta_bg' => $IMG['masseria_pool'],
];

$C['offers'] = [
  'title' => 'Offers - Masseria Le Cerase',
  'over' => 'Offers',
  'h1' => 'Offers',
  'banner' => $IMG['masseria_pool'],
  'intro_over' => 'Seasonal proposals',
  'intro_h2' => 'Special stays<br>in the countryside',
  'intro_p' => 'Offers can be adapted to the selected period, booking type and length of stay. Contact us for updated availability and a tailored proposal.',
  'cta_over' => 'Ask for details',
  'cta_h2' => 'Contact us for more information',
  'cta_url' => 'contacts.php',
  'cta_btn' => 'Contact us',
  'cta_bg' => $IMG['whole'],
];

$TEXT = [
  'home' => 'Home',
  'houses' => 'Rooms',
  'discover' => 'Discover',
  'show_all_photos' => 'Show all photos',
  'request_availability' => 'Request availability',
  'price_condition' => 'Price & Condition',
  'contacts' => 'Contacts',
  'stay_in_touch' => 'Stay in touch',
  'privacy_policy' => 'Privacy Policy',
  'all_rights_reserved' => 'All rights reserved',
];

if (function_exists('sbt_bootstrap_content')) {
  $HOUSE_CARDS = [];
  sbt_bootstrap_content($IMG, $SITE, $NAV, $C, $HOUSE_CARDS, $SERVICES, $TEXT, $GALLERY, $WEDDING_GALLERY, $EXPERIENCES);
}

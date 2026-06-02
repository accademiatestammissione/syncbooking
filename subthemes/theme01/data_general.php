<?php
/* ============================================================
   VILLA ROSA RESORT — data_general.php
   CENTRAL CONTENT / CONFIG — edit the whole site from here.
   ------------------------------------------------------------
   Edit EVERYTHING here: texts (h1/h2/h3/p), links, images,
   contacts, navigation and card data. The templates only read
   from these variables, so the whole site is editable in one
   place. Loaded by inc/header.php on every page.
   ============================================================ */

/* ---- base url for the bundled media library ---- */
$BASE = function_exists('sbt_media_base_url') ? sbt_media_base_url() : 'assets/uploads/';

/* ---- IMAGES (friendly keys) ---- */
$IMG = [
  'favicon'   => $BASE.'2025/02/cropped-favicon-villarosaresort-conversano-270x270.png',
  'logo'      => $BASE.'2025/02/logo02-white-villarosaresort-conversano.png',
  'logo_foot' => $BASE.'2025/02/logo03-white-villarosaresort-conversano.png',
  'lgbtq'     => $BASE.'2025/07/lgbtq.png',
  'welcome'   => $BASE.'2025/03/8dc77600-2d08-4399-8d34-9019c864a9ae.jpg',
  'lunch'     => $BASE.'2025/03/Typical-lunch-or-dinner-in-Villa-Rosa-02.jpg',
  'spa'       => $BASE.'2025/03/Immagine-WhatsApp-2024-05-03-ore-19.16.09_9adc16c9.jpg',
  'villa'     => $BASE.'2025/03/p-YLCX1349.jpg',
  'a1'        => $BASE.'2025/03/a1-1240-900.jpg',
  'a5'        => $BASE.'2025/03/a5-1240-900.jpg',
  'room'      => $BASE.'2025/03/350a927d-d95e-401a-9c30-845b04364bc4.jpg',
  'room2'     => $BASE.'2025/03/VMLX0557.jpg',
  'garden'    => $BASE.'2025/03/7a97973d-9ff7-4e3e-bb14-7b6909ac32a7.jpg',
];

/* ---- SITE-WIDE INFO ---- */
$SITE = [
  'name'     => 'Villa Rosa Resort',
  'tagline'  => 'An Apulia Villa',
  'vimeo'    => '687646681',
  'wa'       => 'https://wa.me/393206090558',
  'phone1'   => '+39 338 250 7545',
  'phone1_t' => '+393382507545',
  'phone2'   => '+39 320 609 0558',
  'phone2_t' => '+393206090558',
  'email'    => 'villarosasuites@gmail.com',
  'address'  => 'Viale P. Orlando, 1<br>70014 Conversano (Bari)<br>Puglia, Italy',
  'map'      => 'https://maps.app.goo.gl/PjihQ243sU2ZcT4m9',
  'map_embed'=> 'https://www.google.com/maps?q=Villa%20Rosa%20Resort%20Conversano&output=embed',
  'facebook' => 'https://www.facebook.com/villarosaresort/',
  'instagram'=> 'https://www.instagram.com/villarosaresortpuglia/',
  'lang_primary' => 'EN',
  'lang_secondary' => 'IT',
  'whatsapp_label' => 'WhatsApp',
  'vat'      => 'IT08825490728',
  'cin'      => 'IT072019B400085362',
  'year'     => '2026',
  'webdev'   => ['label' => 'web dev logovia', 'url' => 'https://www.logovia.it/'],
];

/* ---- NAVIGATION (drives header + drawer) ---- */
$NAV = [
  ['url' => 'index.php',          'label' => 'Home',           'key' => 'home'],
  ['url' => 'villa.php',          'label' => 'Villa',          'key' => 'villa'],
  ['url' => 'houses.php',         'label' => 'Houses',         'key' => 'houses', 'sub' => [
      ['url' => 'house-for-2.php',        'label' => 'Houses for 2',      'desc' => '30–40 m² · King-size'],
      ['url' => 'house-for-3.php',        'label' => 'Houses for 3',      'desc' => '40–50 m² · King + sofa bed'],
      ['url' => 'house-for-4.php',        'label' => 'Houses for 4',      'desc' => '50–60 m² · King + double sofa'],
      ['url' => 'price-and-condition.php','label' => 'Price & Condition', 'desc' => 'Rates, check-in & terms', 'divide' => true],
  ]],
  ['url' => 'spa-wellness.php',   'label' => 'SPA & Wellness', 'key' => 'spa'],
  ['url' => 'experiences.php',    'label' => 'Experiences',    'key' => 'experiences'],
  ['url' => 'surroundings.php',   'label' => 'Surroundings',   'key' => 'surroundings'],
  ['url' => 'offers.php',         'label' => 'Offers',         'key' => 'offers'],
  ['url' => 'contacts.php',       'label' => 'Contacts',       'key' => 'contacts'],
];

/* ---- REUSABLE SERVICE / AMENITY ICONS (svg path d) ---- */
$ICON = [
  'pool'    => '<path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/>',
  'park'    => '<path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/>',
  'spa'     => '<path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/>',
  'wifi'    => '<path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/>',
  'kitchen' => '<path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/>',
  'bbq'     => '<path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/>',
  'car'     => '<path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/>',
  'gym'     => '<path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/>',
  'bed'     => '<path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/>',
];

/* ============================================================
   PER-PAGE CONTENT
   ============================================================ */
$C = [];

/* ---------- HOME ---------- */
$C['home'] = [
  'title'      => 'Villa Rosa Resort – An Apulia Villa',
  'hero_over'  => 'Villa Rosa Resort & SPA · Conversano',
  'hero_h1'    => 'Your home in the<br>heart of Puglia',
  'hero_sub'   => 'An oasis of well-being nestled in a centuries-old park, steps from the Norman-Swabian Castle.',
  'welcome_over' => 'Welcome',
  'welcome_h2' => 'An eclectic 1930s villa,<br>reborn as a retreat',
  'welcome_p1' => 'Villa Rosa is your oasis of well-being. Nestled in a large park with centuries-old trees, just steps from the ancient Norman-Swabian Castle that characterizes the village of Conversano — one of Puglia\'s most charming villages — lies a complex of elegant residences, including a historic villa in an eclectic style from the 1930s.',
  'welcome_p2' => 'Every detail is designed for comfort: the privacy of our houses — each with a dining area, fully equipped kitchen, and outdoor pergola — the splendid pool, the gym, and the elegant spa.',
  'houses_over'=> 'The Houses',
  'houses_h2'  => 'Your private retreat',
  'houses_p'   => 'The new luxury in holidays is more freedom: an entire house with an external pergola at your disposal. Refined design, a mix of modern and ancient, and every comfort make the homes of Villa Rosa very exclusive.',
  'services_over' => 'Comfort & Care',
  'services_h2'=> 'Services',
  'band_over'  => 'The Apulian way of living',
  'band_h2'    => 'Slow days, long tables,<br>and the scent of the sea',
  'band_p'     => 'From the whitewashed lanes of Conversano to the trulli of the Itria Valley and the turquoise coast — everything you love about Puglia begins at your doorstep.',
  'offers_over'=> 'Villa Rosa offers',
  'offers_h2'  => 'Summer Promotions',
  'offers_p'   => 'Discover our seasonal offers and reserve your stay in the heart of Puglia at the very best conditions.',
];

/* house cards (shared by home + houses listing) */
$HOUSE_CARDS = [
  ['tag'=>'For 2 people','title'=>'Houses for 2','img'=>$IMG['welcome'],'url'=>'house-for-2.php',
   'specs'=>[['Surface','30–40 m²'],['Occupancy','2 adults + cot'],['Bed','King-size']]],
  ['tag'=>'For 3 people','title'=>'Houses for 3','img'=>$IMG['lunch'],'url'=>'house-for-3.php',
   'specs'=>[['Surface','40–50 m²'],['Occupancy','3 adults + cot'],['Beds','King + sofa bed']]],
  ['tag'=>'For 4 people','title'=>'Houses for 4','img'=>$IMG['spa'],'url'=>'house-for-4.php',
   'specs'=>[['Surface','50–60 m²'],['Occupancy','4 adults + cot'],['Beds','King + double sofa']]],
];

/* service cards (home) */
$SERVICES = [
  ['pool','Pool','Enjoy our pool in the green garden, perfect for relaxing and sunbathing.'],
  ['park','Park','An oasis of tranquility, ideal for walks and moments of relaxation outdoors.'],
  ['spa','SPA','Turkish bath, hot tub, sauna and massage room for a unique wellness experience.'],
  ['wifi','Wi-Fi','To be, if you want, always reachable across the whole property.'],
  ['kitchen','Equipped Kitchen','Each house has a full kitchen, to prepare your meals in complete independence.'],
  ['bbq','BBQ','Our BBQ area in the park — the experience of grilling outdoors in style.'],
  ['car','Car Rental','A car rental service, to enjoy every part of Puglia independently.'],
  ['gym','Gym','To keep perfectly fit, even on holiday.'],
];

/* ---------- VILLA ---------- */
$C['villa'] = [
  'title'   => 'Villa – Villa Rosa Resort',
  'over'    => 'Villa Rosa Resort & SPA',
  'h1'      => 'The Villa',
  'banner'  => $IMG['villa'],
  'intro_over' => 'The luxury of feeling at home',
  'intro_h2'   => 'On holiday,<br>just like at home',
  'intro_p'    => [
    'Privacy, confidentiality, serenity and five-star comfort. The new luxury when it comes to holidays is giving yourself more freedom: the possibility of having an entire house at your disposal, to enjoy a fully relaxing stay.',
    'In the centre of the most beautiful Puglia, in the ancient heart of Conversano, in the park of a historic villa, having a house available is the ideal solution for those looking for a secluded, independent and even more exclusive stay.',
    'Attention to detail, refined design, a mix of modern and ancient, a stone\'s throw from monuments and shops — the houses of Villa Rosa, with private external pergolas, also offer the typical comforts of a resort.',
  ],
  'gallery' => [$IMG['a1'],$IMG['room'],$IMG['room2'],$IMG['a5'],$IMG['garden'],$IMG['villa']],
  'am_over' => 'Wellness, comfort & independence',
  'am_h2'   => 'Every detail, designed for you',
  'am_p'    => 'A wide range of services for your comfort and relaxation — all designed to guarantee maximum comfort and a truly unique experience.',
  'amenities' => [
    ['spa','SPA & Wellness','Relax in our SPA with Turkish bath, sauna and massage room for a unique wellness experience.'],
    ['pool','Outdoor Pool','Enjoy our swimming pool in the garden, perfect for relaxing and sunbathing.'],
    ['park','Park & Garden','An oasis of tranquility, ideal for walks and moments of relaxation in the open air.'],
    ['gym','Gym','A fully equipped gym to keep you fit even on holiday.'],
    ['wifi','Free Wi-Fi','Free connection in all apartments and common areas.'],
    ['kitchen','Equipped Kitchen','Each apartment has a complete kitchen to prepare your meals in complete independence.'],
  ],
  'cta_over'=> 'Your private retreat awaits',
  'cta_h2'  => 'Choose your house in Villa Rosa',
  'cta_btn' => 'Explore the houses',
  'cta_url' => 'houses.php',
  'cta_bg'  => $IMG['a5'],
];

/* ---------- HOUSES (listing) ---------- */
$C['houses'] = [
  'title'  => 'Houses – Villa Rosa Resort',
  'over'   => 'Villa Rosa Resort',
  'h1'     => 'Houses',
  'banner' => $IMG['a1'],
  'intro_over' => 'Your private retreat in Puglia',
  'intro_h2'   => 'An entire house, all to yourself',
  'intro_p'    => 'The new luxury when it comes to holidays is giving yourself more freedom: the possibility of having an entire house with an external pergola at your disposal, to enjoy a fully relaxing stay. The attention to detail, a refined design, the mix of modern and ancient, and many comforts make the homes of Villa Rosa Boutique Resort very exclusive.',
  'cta_over'=> 'Rates & reservations',
  'cta_h2' => 'Prices & conditions',
  'cta_p'  => 'Transparent rates, flexible terms and a warm welcome. Discover everything you need to plan your stay.',
  'cta_btn'=> 'View price & condition',
  'cta_url'=> 'price-and-condition.php',
  'cta_bg' => $IMG['villa'],
];

/* ---------- HOUSE DETAIL PAGES ---------- */
$C['house2'] = [
  'title'=>'Houses for 2 – Villa Rosa Resort','key'=>'For 2 people','h1'=>'Houses for 2',
  'banner'=>$IMG['a1'],'main'=>$IMG['room'],
  'over'=>'Intimate & refined','lead'=>'A romantic retreat for two',
  'p'=>'An elegant private house with its own external pergola — the perfect base for a couple\'s escape in the heart of Conversano. Refined design, the comfort of a five-star resort, and the freedom of a home of your own.',
  'specs'=>[['Average surface','30–40 m²'],['Maximum occupancy','2 adults + 1 baby cot'],['Bed','King-size'],['Outdoor','Private pergola']],
  'included'=>[
    ['kitchen','Equipped Kitchen','A complete kitchen with dining area for full independence.'],
    ['bed','King-size Bed','A spacious king-size bed dressed in fine linens.'],
    ['wifi','Free Wi-Fi','Fast, free connection throughout the house and grounds.'],
    ['spa','SPA Access','Access to the wellness centre, pool and park.'],
  ],
  'gallery'=>[$IMG['a1'],$IMG['room'],$IMG['room2'],$IMG['garden'],$IMG['a5']],
];
$C['house3'] = [
  'title'=>'Houses for 3 – Villa Rosa Resort','key'=>'For 3 people','h1'=>'Houses for 3',
  'banner'=>$IMG['room'],'main'=>$IMG['a5'],
  'over'=>'Space for family or friends','lead'=>'Room to share, comfort to spare',
  'p'=>'A generous private house with a king-size bed and an additional sofa bed, plus a private pergola for slow Apulian evenings. Ideal for a small family or three friends who want independence without giving up the comforts of a resort.',
  'specs'=>[['Average surface','40–50 m²'],['Maximum occupancy','3 adults + 1 baby cot'],['Beds','King-size + sofa bed'],['Outdoor','Private pergola']],
  'included'=>[
    ['kitchen','Equipped Kitchen','Full kitchen and dining area to cook and dine in privacy.'],
    ['bed','King + Sofa Bed','A king-size bed plus a comfortable sofa bed for the third guest.'],
    ['wifi','Free Wi-Fi','Fast, free connection throughout the house and grounds.'],
    ['spa','SPA Access','Access to the wellness centre, pool and park.'],
  ],
  'gallery'=>[$IMG['room2'],$IMG['garden'],$IMG['a5'],$IMG['a1'],$IMG['room']],
];
$C['house4'] = [
  'title'=>'Houses for 4 – Villa Rosa Resort','key'=>'For 4 people','h1'=>'Houses for 4',
  'banner'=>$IMG['room2'],'main'=>$IMG['garden'],
  'over'=>'The whole family, at home','lead'=>'An entire home for four',
  'p'=>'Our largest houses welcome up to four guests with a king-size bed and a double sofa bed, a fully equipped kitchen and a private external pergola. The ideal solution for a family holiday in total privacy and independence.',
  'specs'=>[['Average surface','50–60 m²'],['Maximum occupancy','4 adults + 1 baby cot'],['Beds','King-size + double sofa bed'],['Outdoor','Private pergola']],
  'included'=>[
    ['kitchen','Equipped Kitchen','A complete kitchen and dining area for the whole family.'],
    ['bed','King + Double Sofa','King-size bed plus a double sofa bed for added flexibility.'],
    ['wifi','Free Wi-Fi','Fast, free connection throughout the house and grounds.'],
    ['spa','SPA Access','Access to the wellness centre, pool and park.'],
  ],
  'gallery'=>[$IMG['room'],$IMG['a1'],$IMG['garden'],$IMG['room2'],$IMG['a5']],
];

/* ---------- PRICE & CONDITION ---------- */
$C['price'] = [
  'title'=>'Price & Condition – Villa Rosa Resort',
  'over'=>'Rates & reservations','h1'=>'Price & Condition','banner'=>$IMG['garden'],
  'intro_over'=>'Transparent & flexible',
  'intro_h2'=>'Plan your stay with confidence',
  'intro_p'=>'Our rates vary by season and length of stay. Below you find an indicative starting price per night for each house type — contact us for a tailored quote and the best available conditions.',
  'cards'=>[
    ['name'=>'Houses for 2','from'=>'From','price'=>'120','unit'=>'/ night','feats'=>['30–40 m² with private pergola','King-size bed','Equipped kitchen & dining area','SPA, pool & park access']],
    ['name'=>'Houses for 3','from'=>'From','price'=>'150','unit'=>'/ night','feats'=>['40–50 m² with private pergola','King-size bed + sofa bed','Equipped kitchen & dining area','SPA, pool & park access']],
    ['name'=>'Houses for 4','from'=>'From','price'=>'180','unit'=>'/ night','feats'=>['50–60 m² with private pergola','King-size bed + double sofa','Equipped kitchen & dining area','SPA, pool & park access']],
  ],
  'cond_over'=>'Good to know',
  'cond_h2'=>'Conditions',
  'conditions'=>[
    ['Check-in','From 3:00 PM. Late arrivals can be arranged on request.'],
    ['Check-out','By 10:30 AM on the day of departure.'],
    ['Minimum stay','2 nights; longer in high season and during special periods.'],
    ['Included','Final cleaning, bed linen and towels, Wi-Fi, SPA, pool and park access.'],
    ['City tax','Applied per person/night as required by the Municipality of Conversano.'],
    ['Pets','Welcome on request — please let us know in advance.'],
  ],
  'cta_h2'=>'Request your personalised quote',
  'cta_btn'=>'Contact us',
];

/* ---------- SPA & WELLNESS ---------- */
$C['spa'] = [
  'title'=>'SPA & Wellness – Villa Rosa Resort',
  'over'=>'Villa Rosa Resort & SPA','h1'=>'SPA & Wellness','banner'=>$IMG['spa'],
  'intro_over'=>'Awaken mind & body',
  'intro_h2'=>'A sanctuary of well-being',
  'intro_p'=>'Our wellness centre is a refuge dedicated to regeneration. Surrender to the warmth of the Turkish bath, the heat of the Finnish sauna and the embrace of the hydromassage — then let go completely in the relaxation area.',
  'feat_rows'=>[
    ['img'=>$IMG['spa'],'label'=>'Water & heat','h3'=>'Hydromassage, sauna & hammam','p'=>'A hydromassage pool, a Finnish sauna, a Turkish bath and an emotional hydroshower await you — a complete wellness journey designed to release tension and restore balance.'],
    ['img'=>$IMG['garden'],'label'=>'Body & soul','h3'=>'Massages & Yoga','p'=>'Treat yourself to a tailored massage in our treatment room, then find your centre with our Yoga programme amid the centuries-old trees of the park.'],
  ],
  'am_over'=>'Everything for your wellness',
  'am_h2'=>'Inside the SPA',
  'amenities'=>[
    ['spa','Turkish Bath','A warm, humid hammam to purify and relax the body.'],
    ['spa','Finnish Sauna','Dry heat to ease muscles and clear the mind.'],
    ['pool','Hydromassage','A hydromassage pool to dissolve every tension.'],
    ['wifi','Emotional Shower','An emotional hydroshower of light, scent and water.'],
    ['park','Relax Area','A quiet space to rest between treatments.'],
    ['gym','Gym','A fully equipped gym to keep fit on holiday.'],
  ],
  'cta_over'=>'Reserve your moment',
  'cta_h2'=>'Book your wellness experience',
  'cta_btn'=>'Contact us',
  'cta_bg'=>$IMG['spa'],
];

/* ---------- EXPERIENCES ---------- */
$C['experiences'] = [
  'title'=>'Experiences – Villa Rosa Resort',
  'over'=>'Villa Rosa Resort & SPA','h1'=>'Apulian Experiences','banner'=>$IMG['lunch'],
  'intro_over'=>'Tailor-made for you',
  'intro_h2'=>'Live Puglia, your way',
  'intro_p'=>'We craft bespoke experiences for each guest, customised according to your tastes and curiosity — from the table to the sea, from history to the vineyards. Tell us what you love, and we will arrange the rest.',
  'cards'=>[
    ['img'=>$IMG['lunch'],'over'=>'Taste','h3'=>'Cooking classes','p'=>'Learn the secrets of Apulian cuisine with hands-on classes — from orecchiette to focaccia.'],
    ['img'=>$IMG['garden'],'over'=>'Sip','h3'=>'Wine & oil tastings','p'=>'Discover the wines and extra-virgin olive oils of the region with guided tastings.'],
    ['img'=>$IMG['villa'],'over'=>'Explore','h3'=>'Private tours','p'=>'Conversano, Polignano a Mare, Alberobello and the Itria Valley with a private guide.'],
    ['img'=>$IMG['a5'],'over'=>'Sea','h3'=>'Coast & beaches','p'=>'The turquoise Adriatic coast is moments away — let us plan your perfect day by the sea.'],
  ],
  'cta_over'=>'Design your itinerary',
  'cta_h2'=>'Let us tailor your experience',
  'cta_btn'=>'Get in touch',
  'cta_bg'=>$IMG['lunch'],
];

/* ---------- SURROUNDINGS ---------- */
$C['surroundings'] = [
  'title'=>'Surroundings – Villa Rosa Resort',
  'over'=>'The Apulian way of living','h1'=>'Surroundings','banner'=>$IMG['garden'],
  'intro_over'=>'Where we are',
  'intro_h2'=>'Conversano & the heart of Puglia',
  'intro_p'=>'Villa Rosa sits in the historic centre of Conversano, beside the Norman-Swabian Castle. From here, the most beautiful corners of Puglia are all within easy reach — whitewashed towns, trulli, vineyards and a luminous coastline.',
  'cards'=>[
    ['img'=>$IMG['villa'],'over'=>'On foot','h3'=>'Conversano','p'=>'The castle, the cathedral and the old town are right outside your door.'],
    ['img'=>$IMG['a5'],'over'=>'15 min','h3'=>'Polignano a Mare','p'=>'Cliffs, sea caves and one of the most photographed beaches in Italy.'],
    ['img'=>$IMG['garden'],'over'=>'40 min','h3'=>'Alberobello','p'=>'The UNESCO town of trulli in the green Itria Valley.'],
    ['img'=>$IMG['lunch'],'over'=>'A short drive','h3'=>'Bari & Monopoli','p'=>'The lively regional capital and the charming port town of Monopoli.'],
  ],
  'cta_over'=>'Plan your discovery',
  'cta_h2'=>'Let us guide your Puglia',
  'cta_btn'=>'See experiences',
  'cta_url'=>'experiences.php',
  'cta_bg'=>$IMG['a5'],
];

/* ---------- CONTACTS ---------- */
$C['contacts'] = [
  'title'=>'Contacts – Villa Rosa Resort',
  'over'=>'We are here for you','h1'=>'Contacts','banner'=>$IMG['villa'],
  'intro_over'=>'Get in touch',
  'intro_h2'=>'Plan your stay with us',
  'intro_p'=>'For availability, tailored quotes or any request, write to us or call — we will be delighted to help you plan an unforgettable stay in Puglia.',
  'form_note'=>'This is a demo form for the theme preview.',
];

/* ---------- OFFERS ---------- */
$C['offers'] = [
  'title'=>'Offers – Villa Rosa Resort',
  'over'=>'Villa Rosa offers','h1'=>'Offers & Promotions','banner'=>$IMG['a5'],
  'intro_over'=>'Best available conditions',
  'intro_h2'=>'Seasonal offers for your stay',
  'intro_p'=>'Discover our current promotions and book directly with us for the best rates and a warm, personal welcome.',
  'cards'=>[
    ['img'=>$IMG['a1'],'badge'=>'Long stay','h3'=>'Stay longer, save more','p'=>'Book 7 nights or more and enjoy a special reduced rate on your entire stay.'],
    ['img'=>$IMG['spa'],'badge'=>'Wellness','h3'=>'Spa & relax package','p'=>'A stay with dedicated access to the SPA and a tailored massage for two.'],
    ['img'=>$IMG['lunch'],'badge'=>'Taste','h3'=>'Flavours of Puglia','p'=>'A stay enriched with a cooking class and a local wine & oil tasting.'],
    ['img'=>$IMG['villa'],'badge'=>'Early booking','h3'=>'Book early','p'=>'Reserve well in advance and lock in the best available rate of the season.'],
  ],
  'cta_over'=>'Ready to book?',
  'cta_h2'=>'Reserve your offer today',
  'cta_btn'=>'Contact us',
];

$TEXT = [
  'discover_villa' => 'Discover the Villa',
  'discover_spa' => 'Discover the SPA',
  'explore_experiences' => 'Explore experiences',
  'see_offers' => 'See the offers',
  'more' => 'More',
  'home' => 'Home',
  'houses' => 'Houses',
  'enquire' => 'Enquire',
  'request_quote' => 'Request a quote',
  'request_availability' => 'Request availability',
  'price_condition' => 'Price & condition',
  'contact_us' => 'Contact us',
  'contacts' => 'Contacts',
  'stay_in_touch' => 'Stay in touch',
  'privacy_policy' => 'Privacy Policy',
  'all_rights_reserved' => 'All rights reserved',
  'address' => 'Address',
  'phone' => 'Phone',
  'email' => 'Email',
  'chat_whatsapp' => 'Chat on WhatsApp',
  'form_name' => 'Name',
  'form_email' => 'Email',
  'form_dates' => 'Dates of stay',
  'form_dates_placeholder' => 'e.g. 12–15 July 2026',
  'form_message' => 'Message',
  'form_send' => 'Send request',
  'form_result' => 'Thank you — this is a demo form. Connect it to your booking system or mailer.',
  'the_houses' => 'The Houses',
  'look_inside' => 'A look inside',
  'room_detail' => 'The room, in detail',
  'show_all_photos' => 'Show all photos',
  'included_over' => "What's included",
  'included_h2' => 'Comfort in every corner',
  'ready_when' => 'Ready when you are',
  'book_prefix' => 'Book',
];

if (function_exists('sbt_bootstrap_content')) {
  sbt_bootstrap_content($IMG, $SITE, $NAV, $C, $HOUSE_CARDS, $SERVICES, $TEXT);
}

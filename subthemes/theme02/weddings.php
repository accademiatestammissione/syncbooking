<?php
$PAGE = 'weddings';
$CONTENT_KEY = 'weddings';
require __DIR__ . '/inc/header.php';
?>

<!-- ============ GALLERY ============ -->
<section style="padding-top:92px;background:var(--surface);" data-screen-label="Weddings gallery">
  <div class="sbtw-wrap" style="padding-top:18px;padding-bottom:18px;">
    <div class="sbtw-w-gallery">
      <div class="sbtw-g-item"><?php echo sbt_t1_img( 'C.weddings.gallery_1.0', sbt_t1_asset( 'assets/images/salone-volte.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-g-item"><?php echo sbt_t1_img( 'C.weddings.gallery_2.0', sbt_t1_asset( 'assets/images/great-hall.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-g-item"><?php echo sbt_t1_img( 'C.weddings.gallery_3.0', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-g-item"><?php echo sbt_t1_img( 'C.weddings.gallery_4.0', sbt_t1_asset( 'assets/images/masseria-night.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-g-item"><?php echo sbt_t1_img( 'C.weddings.gallery_5.0', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-w-tour"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.4 2.5 15.6 0 18M12 3c-2.5 2.4-2.5 15.6 0 18"/></svg><?php echo sbt_t1_text( 'C.weddings.text_1', 'Tour 360°', array( 'multiline' => false ) ); ?></div>
      <div class="sbtw-w-galbtns">
        <button class="sbtw-w-galbtn sbtw-w-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.weddings.text_2', 'View photos · 71', array( 'multiline' => false ) ); ?></button>
      </div>
    </div>
  </div>
</section>

<!-- ============ BODY ============ -->
<section class="sbtw-pad-s" data-screen-label="Weddings detail">
  <div class="sbtw-wrap">
    <div class="sbtw-w-layout">

      <!-- MAIN -->
      <div class="sbtw-w-main">

        <!-- INFORMAZIONI -->
        <div class="sbtw-w-sec" id="info" style="padding-top:0;">
          <span class="sbtw-w-since"><svg viewBox="0 0 24 24"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_3', 'Weddings since 2011', array( 'multiline' => false ) ); ?></span>
          <h2><?php echo sbt_t1_text( 'C.weddings.text_4', 'Emotions in the Masseria', array( 'multiline' => false ) ); ?></h2>
          <p><strong><?php echo sbt_t1_text( 'C.weddings.text_5', 'Masseria Le Cerase', array( 'multiline' => false ) ); ?></strong> <?php echo sbt_t1_text( 'C.weddings.text_6', 'is a venue set in the heart of Puglia, a place where rural tradition blends with contemporary elegance. Among centuries-old olive groves and the quiet of the countryside, the Masseria offers breathtaking scenery and the warm hospitality the region is known for. The Le Cerase team, with dedication and expertise, is ready to guide you in creating a wedding that will exceed your most romantic expectations.', array( 'multiline' => true ) ); ?></p>
          <p><?php echo sbt_t1_text( 'C.weddings.text_7', 'Masseria Le Cerase offers wide, evocative spaces, in perfect balance between historic architecture and modern design.', array( 'multiline' => true ) ); ?></p>
          <p><strong><?php echo sbt_t1_text( 'C.weddings.text_8', 'The Olive Garden', array( 'multiline' => false ) ); ?></strong> <?php echo sbt_t1_text( 'C.weddings.text_9', 'is the outdoor space that welcomes guests with the majesty of monumental trees. It is an authentic, rustic-chic setting, where soft lights playing through the branches create a magical, timeless atmosphere for open-air receptions.', array( 'multiline' => true ) ); ?></p>
          <p><strong><?php echo sbt_t1_text( 'C.weddings.text_10', 'The Hall of Vaults', array( 'multiline' => false ) ); ?></strong> <?php echo sbt_t1_text( 'C.weddings.text_11', 'is the indoor area, defined by imposing barrel vaults in bare stone, captivating with its refined furnishings, wide openings onto the surrounding landscape and design details that lend an understated luxury.', array( 'multiline' => true ) ); ?></p>
          <p><strong><?php echo sbt_t1_text( 'C.weddings.text_12', 'The Lantern Walk', array( 'multiline' => false ) ); ?></strong> <?php echo sbt_t1_text( 'C.weddings.text_13', 'lights the way to the heart of the Masseria with enchanting illumination, offering the ideal backdrop for welcome aperitifs and photographs that will last a lifetime.', array( 'multiline' => true ) ); ?></p>
          <p><strong><?php echo sbt_t1_text( 'C.weddings.text_14', 'The Ancient Threshing Floor', array( 'multiline' => false ) ); ?></strong> <?php echo sbt_t1_text( 'C.weddings.text_15', 'is the perfect refuge for exchanging vows in an intimate atmosphere, or for staging a traditional, evocative banquet surrounded by the charm of Apulian tradition.', array( 'multiline' => true ) ); ?></p>
          <p><?php echo sbt_t1_text( 'C.weddings.text_16', 'Masseria Le Cerase makes your dream come true with an', array( 'multiline' => false ) ); ?> <strong><?php echo sbt_t1_text( 'C.weddings.text_17', 'impeccable, personalised service', array( 'multiline' => false ) ); ?></strong><?php echo sbt_t1_text( 'C.weddings.text_18', ', thanks to an expert and attentive staff devoted to curating every detail and meeting every single need.', array( 'multiline' => true ) ); ?></p>

          <h3><?php echo sbt_t1_text( 'C.weddings.text_19', 'The reception venue offers', array( 'multiline' => false ) ); ?></h3>
          <ul class="sbtw-w-list">
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_20', 'Consulting and support in planning the event', array( 'multiline' => false ) ); ?></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_21', 'Symbolic and civil ceremonies', array( 'multiline' => false ) ); ?></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_22', 'Live music and DJ sets', array( 'multiline' => false ) ); ?></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_23', 'Bespoke styling and scenography', array( 'multiline' => false ) ); ?></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_24', 'Children\'s entertainment service', array( 'multiline' => false ) ); ?></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_25', 'Transfer service and vintage car hire', array( 'multiline' => false ) ); ?></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_26', 'Accommodation and suite for the newlyweds', array( 'multiline' => false ) ); ?></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_27', 'Supervised parking', array( 'multiline' => false ) ); ?></li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_28', 'Partner accommodation nearby', array( 'multiline' => false ) ); ?></li>
          </ul>

          <h3><?php echo sbt_t1_text( 'C.weddings.text_29', 'The kitchen', array( 'multiline' => false ) ); ?></h3>
          <p><?php echo sbt_t1_text( 'C.weddings.text_30', 'The kitchen of Masseria Le Cerase celebrates the excellence of the Apulian land, elevating the local gastronomic culture to a true art form thanks to the mastery of innovative chefs. Culinary experimentation and the pursuit of new flavours meet a rigorous selection of', array( 'multiline' => true ) ); ?> <strong><?php echo sbt_t1_text( 'C.weddings.text_31', 'zero-mile ingredients', array( 'multiline' => false ) ); ?></strong> <?php echo sbt_t1_text( 'C.weddings.text_32', 'and respect for seasonality, reflecting a philosophy of the highest quality and sustainability.', array( 'multiline' => true ) ); ?></p>
          <p><?php echo sbt_t1_text( 'C.weddings.text_33', 'Entrust them with your special moments, and they will shape them into an unforgettable memory.', array( 'multiline' => true ) ); ?></p>
        </div>

        <!-- AMBIENTI & SERVIZI -->
        <div class="sbtw-w-sec" id="ambienti">
          <h2><?php echo sbt_t1_text( 'C.weddings.text_34', 'More information', array( 'multiline' => false ) ); ?></h2>
          <div class="sbtw-w-qa">
            <h4><?php echo sbt_t1_text( 'C.weddings.text_35', 'Which spaces are available?', array( 'multiline' => false ) ); ?></h4>
            <div class="sbtw-w-amen">
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_36', 'Reception hall', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_37', 'Chapel', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_38', 'Pool', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_39', 'Threshing floor', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_40', 'Terrace', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_41', 'Gardens', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_42', 'Marquees', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_43', 'Catering kitchen', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_44', 'Ballroom', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_45', 'Parking', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_46', 'Civil ceremony spaces', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_47', 'Children\'s play area', array( 'multiline' => false ) ); ?></span>
            </div>
          </div>
          <div class="sbtw-w-qa">
            <h4><?php echo sbt_t1_text( 'C.weddings.text_48', 'Which services do you offer?', array( 'multiline' => false ) ); ?></h4>
            <div class="sbtw-w-amen">
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_49', 'Reception', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_50', 'Photography', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_51', 'Music', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_52', 'Styling &amp; décor', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_53', 'On-site ceremony', array( 'multiline' => false ) ); ?></span>
              <span><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_54', 'DJ set &amp; entertainment', array( 'multiline' => false ) ); ?></span>
            </div>
          </div>
          <div class="sbtw-w-qa">
            <h4><?php echo sbt_t1_text( 'C.weddings.text_55', 'Do you offer accommodation for guests?', array( 'multiline' => false ) ); ?></h4>
            <p><?php echo sbt_t1_text( 'C.weddings.text_56', 'Yes, Masseria Le Cerase offers a refined suite dedicated to the newlyweds, designed for intimacy, comfort and an exclusive atmosphere on the wedding day. The estate also features welcoming lodgings for families, ideal for a perfectly serene stay. A fine balance of Apulian elegance and contemporary hospitality.', array( 'multiline' => true ) ); ?></p>
          </div>
          <div class="sbtw-w-qa">
            <h4><?php echo sbt_t1_text( 'C.weddings.text_57', 'Do you host more than one event per day?', array( 'multiline' => false ) ); ?></h4>
            <p><?php echo sbt_t1_text( 'C.weddings.text_58', 'No, the whole Masseria is reserved exclusively for you and your guests.', array( 'multiline' => false ) ); ?></p>
          </div>
        </div>

        <!-- RECENSIONI -->
        <div class="sbtw-w-sec" id="recensioni">
          <h2><?php echo sbt_t1_text( 'C.weddings.text_59', 'Reviews', array( 'multiline' => false ) ); ?></h2>
          <p><?php echo sbt_t1_text( 'C.weddings.text_60', 'Some of the couples who celebrated their most important day at Masseria Le Cerase.', array( 'multiline' => true ) ); ?></p>
          <div class="sbtw-w-reviews">
            <div class="sbtw-w-rev" data-album="great-hall|salone-volte|lounge-dining|courtyard|masseria-night|aerial-pool"><?php echo sbt_t1_img( 'C.weddings.image_6', sbt_t1_asset( 'assets/images/great-hall.jpg' ), '', array() ); ?><div class="sbtw-rv-c"><b><?php echo sbt_t1_text( 'C.weddings.text_61', 'Giusy &amp; Nicola', array( 'multiline' => false ) ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.text_62', '108 photos · 2025', array( 'multiline' => false ) ); ?></span></div></div>
            <div class="sbtw-w-rev" data-album="salone-volte|lounge-vault|kitchen-dining|facade-flowers|masseria-dusk"><?php echo sbt_t1_img( 'C.weddings.image_7', sbt_t1_asset( 'assets/images/salone-volte.jpg' ), '', array() ); ?><div class="sbtw-rv-c"><b><?php echo sbt_t1_text( 'C.weddings.text_63', 'Donato &amp; Ada', array( 'multiline' => false ) ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.text_64', '100 photos · 2025', array( 'multiline' => false ) ); ?></span></div></div>
            <div class="sbtw-w-rev" data-album="courtyard|facade-vines|aerial-garden|great-hall|masseria-bluehour"><?php echo sbt_t1_img( 'C.weddings.image_8', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array() ); ?><div class="sbtw-rv-c"><b><?php echo sbt_t1_text( 'C.weddings.text_65', 'Flavio &amp; Vania', array( 'multiline' => false ) ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.text_66', '100 photos · 2024', array( 'multiline' => false ) ); ?></span></div></div>
            <div class="sbtw-w-rev" data-album="pool-pergola|aerial-pool|apulian-table|lounge-dining|facade-glow"><?php echo sbt_t1_img( 'C.weddings.image_9', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array() ); ?><div class="sbtw-rv-c"><b><?php echo sbt_t1_text( 'C.weddings.text_67', 'Gioia &amp; Paolo', array( 'multiline' => false ) ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.text_68', '100 photos · 2024', array( 'multiline' => false ) ); ?></span></div></div>
            <div class="sbtw-w-rev" data-album="masseria-night|facade-glow|salone-volte|courtyard|masseria-dusk"><?php echo sbt_t1_img( 'C.weddings.image_10', sbt_t1_asset( 'assets/images/masseria-night.jpg' ), '', array() ); ?><div class="sbtw-rv-c"><b><?php echo sbt_t1_text( 'C.weddings.text_69', 'Paolo &amp; Simona', array( 'multiline' => false ) ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.text_70', '100 photos · 2024', array( 'multiline' => false ) ); ?></span></div></div>
            <div class="sbtw-w-rev" data-album="facade-flowers|facade-vines|courtyard|aerial-garden|great-hall"><?php echo sbt_t1_img( 'C.weddings.image_11', sbt_t1_asset( 'assets/images/facade-flowers.jpg' ), '', array() ); ?><div class="sbtw-rv-c"><b><?php echo sbt_t1_text( 'C.weddings.text_71', 'Marco &amp; Paolo', array( 'multiline' => false ) ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.text_72', '50 photos · 2014', array( 'multiline' => false ) ); ?></span></div></div>
          </div>
        </div>

        <!-- BROCHURE -->
        <div class="sbtw-w-sec" id="brochure">
          <h2><?php echo sbt_t1_text( 'C.weddings.text_73', 'Brochure', array( 'multiline' => false ) ); ?></h2>
          <div class="sbtw-w-promos">
            <div class="sbtw-w-promo">
              <span class="sbtw-pr-tag"><svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:1.7;"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.weddings.text_74', 'PDF', array( 'multiline' => false ) ); ?></span>
              <h4><?php echo sbt_t1_text( 'C.weddings.text_75', 'Gallery Brochure', array( 'multiline' => false ) ); ?></h4>
              <div class="sbtw-pr-exp"><?php echo sbt_t1_text( 'C.weddings.text_76', 'A selection of our spaces and settings, in high resolution.', array( 'multiline' => false ) ); ?></div>
              <a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.weddings.link_1', 'assets/brochure/gallery-brochure.pdf' ) ) ); ?>" download><?php echo sbt_t1_text( 'C.weddings.text_77', 'Download PDF →', array( 'multiline' => false ) ); ?></a>
            </div>
            <div class="sbtw-w-promo">
              <span class="sbtw-pr-tag"><svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:1.7;"><path d="M14 3h7v7"/><path d="M10 14L21 3"/><path d="M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5"/></svg><?php echo sbt_t1_text( 'C.weddings.text_78', 'PDF', array( 'multiline' => false ) ); ?></span>
              <h4><?php echo sbt_t1_text( 'C.weddings.text_79', 'Weddings Brochure', array( 'multiline' => false ) ); ?></h4>
              <div class="sbtw-pr-exp"><?php echo sbt_t1_text( 'C.weddings.text_80', 'Packages, menus and services for your wedding in the Masseria.', array( 'multiline' => false ) ); ?></div>
              <a href="https://syncbooking.com" target="_blank" rel="noopener"><?php echo sbt_t1_text( 'C.weddings.text_81', 'Download PDF →', array( 'multiline' => false ) ); ?></a>
            </div>
          </div>
        </div>

        <!-- MAPPA -->
        <div class="sbtw-w-sec" id="mappa">
          <h2><?php echo sbt_t1_text( 'C.weddings.text_82', 'Map', array( 'multiline' => false ) ); ?></h2>
          <p><?php echo sbt_t1_text( 'C.weddings.text_83', 'Via Martuccello n. 8, 70014 Conversano (Bari) — Puglia.', array( 'multiline' => false ) ); ?></p>
          <div class="sbtw-w-map">
            <iframe src="https://www.google.com/maps?q=Masseria%20Le%20Cerase%20Conversano&output=embed" title="Masseria Le Cerase map" loading="lazy"></iframe>
          </div>
        </div>

        <!-- FAQ -->
        <div class="sbtw-w-sec" id="faq">
          <h2><?php echo sbt_t1_text( 'C.weddings.text_84', 'Frequently asked questions', array( 'multiline' => false ) ); ?></h2>
          <div class="sbtw-w-faq">
            <details open>
              <summary><?php echo sbt_t1_text( 'C.weddings.text_85', 'What is the setting of Masseria Le Cerase?', array( 'multiline' => false ) ); ?></summary>
              <p><?php echo sbt_t1_text( 'C.weddings.text_86', 'It sits among centuries-old olive groves, cherry orchards and organic vineyards: a rural landscape that preserves the traditional Apulian atmosphere intact. The building dates back to the seventeenth century, built in white stone and restored with materials and techniques typical of the Apulian masseria: dazzling white walls, arches, vaults and bare stone. The location is far from the urban bustle, surrounded by countryside: ideal for a wedding seeking authentic atmosphere and rural scenery.', array( 'multiline' => true ) ); ?></p>
            </details>
            <details>
              <summary><?php echo sbt_t1_text( 'C.weddings.text_87', 'What kind of cuisine is offered for wedding banquets?', array( 'multiline' => false ) ); ?></summary>
              <p><?php echo sbt_t1_text( 'C.weddings.text_88', 'The cuisine includes natural, traditional/regional and Mediterranean styles. Land and sea specialities reinterpreted through Apulian tradition: the wedding banquet becomes an unforgettable food-and-wine experience, with flexible menus tailored to the mood of the event.', array( 'multiline' => true ) ); ?></p>
            </details>
            <details>
              <summary><?php echo sbt_t1_text( 'C.weddings.text_89', 'How does the open bar work for receptions?', array( 'multiline' => false ) ); ?></summary>
              <p><?php echo sbt_t1_text( 'C.weddings.text_90', 'The open bar is offered with a fixed total quantity formula and no time limit. Alternatively, couples can compose their own personalised open bar.', array( 'multiline' => true ) ); ?></p>
            </details>
            <details>
              <summary><?php echo sbt_t1_text( 'C.weddings.text_91', 'How many guests can a reception accommodate?', array( 'multiline' => false ) ); ?></summary>
              <p><?php echo sbt_t1_text( 'C.weddings.text_92', 'From 60 to 150 guests.', array( 'multiline' => false ) ); ?></p>
            </details>
            <details>
              <summary><?php echo sbt_t1_text( 'C.weddings.text_93', 'Which spaces does Masseria Le Cerase offer?', array( 'multiline' => false ) ); ?></summary>
              <p><?php echo sbt_t1_text( 'C.weddings.text_94', 'Masseria Le Cerase features large indoor stone halls, Mediterranean gardens set among olive trees and vineyards, a panoramic terrace and a pool area perfect for aperitifs and evening parties. The estate also offers marquees, a ceremony area and dedicated banqueting spaces. Every setting is designed to create an elegant, authentic journey, typical of Apulian masserie.', array( 'multiline' => true ) ); ?></p>
            </details>
          </div>
        </div>
      </div>

      <!-- ASIDE / MENU LATERALE -->
      <aside class="sbtw-w-aside">
        <div class="sbtw-w-quote">
          <div class="sbtw-w-quote-top">
            <div class="sbtw-w-rating">
              <div class="sbtw-score"><?php echo sbt_t1_text( 'C.weddings.text_95', '5.0', array( 'multiline' => false ) ); ?></div>
              <div class="sbtw-rt-t">
                <b><?php echo sbt_t1_text( 'C.weddings.text_96', 'Excellent', array( 'multiline' => false ) ); ?></b>
                <span class="sbtw-st"><?php echo sbt_t1_text( 'C.weddings.text_97', '★★★★★', array( 'multiline' => false ) ); ?></span>
                <span> <?php echo sbt_t1_text( 'C.weddings.text_98', '· 184 reviews', array( 'multiline' => false ) ); ?></span>
              </div>
            </div>
            <div class="sbtw-w-qrow"><svg viewBox="0 0 24 24"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg> <?php echo sbt_t1_text( 'C.weddings.text_99', 'Conversano, Bari', array( 'multiline' => false ) ); ?></div>
            <div class="sbtw-w-qrow"><svg viewBox="0 0 24 24"><path d="M12 3v12M7 10l5 5 5-5"/><path d="M5 21h14"/></svg> <?php echo sbt_t1_text( 'C.weddings.text_100', 'Brochures available', array( 'multiline' => false ) ); ?></div>
          </div>
          <div class="sbtw-w-prices">
            <div class="sbtw-w-price"><span><?php echo sbt_t1_text( 'C.weddings.text_101', 'Wedding', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.weddings.text_102', 'from 110 · 150 · 190€', array( 'multiline' => false ) ); ?></b></div>
            <div class="sbtw-w-price"><span><?php echo sbt_t1_text( 'C.weddings.text_103', 'Event', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.weddings.text_104', 'from 80 · 100 · 120€', array( 'multiline' => false ) ); ?></b></div>
          </div>
          <div class="sbtw-w-cta">
            <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'syncbooking:booking' ) ); ?>" id="quoteBtn"><?php echo sbt_t1_text( 'C.weddings.text_105', 'Free quote', array( 'multiline' => false ) ); ?></a>
            <div class="sbtw-w-resp"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg> <?php echo sbt_t1_text( 'C.weddings.text_106', 'Replies within 24 hours', array( 'multiline' => false ) ); ?></div>
          </div>
        </div>
        <div class="sbtw-w-badges">
          <div class="sbtw-w-badge"><svg viewBox="0 0 24 24"><path d="M12 3l2.5 5 5.5.8-4 3.9.9 5.5L12 16.5 7.1 18.2l.9-5.5-4-3.9 5.5-.8Z"/></svg><?php echo sbt_t1_text( 'C.weddings.text_107', 'Among the most popular in Bari', array( 'multiline' => false ) ); ?></div>
          <div class="sbtw-w-badge"><svg viewBox="0 0 24 24"><path d="M12 21s-6-4.4-8.5-8.3C2 10 3 6 6.5 6c2 0 3 1.2 3.5 2 .5-.8 1.5-2 3.5-2 3.5 0 4.5 4 3 6.7C18 16.6 12 21 12 21Z"/></svg><?php echo sbt_t1_text( 'C.weddings.text_108', 'Chosen by more than 1,250 couples', array( 'multiline' => false ) ); ?></div>
          <div class="sbtw-w-badge"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><?php echo sbt_t1_text( 'C.weddings.text_109', 'Among the most recommended in Bari', array( 'multiline' => false ) ); ?></div>
        </div>
      </aside>

    </div>
  </div>
</section>

<!-- ============ CTA BAND ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Weddings CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.weddings.text_110', 'Replies within 24 hours', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.weddings.text_111', 'Tell us about your', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.weddings.text_112', 'most important day', array( 'multiline' => false ) ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.weddings.text_113', 'Fill in the form and our team will contact you shortly with a tailored proposal. All data will be treated confidentially.', array( 'multiline' => true ) ); ?></p>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.weddings.link_4', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.weddings.text_114', 'Request information', array( 'multiline' => false ) ); ?></a>
  </div>
</section>


<!-- ============ MOBILE CONTACT BAR ============ -->
<div class="sbtw-w-mbar" data-screen-label="Mobile contact bar">
  <div class="sbtw-w-mbar-txt"><b><?php echo sbt_t1_text( 'C.weddings.text_115', 'Dreaming of a wedding in the Masseria?', array( 'multiline' => false ) ); ?></b></div>
  <button class="sbtw-btn" type="button" id="quoteBtnM"><?php echo sbt_t1_text( 'C.weddings.text_116', 'Request a Quote', array( 'multiline' => false ) ); ?></button>
</div>

<!-- ============ QUOTE MODAL ============ -->
<div class="sbtw-w-modal" id="quoteModal" aria-hidden="true">
  <div class="sbtw-w-modal-back" data-close-modal></div>
  <div class="sbtw-w-modal-card" role="dialog" aria-modal="true" aria-labelledby="quoteTitle">
    <button class="sbtw-w-modal-x" type="button" data-close-modal aria-label="Close"><?php echo sbt_t1_text( 'C.weddings.text_117', '&times;', array( 'multiline' => false ) ); ?></button>
    <div class="sbtw-overline" style="color:var(--gold);"><?php echo sbt_t1_text( 'C.weddings.text_118', 'Masseria Le Cerase', array( 'multiline' => false ) ); ?></div>
    <h3 id="quoteTitle"><?php echo sbt_t1_text( 'C.weddings.text_119', 'Free quote', array( 'multiline' => false ) ); ?></h3>
    <p class="sbtw-w-modal-sub"><?php echo sbt_t1_text( 'C.weddings.text_120', 'Fill in the form: we will reply within 24 hours with a tailored proposal.', array( 'multiline' => false ) ); ?></p>
    <form class="sbtw-w-form" id="quoteForm" data-sbt-form="quote">
<input type="text" name="website" value="" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;opacity:0;" aria-hidden="true" />
      <label><?php echo sbt_t1_text( 'C.weddings.text_121', 'Full Name', array( 'multiline' => false ) ); ?>
        <input type="text" name="name" required autocomplete="name" placeholder="Mario Rossi" />
      </label>
      <label><?php echo sbt_t1_text( 'C.weddings.text_122', 'Email', array( 'multiline' => false ) ); ?>
        <input type="email" name="email" required autocomplete="email" placeholder="mario.rossi@email.com" />
      </label>
      <label><?php echo sbt_t1_text( 'C.weddings.text_123', 'Phone', array( 'multiline' => false ) ); ?>
        <input type="tel" name="phone" required autocomplete="tel" placeholder="+39 333 123 4567" />
      </label>
      <label><?php echo sbt_t1_text( 'C.weddings.text_124', 'Notes', array( 'multiline' => false ) ); ?>
        <textarea name="message" rows="4"><?php echo sbt_t1_text( 'C.weddings.text_125', 'Request for wedding information', array( 'multiline' => false ) ); ?></textarea>
      </label>
      <button class="sbtw-btn" type="submit" style="width:100%;justify-content:center;"><?php echo sbt_t1_text( 'C.weddings.text_126', 'Send request', array( 'multiline' => false ) ); ?></button>
      <div class="sbtw-w-resp" style="margin-top:12px;"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg> <?php echo sbt_t1_text( 'C.weddings.text_127', 'Replies within 24 hours', array( 'multiline' => false ) ); ?></div>
    <p class="sbtw-form-result form-result" style="display:none;"></p></form>
    <div class="sbtw-w-form-ok" id="quoteOk" hidden>
      <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M7.5 12.5l3 3 6-6"/></svg>
      <h4><?php echo sbt_t1_text( 'C.weddings.text_128', 'Request sent!', array( 'multiline' => false ) ); ?></h4>
      <p><?php echo sbt_t1_text( 'C.weddings.text_129', 'Thank you — we will get back to you within 24 hours at the address provided.', array( 'multiline' => false ) ); ?></p>
    </div>
  </div>
</div>


<?php require __DIR__ . '/inc/footer.php'; ?>

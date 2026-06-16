<?php
$PAGE = 'spa-wellness';
$PAGE_TITLE = 'SPA &amp; Wellness – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
$p = isset( $C['spa'] ) && is_array( $C['spa'] ) ? $C['spa'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="SPA banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/relax-lounge.png' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'SPA & Wellness' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.over', $p['over'] ?? 'Masseria Le Cerase &amp; SPA' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.spa.h1', $p['h1'] ?? 'SPA &amp; Wellness' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'SPA & Wellness' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="SPA intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.intro_over', $p['intro_over'] ?? 'Awaken body &amp; mind' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.spa.intro_h2', $p['intro_h2'] ?? 'A sanctuary<br/>of well-being' ); ?></h2>
    </div>
    <div class="sbtw-reveal">
      <p class="sbtw-body-text" style="max-width:54ch;"><?php echo sbt_t1_text( 'C.spa.intro_p1', $p['intro_p1'] ?? 'Dedicate time to yourself in our wellness centre, an intimate space designed for deep relaxation. Let the warmth of the Turkish bath, the heat of the Finnish sauna and the embrace of the hydromassage melt the day away.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;"><?php echo sbt_t1_text( 'C.spa.intro_p2', $p['intro_p2'] ?? 'From emotional showers to a quiet relax area, every element is crafted to restore balance and leave you renewed — the perfect complement to your Apulian escape.', array( 'multiline' => true ) ); ?></p>
    </div>
  </div>
</section>

<section class="sbtw-feature sbtw-pad" style="padding-top:0;" data-screen-label="SPA features">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/great-hall.jpg' ) ); ?>" alt="Hydromassage & Turkish bath" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Hydromassage pool" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Relax room" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.spa.feat1_label', $p['feat1_label'] ?? 'Water &amp; heat' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.spa.feat1_h3', $p['feat1_h3'] ?? 'Hydromassage &amp; Turkish bath' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.spa.feat1_p', $p['feat1_p'] ?? 'Surrender to the warm jets of the hydromassage pool and the enveloping steam of the Turkish bath — a timeless ritual of relaxation.', array( 'multiline' => true ) ); ?></p>
      </div>
    </div>
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.spa.feat2_label', $p['feat2_label'] ?? 'Body &amp; soul' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.spa.feat2_h3', $p['feat2_h3'] ?? 'Sauna, massages &amp; Yoga' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.spa.feat2_p', $p['feat2_p'] ?? 'Finnish sauna, emotional hydroshower, a serene relax area, expert massages and a dedicated Yoga program to reconnect with yourself.', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Sauna, massages & Yoga" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Wellness area" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="Garden spa" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="SPA amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.am_over', $p['am_over'] ?? 'The wellness experience' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.spa.am_h2', $p['am_h2'] ?? 'Everything for your relaxation' ); ?></h2>
    </div>
    <?php
    $am_svgs = array(
      '<svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg>',
    );
    $amenities = ( ! empty( $p['amenities'] ) && is_array( $p['amenities'] ) ) ? $p['amenities'] : array();
    ?>
    <div class="sbtw-amenity-grid">
      <?php foreach ( $amenities as $ai => $am ) : ?>
      <div class="sbtw-amenity sbtw-reveal"><?php echo $am_svgs[ $ai ] ?? ''; ?><h4><?php echo sbt_t1_text( 'C.spa.amenities.' . $ai . '.h4', $am['h4'] ?? '' ); ?></h4><p><?php echo sbt_t1_text( 'C.spa.amenities.' . $ai . '.p', $am['p'] ?? '', array( 'multiline' => true ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/sauna.png' ) ); ?>');" data-screen-label="SPA CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.cta_over', $p['cta_over'] ?? 'Reserve your moment' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.spa.cta_h2', $p['cta_h2'] ?? 'Book your wellness experience' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.spa.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

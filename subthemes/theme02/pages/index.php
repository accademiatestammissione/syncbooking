<?php
$PAGE = 'home';
$PAGE_TITLE = 'Masseria Le Cerase – A 17th-century Masseria in Puglia';
require __DIR__ . '/../header/header.php';
$h = isset( $C['home'] ) && is_array( $C['home'] ) ? $C['home'] : array();
$services = ( ! empty( $h['services'] ) && is_array( $h['services'] ) ) ? array_values( $h['services'] ) : array();
$svc_icons = array(
  '<path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/>',
  '<path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/>',
  '<path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/>',
  '<path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/>',
  '<path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/>',
  '<path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/>',
  '<path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/>',
  '<path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/>',
);
$room_cards = array(
  array( 'tag' => 'Double', 'h3' => 'Camera degli Ulivi', 'imgs' => array( 'bedroom-1.jpg', 'bedroom-2.jpg', 'bedroom-cozy.jpg' ) ),
  array( 'tag' => 'Double', 'h3' => 'Camera del Ciliegio', 'imgs' => array( 'bedroom-3.jpg', 'bedroom-iron.jpg', 'bedroom-1.jpg' ) ),
  array( 'tag' => 'Double', 'h3' => 'Camera della Vigna', 'imgs' => array( 'bedroom-iron.jpg', 'bedroom-2.jpg', 'bedroom-3.jpg' ) ),
);
?>
<!-- ============ HERO ============ -->
<section class="sbtw-hero" id="top" data-screen-label="Hero">
  <div class="sbtw-hero-video">
    <video src="<?php echo esc_url( sbt_asset_url( 'assets/video/masseria.mp4' ) ); ?>" poster="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-dusk.jpg' ) ); ?>" autoplay muted loop playsinline></video>
  </div>
  <div class="sbtw-hero-overlay"></div>
  <div class="sbtw-hero-inner">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.hero_over', $h['hero_over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.home.hero_h1', $h['hero_h1'] ?? '' ); ?></h1>
    <p class="sbtw-sub"><?php echo sbt_t1_text( 'C.home.hero_sub', $h['hero_sub'] ?? '', array( 'multiline' => true ) ); ?></p>
  </div>
  <div class="sbtw-scrolldown"><span><?php echo esc_html( $h['scroll_label'] ?? 'Scroll' ); ?></span><span class="sbtw-line"></span></div>
</section>

<!-- ============ WELCOME ============ -->
<section class="sbtw-pad" id="welcome" data-screen-label="Welcome">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.welcome_over', $h['welcome_over'] ?? 'Welcome' ); ?></div>
        <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.welcome_h2', $h['welcome_h2'] ?? '' ); ?></h2>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.welcome_p1', $h['welcome_p1'] ?? '', array( 'multiline' => true ) ); ?></p>
        <p class="sbtw-body-text" style="margin-top:18px;"><?php echo sbt_t1_text( 'C.home.welcome_p2', $h['welcome_p2'] ?? '', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $h['welcome_url'] ?? 'villa.php' ) ); ?>" style="margin-top:30px;"><?php echo sbt_t1_text( 'C.home.welcome_btn', $h['welcome_btn'] ?? 'Discover the Masseria' ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="Masseria Le Cerase — aerial view" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-vines.jpg' ) ); ?>" alt="Masseria Le Cerase — facade and vineyards" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Masseria Le Cerase — inner courtyard" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-flowers.jpg' ) ); ?>" alt="Masseria Le Cerase — entrance" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-night.jpg' ) ); ?>" alt="Masseria Le Cerase — by night" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
        <div class="sbtw-stamp"><?php echo wp_kses( $h['welcome_stamp'] ?? 'XVII<br/>century', array( 'br' => array() ) ); ?></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY MOSAIC ============ -->
<section class="sbtw-pad-s" data-screen-label="Gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.gallery_over', $h['gallery_over'] ?? 'A look inside' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.gallery_h2', $h['gallery_h2'] ?? '' ); ?></h2>
    </div>
    <div class="sbtw-mosaic sbtw-reveal">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/salone-volte.jpg' ) ); ?>" alt="The vaulted hall" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="A vaulted bedroom" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/living-1.jpg' ) ); ?>" alt="The living room" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="The inner courtyard" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/pool-pergola.jpg' ) ); ?>" alt="The pool and pergola" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo esc_html( $TEXT['show_all_photos'] ?? 'Show all photos' ); ?></button>
    </div>
  </div>
</section>

<?php if ( ! function_exists( 'sbt_is_entire_rental_mode' ) || ! sbt_is_entire_rental_mode( 'theme02' ) ) : ?>
<!-- ============ ROOMS ============ -->
<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Rooms">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.houses_over', $h['houses_over'] ?? 'The Rooms' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.houses_h2', $h['houses_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.home.houses_p', $h['houses_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <?php foreach ( $room_cards as $rc ) : ?>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo esc_html( $rc['tag'] ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php foreach ( $rc['imgs'] as $rci ) : ?><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $rci ) ); ?>" alt="<?php echo esc_attr( $rc['h3'] ); ?>" /><?php endforeach; ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo esc_html( $rc['h3'] ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'house.php' ) ); ?>"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ( ! function_exists( 'sbt_is_entire_rental_mode' ) || sbt_is_entire_rental_mode( 'theme02' ) ) : ?>
<!-- ============ WHOLE MASSERIA ============ -->
<section class="sbtw-pad-s sbtw-surface" id="whole-masseria" data-screen-label="Whole masseria">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="The whole estate from above" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-dusk.jpg' ) ); ?>" alt="The masseria at dusk" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/great-hall.jpg' ) ); ?>" alt="The great hall" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/pool-pergola.jpg' ) ); ?>" alt="The private pool" />
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.whole_over', $h['whole_over'] ?? 'Exclusive use' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.whole_h2', $h['whole_h2'] ?? '' ); ?></h2>
      <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.whole_p', $h['whole_p'] ?? '', array( 'multiline' => true ) ); ?></p>
      <?php $whole_specs = ( ! empty( $h['whole_specs'] ) && is_array( $h['whole_specs'] ) ) ? $h['whole_specs'] : array( array( 'Guests', 'Up to 10' ), array( 'Use', 'Entire estate, exclusive' ) ); ?>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <?php foreach ( $whole_specs as $wsi => $wspec ) : ?>
        <li><span><?php echo sbt_t1_text( 'C.home.whole_specs.' . $wsi . '.0', $wspec[0] ?? '' ); ?></span><b><?php echo sbt_t1_text( 'C.home.whole_specs.' . $wsi . '.1', $wspec[1] ?? '' ); ?></b></li>
        <?php endforeach; ?>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( $h['whole_url'] ?? 'whole-masseria.php' ) ); ?>"><?php echo sbt_t1_text( 'C.home.whole_btn', $h['whole_btn'] ?? 'Discover the whole masseria' ); ?></a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ SERVICES ============ -->
<section class="sbtw-services sbtw-pad" id="services" data-screen-label="Services">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.services_over', $h['services_over'] ?? 'Comfort &amp; Care' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.services_h2', $h['services_h2'] ?? 'Services' ); ?></h2>
    </div>
    <div class="sbtw-svc-grid">
      <?php foreach ( $services as $svi => $svc ) : ?>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><?php echo $svc_icons[ $svi ] ?? ''; ?></svg>
        <h4><?php echo sbt_t1_text( 'C.home.services.' . $svi . '.0', $svc[0] ?? '' ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.services.' . $svi . '.1', $svc[1] ?? '', array( 'multiline' => true ) ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ QUOTE BAND ============ -->
<section class="sbtw-band" id="band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-garden.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.band_over', $h['band_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.home.band_h2', $h['band_h2'] ?? '' ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.home.band_p', $h['band_p'] ?? '', array( 'multiline' => true ) ); ?></p>
  </div>
</section>

<!-- ============ FEATURE ROWS ============ -->
<section class="sbtw-feature sbtw-pad" data-screen-label="Weddings & Experience">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col" id="weddings">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/salone-volte.jpg' ) ); ?>" alt="Weddings — the vaulted hall" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/great-hall.jpg' ) ); ?>" alt="Weddings — banquet hall" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Weddings — courtyard" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/pool-pergola.jpg' ) ); ?>" alt="Weddings — garden" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-night.jpg' ) ); ?>" alt="Weddings — masseria by night" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo esc_html( $h['weddings_over'] ?? 'Masseria Le Cerase' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.home.weddings_h2', $h['weddings_h2'] ?? 'Weddings &amp; Events' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.weddings_p', $h['weddings_p'] ?? '', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $h['weddings_url'] ?? 'weddings.php' ) ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'C.home.weddings_btn', $h['weddings_btn'] ?? 'Discover Weddings' ); ?></a>
      </div>
    </div>
    <div class="sbtw-two-col" id="experience">
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo esc_html( $h['experience_over'] ?? 'Masseria Le Cerase' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.home.experience_h2', $h['experience_h2'] ?? 'Apulian Experience' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.experience_p', $h['experience_p'] ?? '', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $h['experience_url'] ?? 'experiences.php' ) ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'C.home.experience_btn', $h['experience_btn'] ?? 'Explore experiences' ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/kitchen-dining.jpg' ) ); ?>" alt="Apulian Experience — the table" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/lounge-dining.jpg' ) ); ?>" alt="Experience — dining under the vaults" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-flowers.jpg' ) ); ?>" alt="Experience — the village" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-garden.jpg' ) ); ?>" alt="Experience — the estate" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/lounge-vault.jpg' ) ); ?>" alt="Experience — tasting" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STAY CTA BAND ============ -->
<section class="sbtw-cta-band" id="house-cta" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Stay CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.stay_over', $h['stay_over'] ?? 'The whole masseria awaits' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.home.stay_h2', $h['stay_h2'] ?? 'Your stay at<br/>Masseria Le Cerase' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $h['stay_url'] ?? 'whole-masseria.php' ) ); ?>"><?php echo sbt_t1_text( 'C.home.stay_btn', $h['stay_btn'] ?? 'Discover the stay' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

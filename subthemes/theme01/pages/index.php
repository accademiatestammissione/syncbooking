<?php
$PAGE = 'home';
$PAGE_TITLE = 'Villa Rosa Resort – An Apulia Villa';
require __DIR__ . '/../header/header.php';
$h = isset( $C['home'] ) && is_array( $C['home'] ) ? $C['home'] : array();
$services = ( ! empty( $h['services'] ) && is_array( $h['services'] ) ) ? array_values( $h['services'] ) : array();
$svc_icons = array(
  '<path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/>',
  '<path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/>',
  '<path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/>',
  '<path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/>',
  '<path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/>',
  '<path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/>',
  '<path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/>',
  '<path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/>',
);
?>
<!-- ============ HERO ============ -->
<section class="sbtw-hero" id="top" data-screen-label="Hero">
  <div class="sbtw-hero-video">
    <img class="sbtw-hero-poster" id="heroPoster" src="<?php echo esc_url( sbt_asset_url( 'assets/images/hero-poster.jpg' ) ); ?>" alt="" aria-hidden="true" />
    <iframe src="https://player.vimeo.com/video/687646681?autoplay=1&controls=0&mute=1&muted=1&loop=1&playlist=687646681&disablekb=1&modestbranding=1&playsinline=1&rel=0&background=1" allow="autoplay; fullscreen" title="Villa Rosa"></iframe>
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
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $h['welcome_url'] ?? 'villa.php' ) ); ?>" style="margin-top:30px;"><?php echo esc_html( $TEXT['discover_villa'] ?? 'Discover the Villa' ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="Villa Rosa Resort" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-067.jpg' ) ); ?>" alt="Villa Rosa — living" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-001.jpg' ) ); ?>" alt="Villa Rosa — bedroom" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-026.jpg' ) ); ?>" alt="Villa Rosa — the pergola" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>" alt="Villa Rosa — the park &amp; pool" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
        <div class="sbtw-stamp"><?php echo wp_kses( $h['welcome_stamp'] ?? 'Since<br/>1930', array( 'br' => array() ) ); ?></div>
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
      <?php $sbt_home_gallery = ( ! empty( $h['gallery'] ) && is_array( $h['gallery'] ) ) ? array_values( $h['gallery'] ) : array(); ?>
      <?php foreach ( $sbt_home_gallery as $gi => $gimg ) : ?>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery.' . $gi, sbt_gallery_src( $gimg ), ( $SITE['name'] ?? 'Gallery' ) . ' ' . ( $gi + 1 ), array( 'data-lightbox' => '' ) ); ?></div>
      <?php endforeach; ?>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo esc_html( $TEXT['show_all_photos'] ?? 'Show all photos' ); ?></button>
    </div>
  </div>
</section>

<!-- ============ HOUSES ============ -->
<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Houses">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.houses_over', $h['houses_over'] ?? 'The Houses' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.houses_h2', $h['houses_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.home.houses_p', $h['houses_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <?php
      $home_house_cards = ( isset( $HOUSE_CARDS ) && is_array( $HOUSE_CARDS ) ) ? $HOUSE_CARDS : array();
      foreach ( $home_house_cards as $house_card ) :
        $hc_title = $house_card['title'] ?? '';
        $hc_tag   = $house_card['tag'] ?? '';
        $hc_imgs  = ( ! empty( $house_card['gallery'] ) && is_array( $house_card['gallery'] ) )
          ? array_values( array_filter( $house_card['gallery'] ) )
          : array_filter( array( $house_card['img'] ?? '' ) );
      ?>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo esc_html( $hc_tag ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php foreach ( $hc_imgs as $hc_img ) : ?>
              <img src="<?php echo esc_url( $hc_img ); ?>" alt="<?php echo esc_attr( $hc_title ); ?>" />
              <?php endforeach; ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo esc_html( $hc_title ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'houses.php' ) ); ?>"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if ( ! function_exists( 'sbt_is_entire_rental_mode' ) || sbt_is_entire_rental_mode( 'theme01' ) ) : ?>
<!-- ============ WHOLE VILLA ============ -->
<section class="sbtw-pad" id="whole-villa" data-screen-label="Whole Villa">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>" alt="The whole estate from above" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="The villa at dusk" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="The pergola" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="The private pool" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.entire_over', $h['entire_over'] ?? 'Exclusive use' ); ?></div>
        <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.entire_h2', $h['entire_h2'] ?? '' ); ?></h2>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.entire_p', $h['entire_p'] ?? '', array( 'multiline' => true ) ); ?></p>
        <?php $entire_specs = ( ! empty( $h['entire_specs'] ) && is_array( $h['entire_specs'] ) ) ? $h['entire_specs'] : array( array( 'Guests', 'Up to 10' ), array( 'Use', 'Entire estate, exclusive' ) ); ?>
        <ul class="sbtw-estate-specs">
          <?php foreach ( $entire_specs as $esi => $espec ) : ?>
          <li><span><?php echo sbt_t1_text( 'C.home.entire_specs.' . $esi . '.0', $espec[0] ?? '' ); ?></span><b><?php echo sbt_t1_text( 'C.home.entire_specs.' . $esi . '.1', $espec[1] ?? '' ); ?></b></li>
          <?php endforeach; ?>
        </ul>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $h['entire_url'] ?? 'entire.php' ) ); ?>" style="margin-top:30px;"><?php echo sbt_t1_text( 'C.home.entire_btn', $h['entire_btn'] ?? 'Discover the whole villa' ); ?></a>
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
<section class="sbtw-band" id="band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-078.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.band_over', $h['band_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.home.band_h2', $h['band_h2'] ?? '' ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.home.band_p', $h['band_p'] ?? '', array( 'multiline' => true ) ); ?></p>
  </div>
</section>

<!-- ============ FEATURE ROWS ============ -->
<section class="sbtw-feature sbtw-pad" data-screen-label="SPA & Experience">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col" id="spa">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/jacuzzi.png' ) ); ?>" alt="SPA &amp; Wellness" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/hammam.png' ) ); ?>" alt="SPA — hammam" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/turkish-bath.png' ) ); ?>" alt="SPA — Turkish bath" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/sauna.png' ) ); ?>" alt="SPA — sauna" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/gym.png' ) ); ?>" alt="SPA — gym" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo esc_html( $h['spa_label'] ?? 'Villa Rosa Resort & SPA' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.home.spa_teaser_h3', $h['spa_teaser_h3'] ?? 'SPA &amp; Wellness' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.spa_teaser_p', $h['spa_teaser_p'] ?? '', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $h['spa_teaser_url'] ?? 'spa-wellness.php' ) ); ?>" style="margin-top:28px;"><?php echo esc_html( $TEXT['discover_spa'] ?? 'Discover the SPA' ); ?></a>
      </div>
    </div>
    <div class="sbtw-two-col" id="experience">
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo esc_html( $h['experience_label'] ?? 'Villa Rosa Resort & SPA' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.home.experience_teaser_h3', $h['experience_teaser_h3'] ?? 'Apulian Experience' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.experience_teaser_p', $h['experience_teaser_p'] ?? '', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $h['experience_teaser_url'] ?? 'experiences.php' ) ); ?>" style="margin-top:28px;"><?php echo esc_html( $TEXT['explore_experiences'] ?? 'Explore experiences' ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-039.jpg' ) ); ?>" alt="Apulian Experience" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-104.jpg' ) ); ?>" alt="Experience — Apulian breakfast" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="Experience — the pergola" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-078.jpg' ) ); ?>" alt="Experience — long table in the park" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-005.jpg' ) ); ?>" alt="Experience — tasting" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ HOUSE CTA BAND ============ -->
<section class="sbtw-cta-band" id="house-cta" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>');" data-screen-label="Houses CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.house_cta_over', $h['house_cta_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.home.house_cta_h2', $h['house_cta_h2'] ?? '' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $h['house_cta_url'] ?? 'houses.php' ) ); ?>"><?php echo sbt_t1_text( 'C.home.house_cta_btn', $h['house_cta_btn'] ?? 'Explore the houses' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

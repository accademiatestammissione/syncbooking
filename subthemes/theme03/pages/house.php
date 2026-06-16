<?php
$PAGE = 'houses';
$PAGE_TITLE = 'Bedrooms – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
$p = isset( $C['house'] ) && is_array( $C['house'] ) ? $C['house'] : array();
$room_imgs = array(
  array( 'mf-10.jpg', 'mf-24.jpg', 'mf-14.jpg' ),
  array( 'mf-24.jpg', 'mf-07.jpg', 'mf-10.jpg' ),
  array( 'mf-00.jpg', 'mf-10.jpg', 'mf-14.jpg' ),
);
$rooms = ( ! empty( $p['rooms'] ) && is_array( $p['rooms'] ) ) ? $p['rooms'] : array();
$second_specs = ( ! empty( $p['second_specs'] ) && is_array( $p['second_specs'] ) ) ? $p['second_specs'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Bedrooms banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-10.jpg' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'Bedrooms' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.over', $p['over'] ?? 'Restored stone' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.house.h1', $p['h1'] ?? 'Bedrooms' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $TEXT['accommodation'] ?? 'Accommodation' ); ?><span>/</span><?php echo esc_html( $p['h1'] ?? 'Bedrooms' ); ?></nav>
  </div>
</section>

<section class="sbtw-houses sbtw-pad" data-screen-label="Bedrooms cards">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.intro_over', $p['intro_over'] ?? 'Intimate &amp; refined' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.intro_h2', $p['intro_h2'] ?? 'Sleeping in restored stone' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.house.intro_p', $p['intro_p'] ?? "The main house offers three bedrooms, all beautifully restored stone with special decoration typical of Puglia, served by three bathrooms. Each room is inspired by the elegance of the region's simple traditions, with magnificent views over the centuries-old olive groves.", array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <?php foreach ( $rooms as $ri => $room ) :
        $imgs = $room_imgs[ $ri ] ?? array(); ?>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.house.rooms.' . $ri . '.tag', $room['tag'] ?? 'Main house' ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php foreach ( $imgs as $im ) : ?>
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $im ) ); ?>" alt="<?php echo esc_attr( $room['h3'] ?? 'Bedroom' ); ?>" />
              <?php endforeach; ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.house.rooms.' . $ri . '.h3', $room['h3'] ?? '' ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'syncbooking:booking' ) ); ?>"><?php echo sbt_t1_text( 'C.house.room_btn', $p['room_btn'] ?? 'Request availability' ); ?></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ SECOND HOUSE ============ -->
<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="Second house">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-09.jpg' ) ); ?>" alt="The second house" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-13.jpg' ) ); ?>" alt="The garden by the second house" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-17.jpg' ) ); ?>" alt="The estate among the olives" />
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.second_over', $p['second_over'] ?? '120 metres from the masseria' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.house.second_h2', $p['second_h2'] ?? 'The Second House' ); ?></h2>
      <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.house.second_p', $p['second_p'] ?? 'A short stroll through the olive trees from the main house, the second house offers one bedroom, one bathroom and its own outdoor area — perfect for guests who want a little extra independence within the estate.', array( 'multiline' => true ) ); ?></p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <?php foreach ( $second_specs as $si => $spec ) : ?>
        <li><span><?php echo sbt_t1_text( 'C.house.second_specs.' . $si . '.0', $spec[0] ?? '' ); ?></span><b><?php echo sbt_t1_text( 'C.house.second_specs.' . $si . '.1', $spec[1] ?? '' ); ?></b></li>
        <?php endforeach; ?>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'syncbooking:booking' ) ); ?>"><?php echo sbt_t1_text( 'C.house.second_btn', $p['second_btn'] ?? 'Request availability' ); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="Bedrooms included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.inc_over', $p['inc_over'] ?? 'What\'s included' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.inc_h2', $p['inc_h2'] ?? 'Comfort in every corner' ); ?></h2>
    </div>
    <?php
    $inc_svgs = array(
      '<svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M12 3a7 7 0 0 1 7 7c0 2-1 3.5-2.5 4.5L16 21H8l-.5-6.5C6 13.5 5 12 5 10a7 7 0 0 1 7-7Z"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>',
    );
    $included = ( ! empty( $p['included'] ) && is_array( $p['included'] ) ) ? $p['included'] : array();
    ?>
    <div class="sbtw-amenity-grid">
      <?php foreach ( $included as $ii => $inc ) : ?>
      <div class="sbtw-amenity sbtw-reveal"><?php echo $inc_svgs[ $ii ] ?? ''; ?><h4><?php echo sbt_t1_text( 'C.house.included.' . $ii . '.h4', $inc['h4'] ?? '' ); ?></h4><p><?php echo sbt_t1_text( 'C.house.included.' . $ii . '.p', $inc['p'] ?? '', array( 'multiline' => true ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-18.jpg' ) ); ?>');" data-screen-label="Bedrooms CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.cta_over', $p['cta_over'] ?? 'Ready when you are' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.house.cta_h2', $p['cta_h2'] ?? 'Reserve your room' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.house.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

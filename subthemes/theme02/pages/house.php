<?php
$PAGE = 'houses';
$PAGE_TITLE = 'Rooms – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
$p = isset( $C['house'] ) && is_array( $C['house'] ) ? $C['house'] : array();
$room_imgs = array(
  array( 'bedroom-1.jpg', 'bedroom-2.jpg', 'bedroom-cozy.jpg' ),
  array( 'bedroom-3.jpg', 'bedroom-iron.jpg', 'bedroom-1.jpg' ),
  array( 'bedroom-iron.jpg', 'bedroom-2.jpg', 'bedroom-3.jpg' ),
);
$rooms = ( ! empty( $p['rooms'] ) && is_array( $p['rooms'] ) ) ? $p['rooms'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Rooms banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-vines.jpg' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'Rooms' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.over', $p['over'] ?? 'Under the vaults' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.house.h1', $p['h1'] ?? 'Rooms' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $TEXT['accommodation'] ?? 'Accommodation' ); ?><span>/</span><?php echo esc_html( $p['h1'] ?? 'Rooms' ); ?></nav>
  </div>
</section>

<section class="sbtw-houses sbtw-pad" data-screen-label="Rooms cards">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.intro_over', $p['intro_over'] ?? 'Intimate &amp; refined' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.intro_h2', $p['intro_h2'] ?? 'Sleeping under ancient vaults' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.house.intro_p', $p['intro_p'] ?? 'Five double bedrooms, each carved beneath centuries-old stone vaults and dressed with wrought-iron beds, antique wardrobes and warm linen. Thick limestone walls keep them cool through the Apulian summer, while the quiet of the open countryside settles over every room at night.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <?php foreach ( $rooms as $ri => $room ) :
        $imgs = $room_imgs[ $ri ] ?? array(); ?>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.house.rooms.' . $ri . '.tag', $room['tag'] ?? 'Double' ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php foreach ( $imgs as $im ) : ?>
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $im ) ); ?>" alt="<?php echo esc_attr( $room['h3'] ?? 'Room' ); ?>" />
              <?php endforeach; ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.house.rooms.' . $ri . '.h3', $room['h3'] ?? '' ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'syncbooking:booking' ) ); ?>"><?php echo sbt_t1_text( 'C.house.room_btn', $p['room_btn'] ?? 'View the room' ); ?></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-pad-s sbtw-surface" style="background:var(--surface);" data-screen-label="Rooms gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.gallery_over', $p['gallery_over'] ?? 'A look inside' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.gallery_h2', $p['gallery_h2'] ?? 'The rooms, in detail' ); ?></h2>
    </div>
    <div class="sbtw-mosaic">
      <?php $sbt_gal = ( ! empty( $p['gallery'] ) && is_array( $p['gallery'] ) ) ? array_values( $p['gallery'] ) : array( 'pool-pergola.jpg', 'bedroom-1.jpg', 'living-1.jpg', 'courtyard.jpg', 'bedroom-2.jpg' ); ?>
      <?php foreach ( $sbt_gal as $gi => $gimg ) : ?>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery.' . $gi, sbt_gallery_src( $gimg ), ( $p['h1'] ?? ( $SITE['name'] ?? 'Gallery' ) ) . ' ' . ( $gi + 1 ), array( 'data-lightbox' => '' ) ); ?></div>
      <?php endforeach; ?>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo esc_html( $TEXT['show_all_photos'] ?? 'Show all photos' ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="Rooms included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.inc_over', $p['inc_over'] ?? 'What\'s included' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.inc_h2', $p['inc_h2'] ?? 'Comfort in every corner' ); ?></h2>
    </div>
    <?php
    $inc_svgs = array(
      '<svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M12 2v20M3.4 7l17.2 10M20.6 7L3.4 17"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg>',
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

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Rooms CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.cta_over', $p['cta_over'] ?? 'Ready when you are' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.house.cta_h2', $p['cta_h2'] ?? 'Reserve your room' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.house.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

<?php
$PAGE = 'rooms';
$CONTENT_KEY = 'house';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Rooms banner">
  <?php echo sbt_t1_img( 'C.house.image_1', sbt_t1_asset( 'assets/images/facade-vines.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_1', 'Under the vaults', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.house.text_2', 'Rooms', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.house.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.house.text_4', 'Accommodation', array( 'multiline' => false ) ); ?><span>/</span><?php echo sbt_t1_text( 'C.house.text_5', 'Rooms', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-houses sbtw-pad" data-screen-label="Rooms cards">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_6', 'Intimate &amp; refined', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.text_7', 'Sleeping under ancient vaults', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.house.text_8', 'Five double bedrooms, each carved beneath centuries-old stone vaults and dressed with wrought-iron beds, antique wardrobes and warm linen. Thick limestone walls keep them cool through the Apulian summer, while the quiet of the open countryside settles over every room at night.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.house.text_9', 'Double', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.house.gallery_1.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.house.gallery_2.0', sbt_t1_asset( 'assets/images/bedroom-2.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.house.gallery_3.0', sbt_t1_asset( 'assets/images/bedroom-cozy.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.house.text_10', 'Camera degli Ulivi', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_2', 'room.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.house.text_11', 'View the room', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.house.text_12', 'Double', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.house.gallery_4.0', sbt_t1_asset( 'assets/images/bedroom-3.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.house.gallery_5.0', sbt_t1_asset( 'assets/images/bedroom-iron.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.house.gallery_6.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.house.text_13', 'Camera del Ciliegio', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_3', 'room.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.house.text_14', 'View the room', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.house.text_15', 'Double', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.house.gallery_7.0', sbt_t1_asset( 'assets/images/bedroom-iron.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.house.gallery_8.0', sbt_t1_asset( 'assets/images/bedroom-2.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.house.gallery_9.0', sbt_t1_asset( 'assets/images/bedroom-3.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.house.text_16', 'Camera della Vigna', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_4', 'room.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.house.text_17', 'View the room', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="House for 2 gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_18', 'A look inside', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.text_19', 'The rooms, in detail', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_10.0', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_11.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_12.0', sbt_t1_asset( 'assets/images/living-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_13.0', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_14.0', sbt_t1_asset( 'assets/images/bedroom-2.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.house.text_20', 'Show all photos', array( 'multiline' => false ) ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="House for 2 included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_21', 'What\'s included', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.text_22', 'Comfort in every corner', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_23', 'Equipped Kitchen', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_24', 'A complete kitchen with dining area for full independence.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_25', 'Wrought-iron Beds', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_26', 'King-size beds in wrought iron, dressed in fine linen.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_27', 'Free Wi-Fi', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_28', 'Fast, free connection throughout the house and grounds.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_29', 'Private Pool', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_30', 'A pool among the olive trees, reserved for your party.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 2v20M3.4 7l17.2 10M20.6 7L3.4 17"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_31', 'Air Conditioning', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_32', 'Independent climate control for the perfect temperature year-round.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_33', 'Private Parking', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_34', 'Reserved on-site parking for a relaxed, stress-free arrival.', array( 'multiline' => false ) ); ?></p></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="House for 2 CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_35', 'Ready when you are', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.house.text_36', 'Reserve your room', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_5', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.house.text_37', 'Contact us', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

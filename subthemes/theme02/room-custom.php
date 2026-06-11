<?php
$PAGE = 'room';
$CONTENT_KEY = 'room';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Room banner">
  <?php echo sbt_t1_img( 'C.room.image_1', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.room.text_1', 'Under the vaults', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.room.text_2', 'Camera degli Ulivi', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.room.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.room.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.room.link_2', 'rooms.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.room.text_4', 'Rooms', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.room.text_5', 'Camera degli Ulivi', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Room overview">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <?php echo sbt_t1_img( 'C.room.gallery_1.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.room.gallery_2.0', sbt_t1_asset( 'assets/images/bedroom-cozy.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.room.gallery_3.0', sbt_t1_asset( 'assets/images/room-detail.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.room.gallery_4.0', sbt_t1_asset( 'assets/images/bedroom-2.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.room.text_6', 'Double room', array( 'multiline' => false ) ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.room.text_7', 'A vaulted retreat among the olive groves', array( 'multiline' => false ) ); ?></h2>
      <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.room.text_8', 'Carved beneath centuries-old stone vaults, the room pairs a wrought-iron king-size bed with antique wardrobes, warm linen and soft, indirect light. Thick limestone walls keep it naturally cool through the Apulian summer; at night, only the quiet of the countryside.', array( 'multiline' => true ) ); ?></p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <li><span><?php echo sbt_t1_text( 'C.room.text_9', 'Guests', array( 'multiline' => false ) ); ?></span><b>2</b></li>
        <li><span><?php echo sbt_t1_text( 'C.room.text_10', 'Bed', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.room.text_11', 'King-size, wrought iron', array( 'multiline' => false ) ); ?></b></li>
        <li><span><?php echo sbt_t1_text( 'C.room.text_12', 'Bathroom', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.room.text_13', 'En-suite, walk-in shower', array( 'multiline' => false ) ); ?></b></li>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.room.link_3', 'contacts.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.room.text_14', 'Book this room', array( 'multiline' => false ) ); ?></a>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.room.link_4', 'price-and-condition.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.room.text_15', 'Price &amp; condition', array( 'multiline' => false ) ); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="Room included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.room.text_16', 'What\'s included', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.room.text_17', 'Comfort in every corner', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg><h4><?php echo sbt_t1_text( 'C.room.text_18', 'Wrought-iron Bed', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.room.text_19', 'King-size bed in wrought iron, dressed in fine linen.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 2v20M3.4 7l17.2 10M20.6 7L3.4 17"/></svg><h4><?php echo sbt_t1_text( 'C.room.text_20', 'Air Conditioning', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.room.text_21', 'Independent climate control for the perfect temperature year-round.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg><h4><?php echo sbt_t1_text( 'C.room.text_22', 'Free Wi-Fi', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.room.text_23', 'Fast, free connection in the room and across the estate.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><h4><?php echo sbt_t1_text( 'C.room.text_24', 'Daily Housekeeping', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.room.text_25', 'Fresh towels and a tidy room, every day of your stay.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg><h4><?php echo sbt_t1_text( 'C.room.text_26', 'Pool Access', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.room.text_27', 'The pool among the olive trees, shared only with estate guests.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg><h4><?php echo sbt_t1_text( 'C.room.text_28', 'Private Parking', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.room.text_29', 'Reserved on-site parking for a relaxed, stress-free arrival.', array( 'multiline' => false ) ); ?></p></div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="Room gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.room.text_30', 'A look inside', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.room.text_31', 'The room, in detail', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.room.gallery_5.0', sbt_t1_asset( 'assets/images/bedroom-cozy.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.room.gallery_6.0', sbt_t1_asset( 'assets/images/room-detail.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.room.gallery_7.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.room.gallery_8.0', sbt_t1_asset( 'assets/images/living-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.room.gallery_9.0', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.room.text_32', 'Show all photos', array( 'multiline' => false ) ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Room CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.room.text_33', 'Ready when you are', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.room.text_34', 'Book this room', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.room.link_5', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.room.text_35', 'Contact us', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

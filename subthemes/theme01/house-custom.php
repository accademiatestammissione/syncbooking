<?php
$PAGE = 'house';
$CONTENT_KEY = 'house';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="House for 2 banner">
  <?php echo sbt_t1_img( 'C.house.image_1', sbt_t1_asset( 'uploads/Esterni/085.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_1', 'The Houses', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.house.text_2', 'Houses for 2', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.house.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_2', 'houses.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.house.text_4', 'Houses', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.house.text_5', 'For 2 people', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="House for 2 overview">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <?php echo sbt_t1_img( 'C.house.gallery_1.0', sbt_t1_asset( 'uploads/ota/001.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.house.gallery_2.0', sbt_t1_asset( 'uploads/ota/069.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.house.gallery_3.0', sbt_t1_asset( 'uploads/ota/102.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_6', 'Intimate &amp; refined', array( 'multiline' => false ) ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.house.text_7', 'A romantic retreat for two', array( 'multiline' => false ) ); ?></h2>
      <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.house.text_8', 'An elegant private house with its own external pergola — the perfect base for a couple\'s escape in the heart of Conversano. Refined design, the comfort of a five-star resort, and the freedom of a home of your own.', array( 'multiline' => true ) ); ?></p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <li><span><?php echo sbt_t1_text( 'C.house.text_9', 'Maximum occupancy', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.house.text_10', '2 adults + 1 baby cot', array( 'multiline' => false ) ); ?></b></li>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_3', 'contacts.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.house.text_11', 'Request availability', array( 'multiline' => false ) ); ?></a>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_4', 'price-and-condition.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.house.text_12', 'Price &amp; condition', array( 'multiline' => false ) ); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="House for 2 gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_13', 'A look inside', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.text_14', 'The room, in detail', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_4.0', sbt_t1_asset( 'uploads/Esterni/087.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_5.0', sbt_t1_asset( 'uploads/ota/001.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_6.0', sbt_t1_asset( 'uploads/ota/067.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_7.0', sbt_t1_asset( 'uploads/Esterni/081.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.house.gallery_8.0', sbt_t1_asset( 'uploads/ota/069.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.house.text_15', 'Show all photos', array( 'multiline' => false ) ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="House for 2 included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_16', 'What\'s included', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.house.text_17', 'Comfort in every corner', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_18', 'Equipped Kitchen', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_19', 'A complete kitchen with dining area for full independence.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_20', 'King-size Bed', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_21', 'A spacious king-size bed dressed in fine linens.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_22', 'Free Wi-Fi', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_23', 'Fast, free connection throughout the house and grounds.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_24', 'SPA Access', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_25', 'Access to the wellness centre, pool and park.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 2v20M3.4 7l17.2 10M20.6 7L3.4 17"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_26', 'Air Conditioning', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_27', 'Independent climate control for the perfect temperature year-round.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg><h4><?php echo sbt_t1_text( 'C.house.text_28', 'Private Parking', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.house.text_29', 'Reserved on-site parking for a relaxed, stress-free arrival.', array( 'multiline' => false ) ); ?></p></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'uploads/Esterni/072.jpg' ) ); ?>');" data-screen-label="House for 2 CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.house.text_30', 'Ready when you are', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.house.text_31', 'Book your house for two', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.house.link_5', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.house.text_32', 'Contact us', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

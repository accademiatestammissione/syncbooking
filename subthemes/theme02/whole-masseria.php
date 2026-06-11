<?php
$PAGE = 'whole-masseria';
$CONTENT_KEY = 'whole';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Whole masseria banner">
  <?php echo sbt_t1_img( 'C.whole.image_1', sbt_t1_asset( 'assets/images/aerial-pool.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.text_1', 'Exclusive use', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.whole.text_2', 'The Whole Masseria', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.whole.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.whole.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.whole.text_4', 'Accommodation', array( 'multiline' => false ) ); ?><span>/</span><?php echo sbt_t1_text( 'C.whole.text_5', 'The Whole Masseria', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Whole masseria overview">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <?php echo sbt_t1_img( 'C.whole.gallery_1.0', sbt_t1_asset( 'assets/images/aerial-pool.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.whole.gallery_2.0', sbt_t1_asset( 'assets/images/masseria-dusk.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.whole.gallery_3.0', sbt_t1_asset( 'assets/images/great-hall.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.whole.gallery_4.0', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.whole.gallery_5.0', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.text_6', 'One booking, the entire estate', array( 'multiline' => false ) ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.whole.text_7', 'The masseria, yours alone', array( 'multiline' => false ) ); ?></h2>
      <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.whole.text_8', 'The estate is rented in its entirety: all five bedrooms, the vaulted halls, the country kitchen, the pool and the gardens — reserved exclusively for your party. No other guests, no shared spaces. Just your own seventeenth-century masseria among the olive groves.', array( 'multiline' => true ) ); ?></p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <li><span><?php echo sbt_t1_text( 'C.whole.text_9', 'Guests', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.whole.text_10', 'Up to 10', array( 'multiline' => false ) ); ?></b></li>
        <li><span><?php echo sbt_t1_text( 'C.whole.text_11', 'Bedrooms', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.whole.text_12', '5 doubles', array( 'multiline' => false ) ); ?></b></li>
        <li><span><?php echo sbt_t1_text( 'C.whole.text_13', 'Use', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.whole.text_14', 'Entire estate, exclusive', array( 'multiline' => false ) ); ?></b></li>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.whole.link_2', 'contacts.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.whole.text_15', 'Request availability', array( 'multiline' => false ) ); ?></a>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.whole.link_3', 'price-and-condition.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.whole.text_16', 'Price &amp; condition', array( 'multiline' => false ) ); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="Whole masseria gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.text_17', 'A look around', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.whole.text_18', 'The estate, in detail', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.whole.gallery_6.0', sbt_t1_asset( 'assets/images/aerial-garden.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.whole.gallery_7.0', sbt_t1_asset( 'assets/images/great-hall.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.whole.gallery_8.0', sbt_t1_asset( 'assets/images/salone-volte.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.whole.gallery_9.0', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.whole.gallery_10.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"></rect><rect x="14" y="3" width="7" height="7" rx="1"></rect><rect x="3" y="14" width="7" height="7" rx="1"></rect><rect x="14" y="14" width="7" height="7" rx="1"></rect></svg><?php echo sbt_t1_text( 'C.whole.text_19', 'Show all photos', array( 'multiline' => false ) ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="Whole masseria included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.text_20', 'What\'s included', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.whole.text_21', 'Everything, exclusively yours', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"></path></svg><h4><?php echo sbt_t1_text( 'C.whole.text_22', '5 Double Bedrooms', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.whole.text_23', 'Vaulted stone bedrooms for up to ten guests.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"></path><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"></path><path d="M8 13V5a2 2 0 0 1 4 0"></path></svg><h4><?php echo sbt_t1_text( 'C.whole.text_24', 'Private Pool', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.whole.text_25', 'A pool framed by a pergola and olive trees, all yours.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"></path><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"></path></svg><h4><?php echo sbt_t1_text( 'C.whole.text_26', 'Country Kitchen', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.whole.text_27', 'A complete kitchen with dining areas, indoors and out.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 21V7l9-4 9 4v14M7 21v-8h10v8"></path></svg><h4><?php echo sbt_t1_text( 'C.whole.text_28', 'Vaulted Halls', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.whole.text_29', 'Grand stone halls for long dinners and gatherings.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"></path><path d="M8 15.5a6 6 0 0 1 8 0"></path><circle cx="12" cy="19" r="1"></circle></svg><h4><?php echo sbt_t1_text( 'C.whole.text_30', 'Free Wi-Fi', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.whole.text_31', 'Fast connection across the whole estate.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"></path><path d="M3 15h18v3H3z"></path><circle cx="7" cy="18" r="1.4"></circle><circle cx="17" cy="18" r="1.4"></circle></svg><h4><?php echo sbt_t1_text( 'C.whole.text_32', 'Private Parking', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.whole.text_33', 'Reserved on-site parking inside the estate.', array( 'multiline' => false ) ); ?></p></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/masseria-dusk.jpg' ) ); ?>');" data-screen-label="Whole masseria CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.text_34', 'Ready when you are', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.whole.text_35', 'Reserve the whole masseria', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.whole.link_4', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.whole.text_36', 'Contact us', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

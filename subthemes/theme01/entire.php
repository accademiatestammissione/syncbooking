<?php
$PAGE = 'entire';
$CONTENT_KEY = 'entire';
require __DIR__ . '/inc/header.php';
?>

<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Whole Villa banner">
  <?php echo sbt_t1_img( 'C.entire.image_1', sbt_t1_asset( 'uploads/Esterni/090.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.entire.text_1', 'Villa Rosa Resort &amp; SPA', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.entire.text_2', 'The Whole Villa', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.entire.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.entire.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.entire.text_4', 'The Whole Villa', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Whole Villa intro">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.entire.gallery_1.0', sbt_t1_asset( 'uploads/Esterni/090.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.entire.gallery_2.0', sbt_t1_asset( 'uploads/Esterni/085.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.entire.gallery_3.0', sbt_t1_asset( 'uploads/Esterni/087.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.entire.gallery_4.0', sbt_t1_asset( 'uploads/Esterni/081.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.entire.text_5', 'Exclusive use', array( 'multiline' => false ) ); ?></div>
        <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.entire.text_6', 'One booking,', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.entire.text_7', 'the entire estate', array( 'multiline' => false ) ); ?></h2>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.entire.text_8', 'All the houses, the centuries-old park, the pool and the pergolas — reserved exclusively for you and your guests. The freedom of a private home, with the soul of a 1930s villa, in the ancient heart of Conversano.', array( 'multiline' => true ) ); ?></p>
        <ul class="sbtw-estate-specs">
          <li><span><?php echo sbt_t1_text( 'C.entire.text_9', 'Guests', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.entire.text_10', 'Up to 10', array( 'multiline' => false ) ); ?></b></li>
          <li><span><?php echo sbt_t1_text( 'C.entire.text_11', 'Houses', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.entire.text_12', 'All, exclusively yours', array( 'multiline' => false ) ); ?></b></li>
          <li><span><?php echo sbt_t1_text( 'C.entire.text_13', 'Use', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.entire.text_14', 'Entire estate, exclusive', array( 'multiline' => false ) ); ?></b></li>
        </ul>
        <a class="sbtw-btn" href="https://syncbooking.com" style="margin-top:30px;"><?php echo sbt_t1_text( 'C.entire.text_15', 'Book the whole villa', array( 'multiline' => false ) ); ?></a>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad" style="padding-top:0;" data-screen-label="Whole Villa gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:38px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.entire.text_16', 'The estate', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.entire.text_17', 'Park, pool &amp; pergolas', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.entire.text_18', 'Every corner of the estate is yours: the gardens, the pool, the outdoor lounges and the pergolas where days begin with breakfast and end with dinner under the stars.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-room-gallery sbtw-reveal">
      <?php echo sbt_t1_img( 'C.entire.gallery_5.0', sbt_t1_asset( 'uploads/Esterni/090.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_6.0', sbt_t1_asset( 'uploads/Esterni/085.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_7.0', sbt_t1_asset( 'uploads/Esterni/072.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_8.0', sbt_t1_asset( 'uploads/Esterni/081.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_9.0', sbt_t1_asset( 'uploads/Esterni/087.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_10.0', sbt_t1_asset( 'uploads/Esterni/026.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_11.0', sbt_t1_asset( 'uploads/Esterni/078.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_12.0', sbt_t1_asset( 'uploads/Esterni/082.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_13.0', sbt_t1_asset( 'uploads/Esterni/086.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_14.0', sbt_t1_asset( 'uploads/Esterni/073.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_15.0', sbt_t1_asset( 'uploads/Esterni/079.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.entire.gallery_16.0', sbt_t1_asset( 'uploads/Esterni/084.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
    </div>
  </div>
</section>

<!-- ============ BAND CTA ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'uploads/Esterni/072.jpg' ) ); ?>');" data-screen-label="Whole Villa CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.entire.text_19', 'Rates &amp; reservations', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.entire.text_20', 'Plan your exclusive stay', array( 'multiline' => false ) ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.entire.text_21', 'Transparent rates, flexible terms and a warm welcome for you and your guests.', array( 'multiline' => false ) ); ?></p>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.entire.link_3', 'price-and-condition.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.entire.text_22', 'View price &amp; condition', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

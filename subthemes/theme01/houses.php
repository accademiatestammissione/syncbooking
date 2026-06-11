<?php
$PAGE = 'houses';
$CONTENT_KEY = 'houses';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Houses banner">
  <?php echo sbt_t1_img( 'C.houses.image_1', sbt_t1_asset( 'uploads/Esterni/085.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.houses.text_1', 'Villa Rosa Resort', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.houses.text_2', 'Houses', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.houses.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.houses.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.houses.text_4', 'Houses', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Houses intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.houses.text_5', 'Your private retreat in Puglia', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.houses.text_6', 'An entire house, all to yourself', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.houses.text_7', 'The new luxury when it comes to holidays is giving yourself more freedom: the possibility of having an entire house with an external pergola at your disposal, to enjoy a fully relaxing stay. The attention to detail, a refined design, the mix of modern and ancient, and many comforts make the homes of Villa Rosa Boutique Resort very exclusive.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <a class="sbtw-house sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.houses.link_2', 'house.php' ) ) ); ?>">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.houses.text_8', 'For 2 people', array( 'multiline' => false ) ); ?></span><?php echo sbt_t1_img( 'C.houses.image_2', sbt_t1_asset( 'uploads/Nuova%20cartella/012.jpg' ), '', array() ); ?></div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.houses.text_9', 'Houses for 2', array( 'multiline' => false ) ); ?></h3>
          <ul class="sbtw-specs">
            <li><span><?php echo sbt_t1_text( 'C.houses.text_10', 'Maximum occupancy', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.houses.text_11', '2 adults + 1 cot', array( 'multiline' => false ) ); ?></b></li>
            <li><span><?php echo sbt_t1_text( 'C.houses.text_12', 'Bed', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.houses.text_13', 'King-size', array( 'multiline' => false ) ); ?></b></li>
          </ul>
          <span class="sbtw-btn sbtw-btn--light sbtw-house-cta"><?php echo sbt_t1_text( 'C.houses.text_14', 'Discover', array( 'multiline' => false ) ); ?></span>
        </div>
      </a>
      <a class="sbtw-house sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.houses.link_3', 'house.php' ) ) ); ?>">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.houses.text_15', 'For 3 people', array( 'multiline' => false ) ); ?></span><?php echo sbt_t1_img( 'C.houses.image_3', sbt_t1_asset( 'uploads/Nuova%20cartella/034.jpg' ), '', array() ); ?></div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.houses.text_16', 'Houses for 3', array( 'multiline' => false ) ); ?></h3>
          <ul class="sbtw-specs">
            <li><span><?php echo sbt_t1_text( 'C.houses.text_17', 'Maximum occupancy', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.houses.text_18', '3 adults + 1 cot', array( 'multiline' => false ) ); ?></b></li>
            <li><span><?php echo sbt_t1_text( 'C.houses.text_19', 'Beds', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.houses.text_20', 'King-size + sofa bed', array( 'multiline' => false ) ); ?></b></li>
          </ul>
          <span class="sbtw-btn sbtw-btn--light sbtw-house-cta"><?php echo sbt_t1_text( 'C.houses.text_21', 'Discover', array( 'multiline' => false ) ); ?></span>
        </div>
      </a>
      <a class="sbtw-house sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.houses.link_4', 'house.php' ) ) ); ?>">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.houses.text_22', 'For 4 people', array( 'multiline' => false ) ); ?></span><?php echo sbt_t1_img( 'C.houses.image_4', sbt_t1_asset( 'uploads/Nuova%20cartella/047.jpg' ), '', array() ); ?></div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.houses.text_23', 'Houses for 4', array( 'multiline' => false ) ); ?></h3>
          <ul class="sbtw-specs">
            <li><span><?php echo sbt_t1_text( 'C.houses.text_24', 'Maximum occupancy', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.houses.text_25', '4 adults + 1 cot', array( 'multiline' => false ) ); ?></b></li>
            <li><span><?php echo sbt_t1_text( 'C.houses.text_26', 'Beds', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.houses.text_27', 'King-size + double sofa', array( 'multiline' => false ) ); ?></b></li>
          </ul>
          <span class="sbtw-btn sbtw-btn--light sbtw-house-cta"><?php echo sbt_t1_text( 'C.houses.text_28', 'Discover', array( 'multiline' => false ) ); ?></span>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="padding-top:0;" data-screen-label="Houses gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:38px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.houses.text_29', 'A look inside', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.houses.text_30', 'Rooms &amp; spaces', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.houses.text_31', 'Bedrooms, living areas, kitchens and bathrooms — a glimpse of the interiors that make every Villa Rosa house a private home.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-room-gallery sbtw-reveal">
      <?php echo sbt_t1_img( 'C.houses.gallery_1.0', sbt_t1_asset( 'uploads/ota/001.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_2.0', sbt_t1_asset( 'uploads/ota/067.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_3.0', sbt_t1_asset( 'uploads/ota/048.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_4.0', sbt_t1_asset( 'uploads/ota/052.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_5.0', sbt_t1_asset( 'uploads/ota/004.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_6.0', sbt_t1_asset( 'uploads/ota/094.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_7.0', sbt_t1_asset( 'uploads/ota/069.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_8.0', sbt_t1_asset( 'uploads/ota/047.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_9.0', sbt_t1_asset( 'uploads/ota/053.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_10.0', sbt_t1_asset( 'uploads/ota/007.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_11.0', sbt_t1_asset( 'uploads/ota/010.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_12.0', sbt_t1_asset( 'uploads/ota/058.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_13.0', sbt_t1_asset( 'uploads/ota/030.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_14.0', sbt_t1_asset( 'uploads/ota/099.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_15.0', sbt_t1_asset( 'uploads/ota/068.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_16.0', sbt_t1_asset( 'uploads/ota/055.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_17.0', sbt_t1_asset( 'uploads/ota/095.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_18.0', sbt_t1_asset( 'uploads/ota/092.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_19.0', sbt_t1_asset( 'uploads/ota/077.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_20.0', sbt_t1_asset( 'uploads/ota/102.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_21.0', sbt_t1_asset( 'uploads/ota/106.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_22.0', sbt_t1_asset( 'uploads/ota/097.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_23.0', sbt_t1_asset( 'uploads/ota/059.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.houses.gallery_24.0', sbt_t1_asset( 'uploads/ota/103.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'uploads/Esterni/081.jpg' ) ); ?>');" data-screen-label="Houses CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.houses.text_32', 'Rates &amp; reservations', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.houses.text_33', 'Prices &amp; conditions', array( 'multiline' => false ) ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.houses.text_34', 'Transparent rates, flexible terms and a warm welcome. Discover everything you need to plan your stay.', array( 'multiline' => true ) ); ?></p>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.houses.link_5', 'price-and-condition.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.houses.text_35', 'View price &amp; condition', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

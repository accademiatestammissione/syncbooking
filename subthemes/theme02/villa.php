<?php
$PAGE = 'masseria';
$CONTENT_KEY = 'villa';
require __DIR__ . '/inc/header.php';
?>

<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Villa banner">
  <?php echo sbt_t1_img( 'C.villa.image_1', sbt_t1_asset( 'assets/images/aerial-pool.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.text_1', 'Masseria Le Cerase &amp; SPA', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.villa.text_2', 'The Masseria', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.villa.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.villa.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.villa.text_4', 'Masseria', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Villa intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.text_5', 'The luxury of feeling at home', array( 'multiline' => false ) ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.villa.text_6', 'On holiday,', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.villa.text_7', 'just like at home', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-reveal">
      <p class="sbtw-body-text" style="max-width:54ch;"><?php echo sbt_t1_text( 'C.villa.text_8', 'Privacy, confidentiality, serenity and five-star comfort. The new luxury when it comes to holidays is giving yourself more freedom: the possibility of having an entire house at your disposal, to enjoy a fully relaxing stay.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;"><?php echo sbt_t1_text( 'C.villa.text_9', 'In the centre of the most beautiful Puglia, in the ancient heart of Conversano, in the park of a historic villa, having a house available is the ideal solution for those looking for a secluded, independent and even more exclusive stay.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;"><?php echo sbt_t1_text( 'C.villa.text_10', 'Attention to detail, refined design, a mix of modern and ancient, a stone\'s throw from monuments and shops — the rooms of Masseria Le Cerase, with private external pergolas, also offer the typical comforts of a resort.', array( 'multiline' => true ) ); ?></p>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad-s" style="padding-top:0;" data-screen-label="Villa gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-gallery">
      <?php echo sbt_t1_img( 'C.villa.gallery_1.0', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.villa.gallery_2.0', sbt_t1_asset( 'assets/images/living-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.villa.gallery_3.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.villa.gallery_4.0', sbt_t1_asset( 'assets/images/bedroom-2.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.villa.gallery_5.0', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      <?php echo sbt_t1_img( 'C.villa.gallery_6.0', sbt_t1_asset( 'assets/images/aerial-pool.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
    </div>
  </div>
</section>

<!-- ============ AMENITIES ============ -->
<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Villa amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.text_11', 'Wellness, comfort &amp; independence', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.villa.text_12', 'Every detail, designed for you', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.villa.text_13', 'A wide range of services for your comfort and relaxation — all designed to guarantee maximum comfort and a truly unique experience.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg>
        <h4><?php echo sbt_t1_text( 'C.villa.text_14', 'SPA &amp; Wellness', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.villa.text_15', 'Relax in our SPA with Turkish bath, sauna and massage room for a unique wellness experience.', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>
        <h4><?php echo sbt_t1_text( 'C.villa.text_16', 'Outdoor Pool', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.villa.text_17', 'Enjoy our swimming pool in the garden, perfect for relaxing and sunbathing.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>
        <h4><?php echo sbt_t1_text( 'C.villa.text_18', 'Park &amp; Garden', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.villa.text_19', 'An oasis of tranquility, ideal for walks and moments of relaxation in the open air.', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg>
        <h4><?php echo sbt_t1_text( 'C.villa.text_20', 'Gym', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.villa.text_21', 'A fully equipped gym to keep you fit even on holiday.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4><?php echo sbt_t1_text( 'C.villa.text_22', 'Free Wi-Fi', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.villa.text_23', 'Free connection in all apartments and common areas.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>
        <h4><?php echo sbt_t1_text( 'C.villa.text_24', 'Equipped Kitchen', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.villa.text_25', 'Each apartment has a complete kitchen to prepare your meals in complete independence.', array( 'multiline' => true ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============ BAND CTA ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/bedroom-2.jpg' ) ); ?>');" data-screen-label="Villa CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.text_26', 'Your private retreat awaits', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.villa.text_27', 'Choose your room in Masseria Le Cerase', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.villa.link_2', 'whole-masseria.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.villa.text_28', 'Explore the masseria', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

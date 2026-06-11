<?php
$PAGE = 'spa';
$CONTENT_KEY = 'spa';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="SPA banner">
  <?php echo sbt_t1_img( 'C.spa.image_1', sbt_t1_asset( 'assets/images/relax-lounge.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.text_1', 'Villa Rosa Resort &amp; SPA', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.spa.text_2', 'SPA &amp; Wellness', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.spa.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.spa.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.spa.text_4', 'SPA &amp; Wellness', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="SPA intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.text_5', 'Awaken body &amp; mind', array( 'multiline' => false ) ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.spa.text_6', 'A sanctuary', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.spa.text_7', 'of well-being', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-reveal">
      <p class="sbtw-body-text" style="max-width:54ch;"><?php echo sbt_t1_text( 'C.spa.text_8', 'Dedicate time to yourself in our wellness centre, an intimate space designed for deep relaxation. Let the warmth of the Turkish bath, the heat of the Finnish sauna and the embrace of the hydromassage melt the day away.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;"><?php echo sbt_t1_text( 'C.spa.text_9', 'From emotional showers to a quiet relax area, every element is crafted to restore balance and leave you renewed — the perfect complement to your Apulian escape.', array( 'multiline' => true ) ); ?></p>
    </div>
  </div>
</section>

<section class="sbtw-feature sbtw-pad" style="padding-top:0;" data-screen-label="SPA features">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.spa.gallery_1.0', sbt_t1_asset( 'assets/images/jacuzzi.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.spa.gallery_2.0', sbt_t1_asset( 'assets/images/hammam.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.spa.gallery_3.0', sbt_t1_asset( 'assets/images/turkish-bath.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.spa.text_10', 'Water &amp; heat', array( 'multiline' => false ) ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.spa.text_11', 'Hydromassage &amp; Turkish bath', array( 'multiline' => false ) ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.spa.text_12', 'Surrender to the warm jets of the hydromassage pool and the enveloping steam of the Turkish bath — a timeless ritual of relaxation.', array( 'multiline' => true ) ); ?></p>
      </div>
    </div>
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.spa.text_13', 'Body &amp; soul', array( 'multiline' => false ) ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.spa.text_14', 'Sauna, massages &amp; Yoga', array( 'multiline' => false ) ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.spa.text_15', 'Finnish sauna, emotional hydroshower, a serene relax area, expert massages and a dedicated Yoga program to reconnect with yourself.', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.spa.gallery_4.0', sbt_t1_asset( 'assets/images/sauna.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.spa.gallery_5.0', sbt_t1_asset( 'assets/images/relax-area.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.spa.gallery_6.0', sbt_t1_asset( 'assets/images/gym.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="SPA amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.text_16', 'The wellness experience', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.spa.text_17', 'Everything for your relaxation', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg><h4><?php echo sbt_t1_text( 'C.spa.text_18', 'Turkish Bath', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.spa.text_19', 'Enveloping steam to purify body and mind.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg><h4><?php echo sbt_t1_text( 'C.spa.text_20', 'Finnish Sauna', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.spa.text_21', 'Dry heat to release tension and restore energy.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg><h4><?php echo sbt_t1_text( 'C.spa.text_22', 'Hydromassage', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.spa.text_23', 'Warm massaging jets for total relaxation.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg><h4><?php echo sbt_t1_text( 'C.spa.text_24', 'Emotional Shower', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.spa.text_25', 'Light, scent and water for a multisensory awakening.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg><h4><?php echo sbt_t1_text( 'C.spa.text_26', 'Relax Area', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.spa.text_27', 'A quiet space to rest between treatments.', array( 'multiline' => false ) ); ?></p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg><h4><?php echo sbt_t1_text( 'C.spa.text_28', 'Gym &amp; Yoga', array( 'multiline' => false ) ); ?></h4><p><?php echo sbt_t1_text( 'C.spa.text_29', 'A fitness space and a dedicated Yoga program.', array( 'multiline' => false ) ); ?></p></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/sauna.jpg' ) ); ?>');" data-screen-label="SPA CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.text_30', 'Reserve your moment', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.spa.text_31', 'Book your wellness experience', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.spa.link_2', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.spa.text_32', 'Contact us', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

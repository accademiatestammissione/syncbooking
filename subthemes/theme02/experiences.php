<?php
$PAGE = 'experiences';
$CONTENT_KEY = 'experiences';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Experiences banner">
  <?php echo sbt_t1_img( 'C.experiences.image_1', sbt_t1_asset( 'assets/images/apulian-breakfast.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_1', 'Masseria Le Cerase &amp; SPA', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.experiences.text_2', 'Experiences', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.experiences.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.experiences.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.experiences.text_4', 'Experiences', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Experiences intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_5', 'Tailor-made for you', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.experiences.text_6', 'Live Puglia, your way', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.experiences.text_7', 'We craft bespoke experiences for every guest, shaped around your tastes and curiosities. From the flavours of the Apulian table to the wonders just beyond our gates, let us design moments you will remember long after you leave.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-exp-grid">
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.experiences.link_2', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.experiences.image_2', sbt_t1_asset( 'assets/images/kitchen-dining.jpg' ), '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_8', 'Taste', array( 'multiline' => false ) ); ?></div><h3><?php echo sbt_t1_text( 'C.experiences.text_9', 'Cooking Classes', array( 'multiline' => false ) ); ?></h3><div class="sbtw-ex-link"><?php echo sbt_t1_text( 'C.experiences.text_10', 'Discover', array( 'multiline' => false ) ); ?> <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.experiences.link_3', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.experiences.image_3', sbt_t1_asset( 'assets/images/bedroom-2.jpg' ), '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_11', 'Cellar', array( 'multiline' => false ) ); ?></div><h3><?php echo sbt_t1_text( 'C.experiences.text_12', 'Wine Tastings', array( 'multiline' => false ) ); ?></h3><div class="sbtw-ex-link"><?php echo sbt_t1_text( 'C.experiences.text_13', 'Discover', array( 'multiline' => false ) ); ?> <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.experiences.link_4', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.experiences.image_4', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_14', 'Discover', array( 'multiline' => false ) ); ?></div><h3><?php echo sbt_t1_text( 'C.experiences.text_15', 'Private Tours', array( 'multiline' => false ) ); ?></h3><div class="sbtw-ex-link"><?php echo sbt_t1_text( 'C.experiences.text_16', 'Discover', array( 'multiline' => false ) ); ?> <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.experiences.link_5', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.experiences.image_5', sbt_t1_asset( 'assets/images/aerial-pool.jpg' ), '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_17', 'Sea', array( 'multiline' => false ) ); ?></div><h3><?php echo sbt_t1_text( 'C.experiences.text_18', 'Coast &amp; Beaches', array( 'multiline' => false ) ); ?></h3><div class="sbtw-ex-link"><?php echo sbt_t1_text( 'C.experiences.text_19', 'Discover', array( 'multiline' => false ) ); ?> <span></span></div></div></a>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Experiences wellness">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:44px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_20', 'Body &amp; soul', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.experiences.text_21', 'Wellness &amp; SPA', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.experiences.text_22', 'Tucked beneath ancient vaults, our wellness centre is a world apart: sauna, Turkish bath, emotional showers, a hydromassage pool and a candle-lit relaxation lounge — plus a fully equipped gym for those who like to keep moving.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.experiences.gallery_1.0', sbt_t1_asset( 'assets/images/jacuzzi.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.experiences.gallery_2.0', sbt_t1_asset( 'assets/images/sauna.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.experiences.gallery_3.0', sbt_t1_asset( 'assets/images/turkish-bath.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.experiences.gallery_4.0', sbt_t1_asset( 'assets/images/relax-lounge.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.experiences.gallery_5.0', sbt_t1_asset( 'assets/images/gym.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.experiences.text_23', 'Show all photos', array( 'multiline' => false ) ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/wellness-corridor.jpg' ) ); ?>');" data-screen-label="Experiences band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_24', 'Unhurried &amp; authentic', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.experiences.text_25', 'The art of living,', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.experiences.text_26', 'Apulian style', array( 'multiline' => false ) ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.experiences.text_27', 'Long lunches under the pergola, sun-warmed stone, and the generous welcome of the South — this is the rhythm of a stay at Masseria Le Cerase.', array( 'multiline' => true ) ); ?></p>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Experiences CTA">
  <div class="sbtw-wrap" style="text-align:center;">
    <div class="sbtw-reveal" style="max-width:620px;margin:0 auto;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.text_28', 'Design your days', array( 'multiline' => false ) ); ?></div>
      <h2 class="sbtw-lead" style="margin-bottom:24px;"><?php echo sbt_t1_text( 'C.experiences.text_29', 'Plan your experiences', array( 'multiline' => false ) ); ?></h2>
      <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.experiences.link_6', 'contacts.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.experiences.text_30', 'Contact us', array( 'multiline' => false ) ); ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

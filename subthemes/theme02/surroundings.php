<?php
$PAGE = 'surroundings';
$CONTENT_KEY = 'surroundings';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Surroundings banner">
  <?php echo sbt_t1_img( 'C.surroundings.image_1', sbt_t1_asset( 'assets/images/conversano-town.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.text_1', 'Conversano &amp; beyond', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.surroundings.text_2', 'Surroundings', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.surroundings.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.surroundings.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.surroundings.text_4', 'Surroundings', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Surroundings intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.text_5', 'In the heart of Puglia', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.surroundings.text_6', 'A region to fall in love with', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.surroundings.text_7', 'Masseria Le Cerase sits in the ancient heart of Conversano, one of Puglia\'s most charming villages, crowned by its Norman-Swabian Castle. From here, the wonders of the region are all within easy reach — whitewashed towns, the trulli of the Itria Valley, and the turquoise Adriatic coast.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-exp-grid">
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.surroundings.link_2', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.surroundings.image_2', sbt_t1_asset( 'assets/images/conversano-castle.jpg' ), '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.text_8', '2 min walk', array( 'multiline' => false ) ); ?></div><h3><?php echo sbt_t1_text( 'C.surroundings.text_9', 'Conversano', array( 'multiline' => false ) ); ?></h3><div class="sbtw-ex-link"><?php echo sbt_t1_text( 'C.surroundings.text_10', 'Discover', array( 'multiline' => false ) ); ?> <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.surroundings.link_3', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.surroundings.image_3', sbt_t1_asset( 'assets/images/masseria-bluehour.jpg' ), '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.text_11', '25 min', array( 'multiline' => false ) ); ?></div><h3><?php echo sbt_t1_text( 'C.surroundings.text_12', 'Polignano a Mare', array( 'multiline' => false ) ); ?></h3><div class="sbtw-ex-link"><?php echo sbt_t1_text( 'C.surroundings.text_13', 'Discover', array( 'multiline' => false ) ); ?> <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.surroundings.link_4', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.surroundings.image_4', sbt_t1_asset( 'assets/images/aerial-garden.jpg' ), '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.text_14', '35 min', array( 'multiline' => false ) ); ?></div><h3><?php echo sbt_t1_text( 'C.surroundings.text_15', 'Alberobello &amp; Itria Valley', array( 'multiline' => false ) ); ?></h3><div class="sbtw-ex-link"><?php echo sbt_t1_text( 'C.surroundings.text_16', 'Discover', array( 'multiline' => false ) ); ?> <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.surroundings.link_5', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.surroundings.image_5', sbt_t1_asset( 'assets/images/facade-vines.jpg' ), '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.text_17', '40 min', array( 'multiline' => false ) ); ?></div><h3><?php echo sbt_t1_text( 'C.surroundings.text_18', 'Bari', array( 'multiline' => false ) ); ?></h3><div class="sbtw-ex-link"><?php echo sbt_t1_text( 'C.surroundings.text_19', 'Discover', array( 'multiline' => false ) ); ?> <span></span></div></div></a>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.text_20', 'Let us guide you', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.surroundings.text_21', 'Discover Puglia with us', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.surroundings.link_6', 'experiences.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.surroundings.text_22', 'See our experiences', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

<?php
$PAGE = 'surroundings';
$PAGE_TITLE = 'Surroundings – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
$p = isset( $C['surroundings'] ) && is_array( $C['surroundings'] ) ? $C['surroundings'] : array();
$surr_imgs = array( 'mf-27.jpg', 'mf-25.jpg', 'mf-13.jpg', 'mf-17.jpg' );
$cards = ( ! empty( $p['cards'] ) && is_array( $p['cards'] ) ) ? $p['cards'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Surroundings banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-25.jpg' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'Surroundings' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.over', $p['over'] ?? 'Conversano &amp; beyond' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.surroundings.h1', $p['h1'] ?? 'Surroundings' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Surroundings' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Surroundings intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.intro_over', $p['intro_over'] ?? 'In the heart of Puglia' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.surroundings.intro_h2', $p['intro_h2'] ?? 'A strategic point for travellers' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.surroundings.intro_p', $p['intro_p'] ?? 'The masseria sits in the middle of the most representative towns of the area — Polignano a Mare, Conversano and Castellana Grotte — and a 15-minute drive from the beautiful trulli of Alberobello, the beaches of Monopoli and the Itria Valley. Explore Apulia\'s masterpieces of art, architecture and gastronomy, and unparalleled fine living.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-exp-grid">
      <?php foreach ( $cards as $ci => $card ) :
        $cimg = $surr_imgs[ $ci ] ?? '';
        $curl = sbt_t1_url( $card['url'] ?? '#' ); ?>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( $curl ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $cimg ) ); ?>" alt="<?php echo esc_attr( $card['h3'] ?? '' ); ?>" /><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.cards.' . $ci . '.over', $card['over'] ?? '' ); ?></div><h3><?php echo sbt_t1_text( 'C.surroundings.cards.' . $ci . '.h3', $card['h3'] ?? '' ); ?></h3><div class="sbtw-ex-link"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?> <span></span></div></div></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-19.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.band_over', $p['band_over'] ?? 'Let us guide you' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.surroundings.band_h2', $p['band_h2'] ?? 'Discover Puglia from Montefieno' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['band_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.surroundings.band_btn', $p['band_btn'] ?? 'Plan your stay' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

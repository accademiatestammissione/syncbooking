<?php
$PAGE = 'surroundings';
$PAGE_TITLE = 'Surroundings – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
$p = isset( $C['surroundings'] ) && is_array( $C['surroundings'] ) ? $C['surroundings'] : array();
$surr_imgs = array( 'conversano-castle.jpg', 'masseria-bluehour.jpg', 'aerial-garden.jpg', 'facade-vines.jpg' );
?>
<section class="sbtw-page-hero" data-screen-label="Surroundings banner">
  <?php echo sbt_t1_img( 'C.surroundings.hero_bg', sbt_gallery_src( ( isset( $C['surroundings']['hero_bg'] ) && $C['surroundings']['hero_bg'] !== '' ) ? $C['surroundings']['hero_bg'] : 'conversano-castle.jpg' ), $SITE['name'] ?? 'Surroundings', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.over', $p['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.surroundings.h1', $p['h1'] ?? 'Surroundings' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Surroundings' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Surroundings intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.intro_over', $p['intro_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.surroundings.intro_h2', $p['intro_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.surroundings.intro_p', $p['intro_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-exp-grid">
      <?php
      $cards = ( ! empty( $p['cards'] ) && is_array( $p['cards'] ) ) ? $p['cards'] : array();
      foreach ( $cards as $ci => $card ) :
        $cimg = $surr_imgs[ $ci ] ?? '';
      ?>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ?? '#' ) ); ?>"><?php echo sbt_t1_img( 'C.surroundings.cards.' . $ci . '.img', sbt_gallery_src( ! empty( $card['img'] ) ? $card['img'] : $cimg ), $card['h3'] ?? '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.cards.' . $ci . '.over', $card['over'] ?? '' ); ?></div><h3><?php echo sbt_t1_text( 'C.surroundings.cards.' . $ci . '.h3', $card['h3'] ?? '' ); ?></h3><div class="sbtw-ex-link"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?> <span></span></div></div></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.band_over', $p['band_over'] ?? 'Let us guide you' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.surroundings.band_h2', $p['band_h2'] ?? 'Discover Puglia with us' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'experiences.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.surroundings.band_btn', $p['band_btn'] ?? 'See our experiences' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

<?php
$PAGE = 'surroundings';
$PAGE_TITLE = 'Surroundings – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$p = isset( $C['surroundings'] ) && is_array( $C['surroundings'] ) ? $C['surroundings'] : array();
$surr_imgs = array(
  sbt_asset_url( 'assets/images/conversano-town.jpg' ),
  'https://commons.wikimedia.org/wiki/Special:FilePath/Lama%20Monachile.jpg?width=1400',
  'https://commons.wikimedia.org/wiki/Special:FilePath/Alberobello%20trulli.JPG?width=1400',
  'https://commons.wikimedia.org/wiki/Special:FilePath/Bari%20-%20Lungomare%20Imperatore%20Augusto%20-%20202109141234.jpg?width=1400',
);
?>
<section class="sbtw-page-hero" data-screen-label="Surroundings banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/conversano-town.jpg' ) ); ?>" alt="<?php echo esc_attr( $SITE['name'] ?? 'Surroundings' ); ?>" />
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
        $cimg = $surr_imgs[ $ci ] ?? ( $card['img'] ?? '' );
      ?>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ?? '#' ) ); ?>"><img src="<?php echo esc_url( $cimg ); ?>" alt="<?php echo esc_attr( $card['h3'] ?? '' ); ?>" /><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.cards.' . $ci . '.over', $card['over'] ?? '' ); ?></div><h3><?php echo sbt_t1_text( 'C.surroundings.cards.' . $ci . '.h3', $card['h3'] ?? '' ); ?></h3><div class="sbtw-ex-link"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?> <span></span></div></div></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('https://commons.wikimedia.org/wiki/Special:FilePath/Lama%20Monachile.jpg?width=1600');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.surroundings.cta_over', $p['cta_over'] ?? 'Let us guide you' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.surroundings.cta_h2', $p['cta_h2'] ?? 'Discover Puglia with us' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'experiences.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.surroundings.cta_btn', $p['cta_btn'] ?? 'See our experiences' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

<?php
$PAGE = 'experiences';
$PAGE_TITLE = 'Experiences – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
$p = isset( $C['experiences'] ) && is_array( $C['experiences'] ) ? $C['experiences'] : array();
$exp_imgs = array( 'kitchen-dining.jpg', 'bedroom-2.jpg', 'courtyard.jpg', 'aerial-pool.jpg' );
?>
<section class="sbtw-page-hero" data-screen-label="Experiences banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/apulian-breakfast.jpg' ) ); ?>" alt="<?php echo esc_attr( $SITE['name'] ?? 'Experiences' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.over', $p['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.experiences.h1', $p['h1'] ?? 'Experiences' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Experiences' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Experiences intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.intro_over', $p['intro_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.experiences.intro_h2', $p['intro_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.experiences.intro_p', $p['intro_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-exp-grid">
      <?php
      $cards = ( ! empty( $p['cards'] ) && is_array( $p['cards'] ) ) ? $p['cards'] : array();
      foreach ( $cards as $ci => $card ) :
        $cimg = $exp_imgs[ $ci ] ?? '';
      ?>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ?? '#' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $cimg ) ); ?>" alt="<?php echo esc_attr( $card['h3'] ?? '' ); ?>" /><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.cards.' . $ci . '.over', $card['over'] ?? '' ); ?></div><h3><?php echo sbt_t1_text( 'C.experiences.cards.' . $ci . '.h3', $card['h3'] ?? '' ); ?></h3><div class="sbtw-ex-link"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?> <span></span></div></div></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Experiences wellness">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:44px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.wellness_over', $p['wellness_over'] ?? 'Body &amp; soul' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.experiences.wellness_h2', $p['wellness_h2'] ?? 'Wellness &amp; SPA' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.experiences.wellness_p', $p['wellness_p'] ?? 'Tucked beneath ancient vaults, our wellness centre is a world apart: sauna, Turkish bath, emotional showers, a hydromassage pool and a candle-lit relaxation lounge - plus a fully equipped gym.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/jacuzzi.png' ) ); ?>" alt="SPA — hydromassage pool" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/sauna.png' ) ); ?>" alt="SPA — sauna" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/turkish-bath.png' ) ); ?>" alt="SPA — Turkish bath" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/relax-lounge.png' ) ); ?>" alt="SPA — relaxation lounge" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/gym.png' ) ); ?>" alt="SPA — gym" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo esc_html( $TEXT['show_all_photos'] ?? 'Show all photos' ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/wellness-corridor.jpg' ) ); ?>');" data-screen-label="Experiences band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.band_over', $p['band_over'] ?? 'Unhurried &amp; authentic' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.experiences.band_h2', $p['band_h2'] ?? 'The art of living,<br/>Apulian style' ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.experiences.band_p', $p['band_p'] ?? 'Long lunches under the pergola, sun-warmed stone, and the generous welcome of the South - this is the rhythm of a stay at Masseria Le Cerase.', array( 'multiline' => true ) ); ?></p>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-dusk.jpg' ) ); ?>');" data-screen-label="Experiences CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.cta_over', $p['cta_over'] ?? 'Design your days' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.experiences.cta_h2', $p['cta_h2'] ?? 'Plan your experiences' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.experiences.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

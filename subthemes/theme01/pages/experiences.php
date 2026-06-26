<?php
$PAGE = 'experiences';
$PAGE_TITLE = 'Experiences – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$p = isset( $C['experiences'] ) && is_array( $C['experiences'] ) ? $C['experiences'] : array();
$exp_imgs = array(
  sbt_asset_url( 'assets/images/interior-039.jpg' ),
  sbt_asset_url( 'assets/images/interior-005.jpg' ),
  'https://commons.wikimedia.org/wiki/Special:FilePath/Alberobello%20trulli.JPG?width=1400',
  'https://commons.wikimedia.org/wiki/Special:FilePath/Lama%20Monachile.jpg?width=1400',
);
?>
<section class="sbtw-page-hero" data-screen-label="Experiences banner">
  <?php echo sbt_t1_img( 'C.experiences.hero_bg', sbt_gallery_src( ( isset( $C['experiences']['hero_bg'] ) && $C['experiences']['hero_bg'] !== '' ) ? $C['experiences']['hero_bg'] : 'apulian-breakfast.jpg' ), $SITE['name'] ?? 'Experiences', array( 'class' => 'sbtw-bg' ) ); ?>
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
        $cimg = $exp_imgs[ $ci ] ?? ( $card['img'] ?? '' );
      ?>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ?? '#' ) ); ?>"><?php echo sbt_t1_img( 'C.experiences.cards.' . $ci . '.img', sbt_gallery_src( ! empty( $card['img'] ) ? $card['img'] : $cimg ), $card['h3'] ?? '', array() ); ?><div class="sbtw-ex-body"><div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.cards.' . $ci . '.over', $card['over'] ?? '' ); ?></div><h3><?php echo sbt_t1_text( 'C.experiences.cards.' . $ci . '.h3', $card['h3'] ?? '' ); ?></h3><div class="sbtw-ex-link"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?> <span></span></div></div></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Experiences wellness">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:44px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.wellness_over', $p['wellness_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.experiences.wellness_h2', $p['wellness_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.experiences.wellness_p', $p['wellness_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-mosaic">
      <?php $sbt_gal = ( ! empty( $p['gallery'] ) && is_array( $p['gallery'] ) ) ? array_values( $p['gallery'] ) : array( 'jacuzzi.png', 'sauna.png', 'turkish-bath.png', 'relax-lounge.png', 'gym.png' ); ?>
      <?php foreach ( $sbt_gal as $gi => $gimg ) : ?>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.experiences.gallery.' . $gi, sbt_gallery_src( $gimg ), ( $p['h1'] ?? ( $SITE['name'] ?? 'Gallery' ) ) . ' ' . ( $gi + 1 ), array( 'data-lightbox' => '' ) ); ?></div>
      <?php endforeach; ?>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo esc_html( $TEXT['show_all_photos'] ?? 'Show all photos' ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/wellness-corridor.jpg' ) ); ?>');" data-screen-label="Experiences band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.band_over', $p['band_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.experiences.band_h2', $p['band_h2'] ?? '' ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.experiences.band_p', $p['band_p'] ?? '', array( 'multiline' => true ) ); ?></p>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Experiences CTA">
  <div class="sbtw-wrap" style="text-align:center;">
    <div class="sbtw-reveal" style="max-width:620px;margin:0 auto;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.experiences.cta_over', $p['cta_over'] ?? '' ); ?></div>
      <h2 class="sbtw-lead" style="margin-bottom:24px;"><?php echo sbt_t1_text( 'C.experiences.cta_h2', $p['cta_h2'] ?? '' ); ?></h2>
      <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>"><?php echo sbt_t1_text( 'C.experiences.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

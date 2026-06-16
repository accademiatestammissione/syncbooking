<?php
$PAGE = 'farm';
$PAGE_TITLE = 'The Farm – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
$p = isset( $C['farm'] ) && is_array( $C['farm'] ) ? $C['farm'] : array();
$shop = $p['shop_url'] ?? 'https://shop.masseriamontefieno.com/';
?>
<section class="sbtw-page-hero" data-screen-label="Farm banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-27.jpg' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'The Farm' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.farm.over', $p['over'] ?? 'Seven hectares of farmland' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.farm.h1', $p['h1'] ?? 'The Farm' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Farm' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Farm intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.farm.intro_over', $p['intro_over'] ?? 'A working estate' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.farm.intro_h2', $p['intro_h2'] ?? 'Old olives, fruit trees, vines' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.farm.intro_p', $p['intro_p'] ?? 'Masseria Montefieno is surrounded by seven hectares of picturesque farmland — centuries-old olive trees and a selection of fruit trees. The land is still worked as it has always been, and its harvest ends up in the bottle.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-two-col" id="olive-oil">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-27.jpg' ) ); ?>" alt="The olive grove" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-11.jpg' ) ); ?>" alt="Among the olive trees" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-13.jpg' ) ); ?>" alt="Dry-stone walls and olives" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.farm.oil_label', $p['oil_label'] ?? 'From our grove' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.farm.oil_h3', $p['oil_h3'] ?? 'Olive Oil' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.farm.oil_p', $p['oil_p'] ?? "Extra-virgin olive oil pressed from the fruit of the estate's centuries-old trees — the same trees that shade your walks and frame the pool. Available from our farm shop.", array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( $shop ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'C.farm.oil_btn', $p['oil_btn'] ?? 'Visit the shop' ); ?></a>
      </div>
    </div>
    <div class="sbtw-two-col" id="wine" style="margin-top:clamp(60px,8vw,110px);">
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.farm.wine_label', $p['wine_label'] ?? 'From our vines' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.farm.wine_h3', $p['wine_h3'] ?? 'Vitus Primitivo Wine' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.farm.wine_p', $p['wine_p'] ?? 'From the vineyards of the estate comes our Vitus Primitivo — a wine with the warmth of the Apulian sun in it, made for long tables and slow evenings.', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( $shop ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'C.farm.wine_btn', $p['wine_btn'] ?? 'Visit the shop' ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-27.jpg' ) ); ?>" alt="The olive grove rows" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-25.jpg' ) ); ?>" alt="The countryside at dusk" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-25.jpg' ) ); ?>');" data-screen-label="Farm CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.farm.cta_over', $p['cta_over'] ?? 'Taste the estate' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.farm.cta_h2', $p['cta_h2'] ?? 'Oil and wine,<br/>born a few steps away' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( $shop ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.farm.cta_btn', $p['cta_btn'] ?? 'Visit the farm shop' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

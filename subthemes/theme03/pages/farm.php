<?php
$PAGE = 'farm';
$PAGE_TITLE = 'The Farm – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Farm banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-27.jpg' ) ); ?>" alt="The olive grove of Masseria Montefieno" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Seven hectares of farmland</div>
    <h1>The Farm</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Farm</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Farm intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">A working estate</div>
      <h2>Old olives, fruit trees, vines</h2>
      <p>Masseria Montefieno is surrounded by seven hectares of picturesque farmland — centuries-old olive trees and a selection of fruit trees. The land is still worked as it has always been, and its harvest ends up in the bottle.</p>
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
        <div class="sbtw-label">From our grove</div>
        <h3>Olive Oil</h3>
        <p class="sbtw-body-text">Extra-virgin olive oil pressed from the fruit of the estate's centuries-old trees — the same trees that shade your walks and frame the pool. Available from our farm shop.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="http://masserialecerase.com/shop" style="margin-top:28px;">Visit the shop</a>
      </div>
    </div>
    <div class="sbtw-two-col" id="wine" style="margin-top:clamp(60px,8vw,110px);">
      <div class="sbtw-reveal">
        <div class="sbtw-label">From our vines</div>
        <h3>Vitus Primitivo Wine</h3>
        <p class="sbtw-body-text">From the vineyards of the estate comes our Vitus Primitivo — a wine with the warmth of the Apulian sun in it, made for long tables and slow evenings.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="http://masserialecerase.com/shop" style="margin-top:28px;">Visit the shop</a>
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
    <div class="sbtw-overline">Taste the estate</div>
    <h2>Oil and wine,<br/>born a few steps away</h2>
    <a class="sbtw-btn sbtw-btn--light" href="http://masserialecerase.com/shop" style="margin-top:8px;">Visit the farm shop</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

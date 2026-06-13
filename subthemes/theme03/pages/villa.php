<?php
$PAGE = 'villa';
$PAGE_TITLE = 'The Masseria – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
?>
<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Masseria banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-05.jpg' ) ); ?>" alt="Masseria Montefieno" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Masseria Montefieno</div>
    <h1>The Masseria</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Masseria</nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Masseria intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline">Restored stone, Apulian soul</div>
      <h2 class="sbtw-lead">Everywhere,<br/>silence and stillness</h2>
    </div>
    <div class="sbtw-reveal">
      <p class="sbtw-body-text" style="max-width:54ch;">Masseria Montefieno is situated in an idyllic location in the Puglia countryside, surrounded by seven hectares of picturesque farmland of old olive trees and a selection of fruit trees.</p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;">The main structure consists of three bedrooms — all beautifully restored stone with special decoration typical of Puglia — two kitchens, three bathrooms, a large living room and three outdoor areas. The second house, 120 metres from the masseria, is composed of one bedroom, one bathroom and its own outdoor area.</p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;">Each room has been inspired by the elegance of the simple traditions of Puglia, and all enjoy magnificent views of the surrounding countryside of centuries-old olive groves.</p>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad-s" style="padding-top:0;" data-screen-label="Masseria gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-gallery">
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-00.jpg' ) ); ?>" alt="Stone detail of the interiors" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-01.jpg' ) ); ?>" alt="The living room" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-03.jpg' ) ); ?>" alt="The kitchen and dining room" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-07.jpg' ) ); ?>" alt="Stone archways" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-04.jpg' ) ); ?>" alt="The veranda" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-08.jpg' ) ); ?>" alt="The pergola" />
    </div>
  </div>
</section>

<!-- ============ AMENITIES ============ -->
<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Masseria amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Comfort &amp; independence</div>
      <h2>Every detail, designed for you</h2>
      <p>Everything you need for an independent stay in the countryside — provided with the care of a family home.</p>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>
        <h4>Pool</h4>
        <p>A pool among the olive trees, with loungers and a large pool towel provided per person.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>
        <h4>Park &amp; Olive Grove</h4>
        <p>Seven hectares of olive and fruit trees, ideal for walks and quiet moments in the open air.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>
        <h4>Equipped Kitchens</h4>
        <p>Fridge, dishwasher, oven and hob, coffee machine, toaster and tea — in both kitchens.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg>
        <h4>Laundry &amp; Ironing</h4>
        <p>Washing machine, ironing board and clothes hanger at your disposal.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4>Free Wi-Fi</h4>
        <p>Connection in the houses and common areas.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg>
        <h4>Linen &amp; Towels</h4>
        <p>Bed linen with three towels per person, and a professional hairdryer in every bathroom.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ BAND CTA ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-06.jpg' ) ); ?>');" data-screen-label="Masseria CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Your private retreat awaits</div>
    <h2>Stay at Masseria Montefieno</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'whole-masseria.php' ) ); ?>" style="margin-top:8px;">Explore the masseria</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

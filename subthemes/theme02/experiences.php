<?php
$PAGE = 'experiences';
$PAGE_TITLE = 'Experiences – Masseria Le Cerase';
require __DIR__ . '/inc/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Experiences banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/apulian-breakfast.jpg' ) ); ?>" alt="Experiences" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Masseria Le Cerase &amp; SPA</div>
    <h1>Experiences</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Experiences</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Experiences intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Tailor-made for you</div>
      <h2>Live Puglia, your way</h2>
      <p>We craft bespoke experiences for every guest, shaped around your tastes and curiosities. From the flavours of the Apulian table to the wonders just beyond our gates, let us design moments you will remember long after you leave.</p>
    </div>
    <div class="sbtw-exp-grid">
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:cooking-classes' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/kitchen-dining.jpg' ) ); ?>" alt="Cooking Classes" /><div class="sbtw-ex-body"><div class="sbtw-overline">Taste</div><h3>Cooking Classes</h3><div class="sbtw-ex-link">Discover <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:wine-tastings' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Wine Tastings" /><div class="sbtw-ex-body"><div class="sbtw-overline">Cellar</div><h3>Wine Tastings</h3><div class="sbtw-ex-link">Discover <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:private-tours' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Private Tours" /><div class="sbtw-ex-body"><div class="sbtw-overline">Discover</div><h3>Private Tours</h3><div class="sbtw-ex-link">Discover <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:coast-beaches' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="Coast & Beaches" /><div class="sbtw-ex-body"><div class="sbtw-overline">Sea</div><h3>Coast &amp; Beaches</h3><div class="sbtw-ex-link">Discover <span></span></div></div></a>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Experiences wellness">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:44px;">
      <div class="sbtw-overline">Body &amp; soul</div>
      <h2>Wellness &amp; SPA</h2>
      <p>Tucked beneath ancient vaults, our wellness centre is a world apart: sauna, Turkish bath, emotional showers, a hydromassage pool and a candle-lit relaxation lounge — plus a fully equipped gym for those who like to keep moving.</p>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/jacuzzi.png' ) ); ?>" alt="Masseria Le Cerase SPA — hydromassage pool" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/sauna.png' ) ); ?>" alt="Masseria Le Cerase SPA — sauna" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/turkish-bath.png' ) ); ?>" alt="Masseria Le Cerase SPA — Turkish bath" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/relax-lounge.png' ) ); ?>" alt="Masseria Le Cerase SPA — relaxation lounge" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/gym.png' ) ); ?>" alt="Masseria Le Cerase SPA — gym" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>Show all photos</button>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/wellness-corridor.jpg' ) ); ?>');" data-screen-label="Experiences band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Unhurried &amp; authentic</div>
    <h2>The art of living,<br/>Apulian style</h2>
    <p>Long lunches under the pergola, sun-warmed stone, and the generous welcome of the South — this is the rhythm of a stay at Masseria Le Cerase.</p>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Experiences CTA">
  <div class="sbtw-wrap" style="text-align:center;">
    <div class="sbtw-reveal" style="max-width:620px;margin:0 auto;">
      <div class="sbtw-overline">Design your days</div>
      <h2 class="sbtw-lead" style="margin-bottom:24px;">Plan your experiences</h2>
      <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>">Contact us</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

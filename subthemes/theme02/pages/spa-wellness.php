<?php
$PAGE = 'spa-wellness';
$PAGE_TITLE = 'SPA &amp; Wellness – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="SPA banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/relax-lounge.png' ) ); ?>" alt="SPA & Wellness" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Masseria Le Cerase &amp; SPA</div>
    <h1>SPA &amp; Wellness</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>SPA &amp; Wellness</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="SPA intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline">Awaken body &amp; mind</div>
      <h2 class="sbtw-lead">A sanctuary<br/>of well-being</h2>
    </div>
    <div class="sbtw-reveal">
      <p class="sbtw-body-text" style="max-width:54ch;">Dedicate time to yourself in our wellness centre, an intimate space designed for deep relaxation. Let the warmth of the Turkish bath, the heat of the Finnish sauna and the embrace of the hydromassage melt the day away.</p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;">From emotional showers to a quiet relax area, every element is crafted to restore balance and leave you renewed — the perfect complement to your Apulian escape.</p>
    </div>
  </div>
</section>

<section class="sbtw-feature sbtw-pad" style="padding-top:0;" data-screen-label="SPA features">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/great-hall.jpg' ) ); ?>" alt="Hydromassage & Turkish bath" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Hydromassage pool" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Relax room" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label">Water &amp; heat</div>
        <h3>Hydromassage &amp; Turkish bath</h3>
        <p class="sbtw-body-text">Surrender to the warm jets of the hydromassage pool and the enveloping steam of the Turkish bath — a timeless ritual of relaxation.</p>
      </div>
    </div>
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-label">Body &amp; soul</div>
        <h3>Sauna, massages &amp; Yoga</h3>
        <p class="sbtw-body-text">Finnish sauna, emotional hydroshower, a serene relax area, expert massages and a dedicated Yoga program to reconnect with yourself.</p>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Sauna, massages & Yoga" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Wellness area" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="Garden spa" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="SPA amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">The wellness experience</div>
      <h2>Everything for your relaxation</h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg><h4>Turkish Bath</h4><p>Enveloping steam to purify body and mind.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg><h4>Finnish Sauna</h4><p>Dry heat to release tension and restore energy.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg><h4>Hydromassage</h4><p>Warm massaging jets for total relaxation.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg><h4>Emotional Shower</h4><p>Light, scent and water for a multisensory awakening.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg><h4>Relax Area</h4><p>A quiet space to rest between treatments.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg><h4>Gym &amp; Yoga</h4><p>A fitness space and a dedicated Yoga program.</p></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/sauna.png' ) ); ?>');" data-screen-label="SPA CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Reserve your moment</div>
    <h2>Book your wellness experience</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

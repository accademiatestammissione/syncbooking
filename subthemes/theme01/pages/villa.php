<?php
$PAGE = 'villa';
$PAGE_TITLE = 'Villa – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
?>
<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Villa banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="Villa Rosa Resort" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Villa Rosa Resort &amp; SPA</div>
    <h1>The Villa</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Villa</nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Villa intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline">The luxury of feeling at home</div>
      <h2 class="sbtw-lead">On holiday,<br/>just like at home</h2>
    </div>
    <div class="sbtw-reveal">
      <p class="sbtw-body-text" style="max-width:54ch;">Privacy, confidentiality, serenity and five-star comfort. The new luxury when it comes to holidays is giving yourself more freedom: the possibility of having an entire house at your disposal, to enjoy a fully relaxing stay.</p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;">In the centre of the most beautiful Puglia, in the ancient heart of Conversano, in the park of a historic villa, having a house available is the ideal solution for those looking for a secluded, independent and even more exclusive stay.</p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;">Attention to detail, refined design, a mix of modern and ancient, a stone's throw from monuments and shops — the houses of Villa Rosa, with private external pergolas, also offer the typical comforts of a resort.</p>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad-s" style="padding-top:0;" data-screen-label="Villa gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-gallery">
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-067.jpg' ) ); ?>" alt="Villa Rosa interior" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-001.jpg' ) ); ?>" alt="Villa Rosa detail" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-048.jpg' ) ); ?>" alt="Villa Rosa room" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-094.jpg' ) ); ?>" alt="Villa Rosa living" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="Villa Rosa garden" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="Villa Rosa pool" />
    </div>
  </div>
</section>

<!-- ============ AMENITIES ============ -->
<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Villa amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Wellness, comfort &amp; independence</div>
      <h2>Every detail, designed for you</h2>
      <p>A wide range of services for your comfort and relaxation — all designed to guarantee maximum comfort and a truly unique experience.</p>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg>
        <h4>SPA &amp; Wellness</h4>
        <p>Relax in our SPA with Turkish bath, sauna and massage room for a unique wellness experience.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>
        <h4>Outdoor Pool</h4>
        <p>Enjoy our swimming pool in the garden, perfect for relaxing and sunbathing.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>
        <h4>Park &amp; Garden</h4>
        <p>An oasis of tranquility, ideal for walks and moments of relaxation in the open air.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg>
        <h4>Gym</h4>
        <p>A fully equipped gym to keep you fit even on holiday.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4>Free Wi-Fi</h4>
        <p>Free connection in all apartments and common areas.</p>
      </div>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>
        <h4>Equipped Kitchen</h4>
        <p>Each apartment has a complete kitchen to prepare your meals in complete independence.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ BAND CTA ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>');" data-screen-label="Villa CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Your private retreat awaits</div>
    <h2>Choose your house in Villa Rosa</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'houses.php' ) ); ?>" style="margin-top:8px;">Explore the houses</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

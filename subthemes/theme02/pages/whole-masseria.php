<?php
$PAGE = 'whole-masseria';
$PAGE_TITLE = 'The Whole Masseria – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
$p = isset( $C['whole'] ) && is_array( $C['whole'] ) ? $C['whole'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Whole masseria banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'The Whole Masseria' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.over', $p['over'] ?? 'Exclusive use' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.whole.h1', $p['h1'] ?? 'The Whole Masseria' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $TEXT['accommodation'] ?? 'Accommodation' ); ?><span>/</span><?php echo esc_html( $p['h1'] ?? 'The Whole Masseria' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Whole masseria overview">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <?php $sld = ( ! empty( $p['sld0_imgs'] ) && is_array( $p['sld0_imgs'] ) ) ? array_values( $p['sld0_imgs'] ) : array( 'aerial-pool.jpg', 'masseria-dusk.jpg', 'great-hall.jpg', 'courtyard.jpg', 'pool-pergola.jpg' ); ?>
        <?php foreach ( $sld as $si => $sim ) : ?>
        <?php echo sbt_t1_img( 'C.whole.sld0_imgs.' . $si, sbt_gallery_src( $sim ), 'The whole estate from above ' . ( $si + 1 ), array( 'data-lightbox' => '' ) ); ?>
        <?php endforeach; ?>
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.ov_over', $p['ov_over'] ?? 'One booking, the entire estate' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.whole.ov_h2', $p['ov_h2'] ?? 'The masseria, yours alone' ); ?></h2>
      <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.whole.ov_p', $p['ov_p'] ?? 'The estate is rented in its entirety: all five bedrooms, the vaulted halls, the country kitchen, the pool and the gardens — reserved exclusively for your party. No other guests, no shared spaces. Just your own seventeenth-century masseria among the olive groves.', array( 'multiline' => true ) ); ?></p>
      <?php $specs = ( ! empty( $p['specs'] ) && is_array( $p['specs'] ) ) ? $p['specs'] : array(); ?>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <?php foreach ( $specs as $si => $spec ) : ?>
        <li><span><?php echo sbt_t1_text( 'C.whole.specs.' . $si . '.0', $spec[0] ?? '' ); ?></span><b><?php echo sbt_t1_text( 'C.whole.specs.' . $si . '.1', $spec[1] ?? '' ); ?></b></li>
        <?php endforeach; ?>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( $p['act_url'] ?? 'contacts.php' ) ); ?>"><?php echo sbt_t1_text( 'C.whole.act_avail', $p['act_avail'] ?? 'Request availability' ); ?></a>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'price-and-condition.php' ) ); ?>"><?php echo sbt_t1_text( 'C.whole.act_price', $p['act_price'] ?? 'Price &amp; condition' ); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s sbtw-surface" style="background:var(--surface);" data-screen-label="Whole masseria gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.gallery_over', $p['gallery_over'] ?? 'A look around' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.whole.gallery_h2', $p['gallery_h2'] ?? 'The estate, in detail' ); ?></h2>
    </div>
    <div class="sbtw-mosaic">
      <?php $sbt_gal = ( ! empty( $p['gallery'] ) && is_array( $p['gallery'] ) ) ? array_values( $p['gallery'] ) : array( 'aerial-garden.jpg', 'great-hall.jpg', 'salone-volte.jpg', 'pool-pergola.jpg', 'bedroom-1.jpg' ); ?>
      <?php foreach ( $sbt_gal as $gi => $gimg ) : ?>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.whole.gallery.' . $gi, sbt_gallery_src( $gimg ), ( $p['h1'] ?? ( $SITE['name'] ?? 'Gallery' ) ) . ' ' . ( $gi + 1 ), array( 'data-lightbox' => '' ) ); ?></div>
      <?php endforeach; ?>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"></rect><rect x="14" y="3" width="7" height="7" rx="1"></rect><rect x="3" y="14" width="7" height="7" rx="1"></rect><rect x="14" y="14" width="7" height="7" rx="1"></rect></svg><?php echo esc_html( $TEXT['show_all_photos'] ?? 'Show all photos' ); ?></button>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="Whole masseria included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.inc_over', $p['inc_over'] ?? 'What\'s included' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.whole.inc_h2', $p['inc_h2'] ?? 'Everything, exclusively yours' ); ?></h2>
    </div>
    <?php
    $inc_svgs = array(
      '<svg viewBox="0 0 24 24"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"></path></svg>',
      '<svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"></path><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"></path><path d="M8 13V5a2 2 0 0 1 4 0"></path></svg>',
      '<svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"></path><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"></path></svg>',
      '<svg viewBox="0 0 24 24"><path d="M3 21V7l9-4 9 4v14M7 21v-8h10v8"></path></svg>',
      '<svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"></path><path d="M8 15.5a6 6 0 0 1 8 0"></path><circle cx="12" cy="19" r="1"></circle></svg>',
      '<svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"></path><path d="M3 15h18v3H3z"></path><circle cx="7" cy="18" r="1.4"></circle><circle cx="17" cy="18" r="1.4"></circle></svg>',
    );
    $included = ( ! empty( $p['whole_included'] ) && is_array( $p['whole_included'] ) ) ? $p['whole_included'] : array();
    ?>
    <div class="sbtw-amenity-grid">
      <?php foreach ( $included as $ii => $inc ) : ?>
      <div class="sbtw-amenity sbtw-reveal"><?php echo $inc_svgs[ $ii ] ?? ''; ?><h4><?php echo sbt_t1_text( 'C.whole.whole_included.' . $ii . '.h4', $inc['h4'] ?? '' ); ?></h4><p><?php echo sbt_t1_text( 'C.whole.whole_included.' . $ii . '.p', $inc['p'] ?? '', array( 'multiline' => true ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-dusk.jpg' ) ); ?>');" data-screen-label="Whole masseria CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.whole.cta_over', $p['cta_over'] ?? 'Ready when you are' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.whole.cta_h2', $p['cta_h2'] ?? 'Reserve the whole masseria' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.whole.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

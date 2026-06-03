<?php $PAGE = 'houses'; $PAGE_TITLE = $C['price']['title']; require __DIR__ . '/inc/header.php'; $p = $C['price']; ?>

<section class="page-hero" data-screen-label="Price banner">
  <img class="bg" src="<?= $p['banner'] ?>" alt="<?= $p['h1'] ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span><a href="<?= function_exists('sbt_url') ? sbt_url('houses.php') : 'houses.php' ?>"><?= $TEXT['houses'] ?? 'Houses' ?></a><span>/</span><?= $TEXT['price_condition'] ?? 'Price &amp; Condition' ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Price intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2><?= $p['intro_h2'] ?></h2>
      <p><?= $p['intro_p'] ?></p>
    </div>
    <div class="price-grid">
      <?php foreach ($p['cards'] as $c): ?>
      <div class="price-card reveal">
        <div class="pc-name"><?= $c['name'] ?></div>
        <div class="pc-from"><?= $c['from'] ?></div>
        <div class="pc-price">€<?= $c['price'] ?> <small><?= $c['unit'] ?></small></div>
        <ul>
          <?php foreach ($c['feats'] as $f): ?><li><?= $f ?></li><?php endforeach; ?>
        </ul>
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:6px;"><?= $TEXT['request_quote'] ?? 'Request a quote' ?></a>
      </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center;color:var(--muted);font-size:13.5px;margin-top:28px;">Indicative starting rates per night. Final price depends on season, length of stay and occupancy.</p>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Conditions">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['cond_over'] ?></div>
      <h2><?= $p['cond_h2'] ?></h2>
    </div>
    <dl class="cond-list reveal">
      <?php foreach ($p['conditions'] as $c): ?>
      <div class="row"><dt><?= $c[0] ?></dt><dd><?= $c[1] ?></dd></div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>

<section class="pad-s" data-screen-label="Price gallery">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:40px;">
      <div class="overline">Included in every stay</div>
      <h2>The wellness centre</h2>
    </div>
    <div class="mosaic">
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/jacuzzi.png') : 'assets/images/jacuzzi.png' ?>" alt="Villa Rosa SPA — hydromassage pool" /></div>
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/sauna.png') : 'assets/images/sauna.png' ?>" alt="Villa Rosa SPA — sauna" /></div>
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/turkish-bath.png') : 'assets/images/turkish-bath.png' ?>" alt="Villa Rosa SPA — Turkish bath" /></div>
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/relax-lounge.png') : 'assets/images/relax-lounge.png' ?>" alt="Villa Rosa SPA — relaxation lounge" /></div>
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/gym.png') : 'assets/images/gym.png' ?>" alt="Villa Rosa SPA — gym" /></div>
      <button class="m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>Show all photos</button>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $IMG['villa'] ?>');" data-screen-label="Price CTA">
  <div class="inner reveal">
    <div class="overline">Tailored to your dates</div>
    <h2><?= $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;"><?= $p['cta_btn'] ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

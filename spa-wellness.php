<?php $PAGE = 'spa'; require __DIR__ . '/inc/header.php'; $p = $C['spa']; ?>

<section class="page-hero" data-screen-label="SPA banner">
  <img class="bg" src="<?= $p['banner'] ?>" alt="<?= $p['h1'] ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?></a><span>/</span>SPA &amp; Wellness</nav>
  </div>
</section>

<section class="pad" data-screen-label="SPA intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2><?= $p['intro_h2'] ?></h2>
      <p><?= $p['intro_p'] ?></p>
    </div>
  </div>
</section>

<section class="feature" style="padding-bottom:clamp(80px,11vw,150px);" data-screen-label="SPA features">
  <div class="wrap">
    <?php foreach ($p['feat_rows'] as $i => $r): ?>
    <div class="two-col"<?= $i ? ' style="margin-top:clamp(60px,8vw,110px);"' : '' ?>>
      <?php if ($i % 2 === 0): ?>
      <div class="media reveal"><img src="<?= $r['img'] ?>" alt="<?= $r['h3'] ?>" /><div class="frame"></div></div>
      <div class="reveal"><div class="label"><?= $r['label'] ?></div><h3><?= $r['h3'] ?></h3><p class="body-text"><?= $r['p'] ?></p></div>
      <?php else: ?>
      <div class="reveal"><div class="label"><?= $r['label'] ?></div><h3><?= $r['h3'] ?></h3><p class="body-text"><?= $r['p'] ?></p></div>
      <div class="media reveal"><img src="<?= $r['img'] ?>" alt="<?= $r['h3'] ?>" /><div class="frame"></div></div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="SPA amenities">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['am_over'] ?></div>
      <h2><?= $p['am_h2'] ?></h2>
    </div>
    <div class="amenity-grid">
      <?php foreach ($p['amenities'] as $a): ?>
      <div class="amenity reveal"><svg viewBox="0 0 24 24"><?= $ICON[$a[0]] ?></svg><h4><?= $a[1] ?></h4><p><?= $a[2] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $p['cta_bg'] ?>');" data-screen-label="SPA CTA">
  <div class="inner reveal">
    <div class="overline"><?= $p['cta_over'] ?></div>
    <h2><?= $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;"><?= $p['cta_btn'] ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

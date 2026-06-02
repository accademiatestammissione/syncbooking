<?php $PAGE = 'villa'; require __DIR__ . '/inc/header.php'; $p = $C['villa']; ?>

<section class="page-hero" data-screen-label="Villa banner">
  <img class="bg" src="<?= $p['banner'] ?>" alt="<?= $p['h1'] ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?></a><span>/</span>Villa</nav>
  </div>
</section>

<section class="pad" data-screen-label="Villa intro">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2 class="lead"><?= $p['intro_h2'] ?></h2>
    </div>
    <div class="reveal">
      <?php foreach ($p['intro_p'] as $i => $par): ?>
        <p class="body-text"<?= $i ? ' style="margin-top:18px;"' : ' style="max-width:54ch;"' ?>><?= $par ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pad-s" style="padding-top:0;" data-screen-label="Villa gallery">
  <div class="wrap">
    <div class="gallery">
      <?php foreach ($p['gallery'] as $g): ?><img data-lightbox src="<?= $g ?>" alt="Villa Rosa" /><?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Villa amenities">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['am_over'] ?></div>
      <h2><?= $p['am_h2'] ?></h2>
      <p><?= $p['am_p'] ?></p>
    </div>
    <div class="amenity-grid">
      <?php foreach ($p['amenities'] as $a): ?>
      <div class="amenity reveal"><svg viewBox="0 0 24 24"><?= $ICON[$a[0]] ?></svg><h4><?= $a[1] ?></h4><p><?= $a[2] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $p['cta_bg'] ?>');" data-screen-label="Villa CTA">
  <div class="inner reveal">
    <div class="overline"><?= $p['cta_over'] ?></div>
    <h2><?= $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= $p['cta_url'] ?>" style="margin-top:8px;"><?= $p['cta_btn'] ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

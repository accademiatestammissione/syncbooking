<?php $PAGE = 'houses'; require __DIR__ . '/inc/header.php'; $p = $C['price']; ?>

<section class="page-hero" data-screen-label="Price banner">
  <img class="bg" src="<?= $p['banner'] ?>" alt="<?= $p['h1'] ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?></a><span>/</span><a href="<?= function_exists('sbt_url') ? sbt_url('houses.php') : 'houses.php' ?>"><?= $TEXT['houses'] ?></a><span>/</span>Price &amp; Condition</nav>
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
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:6px;"><?= $TEXT['request_quote'] ?></a>
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

<section class="band" style="background-image:url('<?= $IMG['villa'] ?>');" data-screen-label="Price CTA">
  <div class="inner reveal">
    <div class="overline">Tailored to your dates</div>
    <h2><?= $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;"><?= $p['cta_btn'] ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

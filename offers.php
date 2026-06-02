<?php $PAGE = 'offers'; require __DIR__ . '/inc/header.php'; $p = $C['offers']; ?>

<section class="page-hero" data-screen-label="Offers banner">
  <img class="bg" src="<?= $p['banner'] ?>" alt="<?= $p['h1'] ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?></a><span>/</span>Offers</nav>
  </div>
</section>

<section class="pad" data-screen-label="Offers body">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2><?= $p['intro_h2'] ?></h2>
      <p><?= $p['intro_p'] ?></p>
    </div>
    <div class="offer-grid">
      <?php foreach ($p['cards'] as $c): ?>
      <article class="offer-card reveal">
        <img src="<?= $c['img'] ?>" alt="<?= $c['h3'] ?>" />
        <div class="oc-body">
          <span class="badge"><?= $c['badge'] ?></span>
          <h3><?= $c['h3'] ?></h3>
          <p><?= $c['p'] ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $IMG['villa'] ?>');" data-screen-label="Offers CTA">
  <div class="inner reveal">
    <div class="overline"><?= $p['cta_over'] ?></div>
    <h2><?= $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;"><?= $p['cta_btn'] ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

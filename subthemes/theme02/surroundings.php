<?php $PAGE = 'surroundings'; require __DIR__ . '/inc/header.php'; $p = $C['surroundings']; ?>

<section class="page-hero" data-screen-label="Surroundings banner">
  <img class="bg" src="<?= $IMG['surr_hero'] ?>" alt="<?= strip_tags($p['h1']) ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>">Home</a><span>/</span><?= strip_tags($p['h1']) ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Surroundings intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2><?= $p['intro_h2'] ?></h2>
      <p><?= $p['intro_p'] ?></p>
    </div>
    <div class="exp-grid">
      <?php foreach ($DESTINATIONS as $d): ?>
      <article class="exp reveal"><img src="<?= $d[2] ?>" alt="<?= strip_tags($d[1]) ?>" /><div class="ex-body"><div class="overline"><?= $d[0] ?></div><h3><?= $d[1] ?></h3></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $IMG['band'] ?>');" data-screen-label="Surroundings band">
  <div class="inner reveal">
    <div class="overline"><?= $p['band_over'] ?></div>
    <h2><?= $p['band_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('hospitality.php') : 'hospitality.php' ?>" style="margin-top:8px;">Our experiences</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

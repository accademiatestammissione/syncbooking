<?php $PAGE = 'events'; require __DIR__ . '/inc/header.php'; $p = $C['partys']; ?>

<section class="page-hero" data-screen-label="Partys banner">
  <img class="bg" src="<?= $IMG['partys_hero'] ?>" alt="<?= strip_tags($p['h1']) ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>">Home</a><span>/</span><a href="<?= function_exists('sbt_url') ? sbt_url('events-weddings.php') : 'events-weddings.php' ?>">Events &amp; Weddings</a><span>/</span><?= strip_tags($p['h1']) ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Partys intro">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2 class="lead"><?= $p['intro_h2'] ?></h2>
    </div>
    <div class="reveal">
      <p class="body-text" style="max-width:54ch;"><?= $p['intro_p1'] ?></p>
      <p class="body-text" style="max-width:54ch;margin-top:18px;"><?= $p['intro_p2'] ?></p>
      <a class="btn" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:30px;">Plan your event</a>
    </div>
  </div>
</section>

<section class="services pad" data-screen-label="Partys formats">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['formats_over'] ?></div>
      <h2><?= $p['formats_h2'] ?></h2>
    </div>
    <div class="svc-grid cols-3">
      <?php foreach ($PARTY_FORMATS as $f): ?>
      <div class="svc reveal">
        <svg viewBox="0 0 24 24"><?= $ICON[$f[0]] ?></svg>
        <h4><?= $f[1] ?></h4>
        <p><?= $f[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $IMG['band'] ?>');" data-screen-label="Partys CTA">
  <div class="inner reveal">
    <div class="overline">Tailor-made</div>
    <h2>Host your event with us</h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

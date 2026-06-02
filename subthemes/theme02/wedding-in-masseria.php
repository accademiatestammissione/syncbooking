<?php $PAGE = 'events'; require __DIR__ . '/inc/header.php'; $p = $C['wedding']; ?>

<section class="page-hero" data-screen-label="Wedding banner">
  <img class="bg" src="<?= $IMG['wedding_hero'] ?>" alt="<?= strip_tags($p['h1']) ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>">Home</a><span>/</span><a href="<?= function_exists('sbt_url') ? sbt_url('events-weddings.php') : 'events-weddings.php' ?>">Events &amp; Weddings</a><span>/</span><?= strip_tags($p['h1']) ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Wedding intro">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2 class="lead"><?= $p['intro_h2'] ?></h2>
    </div>
    <div class="reveal">
      <p class="body-text" style="max-width:54ch;"><?= $p['intro_p1'] ?></p>
      <p class="body-text" style="max-width:54ch;margin-top:18px;"><?= $p['intro_p2'] ?></p>
      <a class="btn" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:30px;">Request a proposal</a>
    </div>
  </div>
</section>

<section style="padding-bottom:clamp(80px,11vw,150px);" data-screen-label="Wedding gallery">
  <div class="wrap">
    <div class="gallery">
      <?php foreach ($WEDDING_GALLERY as $g): ?><img data-lightbox src="<?= $g ?>" alt="Wedding at <?= $SITE['name'] ?>" /><?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $IMG['events_hero'] ?>');" data-screen-label="Wedding CTA">
  <div class="inner reveal">
    <div class="overline"><?= $p['cta_over'] ?></div>
    <h2><?= $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

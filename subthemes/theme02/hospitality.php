<?php $PAGE = 'hospitality'; require __DIR__ . '/inc/header.php'; $p = $C['hospitality']; ?>

<section class="page-hero" data-screen-label="Hospitality banner">
  <img class="bg" src="<?php echo $IMG['hosp_hero'] ?>" alt="<?php echo strip_tags($p['h1']) ?>" />
  <div class="wrap">
    <div class="overline"><?php echo $p['over'] ?></div>
    <h1><?php echo $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>">Home</a><span>/</span><?php echo strip_tags($p['h1']) ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Your stay">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?php echo $p['stay_over'] ?></div>
      <h2 class="lead"><?php echo $p['stay_h2'] ?></h2>
    </div>
    <div class="reveal">
      <p class="body-text" style="max-width:54ch;"><?php echo $p['stay_p1'] ?></p>
      <p class="body-text" style="max-width:54ch;margin-top:18px;"><?php echo $p['stay_p2'] ?></p>
    </div>
  </div>
</section>

<section style="padding-bottom:clamp(80px,11vw,150px);" data-screen-label="Gallery">
  <div class="wrap">
    <div class="gallery">
      <?php foreach ($GALLERY as $g): ?><img data-lightbox src="<?php echo $g ?>" alt="<?php echo $SITE['name'] ?>" /><?php endforeach; ?>
    </div>
  </div>
</section>

<section class="services pad" data-screen-label="Services">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline">Comfort &amp; Care</div>
      <h2>Services</h2>
    </div>
    <div class="svc-grid cols-3">
      <?php foreach ($SERVICES as $s): ?>
      <div class="svc reveal">
        <svg viewBox="0 0 24 24"><?php echo $ICON[$s[0]] ?></svg>
        <h4><?php echo $s[1] ?></h4>
        <p><?php echo $s[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Apulian Experience">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline">Apulian Experience</div>
      <h2>Experiences in &amp; around the Masseria</h2>
    </div>
    <div class="exp-grid">
      <?php foreach ($EXPERIENCES as $e): ?>
      <article class="exp reveal"><img src="<?php echo $IMG[$e[2]] ?>" alt="<?php echo strip_tags($e[1]) ?>" /><div class="ex-body"><div class="overline"><?php echo $e[0] ?></div><h3><?php echo $e[1] ?></h3></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?php echo $IMG['teaser_hospitality'] ?>');" data-screen-label="Hospitality CTA">
  <div class="inner reveal">
    <div class="overline"><?php echo $p['cta_over'] ?></div>
    <h2><?php echo $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?php echo function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

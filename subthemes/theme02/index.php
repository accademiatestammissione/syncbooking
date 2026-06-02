<?php $PAGE = 'home'; require __DIR__ . '/inc/header.php'; $p = $C['home']; ?>

<!-- HERO -->
<section class="hero" id="top" data-screen-label="Hero">
  <div class="hero-video" style="background-image:url('<?= $IMG['band'] ?>');">
    <iframe src="https://www.youtube.com/embed/<?= $SITE['youtube'] ?>?autoplay=1&controls=0&mute=1&loop=1&playlist=<?= $SITE['youtube'] ?>&disablekb=1&modestbranding=1&playsinline=1&rel=0&background=1" allow="autoplay; fullscreen" title="<?= $SITE['name'] ?>"></iframe>
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="overline"><?= $p['hero_over'] ?></div>
    <h1><?= $p['hero_h1'] ?></h1>
    <p class="sub"><?= $p['hero_sub'] ?></p>
  </div>
  <div class="scrolldown"><span>Scroll</span><span class="line"></span></div>
</section>

<!-- WELCOME -->
<section class="pad" id="welcome" data-screen-label="Welcome">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?= $p['welcome_over'] ?></div>
      <h2 class="lead"><?= $p['welcome_h2'] ?></h2>
      <p class="body-text"><?= $p['welcome_p1'] ?></p>
      <p class="body-text" style="margin-top:18px;"><?= $p['welcome_p2'] ?></p>
      <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url('hospitality.php') : 'hospitality.php' ?>" style="margin-top:30px;">Discover the Masseria</a>
    </div>
    <div class="media reveal">
      <img src="<?= $IMG['welcome'] ?>" alt="<?= $SITE['name'] ?>" />
      <div class="frame"></div>
      <div class="stamp">Since<br>the 1600s</div>
    </div>
  </div>
</section>

<!-- TEASERS -->
<section class="pad" style="background:var(--surface);padding-top:0;" data-screen-label="Discover">
  <div class="wrap" style="padding-top:clamp(80px,11vw,150px);">
    <div class="section-head reveal">
      <div class="overline"><?= $p['teasers_over'] ?></div>
      <h2><?= $p['teasers_h2'] ?></h2>
      <p><?= $p['teasers_p'] ?></p>
    </div>
    <div class="exp-grid three">
      <?php foreach ($TEASERS as $t): ?>
      <a class="exp reveal" href="<?= $t[3] ?>">
        <img src="<?= $IMG[$t[2]] ?>" alt="<?= strip_tags($t[1]) ?>" />
        <div class="ex-body"><div class="overline"><?= $t[0] ?></div><h3><?= $t[1] ?></h3><div class="ex-link">Discover <span></span></div></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- BAND -->
<section class="band" style="background-image:url('<?= $IMG['band'] ?>');" data-screen-label="Character band">
  <div class="inner reveal">
    <div class="overline"><?= $p['band_over'] ?></div>
    <h2><?= $p['band_h2'] ?></h2>
    <p><?= $p['band_p'] ?></p>
  </div>
</section>

<!-- EXPERIENCES -->
<section class="pad" id="experience" data-screen-label="Apulian Experience">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['exp_over'] ?></div>
      <h2><?= $p['exp_h2'] ?></h2>
      <p><?= $p['exp_p'] ?></p>
    </div>
    <div class="exp-grid">
      <?php foreach ($EXPERIENCES as $e): ?>
      <article class="exp reveal"><img src="<?= $IMG[$e[2]] ?>" alt="<?= strip_tags($e[1]) ?>" /><div class="ex-body"><div class="overline"><?= $e[0] ?></div><h3><?= $e[1] ?></h3></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="offers" id="cta" style="background-image:url('<?= $IMG['teaser_hospitality'] ?>');" data-screen-label="CTA">
  <div class="wrap inner reveal">
    <div class="overline"><?= $p['cta_over'] ?></div>
    <h2><?= $p['cta_h2'] ?></h2>
    <p class="body-text" style="margin:0 auto 36px;color:rgba(255,255,255,.9);max-width:52ch;"><?= $p['cta_p'] ?></p>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

<?php $PAGE = 'home'; require __DIR__ . '/inc/header.php'; $p = $C['home']; ?>

<!-- HERO -->
<section class="hero" id="top" data-screen-label="Hero">
  <div class="hero-video" style="background-image:url('<?php echo $IMG['band'] ?>');">
    <?php if (!empty($SITE['youtube'])): ?>
    <iframe src="https://www.youtube.com/embed/<?php echo $SITE['youtube'] ?>?autoplay=1&controls=0&mute=1&loop=1&playlist=<?php echo $SITE['youtube'] ?>&disablekb=1&modestbranding=1&playsinline=1&rel=0&background=1" allow="autoplay; fullscreen" title="<?php echo $SITE['name'] ?>"></iframe>
    <?php endif; ?>
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_over', $p['hero_over']) : $p['hero_over'] ?></div>
    <h1><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_h1', $p['hero_h1'], ['multiline'=>true]) : $p['hero_h1'] ?></h1>
    <p class="sub"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_sub', $p['hero_sub'], ['multiline'=>true]) : $p['hero_sub'] ?></p>
  </div>
  <div class="scrolldown"><span>Scroll</span><span class="line"></span></div>
</section>

<!-- WELCOME -->
<section class="pad" id="welcome" data-screen-label="Welcome">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_over', $p['welcome_over']) : $p['welcome_over'] ?></div>
      <h2 class="lead"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_h2', $p['welcome_h2'], ['multiline'=>true]) : $p['welcome_h2'] ?></h2>
      <p class="body-text"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_p1', $p['welcome_p1'], ['multiline'=>true]) : $p['welcome_p1'] ?></p>
      <p class="body-text" style="margin-top:18px;"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_p2', $p['welcome_p2'], ['multiline'=>true]) : $p['welcome_p2'] ?></p>
      <a class="btn btn--ghost" href="<?php echo function_exists('sbt_url') ? sbt_url('hospitality.php') : 'hospitality.php' ?>" style="margin-top:30px;">Discover the Masseria</a>
    </div>
    <div class="media reveal">
      <img src="<?php echo $IMG['welcome'] ?>" alt="<?php echo $SITE['name'] ?>" />
      <div class="frame"></div>
      <div class="stamp">Since<br>the 1600s</div>
    </div>
  </div>
</section>

<!-- TEASERS -->
<section class="pad" style="background:var(--surface);padding-top:0;" data-screen-label="Discover">
  <div class="wrap" style="padding-top:clamp(80px,11vw,150px);">
    <div class="section-head reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.teasers_over', $p['teasers_over']) : $p['teasers_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.teasers_h2', $p['teasers_h2'], ['multiline'=>true]) : $p['teasers_h2'] ?></h2>
      <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.teasers_p', $p['teasers_p'], ['multiline'=>true]) : $p['teasers_p'] ?></p>
    </div>
    <div class="exp-grid three">
      <?php foreach ($TEASERS as $t): ?>
      <a class="exp reveal" href="<?php echo $t[3] ?>">
        <img src="<?php echo $IMG[$t[2]] ?>" alt="<?php echo strip_tags($t[1]) ?>" />
        <div class="ex-body"><div class="overline"><?php echo $t[0] ?></div><h3><?php echo $t[1] ?></h3><div class="ex-link">Discover <span></span></div></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- BAND -->
<section class="band" style="background-image:url('<?php echo $IMG['band'] ?>');" data-screen-label="Character band">
  <div class="inner reveal">
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.band_over', $p['band_over']) : $p['band_over'] ?></div>
    <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.band_h2', $p['band_h2'], ['multiline'=>true]) : $p['band_h2'] ?></h2>
    <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.band_p', $p['band_p'], ['multiline'=>true]) : $p['band_p'] ?></p>
  </div>
</section>

<!-- EXPERIENCES -->
<section class="pad" id="experience" data-screen-label="Apulian Experience">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.exp_over', $p['exp_over']) : $p['exp_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.exp_h2', $p['exp_h2'], ['multiline'=>true]) : $p['exp_h2'] ?></h2>
      <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.exp_p', $p['exp_p'], ['multiline'=>true]) : $p['exp_p'] ?></p>
    </div>
    <div class="exp-grid">
      <?php foreach ($EXPERIENCES as $e): ?>
      <article class="exp reveal"><img src="<?php echo $IMG[$e[2]] ?>" alt="<?php echo strip_tags($e[1]) ?>" /><div class="ex-body"><div class="overline"><?php echo $e[0] ?></div><h3><?php echo $e[1] ?></h3></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="offers" id="cta" style="background-image:url('<?php echo $IMG['teaser_hospitality'] ?>');" data-screen-label="CTA">
  <div class="wrap inner reveal">
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.cta_h2', $p['cta_h2'], ['multiline'=>true]) : $p['cta_h2'] ?></h2>
    <p class="body-text" style="margin:0 auto 36px;color:rgba(255,255,255,.9);max-width:52ch;"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.home.cta_p', $p['cta_p'], ['multiline'=>true]) : $p['cta_p'] ?></p>
    <a class="btn btn--light" href="<?php echo function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

<?php $PAGE = 'home'; require __DIR__ . '/inc/header.php'; $p = $C['home']; ?>

<!-- HERO -->
<section class="hero" id="top" data-screen-label="Hero">
  <div class="hero-video">
    <iframe src="https://player.vimeo.com/video/<?= $SITE['vimeo'] ?>?autoplay=1&controls=0&mute=1&muted=1&loop=1&playlist=<?= $SITE['vimeo'] ?>&background=1" allow="autoplay; fullscreen" title="<?= $SITE['name'] ?>"></iframe>
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_over', $p['hero_over']) : $p['hero_over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_h1', $p['hero_h1'], ['multiline'=>true]) : $p['hero_h1'] ?></h1>
    <p class="sub"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_sub', $p['hero_sub'], ['multiline'=>true]) : $p['hero_sub'] ?></p>
  </div>
  <div class="scrolldown"><span>Scroll</span><span class="line"></span></div>
</section>

<!-- WELCOME -->
<section class="pad" id="welcome" data-screen-label="Welcome">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_over', $p['welcome_over']) : $p['welcome_over'] ?></div>
      <h2 class="lead"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_h2', $p['welcome_h2'], ['multiline'=>true]) : $p['welcome_h2'] ?></h2>
      <p class="body-text"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_p1', $p['welcome_p1'], ['multiline'=>true]) : $p['welcome_p1'] ?></p>
      <p class="body-text" style="margin-top:18px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_p2', $p['welcome_p2'], ['multiline'=>true]) : $p['welcome_p2'] ?></p>
      <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url('villa.php') : 'villa.php' ?>" style="margin-top:30px;"><?= $TEXT['discover_villa'] ?></a>
    </div>
    <div class="media reveal">
      <img src="<?= $IMG['welcome'] ?>" alt="<?= $SITE['name'] ?>" />
      <div class="frame"></div>
      <div class="stamp">Since<br>1930</div>
    </div>
  </div>
</section>

<!-- HOUSES -->
<section class="houses pad" id="houses" data-screen-label="Houses">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.houses_over', $p['houses_over']) : $p['houses_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.houses_h2', $p['houses_h2']) : $p['houses_h2'] ?></h2>
      <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.houses_p', $p['houses_p'], ['multiline'=>true]) : $p['houses_p'] ?></p>
    </div>
    <div class="house-grid">
      <?php foreach ($HOUSE_CARDS as $h): ?>
      <article class="house reveal">
        <div class="ph"><span class="tag"><?= $h['tag'] ?></span><img src="<?= $h['img'] ?>" alt="<?= $h['title'] ?>" /></div>
        <div class="body">
          <h3><?= $h['title'] ?></h3>
          <ul class="specs">
            <?php foreach ($h['specs'] as $s): ?><li><span><?= $s[0] ?></span><b><?= $s[1] ?></b></li><?php endforeach; ?>
          </ul>
          <a class="more" href="<?= $h['url'] ?>"><?= $TEXT['more'] ?> <span></span></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="services pad" id="services" data-screen-label="Services">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.services_over', $p['services_over']) : $p['services_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.services_h2', $p['services_h2']) : $p['services_h2'] ?></h2>
    </div>
    <div class="svc-grid">
      <?php foreach ($SERVICES as $s): ?>
      <div class="svc reveal">
        <svg viewBox="0 0 24 24"><?= $ICON[$s[0]] ?></svg>
        <h4><?= $s[1] ?></h4>
        <p><?= $s[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- BAND -->
<section class="band" style="background-image:url('<?= $IMG['lunch'] ?>');" data-screen-label="Surroundings band">
  <div class="inner reveal">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.band_over', $p['band_over']) : $p['band_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.band_h2', $p['band_h2'], ['multiline'=>true]) : $p['band_h2'] ?></h2>
    <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.band_p', $p['band_p'], ['multiline'=>true]) : $p['band_p'] ?></p>
  </div>
</section>

<!-- FEATURE ROWS -->
<section class="feature pad" data-screen-label="SPA & Experience">
  <div class="wrap">
    <div class="two-col">
      <div class="media reveal"><img src="<?= $IMG['spa'] ?>" alt="SPA & Wellness" /><div class="frame"></div></div>
      <div class="reveal">
        <div class="label"><?= $SITE['name'] ?> &amp; SPA</div>
        <h3>SPA &amp; Wellness</h3>
        <p class="body-text">Awaken your mind and body. Our wellness center offers a hydromassage pool, Turkish bath, Finnish sauna, emotional hydroshower, relax area, gym, massages and a Yoga program.</p>
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url('spa-wellness.php') : 'spa-wellness.php' ?>" style="margin-top:28px;"><?= $TEXT['discover_spa'] ?></a>
      </div>
    </div>
    <div class="two-col">
      <div class="reveal">
        <div class="label"><?= $SITE['name'] ?> &amp; SPA</div>
        <h3>Apulian Experience</h3>
        <p class="body-text">We craft tailor-made experiences for each guest, customized according to individual needs — from cooking classes and wine tastings to private tours of the surrounding wonders.</p>
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url('experiences.php') : 'experiences.php' ?>" style="margin-top:28px;"><?= $TEXT['explore_experiences'] ?></a>
      </div>
      <div class="media reveal"><img src="<?= $IMG['lunch'] ?>" alt="Apulian Experience" /><div class="frame"></div></div>
    </div>
  </div>
</section>

<!-- OFFERS -->
<section class="offers" id="offers" data-screen-label="Offers">
  <div class="wrap inner reveal">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.offers_over', $p['offers_over']) : $p['offers_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.offers_h2', $p['offers_h2']) : $p['offers_h2'] ?></h2>
    <p class="body-text" style="margin:0 auto 36px;color:rgba(255,255,255,.88);max-width:50ch;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.offers_p', $p['offers_p'], ['multiline'=>true]) : $p['offers_p'] ?></p>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('offers.php') : 'offers.php' ?>"><?= $TEXT['see_offers'] ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

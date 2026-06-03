<?php $PAGE = 'home'; $PAGE_TITLE = $C['home']['title']; require __DIR__ . '/inc/header.php'; $p = $C['home']; ?>

<!-- HERO -->
<section class="hero" id="top" data-screen-label="Hero">
  <div class="hero-video" style="background-image:url('<?= $IMG['hero'] ?? $IMG['welcome'] ?>');">
    <?php if (!empty($SITE['vimeo'])): ?>
    <iframe src="https://player.vimeo.com/video/<?= $SITE['vimeo'] ?>?autoplay=1&controls=0&mute=1&muted=1&loop=1&playlist=<?= $SITE['vimeo'] ?>&background=1" allow="autoplay; fullscreen" title="<?= $SITE['name'] ?>"></iframe>
    <?php endif; ?>
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_over', $p['hero_over']) : $p['hero_over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_h1', $p['hero_h1'], ['multiline'=>true]) : $p['hero_h1'] ?></h1>
    <p class="sub"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.hero_sub', $p['hero_sub'], ['multiline'=>true]) : $p['hero_sub'] ?></p>
  </div>
  <div class="scrolldown"><span><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.scroll_label', $p['scroll_label']) : $p['scroll_label'] ?></span><span class="line"></span></div>
</section>

<!-- WELCOME -->
<section class="pad" id="welcome" data-screen-label="Welcome">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_over', $p['welcome_over']) : $p['welcome_over'] ?></div>
      <h2 class="lead"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_h2', $p['welcome_h2'], ['multiline'=>true]) : $p['welcome_h2'] ?></h2>
      <p class="body-text"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_p1', $p['welcome_p1'], ['multiline'=>true]) : $p['welcome_p1'] ?></p>
      <p class="body-text" style="margin-top:18px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_p2', $p['welcome_p2'], ['multiline'=>true]) : $p['welcome_p2'] ?></p>
      <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url($p['welcome_url']) : $p['welcome_url'] ?>" style="margin-top:30px;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.discover_villa', $TEXT['discover_villa'] ?? 'Discover the Villa') : ($TEXT['discover_villa'] ?? 'Discover the Villa') ?></a>
      <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.home.welcome_url', $p['welcome_url'], 'Link bottone', 'url') : '' ?>
    </div>
    <div class="media reveal">
      <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('IMG.welcome', $IMG['welcome'], ['alt' => $SITE['name']]) : '<img src="' . $IMG['welcome'] . '" alt="' . $SITE['name'] . '" />' ?>
      <div class="frame"></div>
      <div class="stamp"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.welcome_stamp', $p['welcome_stamp'], ['multiline'=>true]) : $p['welcome_stamp'] ?></div>
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
      <?php foreach ($HOUSE_CARDS as $i => $h): ?>
      <a class="house reveal" href="<?= function_exists('sbt_url') ? sbt_url($h['url']) : $h['url'] ?>">
        <div class="ph"><span class="tag"><?= function_exists('sbt_vfe') ? sbt_vfe('HOUSE_CARDS.' . $i . '.tag', $h['tag']) : $h['tag'] ?></span><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('HOUSE_CARDS.' . $i . '.img', $h['img'], ['alt' => $h['title']]) : '<img src="' . $h['img'] . '" alt="' . $h['title'] . '" />' ?></div>
        <div class="body">
          <h3><?= function_exists('sbt_vfe') ? sbt_vfe('HOUSE_CARDS.' . $i . '.title', $h['title']) : $h['title'] ?></h3>
          <ul class="specs">
            <?php foreach ($h['specs'] as $si => $s): ?><li><span><?= function_exists('sbt_vfe') ? sbt_vfe('HOUSE_CARDS.' . $i . '.specs.' . $si . '.0', $s[0]) : $s[0] ?></span><b><?= function_exists('sbt_vfe') ? sbt_vfe('HOUSE_CARDS.' . $i . '.specs.' . $si . '.1', $s[1]) : $s[1] ?></b></li><?php endforeach; ?>
          </ul>
          <span class="more"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.more', $TEXT['more'] ?? 'More') : ($TEXT['more'] ?? 'More') ?> <span></span></span>
          <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('HOUSE_CARDS.' . $i . '.url', $h['url'], 'Link card', 'url') : '' ?>
        </div>
      </a>
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
      <?php foreach ($SERVICES as $i => $s): ?>
      <div class="svc reveal">
        <svg viewBox="0 0 24 24"><?= $ICON[$s[0]] ?></svg>
        <h4><?= function_exists('sbt_vfe') ? sbt_vfe('SERVICES.' . $i . '.1', $s[1]) : $s[1] ?></h4>
        <p><?= function_exists('sbt_vfe') ? sbt_vfe('SERVICES.' . $i . '.2', $s[2], ['multiline'=>true]) : $s[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- BAND -->
<section class="band" style="<?= function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('IMG.lunch', $IMG['lunch']) : "background-image:url('" . $IMG['lunch'] . "');" ?>" data-screen-label="Surroundings band">
  <div class="inner reveal">
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('IMG.lunch', $IMG['lunch'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.band_over', $p['band_over']) : $p['band_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.band_h2', $p['band_h2'], ['multiline'=>true]) : $p['band_h2'] ?></h2>
    <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.band_p', $p['band_p'], ['multiline'=>true]) : $p['band_p'] ?></p>
  </div>
</section>

<!-- FEATURE ROWS -->
<section class="feature pad" data-screen-label="SPA & Experience">
  <div class="wrap">
    <div class="two-col">
      <div class="media reveal"><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('IMG.spa', $IMG['spa'], ['alt' => 'SPA & Wellness']) : '<img src="' . $IMG['spa'] . '" alt="SPA & Wellness" />' ?><div class="frame"></div></div>
      <div class="reveal">
        <div class="label"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.spa_label', $p['spa_label']) : $p['spa_label'] ?></div>
        <h3><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.spa_teaser_h3', $p['spa_teaser_h3']) : $p['spa_teaser_h3'] ?></h3>
        <p class="body-text"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.spa_teaser_p', $p['spa_teaser_p'], ['multiline'=>true]) : $p['spa_teaser_p'] ?></p>
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url($p['spa_teaser_url']) : $p['spa_teaser_url'] ?>" style="margin-top:28px;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.discover_spa', $TEXT['discover_spa'] ?? 'Discover the SPA') : ($TEXT['discover_spa'] ?? 'Discover the SPA') ?></a>
        <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.home.spa_teaser_url', $p['spa_teaser_url'], 'Link bottone', 'url') : '' ?>
      </div>
    </div>
    <div class="two-col">
      <div class="reveal">
        <div class="label"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.experience_label', $p['experience_label']) : $p['experience_label'] ?></div>
        <h3><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.experience_teaser_h3', $p['experience_teaser_h3']) : $p['experience_teaser_h3'] ?></h3>
        <p class="body-text"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.experience_teaser_p', $p['experience_teaser_p'], ['multiline'=>true]) : $p['experience_teaser_p'] ?></p>
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url($p['experience_teaser_url']) : $p['experience_teaser_url'] ?>" style="margin-top:28px;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.explore_experiences', $TEXT['explore_experiences'] ?? 'Explore experiences') : ($TEXT['explore_experiences'] ?? 'Explore experiences') ?></a>
        <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.home.experience_teaser_url', $p['experience_teaser_url'], 'Link bottone', 'url') : '' ?>
      </div>
      <div class="media reveal"><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('IMG.lunch', $IMG['lunch'], ['alt' => 'Apulian Experience']) : '<img src="' . $IMG['lunch'] . '" alt="Apulian Experience" />' ?><div class="frame"></div></div>
    </div>
  </div>
</section>

<!-- OFFERS -->
<section class="offers" id="offers" data-screen-label="Offers">
  <div class="wrap inner reveal">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.offers_over', $p['offers_over']) : $p['offers_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.offers_h2', $p['offers_h2']) : $p['offers_h2'] ?></h2>
    <p class="body-text" style="margin:0 auto 36px;color:rgba(255,255,255,.88);max-width:50ch;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.home.offers_p', $p['offers_p'], ['multiline'=>true]) : $p['offers_p'] ?></p>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url($p['offers_url']) : $p['offers_url'] ?>"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.see_offers', $TEXT['see_offers'] ?? 'See the offers') : ($TEXT['see_offers'] ?? 'See the offers') ?></a>
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.home.offers_url', $p['offers_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

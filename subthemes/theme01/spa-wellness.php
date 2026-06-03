<?php $PAGE = 'spa'; $PAGE_TITLE = $C['spa']['title']; require __DIR__ . '/inc/header.php'; $p = $C['spa']; ?>

<section class="page-hero" data-screen-label="SPA banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.spa.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.over', $p['over']) : $p['over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span>SPA &amp; Wellness</nav>
  </div>
</section>

<section class="pad" data-screen-label="SPA intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.intro_p', $p['intro_p'], ['multiline'=>true]) : $p['intro_p'] ?></p>
    </div>
  </div>
</section>

<section class="feature" style="padding-bottom:clamp(80px,11vw,150px);" data-screen-label="SPA features">
  <div class="wrap">
    <?php foreach ($p['feat_rows'] as $i => $r): ?>
    <div class="two-col"<?= $i ? ' style="margin-top:clamp(60px,8vw,110px);"' : '' ?>>
      <?php if ($i % 2 === 0): ?>
      <div class="media reveal"><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.spa.feat_rows.' . $i . '.img', $r['img'], ['alt' => $r['h3']]) : '<img src="' . $r['img'] . '" alt="' . $r['h3'] . '" />' ?><div class="frame"></div></div>
      <div class="reveal"><div class="label"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.label', $r['label']) : $r['label'] ?></div><h3><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.h3', $r['h3']) : $r['h3'] ?></h3><p class="body-text"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.p', $r['p'], ['multiline'=>true]) : $r['p'] ?></p></div>
      <?php else: ?>
      <div class="reveal"><div class="label"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.label', $r['label']) : $r['label'] ?></div><h3><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.h3', $r['h3']) : $r['h3'] ?></h3><p class="body-text"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.p', $r['p'], ['multiline'=>true]) : $r['p'] ?></p></div>
      <div class="media reveal"><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.spa.feat_rows.' . $i . '.img', $r['img'], ['alt' => $r['h3']]) : '<img src="' . $r['img'] . '" alt="' . $r['h3'] . '" />' ?><div class="frame"></div></div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="SPA amenities">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.am_over', $p['am_over']) : $p['am_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.am_h2', $p['am_h2']) : $p['am_h2'] ?></h2>
    </div>
    <div class="amenity-grid">
      <?php foreach ($p['amenities'] as $i => $a): ?>
      <div class="amenity reveal"><svg viewBox="0 0 24 24"><?= $ICON[$a[0]] ?></svg><h4><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.amenities.' . $i . '.1', $a[1]) : $a[1] ?></h4><p><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.amenities.' . $i . '.2', $a[2], ['multiline'=>true]) : $a[2] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="<?= function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.spa.cta_bg', $p['cta_bg']) : "background-image:url('" . $p['cta_bg'] . "');" ?>" data-screen-label="SPA CTA">
  <div class="inner reveal">
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.spa.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.spa.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.spa.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

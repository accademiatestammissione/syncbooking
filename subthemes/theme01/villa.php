<?php $PAGE = 'villa'; $PAGE_TITLE = $C['villa']['title']; require __DIR__ . '/inc/header.php'; $p = $C['villa']; ?>

<section class="page-hero" data-screen-label="Villa banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.villa.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.over', $p['over']) : $p['over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span>Villa</nav>
  </div>
</section>

<section class="pad" data-screen-label="Villa intro">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2 class="lead"><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.intro_h2', $p['intro_h2'], ['multiline'=>true]) : $p['intro_h2'] ?></h2>
    </div>
    <div class="reveal">
      <?php foreach ($p['intro_p'] as $i => $par): ?>
        <p class="body-text"<?= $i ? ' style="margin-top:18px;"' : ' style="max-width:54ch;"' ?>><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.intro_p.' . $i, $par, ['multiline'=>true]) : $par ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pad-s" style="padding-top:0;" data-screen-label="Villa gallery">
  <div class="wrap">
    <div class="gallery">
      <?php foreach ($p['gallery'] as $i => $g): ?><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.villa.gallery.' . $i, $g, ['data-lightbox' => '', 'alt' => 'Villa Rosa']) : '<img data-lightbox src="' . $g . '" alt="Villa Rosa" />' ?><?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Villa amenities">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.am_over', $p['am_over']) : $p['am_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.am_h2', $p['am_h2']) : $p['am_h2'] ?></h2>
      <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.am_p', $p['am_p'], ['multiline'=>true]) : $p['am_p'] ?></p>
    </div>
    <div class="amenity-grid">
      <?php foreach ($p['amenities'] as $i => $a): ?>
      <div class="amenity reveal"><svg viewBox="0 0 24 24"><?= $ICON[$a[0]] ?></svg><h4><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.amenities.' . $i . '.1', $a[1]) : $a[1] ?></h4><p><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.amenities.' . $i . '.2', $a[2], ['multiline'=>true]) : $a[2] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="<?= function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.villa.cta_bg', $p['cta_bg']) : "background-image:url('" . $p['cta_bg'] . "');" ?>" data-screen-label="Villa CTA">
  <div class="inner reveal">
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.villa.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.villa.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.villa.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

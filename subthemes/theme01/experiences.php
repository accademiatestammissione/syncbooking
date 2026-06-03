<?php $PAGE = 'experiences'; $PAGE_TITLE = $C['experiences']['title']; require __DIR__ . '/inc/header.php'; $p = $C['experiences']; ?>

<section class="page-hero" data-screen-label="Experiences banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.experiences.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.over', $p['over']) : $p['over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span>Experiences</nav>
  </div>
</section>

<section class="pad" data-screen-label="Experiences intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.intro_p', $p['intro_p'], ['multiline'=>true]) : $p['intro_p'] ?></p>
    </div>
    <div class="exp-grid">
      <?php foreach ($p['cards'] as $i => $c): ?>
      <article class="exp reveal">
        <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.experiences.cards.' . $i . '.img', $c['img'], ['alt' => $c['h3']]) : '<img src="' . $c['img'] . '" alt="' . $c['h3'] . '" />' ?>
        <div class="ex-body">
          <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cards.' . $i . '.over', $c['over']) : $c['over'] ?></div>
          <h3><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cards.' . $i . '.h3', $c['h3']) : $c['h3'] ?></h3>
          <p style="color:rgba(255,255,255,.85);font-size:14.5px;margin-top:8px;max-width:40ch;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cards.' . $i . '.p', $c['p'], ['multiline'=>true]) : $c['p'] ?></p>
          <a class="ex-link" href="<?= function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.enquire', $TEXT['enquire'] ?? 'Enquire') : ($TEXT['enquire'] ?? 'Enquire') ?> <span></span></a>
          <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.experiences.cta_url', $p['cta_url'], 'Link enquire', 'url') : '' ?>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Experiences wellness">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:44px;">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.wellness_over', $p['wellness_over']) : $p['wellness_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.wellness_h2', $p['wellness_h2']) : $p['wellness_h2'] ?></h2>
      <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.wellness_p', $p['wellness_p'], ['multiline'=>true]) : $p['wellness_p'] ?></p>
    </div>
    <div class="mosaic">
      <?php foreach ($p['wellness_gallery'] as $i => $g): ?><div class="m-item"><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.experiences.wellness_gallery.' . $i, $g, ['data-lightbox' => '', 'alt' => 'Villa Rosa SPA']) : '<img data-lightbox src="' . $g . '" alt="Villa Rosa SPA" />' ?></div><?php endforeach; ?>
      <button class="m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.show_all_photos', $TEXT['show_all_photos'] ?? 'Show all photos') : ($TEXT['show_all_photos'] ?? 'Show all photos') ?></button>
    </div>
  </div>
</section>

<section class="band" style="<?= function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.experiences.cta_bg', $p['cta_bg']) : "background-image:url('" . $p['cta_bg'] . "');" ?>" data-screen-label="Experiences CTA">
  <div class="inner reveal">
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.experiences.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.experiences.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

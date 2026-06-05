<?php $PAGE = 'experiences'; $PAGE_TITLE = $C['experiences']['title']; require __DIR__ . '/inc/header.php'; $p = $C['experiences']; ?>

<section class="page-hero" data-screen-label="Experiences banner">
  <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.experiences.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.over', $p['over']) : $p['over'] ?></div>
    <h1><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?php echo $TEXT['home'] ?? 'Home' ?></a><span>/</span>Experiences</nav>
  </div>
</section>

<section class="pad" data-screen-label="Experiences intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <?php $experiences_intro = $p['intro_p_html'] ?? $p['intro_p']; ?>
      <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.intro_p_html', $experiences_intro, ['multiline'=>true]) : $experiences_intro ?></p>
    </div>
    <div class="exp-grid">
      <?php foreach ($p['cards'] as $i => $c): ?>
      <article class="exp reveal">
        <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.experiences.cards.' . $i . '.img', $c['img'], ['alt' => $c['h3']]) : '<img src="' . $c['img'] . '" alt="' . $c['h3'] . '" />' ?>
        <div class="ex-body">
          <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cards.' . $i . '.over', $c['over']) : $c['over'] ?></div>
          <h3><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cards.' . $i . '.h3', $c['h3']) : $c['h3'] ?></h3>
          <div class="ex-link"><?php echo function_exists('sbt_vfe') ? sbt_vfe('TEXT.discover', $TEXT['discover'] ?? 'Discover') : ($TEXT['discover'] ?? 'Discover') ?> <span></span></div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Experiences wellness">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:44px;">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.wellness_over', $p['wellness_over']) : $p['wellness_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.wellness_h2', $p['wellness_h2']) : $p['wellness_h2'] ?></h2>
      <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.wellness_p', $p['wellness_p'], ['multiline'=>true]) : $p['wellness_p'] ?></p>
    </div>
    <div class="mosaic">
      <?php foreach ($p['wellness_gallery'] as $i => $g): ?><div class="m-item"><?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.experiences.wellness_gallery.' . $i, $g, ['data-lightbox' => '', 'alt' => 'Villa Rosa SPA']) : '<img data-lightbox src="' . $g . '" alt="Villa Rosa SPA" />' ?></div><?php endforeach; ?>
      <button class="m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo function_exists('sbt_vfe') ? sbt_vfe('TEXT.show_all_photos', $TEXT['show_all_photos'] ?? 'Show all photos') : ($TEXT['show_all_photos'] ?? 'Show all photos') ?></button>
    </div>
  </div>
</section>

<section class="band" style="<?php echo function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.experiences.band_bg', $p['band_bg'] ?? $IMG['wellness_corridor']) : "background-image:url('" . ($p['band_bg'] ?? $IMG['wellness_corridor']) . "');" ?>" data-screen-label="Experiences band">
  <div class="inner reveal">
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.experiences.band_bg', $p['band_bg'] ?? $IMG['wellness_corridor'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.band_over', $p['band_over'] ?? 'Unhurried &amp; authentic') : ($p['band_over'] ?? 'Unhurried &amp; authentic') ?></div>
    <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.band_h2', $p['band_h2'] ?? 'The art of living,<br>Apulian style', ['multiline'=>true]) : ($p['band_h2'] ?? 'The art of living,<br>Apulian style') ?></h2>
    <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.band_p', $p['band_p'] ?? 'Long lunches under the pergola, sun-warmed stone, and the generous welcome of the South - this is the rhythm of a stay at Villa Rosa.', ['multiline'=>true]) : ($p['band_p'] ?? 'Long lunches under the pergola, sun-warmed stone, and the generous welcome of the South - this is the rhythm of a stay at Villa Rosa.') ?></p>
  </div>
</section>

<section class="pad" data-screen-label="Experiences CTA">
  <div class="wrap" style="text-align:center;">
    <div class="reveal" style="max-width:620px;margin:0 auto;">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cta_over', $p['cta_over'] ?? 'Design your days') : ($p['cta_over'] ?? 'Design your days') ?></div>
      <h2 class="lead" style="margin-bottom:24px;"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cta_h2', $p['cta_h2'] ?? 'Plan your experiences') : ($p['cta_h2'] ?? 'Plan your experiences') ?></h2>
      <a class="btn" href="<?php echo function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.experiences.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
      <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.experiences.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

<?php $PAGE = 'offers'; $PAGE_TITLE = $C['offers']['title']; require __DIR__ . '/inc/header.php'; $p = $C['offers']; ?>

<section class="page-hero" data-screen-label="Offers banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.offers.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.over', $p['over']) : $p['over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span>Offers</nav>
  </div>
</section>

<section class="pad" data-screen-label="Offers intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <?php $offers_intro = $p['intro_p_html'] ?? $p['intro_p']; ?>
      <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.intro_p_html', $offers_intro, ['multiline'=>true]) : $offers_intro ?></p>
    </div>
    <div class="offer-grid">
      <?php foreach ($p['cards'] as $i => $c): ?>
      <article class="offer-card reveal">
        <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.offers.cards.' . $i . '.img', $c['img'], ['alt' => $c['h3']]) : '<img src="' . $c['img'] . '" alt="' . $c['h3'] . '" />' ?>
        <div class="oc-body">
          <span class="badge"><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.cards.' . $i . '.badge', $c['badge']) : $c['badge'] ?></span>
          <h3><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.cards.' . $i . '.h3', $c['h3']) : $c['h3'] ?></h3>
          <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.cards.' . $i . '.p', $c['p'], ['multiline'=>true]) : $c['p'] ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="<?= function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.offers.cta_bg', $p['cta_bg'] ?? $IMG['a5']) : "background-image:url('" . ($p['cta_bg'] ?? $IMG['a5']) . "');" ?>" data-screen-label="Offers CTA">
  <div class="inner reveal">
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.offers.cta_bg', $p['cta_bg'] ?? $IMG['a5'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url($p['cta_url'] ?? 'contacts.php') : ($p['cta_url'] ?? 'contacts.php') ?>" style="margin-top:8px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.offers.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.offers.cta_url', $p['cta_url'] ?? 'contacts.php', 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

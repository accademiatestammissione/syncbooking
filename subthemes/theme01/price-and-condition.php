<?php $PAGE = 'houses'; $PAGE_TITLE = $C['price']['title']; require __DIR__ . '/inc/header.php'; $p = $C['price']; ?>

<section class="page-hero" data-screen-label="Price banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.price.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.over', $p['over']) : $p['over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span><a href="<?= function_exists('sbt_url') ? sbt_url('houses.php') : 'houses.php' ?>"><?= $TEXT['houses'] ?? 'Houses' ?></a><span>/</span><?= $TEXT['price_condition'] ?? 'Price &amp; Condition' ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Price intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.intro_p', $p['intro_p'], ['multiline'=>true]) : $p['intro_p'] ?></p>
    </div>
    <div class="price-grid">
      <?php foreach ($p['cards'] as $i => $c): ?>
      <div class="price-card reveal">
        <div class="pc-name"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cards.' . $i . '.name', $c['name']) : $c['name'] ?></div>
        <div class="pc-from"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cards.' . $i . '.from', $c['from']) : $c['from'] ?></div>
        <div class="pc-price">€<?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cards.' . $i . '.price', $c['price']) : $c['price'] ?> <small><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cards.' . $i . '.unit', $c['unit']) : $c['unit'] ?></small></div>
        <ul>
          <?php foreach ($c['feats'] as $fi => $f): ?><li><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cards.' . $i . '.feats.' . $fi, $f, ['multiline'=>true]) : $f ?></li><?php endforeach; ?>
        </ul>
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:6px;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.request_quote', $TEXT['request_quote'] ?? 'Request a quote') : ($TEXT['request_quote'] ?? 'Request a quote') ?></a>
      </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center;color:var(--muted);font-size:13.5px;margin-top:28px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.note', $p['note'], ['multiline'=>true]) : $p['note'] ?></p>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Conditions">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cond_over', $p['cond_over']) : $p['cond_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cond_h2', $p['cond_h2']) : $p['cond_h2'] ?></h2>
    </div>
    <dl class="cond-list reveal">
      <?php foreach ($p['conditions'] as $i => $c): ?>
      <div class="row"><dt><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.conditions.' . $i . '.0', $c[0]) : $c[0] ?></dt><dd><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.conditions.' . $i . '.1', $c[1], ['multiline'=>true]) : $c[1] ?></dd></div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>

<section class="pad-s" data-screen-label="Price gallery">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:40px;">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.gallery_over', $p['gallery_over']) : $p['gallery_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.gallery_h2', $p['gallery_h2']) : $p['gallery_h2'] ?></h2>
    </div>
    <div class="mosaic">
      <?php foreach ($p['gallery'] as $i => $g): ?><div class="m-item"><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.price.gallery.' . $i, $g, ['data-lightbox' => '', 'alt' => 'Villa Rosa SPA']) : '<img data-lightbox src="' . $g . '" alt="Villa Rosa SPA" />' ?></div><?php endforeach; ?>
      <button class="m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.show_all_photos', $TEXT['show_all_photos'] ?? 'Show all photos') : ($TEXT['show_all_photos'] ?? 'Show all photos') ?></button>
    </div>
  </div>
</section>

<section class="band" style="<?= function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('IMG.villa', $IMG['villa']) : "background-image:url('" . $IMG['villa'] . "');" ?>" data-screen-label="Price CTA">
  <div class="inner reveal">
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('IMG.villa', $IMG['villa'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.price.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.price.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

<?php $PAGE = 'spa'; $PAGE_TITLE = $C['spa']['title']; require __DIR__ . '/inc/header.php'; $p = $C['spa']; ?>

<section class="page-hero" data-screen-label="SPA banner">
  <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.spa.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.over', $p['over']) : $p['over'] ?></div>
    <h1><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?php echo $TEXT['home'] ?? 'Home' ?></a><span>/</span>SPA &amp; Wellness</nav>
  </div>
</section>

<section class="pad" data-screen-label="SPA intro">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2 class="lead"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.intro_h2', $p['intro_h2'], ['multiline'=>true]) : $p['intro_h2'] ?></h2>
    </div>
    <div class="reveal">
      <?php $intro = is_array($p['intro_p']) ? $p['intro_p'] : array($p['intro_p']); ?>
      <?php foreach ($intro as $i => $par): ?>
        <p class="body-text" style="max-width:54ch;<?php echo $i ? 'margin-top:18px;' : '' ?>"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.intro_p.' . $i, $par, ['multiline'=>true]) : $par ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="feature pad" style="padding-top:0;" data-screen-label="SPA features">
  <div class="wrap">
    <?php foreach ($p['feat_rows'] as $i => $r): ?>
      <?php $gallery = $r['gallery'] ?? array($r['img']); ?>
      <div class="two-col"<?php echo $i ? ' style="margin-top:clamp(60px,8vw,110px);"' : '' ?>>
        <?php if ($i % 2 === 0): ?>
        <div class="media reveal media-carousel" data-carousel>
          <div class="mc-track">
            <?php foreach ($gallery as $gi => $img): ?>
              <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.spa.feat_rows.' . $i . '.gallery.' . $gi, $img, ['alt' => $r['h3'], 'data-lightbox' => '']) : '<img data-lightbox src="' . $img . '" alt="' . $r['h3'] . '" />' ?>
            <?php endforeach; ?>
          </div>
          <button class="mc-nav mc-prev" type="button" aria-label="Previous">&#8249;</button>
          <button class="mc-nav mc-next" type="button" aria-label="Next">&#8250;</button>
          <div class="mc-dots"></div>
          <div class="frame"></div>
        </div>
        <div class="reveal"><div class="label"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.label', $r['label']) : $r['label'] ?></div><h3><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.h3', $r['h3']) : $r['h3'] ?></h3><p class="body-text"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.p', $r['p'], ['multiline'=>true]) : $r['p'] ?></p></div>
        <?php else: ?>
        <div class="reveal"><div class="label"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.label', $r['label']) : $r['label'] ?></div><h3><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.h3', $r['h3']) : $r['h3'] ?></h3><p class="body-text"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.feat_rows.' . $i . '.p', $r['p'], ['multiline'=>true]) : $r['p'] ?></p></div>
        <div class="media reveal media-carousel" data-carousel>
          <div class="mc-track">
            <?php foreach ($gallery as $gi => $img): ?>
              <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.spa.feat_rows.' . $i . '.gallery.' . $gi, $img, ['alt' => $r['h3'], 'data-lightbox' => '']) : '<img data-lightbox src="' . $img . '" alt="' . $r['h3'] . '" />' ?>
            <?php endforeach; ?>
          </div>
          <button class="mc-nav mc-prev" type="button" aria-label="Previous">&#8249;</button>
          <button class="mc-nav mc-next" type="button" aria-label="Next">&#8250;</button>
          <div class="mc-dots"></div>
          <div class="frame"></div>
        </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="SPA amenities">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.am_over', $p['am_over']) : $p['am_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.am_h2', $p['am_h2']) : $p['am_h2'] ?></h2>
    </div>
    <div class="amenity-grid">
      <?php foreach ($p['amenities'] as $i => $a): ?>
      <div class="amenity reveal"><svg viewBox="0 0 24 24"><?php echo $ICON[$a[0]] ?></svg><h4><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.amenities.' . $i . '.1', $a[1]) : $a[1] ?></h4><p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.amenities.' . $i . '.2', $a[2], ['multiline'=>true]) : $a[2] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="<?php echo function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.spa.cta_bg', $p['cta_bg']) : "background-image:url('" . $p['cta_bg'] . "');" ?>" data-screen-label="SPA CTA">
  <div class="inner reveal">
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.spa.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?php echo function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.spa.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.spa.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

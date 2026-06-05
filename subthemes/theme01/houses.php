<?php $PAGE = 'houses'; $PAGE_TITLE = $C['houses']['title']; require __DIR__ . '/inc/header.php'; $p = $C['houses']; ?>

<section class="page-hero" data-screen-label="Houses banner">
  <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.houses.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.over', $p['over']) : $p['over'] ?></div>
    <h1><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?php echo $TEXT['home'] ?? 'Home' ?></a><span>/</span><?php echo $TEXT['houses'] ?? 'Houses' ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Houses intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.intro_p', $p['intro_p'], ['multiline'=>true]) : $p['intro_p'] ?></p>
    </div>
    <div class="house-grid">
      <?php foreach ($HOUSE_CARDS as $i => $h): ?>
      <a class="house reveal" href="<?php echo function_exists('sbt_url') ? sbt_url($h['url']) : $h['url'] ?>">
        <div class="ph"><span class="tag"><?php echo function_exists('sbt_vfe') ? sbt_vfe('HOUSE_CARDS.' . $i . '.tag', $h['tag']) : $h['tag'] ?></span><?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('HOUSE_CARDS.' . $i . '.img', $h['img'], ['alt' => $h['title']]) : '<img src="' . $h['img'] . '" alt="' . $h['title'] . '" />' ?></div>
        <div class="body">
          <h3><?php echo function_exists('sbt_vfe') ? sbt_vfe('HOUSE_CARDS.' . $i . '.title', $h['title']) : $h['title'] ?></h3>
          <ul class="specs">
            <?php foreach ($h['specs'] as $si => $s): ?><li><span><?php echo function_exists('sbt_vfe') ? sbt_vfe('HOUSE_CARDS.' . $i . '.specs.' . $si . '.0', $s[0]) : $s[0] ?></span><b><?php echo function_exists('sbt_vfe') ? sbt_vfe('HOUSE_CARDS.' . $i . '.specs.' . $si . '.1', $s[1]) : $s[1] ?></b></li><?php endforeach; ?>
          </ul>
          <span class="btn btn--light house-cta"><?php echo function_exists('sbt_vfe') ? sbt_vfe('TEXT.more', $TEXT['more'] ?? 'Discover') : ($TEXT['more'] ?? 'Discover') ?></span>
          <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('HOUSE_CARDS.' . $i . '.url', $h['url'], 'Link card', 'url') : '' ?>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="<?php echo function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.houses.cta_bg', $p['cta_bg']) : "background-image:url('" . $p['cta_bg'] . "');" ?>" data-screen-label="Houses CTA">
  <div class="inner reveal">
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.houses.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.cta_p', $p['cta_p'], ['multiline'=>true]) : $p['cta_p'] ?></p>
    <a class="btn btn--light" href="<?php echo function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.houses.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.houses.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

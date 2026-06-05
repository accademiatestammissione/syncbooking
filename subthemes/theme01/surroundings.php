<?php $PAGE = 'surroundings'; $PAGE_TITLE = $C['surroundings']['title']; require __DIR__ . '/inc/header.php'; $p = $C['surroundings']; ?>

<section class="page-hero" data-screen-label="Surroundings banner">
  <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.surroundings.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.over', $p['over']) : $p['over'] ?></div>
    <h1><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?php echo $TEXT['home'] ?? 'Home' ?></a><span>/</span>Surroundings</nav>
  </div>
</section>

<section class="pad" data-screen-label="Surroundings intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <?php $surroundings_intro = $p['intro_p_html'] ?? $p['intro_p']; ?>
      <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.intro_p_html', $surroundings_intro, ['multiline'=>true]) : $surroundings_intro ?></p>
    </div>
    <div class="exp-grid">
      <?php foreach ($p['cards'] as $i => $c): ?>
      <article class="exp reveal">
        <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.surroundings.cards.' . $i . '.img', $c['img'], ['alt' => $c['h3']]) : '<img src="' . $c['img'] . '" alt="' . $c['h3'] . '" />' ?>
        <div class="ex-body">
          <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.cards.' . $i . '.over', $c['over']) : $c['over'] ?></div>
          <h3><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.cards.' . $i . '.h3', $c['h3']) : $c['h3'] ?></h3>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="<?php echo function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.surroundings.cta_bg', $p['cta_bg']) : "background-image:url('" . $p['cta_bg'] . "');" ?>" data-screen-label="Surroundings band">
  <div class="inner reveal">
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.surroundings.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?php echo function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.surroundings.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.surroundings.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

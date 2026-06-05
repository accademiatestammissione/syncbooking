<?php $PAGE = 'houses'; $PAGE_TITLE = $C['price']['title']; require __DIR__ . '/inc/header.php'; $p = $C['price']; ?>

<section class="page-hero" data-screen-label="Price banner">
  <?php echo function_exists('sbt_vfe_image') ? sbt_vfe_image('C.price.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.over', $p['over']) : $p['over'] ?></div>
    <h1><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?php echo $TEXT['home'] ?? 'Home' ?></a><span>/</span><a href="<?php echo function_exists('sbt_url') ? sbt_url('houses.php') : 'houses.php' ?>"><?php echo $TEXT['houses'] ?? 'Houses' ?></a><span>/</span><?php echo $TEXT['price_condition'] ?? 'Price &amp; Condition' ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Price intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <?php $price_intro = $p['intro_p_html'] ?? 'Check live availability and the best rates for each house, then confirm your reservation in a few secure steps - instant booking, no waiting for a reply.'; ?>
      <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.intro_p_html', $price_intro, ['multiline'=>true]) : $price_intro ?></p>
    </div>
    <div class="book-cta reveal">
      <div class="bc-text">
        <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.book_over', $p['book_over'] ?? 'Real-time availability') : ($p['book_over'] ?? 'Real-time availability') ?></div>
        <h3><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.book_h3', $p['book_h3'] ?? 'Check dates &amp; book online') : ($p['book_h3'] ?? 'Check dates &amp; book online') ?></h3>
        <p><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.book_p', $p['book_p'] ?? 'Select your house, see live prices for your dates and complete your reservation through our secure booking system.', ['multiline'=>true]) : ($p['book_p'] ?? 'Select your house, see live prices for your dates and complete your reservation through our secure booking system.') ?></p>
      </div>
      <div class="bc-action">
        <a class="btn" href="<?php echo esc_url($p['book_url'] ?? 'https://villarosaresort.it/booking') ?>"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.book_btn', $p['book_btn'] ?? 'Book your stay') : ($p['book_btn'] ?? 'Book your stay') ?></a>
        <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.price.book_url', $p['book_url'] ?? 'https://villarosaresort.it/booking', 'Link booking', 'url') : '' ?>
        <span class="bc-note"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.book_note', $p['book_note'] ?? 'Best rate guaranteed when you book direct.') : ($p['book_note'] ?? 'Best rate guaranteed when you book direct.') ?></span>
      </div>
    </div>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Conditions">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.cond_over', $p['cond_over']) : $p['cond_over'] ?></div>
      <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.cond_h2', $p['cond_h2']) : $p['cond_h2'] ?></h2>
    </div>
    <dl class="cond-list reveal">
      <?php foreach ($p['conditions'] as $i => $c): ?>
      <div class="row"><dt><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.conditions.' . $i . '.0', $c[0]) : $c[0] ?></dt><dd><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.conditions.' . $i . '.1', $c[1], ['multiline'=>true]) : $c[1] ?></dd></div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>

<section class="band" style="<?php echo function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.price.cta_bg', $p['cta_bg'] ?? $IMG['villa']) : "background-image:url('" . ($p['cta_bg'] ?? $IMG['villa']) . "');" ?>" data-screen-label="Price CTA">
  <div class="inner reveal">
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.price.cta_bg', $p['cta_bg'] ?? $IMG['villa'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.cta_h2', $p['cta_h2']) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?php echo function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?php echo function_exists('sbt_vfe') ? sbt_vfe('C.price.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?php echo function_exists('sbt_vfe_control') ? sbt_vfe_control('C.price.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

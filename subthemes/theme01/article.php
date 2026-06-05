<?php $PAGE = 'article'; $PAGE_TITLE = $C['article']['title']; require __DIR__ . '/inc/header.php'; $p = $C['article']; ?>

<section class="page-hero" data-screen-label="Article banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.article.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.over', $p['over']) : $p['over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb">
      <a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a>
      <span>/</span>
      <a href="<?= function_exists('sbt_url') ? sbt_url('experiences.php') : 'experiences.php' ?>"><?= $TEXT['experiences'] ?? 'Experiences' ?></a>
      <span>/</span>
      <?= function_exists('sbt_vfe') ? sbt_vfe('C.article.article_over', $p['article_over']) : $p['article_over'] ?>
    </nav>
  </div>
</section>

<section class="pad" data-screen-label="Article body">
  <div class="wrap">
    <article class="article reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.article_over', $p['article_over']) : $p['article_over'] ?></div>
      <h1 class="title"><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.article_title', $p['article_title']) : $p['article_title'] ?></h1>
      <p class="meta"><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.article_meta', $p['article_meta']) : $p['article_meta'] ?></p>

      <div class="article-body">
        <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_p1', $p['body_p1'], ['multiline' => true]) : $p['body_p1'] ?></p>
        <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_p2', $p['body_p2'], ['multiline' => true]) : $p['body_p2'] ?></p>

        <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_h2', $p['body_h2']) : $p['body_h2'] ?></h2>
        <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_p3', $p['body_p3'], ['multiline' => true]) : $p['body_p3'] ?></p>

        <blockquote><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_quote', $p['body_quote'], ['multiline' => true]) : $p['body_quote'] ?></blockquote>

        <h3><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_h3', $p['body_h3']) : $p['body_h3'] ?></h3>
        <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_p4', $p['body_p4'], ['multiline' => true]) : $p['body_p4'] ?></p>
        <ul>
          <?php foreach ($p['body_items'] as $i => $item): ?>
            <li><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_items.' . $i, $item, ['multiline' => true]) : $item ?></li>
          <?php endforeach; ?>
        </ul>

        <p>
          <?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_p5', $p['body_p5'], ['multiline' => true]) : $p['body_p5'] ?>
          <a href="<?= function_exists('sbt_url') ? sbt_url($p['body_link_url']) : $p['body_link_url'] ?>"><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.body_link_text', $p['body_link_text']) : $p['body_link_text'] ?></a>.
          <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.article.body_link_url', $p['body_link_url'], 'Link articolo', 'url') : '' ?>
        </p>
      </div>
    </article>
  </div>
</section>

<section class="band" style="<?= function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('C.article.cta_bg', $p['cta_bg']) : "background-image:url('" . $p['cta_bg'] . "');" ?>" data-screen-label="Article CTA">
  <div class="inner reveal">
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.article.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.cta_over', $p['cta_over']) : $p['cta_over'] ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.cta_h2', $p['cta_h2'], ['multiline' => true]) : $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url($p['cta_url']) : $p['cta_url'] ?>" style="margin-top:8px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.article.cta_btn', $p['cta_btn']) : $p['cta_btn'] ?></a>
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('C.article.cta_url', $p['cta_url'], 'Link bottone', 'url') : '' ?>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

<?php
$slug = function_exists('get_post_field') ? get_post_field('post_name', get_queried_object_id()) : '';
$map = function_exists('sbt_page_templates') ? sbt_page_templates() : [];

if (isset($map[$slug])) {
  require __DIR__ . '/' . $map[$slug]['file'];
  return;
}

$PAGE = '';
require __DIR__ . '/inc/header.php';
?>
<section class="page-hero" data-screen-label="WordPress page">
  <div class="wrap">
    <div class="overline"><?= $SITE['name'] ?></div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="pad">
  <div class="wrap">
    <div class="body-text">
      <?php
      while (have_posts()) {
        the_post();
        the_content();
      }
      ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>


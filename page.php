<?php
$slug = function_exists('get_post_field') ? get_post_field('post_name', get_queried_object_id()) : '';
$map = function_exists('sbt_page_templates') ? sbt_page_templates() : [];

if (isset($map[$slug])) {
  require sbt_subtheme_path($map[$slug]['file']);
  return;
}

$PAGE = '';
require sbt_subtheme_path('inc/header.php');
?>
<section class="page-hero" data-screen-label="WordPress page">
  <div class="wrap">
    <div class="overline"><?php echo $SITE['name'] ?></div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="pad">
  <div class="wrap">
    <?php
    while (have_posts()) {
      the_post();
      ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('body-text'); ?>>
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'large' );
        }
        the_content();
        wp_link_pages(
          array(
            'before' => '<nav class="page-links">',
            'after'  => '</nav>',
          )
        );
        the_tags( '<p class="post-tags">', ', ', '</p>' );
        ?>
      </div>
      <?php
      if (comments_open() || get_comments_number()) {
        comments_template();
      }
    }
    ?>
  </div>
</section>
<?php require sbt_subtheme_path('inc/footer.php'); ?>

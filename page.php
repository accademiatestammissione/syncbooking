<?php
$post_id = get_queried_object_id();
$slug = function_exists( 'sbt_page_base_slug_for_post' ) ? sbt_page_base_slug_for_post( $post_id ) : '';
if ( '' === $slug && function_exists( 'get_post_field' ) ) {
	$slug = get_post_field( 'post_name', $post_id );
}
$map = function_exists( 'sbt_page_templates' ) ? sbt_page_templates() : array();

if ( isset( $map[ $slug ] ) ) {
	require sbt_subtheme_path( $map[ $slug ]['file'] );
	return;
}

$PAGE = '';
require sbt_subtheme_path( 'header/header.php' );
?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="sbtw-page-hero" data-screen-label="WordPress page">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full', array( 'class' => 'sbtw-bg' ) ); ?>
		<?php endif; ?>
		<div class="sbtw-wrap">
			<div class="sbtw-overline"><?php echo esc_html( $SITE['name'] ?? get_bloginfo( 'name' ) ); ?></div>
			<h1><?php the_title(); ?></h1>
			<nav class="sbtw-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span><?php the_title(); ?></nav>
		</div>
	</section>

	<section class="sbtw-pad">
		<div class="sbtw-wrap">
			<div id="post-<?php the_ID(); ?>" <?php post_class( 'sbtw-article' ); ?>>
				<div class="sbtw-article-body">
					<?php
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
			</div>
			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			if ( is_active_sidebar( 'sidebar-1' ) ) :
				?>
				<aside class="sbtw-sidebar widget-area">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</aside>
			<?php endif; ?>
		</div>
	</section>
<?php endwhile; ?>

<?php require sbt_subtheme_path( 'footer/footer.php' ); ?>

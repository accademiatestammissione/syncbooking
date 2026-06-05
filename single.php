<?php
$PAGE = '';
require sbt_subtheme_path( 'inc/header.php' );
?>
<section class="page-hero" data-screen-label="Single post">
	<div class="wrap">
		<div class="overline"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="pad">
	<div class="wrap">
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'body-text' ); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				<p class="post-meta"><?php echo esc_html( get_the_date() ); ?></p>
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
			</article>
			<?php
			the_post_navigation();
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
		?>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<aside class="sidebar widget-area">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside>
		<?php endif; ?>
	</div>
</section>
<?php require sbt_subtheme_path( 'inc/footer.php' ); ?>

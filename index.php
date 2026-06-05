<?php
if ( is_home() && ! is_front_page() ) {
	$PAGE = '';
	require sbt_subtheme_path( 'inc/header.php' );
	?>
	<section class="pad">
		<div class="wrap">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'body-text' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<?php the_tags( '<p class="post-tags">', ', ', '</p>' ); ?>
					</article>
				<?php endwhile; ?>
				<?php the_posts_pagination(); ?>
			<?php endif; ?>
		</div>
	</section>
	<?php
	require sbt_subtheme_path( 'inc/footer.php' );
	return;
}

require sbt_subtheme_path( 'index.php' );

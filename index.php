<?php
/**
 * Default template.
 *
 * @package SyncBookingVillaResort
 */

get_header();
?>
<section class="page-hero">
	<p class="eyebrow"><?php bloginfo( 'name' ); ?></p>
	<h1><?php esc_html_e( 'News e aggiornamenti', 'syncbooking-villa-resort' ); ?></h1>
</section>
<section class="content-wrap post-list">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'post-card' ); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
			</article>
		<?php endwhile; ?>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'Nessun contenuto disponibile.', 'syncbooking-villa-resort' ); ?></p>
	<?php endif; ?>
</section>
<?php
get_footer();

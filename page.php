<?php
/**
 * Page template.
 *
 * @package SyncBookingVillaResort
 */

get_header();
?>
<section class="page-hero">
	<p class="eyebrow"><?php esc_html_e( 'Villa Resort', 'syncbooking-villa-resort' ); ?></p>
	<h1><?php the_title(); ?></h1>
</section>
<section class="content-wrap">
	<?php
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
	?>
</section>
<?php
get_footer();

<?php
$PAGE = 'experiences';
require sbt_subtheme_path( 'header/header.php' );

while ( have_posts() ) :
	the_post();
	$hero_meta = get_post_meta( get_the_ID(), '_sbt_article_hero', true );
	$hero = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : ( $hero_meta ?: ( $IMG['lunch'] ?? '' ) );
	?>
	<section class="sbtw-page-hero" data-screen-label="Article banner">
		<?php echo sbt_t1_img( 'post.' . get_the_ID() . '.banner', $hero, get_the_title(), array( 'class' => 'sbtw-bg' ) ); ?>
		<div class="sbtw-wrap">
			<div class="sbtw-overline"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
			<nav class="sbtw-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span><?php echo esc_html( get_the_title() ); ?></nav>
		</div>
	</section>

	<section class="sbtw-pad" data-screen-label="Article body">
		<div class="sbtw-wrap">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'sbtw-article sbtw-reveal' ); ?>>
				<h1 class="sbtw-title"><?php the_title(); ?></h1>
				<div class="sbtw-article-body">
					<?php
					the_content();
					wp_link_pages(
						array(
							'before' => '<nav class="page-links">',
							'after'  => '</nav>',
						)
					);
					?>
				</div>
			</article>
		</div>
	</section>

	<section class="sbtw-band" style="<?php echo esc_attr( sbt_t1_bg_style( 'post.' . get_the_ID() . '.cta_bg', $IMG['a5'] ?? $hero ) ); ?>" data-screen-label="Article CTA">
		<div class="sbtw-inner sbtw-reveal">
			<div class="sbtw-overline"><?php esc_html_e( 'Design your days', 'syncbooking_theme' ); ?></div>
			<h2><?php esc_html_e( 'Plan your experiences', 'syncbooking_theme' ); ?></h2>
			<a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php esc_html_e( 'Contact us', 'syncbooking_theme' ); ?></a>
		</div>
	</section>
<?php endwhile; ?>

<?php require sbt_subtheme_path( 'footer/footer.php' ); ?>

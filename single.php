<?php
$PAGE = 'experiences';
require sbt_subtheme_path( 'inc/header.php' );

while ( have_posts() ) :
	the_post();
	$hero_meta = get_post_meta( get_the_ID(), '_sbt_article_hero', true );
	$hero = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : ( $hero_meta ?: ( $IMG['lunch'] ?? '' ) );
	?>
	<section class="page-hero" data-screen-label="Article banner">
		<?php echo sbt_t1_img( 'post.' . get_the_ID() . '.banner', $hero, get_the_title(), array( 'class' => 'bg' ) ); ?>
		<div class="wrap">
			<div class="overline"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
			<nav class="crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span><?php echo esc_html( get_the_title() ); ?></nav>
		</div>
	</section>

	<section class="pad" data-screen-label="Article body">
		<div class="wrap">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'article reveal' ); ?>>
				<div class="overline"><?php echo esc_html( wp_strip_all_tags( get_the_category_list( ', ' ) ) ?: __( 'Article', 'syncbooking-hospitality' ) ); ?></div>
				<h1 class="title"><?php the_title(); ?></h1>
				<p class="meta"><?php echo esc_html( get_the_date() ); ?></p>
				<div class="article-body">
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
			</article>
			<?php
			the_post_navigation();
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		</div>
	</section>

	<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'post.' . get_the_ID() . '.cta_bg', $IMG['a5'] ?? $hero ) ); ?>" data-screen-label="Article CTA">
		<div class="inner reveal">
			<div class="overline"><?php esc_html_e( 'Design your days', 'syncbooking-hospitality' ); ?></div>
			<h2><?php esc_html_e( 'Plan your experiences', 'syncbooking-hospitality' ); ?></h2>
			<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php esc_html_e( 'Contact us', 'syncbooking-hospitality' ); ?></a>
		</div>
	</section>
<?php endwhile; ?>

<?php require sbt_subtheme_path( 'inc/footer.php' ); ?>

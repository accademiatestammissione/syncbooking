<?php
$PAGE = 'experiences';
require sbt_subtheme_path( 'header/header.php' );

while ( have_posts() ) :
	the_post();
	$hero_meta = get_post_meta( get_the_ID(), '_sbt_article_hero', true );
	$hero_fallback = $IMG['welcome'] ?? ( $IMG['hosp_hero'] ?? ( $IMG['hero_1'] ?? ( $IMG['banner'] ?? ( $IMG['lunch'] ?? '' ) ) ) );
	if ( '' === $hero_fallback && function_exists( 'sbt_asset_url' ) ) {
		$hero_fallback = sbt_asset_url( 'assets/images/masseria-dusk.jpg' );
	}
	$hero = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : ( $hero_meta ?: $hero_fallback );
	// Stored hero meta may hold a dead clone-theme CDN URL from before the
	// assets import ran; rebase it to the active theme's uploads if present.
	if ( function_exists( 'sbt_rebase_asset_url' ) ) {
		$hero = sbt_rebase_asset_url( $hero );
	}
	?>
	<section class="sbtw-page-hero" data-screen-label="Article banner">
		<?php echo sbt_t1_img( 'post.' . get_the_ID() . '.banner', $hero, get_the_title(), array( 'class' => 'sbtw-bg' ) ); ?>
		<div class="sbtw-wrap">
			<div class="sbtw-overline"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
			<nav class="sbtw-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( get_the_title() ); ?></nav>
		</div>
	</section>

	<section class="sbtw-pad" data-screen-label="Article body">
		<div class="sbtw-wrap">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'sbtw-article sbtw-reveal' ); ?>>
				<?php
				$sbt_cats = get_the_category();
				$sbt_cat_name = ( ! empty( $sbt_cats ) && isset( $sbt_cats[0] ) ) ? $sbt_cats[0]->name : ( $TEXT['journal'] ?? 'Journal' );
				$sbt_words = str_word_count( wp_strip_all_tags( get_the_content() ) );
				$sbt_read = max( 1, (int) ceil( $sbt_words / 200 ) );
				?>
				<div class="sbtw-overline"><?php echo esc_html( $sbt_cat_name ); ?></div>
				<h1 class="sbtw-title"><?php echo esc_html( get_the_title() ); ?></h1>
				<p class="sbtw-meta"><?php echo esc_html( $sbt_cat_name . ' · ' . $sbt_read . ' ' . ( $TEXT['min_read'] ?? 'min read' ) ); ?></p>
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
			<div class="sbtw-overline"><?php echo esc_html( $C['experiences']['cta_over'] ?? 'Design your days' ); ?></div>
			<h2><?php echo esc_html( $C['experiences']['cta_h2'] ?? 'Plan your experiences' ); ?></h2>
			<a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo esc_html( $TEXT['contact_us'] ?? 'Contact us' ); ?></a>
		</div>
	</section>
<?php endwhile; ?>

<?php require sbt_subtheme_path( 'footer/footer.php' ); ?>

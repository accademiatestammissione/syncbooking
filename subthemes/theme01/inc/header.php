<?php
require_once __DIR__ . '/../data_general.php';
require_once __DIR__ . '/helpers.php';

if ( ! isset( $PAGE ) ) {
	$PAGE = '';
}
if ( ! isset( $PAGE_TITLE ) ) {
	$PAGE_TITLE = ( $SITE['name'] ?? 'Villa Rosa Resort' ) . ' - ' . ( $SITE['tagline'] ?? 'An Apulia Villa' );
}

$SOURCE_VERSION = $SITE['source_version'] ?? '1.0.0';
$SOURCE_BUILD_DATE = $SITE['source_build_date'] ?? '2026-06-07';
$WA_SVG = '<svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.6 14.2c-.2.6-1.2 1.2-1.7 1.2-.4 0-1 .1-3.1-.8-2.6-1.1-4.3-3.8-4.4-4-.1-.2-1-1.4-1-2.6 0-1.2.6-1.8.9-2 .2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .5l-.4.6c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4.1.5-.1l.7-.9c.2-.2.4-.2.6-.1l1.9.9c.2.1.4.2.4.3.1.2.1.6 0 1Z"/></svg>';
?>
<!-- VERSION <?php echo esc_html( $SOURCE_VERSION ); ?> - <?php echo esc_html( $SOURCE_BUILD_DATE ); ?> - <?php echo esc_html( $SITE['name'] ); ?> -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8" />
<meta name="version" content="<?php echo esc_attr( $SOURCE_VERSION ); ?>" />
<meta name="build-date" content="<?php echo esc_attr( $SOURCE_BUILD_DATE ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
<link rel="stylesheet" href="<?php echo esc_url( function_exists( 'sbt_asset_url' ) ? sbt_asset_url( 'assets/site.css' ) : 'assets/site.css' ); ?>" />
<?php if ( function_exists( 'wp_head' ) ) wp_head(); ?>
</head>
<body <?php if ( function_exists( 'body_class' ) ) body_class(); ?> data-page="<?php echo esc_attr( $PAGE ); ?>" data-template-version="<?php echo esc_attr( $SOURCE_VERSION ); ?>">
<?php if ( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>

<header id="hdr">
	<a class="logo" href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><img src="<?php echo esc_url( $IMG['logo'] ); ?>" alt="<?php echo esc_attr( $SITE['name'] ); ?>" /></a>
	<nav class="main">
		<?php foreach ( $NAV as $item ) : ?>
			<?php if ( ! empty( $item['sub'] ) ) : ?>
				<div class="has-sub">
					<span class="top<?php echo $PAGE === $item['key'] ? ' current' : ''; ?>"><?php echo esc_html( $item['label'] ); ?> <i class="chev"></i></span>
					<div class="sub">
						<?php foreach ( $item['sub'] as $sub_index => $sub_item ) : ?>
							<?php if ( ! empty( $sub_item['divide'] ) || ( $sub_index > 0 && empty( $sub_item['no_divider_before'] ) ) ) : ?><div class="divider"></div><?php endif; ?>
							<a href="<?php echo esc_url( sbt_t1_url( $sub_item['url'] ) ); ?>"><span class="t"><?php echo esc_html( $sub_item['label'] ); ?></span></a>
						<?php endforeach; ?>
					</div>
				</div>
			<?php else : ?>
				<a href="<?php echo esc_url( sbt_t1_url( $item['url'] ) ); ?>"<?php echo $PAGE === $item['key'] ? ' class="current"' : ''; ?>><?php echo esc_html( $item['label'] ); ?></a>
			<?php endif; ?>
		<?php endforeach; ?>
	</nav>
	<div class="actions-desktop">
		<div class="lang-toggle"><a href="#" class="active"><?php echo esc_html( $SITE['lang_primary'] ?? 'EN' ); ?></a><span class="sep">/</span><a href="#"><?php echo esc_html( $SITE['lang_secondary'] ?? 'IT' ); ?></a></div>
	</div>
	<button class="burger" id="burger" aria-label="Menu"><span></span><span></span><span></span></button>
</header>

<div class="drawer" id="drawer">
	<button class="close" id="closeDrawer" aria-label="Close">&times;</button>
	<a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a>
	<a href="<?php echo esc_url( sbt_t1_url( 'villa.php' ) ); ?>">Villa</a>
	<a href="<?php echo esc_url( sbt_t1_url( 'houses.php' ) ); ?>"><?php echo esc_html( $TEXT['houses'] ?? 'Houses' ); ?></a>
	<div class="sub-m">
		<?php foreach ( $NAV as $item ) : ?>
			<?php if ( isset( $item['key'] ) && 'houses' === $item['key'] && ! empty( $item['sub'] ) ) : ?>
				<?php foreach ( $item['sub'] as $sub_item ) : ?>
					<a href="<?php echo esc_url( sbt_t1_url( $sub_item['url'] ) ); ?>"><?php echo esc_html( $sub_item['label'] ); ?></a>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<a href="<?php echo esc_url( sbt_t1_url( 'spa-wellness.php' ) ); ?>">SPA &amp; Wellness</a>
	<a href="<?php echo esc_url( sbt_t1_url( 'experiences.php' ) ); ?>">Experiences</a>
	<a href="<?php echo esc_url( sbt_t1_url( 'surroundings.php' ) ); ?>">Surroundings</a>
	<a href="<?php echo esc_url( sbt_t1_url( 'offers.php' ) ); ?>">Offers</a>
	<a href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>">Contacts</a>
</div>

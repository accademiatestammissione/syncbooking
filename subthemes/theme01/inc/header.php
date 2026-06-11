<?php
require_once __DIR__ . '/../data_general.php';
require_once __DIR__ . '/helpers.php';

if ( ! isset( $PAGE ) ) {
	$PAGE = '';
}
if ( ! isset( $PAGE_TITLE ) ) {
	$PAGE_TITLE = ( $SITE['name'] ?? 'SyncBooking Hospitality' ) . ' - ' . ( $SITE['tagline'] ?? 'Hospitality Theme' );
}

$SOURCE_VERSION = $SITE['source_version'] ?? '2.1';
$SOURCE_BUILD_DATE = $SITE['source_build_date'] ?? '2026-06-11';
$ASSET_VERSION = defined( 'SBT_VERSION' ) ? SBT_VERSION : $SOURCE_VERSION;
$SITE_CSS_URL = function_exists( 'sbt_asset_url' ) ? sbt_asset_url( 'assets/site.css' ) : 'assets/site.css';
if ( function_exists( 'add_query_arg' ) ) {
	$SITE_CSS_URL = add_query_arg( 'ver', $ASSET_VERSION, $SITE_CSS_URL );
}
$HEADER_LANGUAGES = function_exists( 'sbt_header_language_items' ) ? sbt_header_language_items( $PAGE, $CONTENT_KEY ?? '' ) : array();
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
<?php if ( function_exists( 'wp_head' ) ) wp_head(); ?>
<link rel="stylesheet" href="<?php echo esc_url( $SITE_CSS_URL ); ?>" />
<?php if ( function_exists( 'sbt_theme_design_css' ) ) sbt_theme_design_css(); ?>
</head>
<body <?php if ( function_exists( 'body_class' ) ) body_class( 'sbtw' ); ?> data-page="<?php echo esc_attr( $PAGE ); ?>" data-template-version="<?php echo esc_attr( $SOURCE_VERSION ); ?>">
<?php if ( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>

<header id="hdr">
	<a class="sbtw-logo logo" href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><img src="<?php echo esc_url( sbt_t1_asset( $IMG['logo'] ?? '' ) ); ?>" alt="<?php echo esc_attr( $SITE['name'] ); ?>" /></a>
	<nav class="sbtw-main main">
		<?php foreach ( $NAV as $item ) : ?>
			<?php $is_current = $PAGE === ( $item['key'] ?? '' ); ?>
			<?php if ( ! empty( $item['sub'] ) ) : ?>
				<div class="sbtw-has-sub has-sub">
					<span class="sbtw-top top<?php echo $is_current ? ' sbtw-current current' : ''; ?>"><?php echo esc_html( $item['label'] ); ?> <i class="sbtw-chev chev"></i></span>
					<div class="sbtw-sub sub">
						<?php foreach ( $item['sub'] as $sub_item ) : ?>
							<?php if ( ! empty( $sub_item['divide'] ) ) : ?><div class="sbtw-divider divider"></div><?php endif; ?>
							<a href="<?php echo esc_url( sbt_t1_url( $sub_item['url'] ) ); ?>"><span class="sbtw-t t"><?php echo esc_html( $sub_item['label'] ); ?></span></a>
						<?php endforeach; ?>
					</div>
				</div>
			<?php else : ?>
				<a href="<?php echo esc_url( sbt_t1_url( $item['url'] ) ); ?>"<?php echo $is_current ? ' class="sbtw-current current"' : ''; ?>><?php echo esc_html( $item['label'] ); ?></a>
			<?php endif; ?>
		<?php endforeach; ?>
	</nav>
	<div class="sbtw-actions-desktop actions-desktop">
		<div class="sbtw-lang-toggle lang-toggle">
			<?php foreach ( $HEADER_LANGUAGES as $index => $language_item ) : ?>
				<?php if ( $index ) : ?><span class="sbtw-sep sep">/</span><?php endif; ?>
				<a href="<?php echo esc_url( $language_item['url'] ); ?>"<?php echo ! empty( $language_item['active'] ) ? ' class="sbtw-active active"' : ''; ?>><?php echo esc_html( $language_item['code'] ); ?></a>
			<?php endforeach; ?>
		</div>
	</div>
	<button class="sbtw-burger burger" id="burger" aria-label="Menu"><span></span><span></span><span></span></button>
</header>

<div class="sbtw-drawer drawer" id="drawer">
	<button class="sbtw-close close" id="closeDrawer" aria-label="Close">&times;</button>
	<?php foreach ( $NAV as $item ) : ?>
		<a href="<?php echo esc_url( sbt_t1_url( $item['url'] ) ); ?>"><?php echo esc_html( $item['label'] ); ?></a>
		<?php if ( ! empty( $item['sub'] ) ) : ?>
			<div class="sbtw-sub-m sub-m">
				<?php foreach ( $item['sub'] as $sub_item ) : ?>
					<a href="<?php echo esc_url( sbt_t1_url( $sub_item['url'] ) ); ?>"><?php echo esc_html( $sub_item['label'] ); ?></a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>

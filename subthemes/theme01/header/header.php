<?php
require_once __DIR__ . '/../data_general.php';
require_once __DIR__ . '/../functions/helpers.php';

if ( ! isset( $PAGE ) ) {
	$PAGE = '';
}
if ( ! isset( $PAGE_TITLE ) ) {
	$PAGE_TITLE = ( $SITE['name'] ?? 'Villa Rosa Resort' ) . ' - ' . ( $SITE['tagline'] ?? 'An Apulia Villa' );
}

$SOURCE_VERSION = $SITE['source_version'] ?? '1.0.0';
$SOURCE_BUILD_DATE = $SITE['source_build_date'] ?? '2026-06-07';
$ASSET_VERSION = defined( 'SBT_VERSION' ) ? SBT_VERSION : $SOURCE_VERSION;
$SITE_CSS_URL = function_exists( 'sbt_asset_url' ) ? sbt_asset_url( 'assets/site.css' ) : 'assets/site.css';
if ( function_exists( 'add_query_arg' ) ) {
	$SITE_CSS_URL = add_query_arg( 'ver', $ASSET_VERSION, $SITE_CSS_URL );
} else {
	$SITE_CSS_URL .= ( false === strpos( $SITE_CSS_URL, '?' ) ? '?' : '&' ) . 'ver=' . rawurlencode( $ASSET_VERSION );
}
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
</head>
<body <?php if ( function_exists( 'body_class' ) ) { body_class( 'sbtw' ); } else { echo 'class="sbtw"'; } ?> data-page="<?php echo esc_attr( $PAGE ); ?>" data-template-version="<?php echo esc_attr( $SOURCE_VERSION ); ?>">
<?php if ( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
<?php
if ( function_exists( 'sbt_render_site_config' ) ) {
	sbt_render_site_config( $NAV ?? array(), $SITE ?? array(), $IMG ?? array() );
}
?>

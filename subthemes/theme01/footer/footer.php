<?php
$THEME_JS_VERSION = defined( 'SBT_VERSION' ) ? SBT_VERSION : ( $SOURCE_VERSION ?? '1.0.0' );
$SITE_JS_URL = function_exists( 'sbt_asset_url_existing' ) ? sbt_asset_url_existing( array( 'assets/syncbooking_site.js', 'assets/site.js' ) ) : 'assets/syncbooking_site.js';
if ( function_exists( 'add_query_arg' ) ) {
	$SITE_JS_URL = add_query_arg( 'ver', $THEME_JS_VERSION, $SITE_JS_URL );
} else {
	$SITE_JS_URL .= ( false === strpos( $SITE_JS_URL, '?' ) ? '?' : '&' ) . 'ver=' . rawurlencode( $THEME_JS_VERSION );
}
?>
<?php if ( function_exists( 'wp_footer' ) ) wp_footer(); ?>
<script src="<?php echo esc_url( $SITE_JS_URL ); ?>"></script>
</body>
</html>

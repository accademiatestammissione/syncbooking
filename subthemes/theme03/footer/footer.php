<?php
if ( function_exists( 'sbt_render_site_footer' ) ) {
	sbt_render_site_footer( $NAV ?? array(), $SITE ?? array(), $IMG ?? array() );
}

$THEME_JS_VERSION = defined( 'SBT_VERSION' ) ? SBT_VERSION : ( $SOURCE_VERSION ?? '1.0.0' );
$THEME_JS_URL = function_exists( 'get_template_directory_uri' )
	? get_template_directory_uri() . '/assets/sbtw-interactions.js'
	: 'assets/sbtw-interactions.js';
if ( function_exists( 'add_query_arg' ) ) {
	$THEME_JS_URL = add_query_arg( 'ver', $THEME_JS_VERSION, $THEME_JS_URL );
} else {
	$THEME_JS_URL .= ( false === strpos( $THEME_JS_URL, '?' ) ? '?' : '&' ) . 'ver=' . rawurlencode( $THEME_JS_VERSION );
}
?>
<?php if ( function_exists( 'wp_footer' ) ) wp_footer(); ?>
<script src="<?php echo esc_url( $THEME_JS_URL ); ?>"></script>
</body>
</html>

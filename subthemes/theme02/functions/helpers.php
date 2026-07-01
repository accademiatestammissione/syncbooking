<?php
if ( ! function_exists( 'sbt_t1_text' ) ) {
	function sbt_t1_text( $path, $value, $args = array() ) {
		if ( function_exists( 'sbt_vfe' ) ) {
			return sbt_vfe( $path, $value, $args );
		}

		return $value;
	}
}

if ( ! function_exists( 'sbt_t1_url' ) ) {
	function sbt_t1_url( $url ) {
		return function_exists( 'sbt_url' ) ? sbt_url( $url ) : $url;
	}
}

if ( ! function_exists( 'sbt_t1_img' ) ) {
	function sbt_t1_img( $path, $src, $alt = '', $attrs = array() ) {
		$attrs = array_merge( array( 'alt' => $alt ), $attrs );
		if ( function_exists( 'sbt_vfe_image' ) ) {
			return sbt_vfe_image( $path, $src, $attrs );
		}

		$attr_string = '';
		foreach ( $attrs as $name => $value ) {
			$attr_string .= ' ' . esc_attr( $name ) . '="' . esc_attr( $value ) . '"';
		}

		return '<img src="' . esc_url( $src ) . '"' . $attr_string . ' />';
	}
}

if ( ! function_exists( 'sbt_t1_bg_style' ) ) {
	function sbt_t1_bg_style( $path, $src ) {
		return function_exists( 'sbt_vfe_background_style' )
			? sbt_vfe_background_style( $path, $src )
			: "background-image:url('" . esc_url( $src ) . "');";
	}
}

if ( ! function_exists( 'sbt_t1_control' ) ) {
	function sbt_t1_control( $path, $value, $label = 'Edit', $type = 'text', $extra_class = '', $reload = false ) {
		return function_exists( 'sbt_vfe_control' ) ? sbt_vfe_control( $path, $value, $label, $type, $extra_class, $reload ) : '';
	}
}

if ( ! function_exists( 'sbt_t1_page_hero' ) ) {
	function sbt_t1_page_hero( $content_key, $p, $label, $parent = null ) {
		?>
		<section class="sbtw-page-hero page-hero" data-screen-label="<?php echo esc_attr( $label . ' banner' ); ?>">
			<?php echo sbt_t1_img( 'C.' . $content_key . '.banner', $p['banner'], $label, array( 'class' => 'sbtw-bg bg' ) ); ?>
			<div class="sbtw-wrap wrap">
				<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'C.' . $content_key . '.over', $p['over'] ); ?></div>
				<h1><?php echo sbt_t1_text( 'C.' . $content_key . '.h1', $p['h1'] ); ?></h1>
				<nav class="sbtw-crumb crumb">
					<a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $GLOBALS['TEXT']['home'] ?? 'Home' ); ?></a>
					<span>/</span>
					<?php if ( $parent ) : ?>
						<a href="<?php echo esc_url( sbt_t1_url( $parent['url'] ) ); ?>"><?php echo esc_html( $parent['label'] ); ?></a><span>/</span>
					<?php endif; ?>
					<?php echo esc_html( $label ); ?>
				</nav>
			</div>
		</section>
		<?php
	}
}

if ( ! function_exists( 'sbt_t1_carousel' ) ) {
	function sbt_t1_carousel( $path, $images, $alt, $lightbox = true, $frame = false ) {
		$images = is_array( $images ) ? array_values( $images ) : array();
		if ( 2 > count( $images ) ) {
			$image = $images ? $images[0] : '';
			$attrs = $lightbox ? array( 'data-lightbox' => '' ) : array();
			?>
			<div class="sbtw-media sbtw-reveal media reveal">
				<?php echo sbt_t1_img( $path . '.0', $image, $alt, $attrs ); ?>
				<?php if ( $frame ) : ?>
					<div class="sbtw-frame frame"></div>
				<?php endif; ?>
			</div>
			<?php
			return;
		}
		?>
		<div class="sbtw-media sbtw-reveal sbtw-media-carousel media reveal media-carousel" data-carousel>
			<div class="sbtw-mc-track mc-track">
				<?php foreach ( $images as $index => $image ) : ?>
					<?php
					$attrs = $lightbox ? array( 'data-lightbox' => '' ) : array();
					echo sbt_t1_img( $path . '.' . $index, $image, $alt, $attrs );
					?>
				<?php endforeach; ?>
			</div>
			<button class="sbtw-mc-nav sbtw-mc-prev mc-nav mc-prev" type="button" aria-label="Previous">&#8249;</button>
			<button class="sbtw-mc-nav sbtw-mc-next mc-nav mc-next" type="button" aria-label="Next">&#8250;</button>
			<div class="sbtw-mc-dots mc-dots"></div>
			<?php if ( $frame ) : ?>
				<div class="sbtw-frame frame"></div>
			<?php endif; ?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'sbt_t1_mosaic' ) ) {
	function sbt_t1_mosaic( $path, $images, $alt, $button_label = 'Show all photos' ) {
		?>
		<div class="sbtw-mosaic sbtw-reveal mosaic reveal">
			<?php foreach ( $images as $index => $image ) : ?>
				<div class="sbtw-m-item m-item"><?php echo sbt_t1_img( $path . '.' . $index, $image, $alt, array( 'data-lightbox' => '' ) ); ?></div>
			<?php endforeach; ?>
			<button class="sbtw-m-allbtn m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo esc_html( $button_label ); ?></button>
		</div>
		<?php
	}
}

if ( ! function_exists( 'sbt_t1_amenities' ) ) {
	function sbt_t1_amenities( $path, $items, $icons ) {
		?>
		<div class="sbtw-amenity-grid amenity-grid">
			<?php foreach ( $items as $index => $item ) : ?>
				<div class="sbtw-amenity sbtw-reveal amenity reveal">
					<svg viewBox="0 0 24 24"><?php echo $icons[ $item[0] ] ?? ''; ?></svg>
					<h4><?php echo sbt_t1_text( $path . '.' . $index . '.1', $item[1] ); ?></h4>
					<p><?php echo sbt_t1_text( $path . '.' . $index . '.2', $item[2], array( 'multiline' => true ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<?php
	}
}

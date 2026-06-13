<?php
$THEME_JS_URL = function_exists( 'sbt_asset_url' ) ? sbt_asset_url( 'assets/site.js' ) : 'assets/site.js';
$THEME_JS_VERSION = defined( 'SBT_VERSION' ) ? SBT_VERSION : ( $SOURCE_VERSION ?? '1.0.0' );
if ( function_exists( 'add_query_arg' ) ) {
	$THEME_JS_URL = add_query_arg( 'ver', $THEME_JS_VERSION, $THEME_JS_URL );
} else {
	$THEME_JS_URL .= ( false === strpos( $THEME_JS_URL, '?' ) ? '?' : '&' ) . 'ver=' . rawurlencode( $THEME_JS_VERSION );
}
?>

<footer data-screen-label="Footer">
	<div class="sbtw-wrap wrap">
		<div class="sbtw-foot-grid foot-grid">
			<div class="sbtw-reveal reveal">
				<a class="sbtw-logo logo" href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><img src="<?php echo esc_url( $IMG['logo_foot'] ); ?>" alt="<?php echo esc_attr( $SITE['name'] ); ?>" /></a>
			</div>
			<div class="sbtw-reveal reveal">
				<h4><?php echo esc_html( $SITE['name'] ); ?></h4>
				<p><a href="<?php echo esc_url( $SITE['map'] ); ?>"><?php echo function_exists( 'sbt_site_address_html' ) ? sbt_site_address_html( $SITE ) : wp_kses_post( $SITE['address'] ?? '' ); ?></a></p>
			</div>
			<div class="sbtw-reveal reveal">
				<h4><?php echo esc_html( $TEXT['contacts'] ?? 'Contacts' ); ?></h4>
				<p>
					<a href="tel:<?php echo esc_attr( $SITE['phone1_t'] ); ?>">T. <?php echo esc_html( $SITE['phone1'] ); ?></a><br/>
					<a href="tel:<?php echo esc_attr( $SITE['phone2_t'] ); ?>">T. <?php echo esc_html( $SITE['phone2'] ); ?></a><br/>
					<a href="mailto:<?php echo esc_attr( $SITE['email'] ); ?>"><?php echo esc_html( $SITE['email'] ); ?></a>
				</p>
			</div>
			<div class="sbtw-reveal reveal">
				<h4><?php echo esc_html( $TEXT['stay_in_touch'] ?? 'Stay in touch' ); ?></h4>
				<div class="sbtw-socials socials">
					<a href="<?php echo esc_url( $SITE['wa'] ); ?>" aria-label="WhatsApp"><?php echo $WA_SVG; ?></a>
					<a href="<?php echo esc_url( $SITE['facebook'] ); ?>" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M14 8.5V7c0-.8.2-1.2 1.3-1.2H17V3h-2.5C11.6 3 11 4.7 11 6.7V8.5H9V12h2v9h3v-9h2.4l.4-3.5H14Z"/></svg></a>
					<a href="<?php echo esc_url( $SITE['instagram'] ); ?>" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2 0 1.8.3 2.2.4.6.2 1 .4 1.4.9.5.4.7.8.9 1.4.1.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c0 1.2-.3 1.8-.4 2.2-.2.6-.4 1-.9 1.4-.4.5-.8.7-1.4.9-.4.1-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2 0-1.8-.3-2.2-.4-.6-.2-1-.4-1.4-.9-.5-.4-.7-.8-.9-1.4-.1-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c0-1.2.3-1.8.4-2.2.2-.6.4-1 .9-1.4.4-.5.8-.7 1.4-.9.4-.1 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2Zm0 3.2A6.6 6.6 0 1 0 18.6 12 6.6 6.6 0 0 0 12 5.4Zm0 10.9A4.3 4.3 0 1 1 16.3 12 4.3 4.3 0 0 1 12 16.3Zm6.8-11.2a1.5 1.5 0 1 1-1.5-1.5 1.5 1.5 0 0 1 1.5 1.5Z"/></svg></a>
				</div>
			</div>
		</div>
		<div class="sbtw-legal legal">
			<span>&copy; <?php echo esc_html( $SITE['year'] ); ?> <?php echo esc_html( $SITE['name'] ); ?> - <?php echo esc_html( $SITE['tagline'] ); ?> - VAT <?php echo esc_html( $SITE['vat'] ); ?> - CIN <?php echo esc_html( $SITE['cin'] ); ?> - <?php echo esc_html( $TEXT['all_rights_reserved'] ?? 'All rights reserved' ); ?></span>
			<span style="display:flex;gap:18px;"><a href="#"><?php echo esc_html( $TEXT['privacy_policy'] ?? 'Privacy Policy' ); ?></a><a href="<?php echo esc_url( $SITE['webdev']['url'] ); ?>"><?php echo esc_html( $SITE['webdev']['label'] ); ?></a></span>
		</div>
	</div>
</footer>

<div class="sbtw-lightbox lightbox" id="lightbox"><button class="sbtw-lx-close lx-close" aria-label="Close">&times;</button><button class="sbtw-lx-nav sbtw-lx-prev lx-nav lx-prev" aria-label="Previous">&#8249;</button><div class="sbtw-lx-stage lx-stage"><img alt="" /><span class="sbtw-lx-count lx-count"></span></div><button class="sbtw-lx-nav sbtw-lx-next lx-nav lx-next" aria-label="Next">&#8250;</button></div>

<?php if ( function_exists( 'wp_footer' ) ) wp_footer(); ?>
<script src="<?php echo esc_url( $THEME_JS_URL ); ?>"></script>
<script>
(function(){
	function ready(fn){if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',fn);else fn();}
	ready(function(){
		var lb=document.getElementById('lightbox');
		if(!lb)return;
		var lbImg=lb.querySelector('img');
		var lbCount=lb.querySelector('.sbtw-lx-count,.lx-count');
		var images=[].slice.call(document.querySelectorAll('img[data-lightbox]'));
		var index=0;
		function setOpen(open){lb.classList.toggle('sbtw-open',open);lb.classList.toggle('open',open);}
		function show(next){if(!images.length||!lbImg)return;index=(next+images.length)%images.length;lbImg.src=images[index].getAttribute('data-full')||images[index].src;if(lbCount)lbCount.textContent=(index+1)+' / '+images.length;}
		function openAt(next){show(next);setOpen(true);}
		images.forEach(function(img,i){img.addEventListener('click',function(){openAt(i);});});
		document.querySelectorAll('.sbtw-m-allbtn,.m-allbtn,.sbtw-w-allbtn').forEach(function(button){
			button.addEventListener('click',function(event){
				event.preventDefault();
				var scope=button.closest('.sbtw-mosaic,.mosaic,.sbtw-w-gallery')||document;
				var first=scope.querySelector('img[data-lightbox]');
				openAt(Math.max(0,images.indexOf(first)));
			});
		});
		var close=lb.querySelector('.sbtw-lx-close,.lx-close');
		var prev=lb.querySelector('.sbtw-lx-prev,.lx-prev');
		var next=lb.querySelector('.sbtw-lx-next,.lx-next');
		if(close)close.addEventListener('click',function(){setOpen(false);});
		if(prev)prev.addEventListener('click',function(event){event.stopPropagation();show(index-1);});
		if(next)next.addEventListener('click',function(event){event.stopPropagation();show(index+1);});
		lb.addEventListener('click',function(event){if(event.target===lb||event.target.classList.contains('sbtw-lx-stage')||event.target.classList.contains('lx-stage'))setOpen(false);});
		document.addEventListener('keydown',function(event){
			if(!lb.classList.contains('sbtw-open')&&!lb.classList.contains('open'))return;
			if(event.key==='Escape')setOpen(false);
			if(event.key==='ArrowLeft')show(index-1);
			if(event.key==='ArrowRight')show(index+1);
		});
	});
})();
</script>
</body>
</html>

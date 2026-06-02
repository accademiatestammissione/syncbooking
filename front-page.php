<?php
/**
 * Front page template.
 *
 * @package SyncBookingVillaResort
 */

get_header();

$hero_image = sbvr_get_theme_option( 'sbvr_hero_image', 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=2200&q=85' );
?>

<section class="hero" style="--hero-image: url('<?php echo esc_url( $hero_image ); ?>');">
	<div class="hero__content">
		<p class="eyebrow"><?php esc_html_e( 'Boutique Resort & SPA', 'syncbooking-villa-resort' ); ?></p>
		<h1><?php esc_html_e( 'La tua casa nel cuore della Puglia', 'syncbooking-villa-resort' ); ?></h1>
		<p><?php esc_html_e( 'Un rifugio elegante tra villa storica, parco, piscina e benessere, pensato per chi desidera la libertà di una casa privata con il comfort di un resort.', 'syncbooking-villa-resort' ); ?></p>
		<div class="hero__actions">
			<a class="button button--primary" href="<?php echo esc_url( sbvr_get_theme_option( 'sbvr_booking_url', '#booking' ) ); ?>"><?php esc_html_e( 'Prenota ora', 'syncbooking-villa-resort' ); ?></a>
			<a class="button button--ghost" href="#houses"><?php esc_html_e( 'Scopri le case', 'syncbooking-villa-resort' ); ?></a>
		</div>
	</div>
	<div class="hero__booking" id="booking">
		<?php get_template_part( 'template-parts/booking-form' ); ?>
	</div>
</section>

<section class="section intro" id="welcome">
	<div class="section__copy">
		<p class="eyebrow"><?php esc_html_e( 'Benvenuto', 'syncbooking-villa-resort' ); ?></p>
		<h2><?php esc_html_e( 'Privacy, verde e comfort a cinque stelle', 'syncbooking-villa-resort' ); ?></h2>
	</div>
	<div class="intro__text">
		<p><?php esc_html_e( 'Il tema valorizza ville, relais e strutture hospitality con una narrazione calda ma ordinata: immagini ampie, CTA di prenotazione sempre visibili e sezioni modulari per case, servizi, SPA, esperienze e offerte.', 'syncbooking-villa-resort' ); ?></p>
		<p><?php esc_html_e( 'La home è pronta per essere personalizzata dal pannello WordPress con logo, menu, contatti e URL del motore di prenotazione.', 'syncbooking-villa-resort' ); ?></p>
	</div>
</section>

<section class="section houses" id="houses">
	<div class="section__heading">
		<p class="eyebrow"><?php esc_html_e( 'Le Case', 'syncbooking-villa-resort' ); ?></p>
		<h2><?php esc_html_e( 'Spazi indipendenti per ogni soggiorno', 'syncbooking-villa-resort' ); ?></h2>
	</div>
	<div class="card-grid card-grid--three">
		<?php
		$houses = array(
			array( 'title' => __( 'Case per 2 ospiti', 'syncbooking-villa-resort' ), 'meta' => __( '30-40 m² · letto king-size · pergolato privato', 'syncbooking-villa-resort' ), 'img' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=80' ),
			array( 'title' => __( 'Case per 3 ospiti', 'syncbooking-villa-resort' ), 'meta' => __( '40-50 m² · cucina attrezzata · divano letto', 'syncbooking-villa-resort' ), 'img' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=900&q=80' ),
			array( 'title' => __( 'Case per 4 ospiti', 'syncbooking-villa-resort' ), 'meta' => __( '50-60 m² · zona living · outdoor dining', 'syncbooking-villa-resort' ), 'img' => 'https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?auto=format&fit=crop&w=900&q=80' ),
		);
		foreach ( $houses as $house ) :
			?>
			<article class="feature-card">
				<img src="<?php echo esc_url( $house['img'] ); ?>" alt="">
				<div>
					<h3><?php echo esc_html( $house['title'] ); ?></h3>
					<p><?php echo esc_html( $house['meta'] ); ?></p>
					<a href="<?php echo esc_url( sbvr_get_theme_option( 'sbvr_booking_url', '#booking' ) ); ?>"><?php esc_html_e( 'Verifica disponibilità', 'syncbooking-villa-resort' ); ?></a>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<section class="section services" id="services">
	<div class="section__heading">
		<p class="eyebrow"><?php esc_html_e( 'Servizi', 'syncbooking-villa-resort' ); ?></p>
		<h2><?php esc_html_e( 'Tutto quello che serve per rallentare', 'syncbooking-villa-resort' ); ?></h2>
	</div>
	<div class="service-grid">
		<?php
		$services = array( 'Piscina', 'Parco privato', 'SPA', 'Wi-Fi', 'Cucina attrezzata', 'BBQ', 'Palestra', 'Esperienze su misura' );
		foreach ( $services as $service ) :
			?>
			<div class="service-item">
				<span aria-hidden="true">+</span>
				<h3><?php echo esc_html( $service ); ?></h3>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<section class="split-section" id="wellness">
	<div class="split-section__image">
		<img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1200&q=85" alt="">
	</div>
	<div class="split-section__copy">
		<p class="eyebrow"><?php esc_html_e( 'SPA & Wellness', 'syncbooking-villa-resort' ); ?></p>
		<h2><?php esc_html_e( 'Rituali di benessere, dal mattino alla sera', 'syncbooking-villa-resort' ); ?></h2>
		<p><?php esc_html_e( 'Una sezione dedicata a sauna, bagno turco, idromassaggio, massaggi, yoga e relax. Perfetta per raccontare pacchetti, percorsi e servizi extra.', 'syncbooking-villa-resort' ); ?></p>
		<a class="button button--primary" href="<?php echo esc_url( sbvr_get_theme_option( 'sbvr_booking_url', '#booking' ) ); ?>"><?php esc_html_e( 'Richiedi informazioni', 'syncbooking-villa-resort' ); ?></a>
	</div>
</section>

<section class="section experiences" id="experiences">
	<div class="section__heading">
		<p class="eyebrow"><?php esc_html_e( 'Esperienze', 'syncbooking-villa-resort' ); ?></p>
		<h2><?php esc_html_e( 'Puglia da vivere, non solo da visitare', 'syncbooking-villa-resort' ); ?></h2>
	</div>
	<div class="offer-strip">
		<div><h3><?php esc_html_e( 'Luxury Gourmet', 'syncbooking-villa-resort' ); ?></h3><p><?php esc_html_e( 'Cene private, degustazioni e sapori locali.', 'syncbooking-villa-resort' ); ?></p></div>
		<div><h3><?php esc_html_e( 'Relax in Villa', 'syncbooking-villa-resort' ); ?></h3><p><?php esc_html_e( 'Pacchetti SPA e momenti slow nel parco.', 'syncbooking-villa-resort' ); ?></p></div>
		<div><h3><?php esc_html_e( 'Summer Offers', 'syncbooking-villa-resort' ); ?></h3><p><?php esc_html_e( 'Promozioni stagionali e soggiorni lunghi.', 'syncbooking-villa-resort' ); ?></p></div>
	</div>
</section>

<?php
get_footer();

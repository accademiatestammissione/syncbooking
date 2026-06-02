<?php
/**
 * Booking form partial.
 *
 * @package SyncBookingVillaResort
 */

$booking_url = sbvr_get_theme_option( 'sbvr_booking_url', '#booking' );
?>
<form class="booking-form" action="<?php echo esc_url( $booking_url ); ?>" method="get">
	<p class="booking-form__title"><?php esc_html_e( 'Verifica disponibilità', 'syncbooking-villa-resort' ); ?></p>
	<label>
		<span><?php esc_html_e( 'Arrivo', 'syncbooking-villa-resort' ); ?></span>
		<input type="date" name="arrival" required>
	</label>
	<label>
		<span><?php esc_html_e( 'Notti', 'syncbooking-villa-resort' ); ?></span>
		<select name="nights">
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="7">7</option>
		</select>
	</label>
	<label>
		<span><?php esc_html_e( 'Case', 'syncbooking-villa-resort' ); ?></span>
		<select name="houses">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
	</label>
	<label>
		<span><?php esc_html_e( 'Ospiti', 'syncbooking-villa-resort' ); ?></span>
		<select name="guests">
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5+</option>
		</select>
	</label>
	<button type="submit"><?php esc_html_e( 'Cerca', 'syncbooking-villa-resort' ); ?></button>
</form>

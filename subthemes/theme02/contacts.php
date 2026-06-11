<?php
$PAGE = 'contacts';
$CONTENT_KEY = 'contacts';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Contacts banner">
  <?php echo sbt_t1_img( 'C.contacts.image_1', sbt_t1_asset( 'assets/images/facade-vines.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.contacts.text_1', 'We are here for you', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.contacts.text_2', 'Contacts', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.contacts.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.contacts.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.contacts.text_4', 'Contacts', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Contacts content">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:56px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.contacts.text_5', 'Get in touch', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.contacts.text_6', 'Plan your stay with us', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.contacts.text_7', 'For availability, tailored quotes or any request, our team will be delighted to help. Reach us by phone, email or WhatsApp â€” or send a message using the form and we will reply as soon as possible.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-contact-grid">
      <div class="sbtw-contact-info sbtw-reveal">
        <div class="sbtw-ci-block">
          <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.contacts.text_8', 'Address', array( 'multiline' => false ) ); ?></div>
          <p class="sbtw-big"><?php echo sbt_t1_text( 'C.contacts.text_9', 'Via Martuccello n. 8', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.contacts.text_10', '70014 Conversano (Bari)', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.contacts.text_11', 'Puglia, Italy', array( 'multiline' => false ) ); ?></p>
          <p style="margin-top:8px;"><a href="https://maps.app.goo.gl/"><?php echo sbt_t1_text( 'C.contacts.text_12', 'Open in Google Maps â†’', array( 'multiline' => false ) ); ?></a></p>
        </div>
        <div class="sbtw-ci-block">
          <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.contacts.text_13', 'Phone', array( 'multiline' => false ) ); ?></div>
          <p class="sbtw-big"><a href="tel:+393382507545"><?php echo sbt_t1_text( 'C.contacts.text_14', '+39 338 250 7545', array( 'multiline' => false ) ); ?></a></p>
          <a class="sbtw-wa sbtw-wa--red" href="https://wa.me/393382507545" style="margin-top:18px;"><svg viewBox="0 0 24 24" style="width:16px;height:16px;fill:#fff;"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.6 14.2c-.2.6-1.2 1.2-1.7 1.2-.4 0-1 .1-3.1-.8-2.6-1.1-4.3-3.8-4.4-4-.1-.2-1-1.4-1-2.6 0-1.2.6-1.8.9-2 .2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .5l-.4.6c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4.1.5-.1l.7-.9c.2-.2.4-.2.6-.1l1.9.9c.2.1.4.2.4.3.1.2.1.6 0 1Z"/></svg><?php echo sbt_t1_text( 'C.contacts.text_15', 'Chat on WhatsApp', array( 'multiline' => false ) ); ?></a>
        </div>
        <div class="sbtw-ci-block">
          <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.contacts.text_16', 'Email', array( 'multiline' => false ) ); ?></div>
          <p class="sbtw-big"><a href="mailto:masserialecerase@gmail.com"><?php echo sbt_t1_text( 'C.contacts.text_17', 'masserialecerase@gmail.com', array( 'multiline' => false ) ); ?></a></p>
        </div>
      </div>
      <form class="sbtw-contact-form sbtw-reveal" onsubmit="return false;" data-sbt-form="contact">
<input type="text" name="website" value="" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;opacity:0;" aria-hidden="true" />
        <div class="sbtw-field"><label><?php echo sbt_t1_text( 'C.contacts.text_18', 'Name', array( 'multiline' => false ) ); ?></label><input type="text" name="name" required autocomplete="name" placeholder="Your name" /></div>
        <div class="sbtw-field"><label><?php echo sbt_t1_text( 'C.contacts.text_19', 'Email', array( 'multiline' => false ) ); ?></label><input type="email" name="email" required autocomplete="email" placeholder="you@email.com" /></div>
        <div class="sbtw-field"><label><?php echo sbt_t1_text( 'C.contacts.text_20', 'Phone', array( 'multiline' => false ) ); ?></label><input type="tel" name="phone" autocomplete="tel" placeholder="+39 ..." /></div>
        <div class="sbtw-field"><label><?php echo sbt_t1_text( 'C.contacts.text_21', 'Message', array( 'multiline' => false ) ); ?></label><textarea name="message" placeholder="Tell us about your stay, dates and number of guests..."></textarea></div>
        <button class="sbtw-btn" type="submit" style="align-self:flex-start;"><?php echo sbt_t1_text( 'C.contacts.text_22', 'Send message', array( 'multiline' => false ) ); ?></button>
      <p class="sbtw-form-result form-result" style="display:none;"></p></form>
    </div>
  </div>
</section>

<section style="padding-bottom:0;" data-screen-label="Contacts map">
  <iframe class="sbtw-map-embed" src="https://www.google.com/maps?q=Masseria%20Le%20Cerase%20Conversano&output=embed" title="Map" loading="lazy"></iframe>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

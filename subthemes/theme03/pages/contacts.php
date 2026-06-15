<?php
$PAGE = 'contacts';
$PAGE_TITLE = 'Contacts – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Contacts banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-04.jpg' ) ); ?>" alt="Contacts" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">We are here for you</div>
    <h1>Contacts</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Contacts</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Contacts content">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:56px;">
      <div class="sbtw-overline">Get in touch</div>
      <h2>Plan your stay with us</h2>
      <p>For availability, tailored quotes or any request, we will be delighted to help. Reach us by phone, email or WhatsApp — or send a message using the form and we will reply as soon as possible.</p>
    </div>
    <div class="sbtw-contact-grid">
      <div class="sbtw-contact-info sbtw-reveal">
        <div class="sbtw-ci-block">
          <div class="sbtw-overline">Address</div>
          <p class="sbtw-big">Masseria Montefieno<br/>Conversano (Bari)<br/>Puglia, Italy</p>
          <p style="margin-top:8px;"><a href="https://www.google.com/maps?q=Masseria+Montefieno+Conversano">Open in Google Maps →</a></p>
        </div>
        <div class="sbtw-ci-block">
          <div class="sbtw-overline">Phone</div>
          <p class="sbtw-big"><a href="tel:+393382507545">+39 338 250 7545</a></p>
          <a class="sbtw-wa sbtw-wa--red" href="https://wa.me/393382507545" style="margin-top:18px;"><svg viewBox="0 0 24 24" style="width:16px;height:16px;fill:#fff;"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.6 14.2c-.2.6-1.2 1.2-1.7 1.2-.4 0-1 .1-3.1-.8-2.6-1.1-4.3-3.8-4.4-4-.1-.2-1-1.4-1-2.6 0-1.2.6-1.8.9-2 .2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .5l-.4.6c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4.1.5-.1l.7-.9c.2-.2.4-.2.6-.1l1.9.9c.2.1.4.2.4.3.1.2.1.6 0 1Z"/></svg>Chat on WhatsApp</a>
        </div>
        <div class="sbtw-ci-block">
          <div class="sbtw-overline">Email</div>
          <p class="sbtw-big"><a href="mailto:masserialecerase@gmail.com">masserialecerase@gmail.com</a></p>
        </div>
      </div>
      <?php sbt_render_contact_form( isset( $TEXT ) ? $TEXT : array() ); ?>
    </div>
  </div>
</section>

<section style="padding-bottom:0;" data-screen-label="Contacts map">
  <iframe class="sbtw-map-embed" src="https://www.google.com/maps?q=Masseria%20Montefieno%20Conversano&output=embed" title="Map" loading="lazy"></iframe>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

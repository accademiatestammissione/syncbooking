<?php $PAGE = 'contacts'; require __DIR__ . '/inc/header.php'; $p = $C['contacts']; ?>

<section class="page-hero" data-screen-label="Contacts banner">
  <img class="bg" src="<?= $IMG['contacts_hero'] ?>" alt="<?= strip_tags($p['h1']) ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>">Home</a><span>/</span><?= strip_tags($p['h1']) ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Contacts content">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:56px;">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2><?= $p['intro_h2'] ?></h2>
      <p><?= $p['intro_p'] ?></p>
    </div>
    <div class="contact-grid">
      <div class="contact-info reveal">
        <div class="ci-block">
          <div class="overline">Address</div>
          <p class="big"><?= $SITE['address'] ?></p>
          <p style="margin-top:8px;"><a href="<?= $SITE['map'] ?>">Open in Google Maps &rarr;</a></p>
        </div>
        <div class="ci-block">
          <div class="overline">Phone</div>
          <p class="big"><a href="tel:<?= $SITE['phone1_t'] ?>"><?= $SITE['phone1'] ?></a></p>
        </div>
        <div class="ci-block">
          <div class="overline">Email</div>
          <p class="big"><a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></p>
        </div>
        <div class="ci-block">
          <a class="wa" href="<?= $SITE['wa'] ?>" style="background:#25d366;"><?= $WA_SVG ?>Chat on WhatsApp</a>
        </div>
      </div>
      <form class="contact-form reveal" id="contactForm" onsubmit="return false;">
        <div class="field"><label>Name</label><input type="text" placeholder="Your name" /></div>
        <div class="field"><label>Email</label><input type="email" placeholder="you@email.com" /></div>
        <div class="field"><label>Phone</label><input type="tel" placeholder="+39 ..." /></div>
        <div class="field"><label>Message</label><textarea placeholder="Tell us about your stay or event, dates and number of guests…"></textarea></div>
        <button class="btn" type="submit" style="align-self:flex-start;">Send message</button>
        <p class="form-result" style="display:none;color:var(--green);font-size:14px;">Thank you — your message has been noted. We'll be in touch soon.</p>
      </form>
    </div>
  </div>
</section>

<section style="padding-bottom:0;" data-screen-label="Contacts map">
  <iframe class="map-embed" src="https://www.google.com/maps?q=Masseria%20Le%20Cerase%20Conversano&output=embed" title="Map" loading="lazy"></iframe>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

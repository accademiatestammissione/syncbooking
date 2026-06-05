<?php $PAGE = 'contacts'; require __DIR__ . '/inc/header.php'; $p = $C['contacts']; ?>

<section class="page-hero" data-screen-label="Contacts banner">
  <img class="bg" src="<?php echo $IMG['contacts_hero'] ?>" alt="<?php echo strip_tags($p['h1']) ?>" />
  <div class="wrap">
    <div class="overline"><?php echo $p['over'] ?></div>
    <h1><?php echo $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>">Home</a><span>/</span><?php echo strip_tags($p['h1']) ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Contacts content">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:56px;">
      <div class="overline"><?php echo $p['intro_over'] ?></div>
      <h2><?php echo $p['intro_h2'] ?></h2>
      <p><?php echo $p['intro_p'] ?></p>
    </div>
    <div class="contact-grid">
      <div class="contact-info reveal">
        <div class="ci-block">
          <div class="overline">Address</div>
          <p class="big"><?php echo $SITE['address'] ?></p>
          <p style="margin-top:8px;"><a href="<?php echo $SITE['map'] ?>">Open in Google Maps &rarr;</a></p>
        </div>
        <div class="ci-block">
          <div class="overline">Phone</div>
          <p class="big"><a href="tel:<?php echo $SITE['phone1_t'] ?>"><?php echo $SITE['phone1'] ?></a></p>
        </div>
        <div class="ci-block">
          <div class="overline">Email</div>
          <p class="big"><a href="mailto:<?php echo $SITE['email'] ?>"><?php echo $SITE['email'] ?></a></p>
        </div>
        <div class="ci-block">
          <a class="wa" href="<?php echo $SITE['wa'] ?>" style="background:#25d366;"><?php echo $WA_SVG ?>Chat on WhatsApp</a>
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
  <?php if (!empty($SITE['map_embed'])): ?>
  <iframe class="map-embed" src="<?php echo $SITE['map_embed'] ?>" title="Map" loading="lazy"></iframe>
  <?php endif; ?>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

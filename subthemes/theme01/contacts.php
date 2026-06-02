<?php $PAGE = 'contacts'; require __DIR__ . '/inc/header.php'; $p = $C['contacts']; ?>

<section class="page-hero" data-screen-label="Contacts banner">
  <img class="bg" src="<?= $p['banner'] ?>" alt="<?= $p['h1'] ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?></a><span>/</span><?= $TEXT['contacts'] ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Contacts body">
  <div class="wrap contact-grid">
    <div class="contact-info reveal">
      <div>
        <div class="overline"><?= $p['intro_over'] ?></div>
        <h2 class="lead" style="margin-bottom:18px;"><?= $p['intro_h2'] ?></h2>
        <p class="body-text"><?= $p['intro_p'] ?></p>
      </div>
      <div class="ci-block">
        <div class="overline"><?= $TEXT['address'] ?></div>
        <p class="big"><a href="<?= $SITE['map'] ?>"><?= $SITE['address'] ?></a></p>
      </div>
      <div class="ci-block">
        <div class="overline"><?= $TEXT['phone'] ?></div>
        <p class="big"><a href="tel:<?= $SITE['phone1_t'] ?>"><?= $SITE['phone1'] ?></a><br><a href="tel:<?= $SITE['phone2_t'] ?>"><?= $SITE['phone2'] ?></a></p>
      </div>
      <div class="ci-block">
        <div class="overline"><?= $TEXT['email'] ?></div>
        <p class="big"><a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></p>
      </div>
      <a class="wa" href="<?= $SITE['wa'] ?>" style="align-self:flex-start;"><?= $WA_SVG ?><?= $TEXT['chat_whatsapp'] ?></a>
    </div>

    <form class="contact-form reveal" id="contactForm">
      <div class="field"><label for="cf-name"><?= $TEXT['form_name'] ?></label><input id="cf-name" type="text" required /></div>
      <div class="field"><label for="cf-email"><?= $TEXT['form_email'] ?></label><input id="cf-email" type="email" required /></div>
      <div class="field"><label for="cf-dates"><?= $TEXT['form_dates'] ?></label><input id="cf-dates" type="text" placeholder="<?= $TEXT['form_dates_placeholder'] ?>" /></div>
      <div class="field"><label for="cf-msg"><?= $TEXT['form_message'] ?></label><textarea id="cf-msg"></textarea></div>
      <button class="btn" type="submit" style="align-self:flex-start;"><?= $TEXT['form_send'] ?></button>
      <p class="form-result" style="display:none;color:var(--green);font-size:14px;"><?= $TEXT['form_result'] ?></p>
    </form>
  </div>
</section>

<iframe class="map-embed" src="<?= $SITE['map_embed'] ?>" loading="lazy" title="Map"></iframe>

<?php require __DIR__ . '/inc/footer.php'; ?>

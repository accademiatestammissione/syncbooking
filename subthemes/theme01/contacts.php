<?php $PAGE = 'contacts'; $PAGE_TITLE = $C['contacts']['title']; require __DIR__ . '/inc/header.php'; $p = $C['contacts']; ?>

<section class="page-hero" data-screen-label="Contacts banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.contacts.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.over', $p['over']) : $p['over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span><?= $TEXT['contacts'] ?? 'Contacts' ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Contacts body">
  <div class="wrap contact-grid">
    <div class="contact-info reveal">
      <div>
        <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
        <h2 class="lead" style="margin-bottom:18px;"><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
        <p class="body-text"><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.intro_p', $p['intro_p'], ['multiline'=>true]) : $p['intro_p'] ?></p>
      </div>
      <div class="ci-block">
        <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.address', $TEXT['address'] ?? 'Address') : ($TEXT['address'] ?? 'Address') ?></div>
        <p class="big"><a href="<?= $SITE['map'] ?>"><?= $SITE['address'] ?></a><?= function_exists('sbt_vfe_control') ? sbt_vfe_control('SITE.map', $SITE['map'], 'Link mappa', 'url') : '' ?></p>
      </div>
      <div class="ci-block">
        <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.phone', $TEXT['phone'] ?? 'Phone') : ($TEXT['phone'] ?? 'Phone') ?></div>
        <p class="big"><a href="tel:<?= $SITE['phone1_t'] ?>"><?= $SITE['phone1'] ?></a><br><a href="tel:<?= $SITE['phone2_t'] ?>"><?= $SITE['phone2'] ?></a></p>
      </div>
      <div class="ci-block">
        <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.email', $TEXT['email'] ?? 'Email') : ($TEXT['email'] ?? 'Email') ?></div>
        <p class="big"><a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></p>
      </div>
      <a class="wa" href="<?= $SITE['wa'] ?>" style="align-self:flex-start;"><?= $WA_SVG ?><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.chat_whatsapp', $TEXT['chat_whatsapp'] ?? 'Chat on WhatsApp') : ($TEXT['chat_whatsapp'] ?? 'Chat on WhatsApp') ?></a>
      <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('SITE.wa', $SITE['wa'], 'Link WhatsApp', 'url') : '' ?>
    </div>

    <form class="contact-form reveal" id="contactForm">
      <div class="field"><label for="cf-name"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_name', $TEXT['form_name'] ?? 'Name') : ($TEXT['form_name'] ?? 'Name') ?></label><input id="cf-name" type="text" required /></div>
      <div class="field"><label for="cf-email"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_email', $TEXT['form_email'] ?? 'Email') : ($TEXT['form_email'] ?? 'Email') ?></label><input id="cf-email" type="email" required /></div>
      <div class="field"><label for="cf-dates"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_dates', $TEXT['form_dates'] ?? 'Dates of stay') : ($TEXT['form_dates'] ?? 'Dates of stay') ?></label><input id="cf-dates" type="text" placeholder="<?= esc_attr($TEXT['form_dates_placeholder'] ?? 'e.g. 12-15 July 2026') ?>" /><?= function_exists('sbt_vfe_control') ? sbt_vfe_control('TEXT.form_dates_placeholder', $TEXT['form_dates_placeholder'] ?? 'e.g. 12-15 July 2026', 'Placeholder date', 'text') : '' ?></div>
      <div class="field"><label for="cf-msg"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_message', $TEXT['form_message'] ?? 'Message') : ($TEXT['form_message'] ?? 'Message') ?></label><textarea id="cf-msg"></textarea></div>
      <button class="btn" type="submit" style="align-self:flex-start;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_send', $TEXT['form_send'] ?? 'Send request') : ($TEXT['form_send'] ?? 'Send request') ?></button>
      <p class="form-result" style="display:none;color:var(--green);font-size:14px;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_result', $TEXT['form_result'] ?? 'Thank you - this is a demo form. Connect it to your booking system or mailer.', ['multiline'=>true]) : ($TEXT['form_result'] ?? 'Thank you - this is a demo form. Connect it to your booking system or mailer.') ?></p>
    </form>
  </div>
</section>

<iframe class="map-embed" src="<?= $SITE['map_embed'] ?>" loading="lazy" title="Map"></iframe>

<?php require __DIR__ . '/inc/footer.php'; ?>

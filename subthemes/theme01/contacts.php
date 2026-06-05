<?php $PAGE = 'contacts'; $PAGE_TITLE = $C['contacts']['title']; require __DIR__ . '/inc/header.php'; $p = $C['contacts']; ?>

<section class="page-hero" data-screen-label="Contacts banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.contacts.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.over', $p['over']) : $p['over'] ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span><?= $TEXT['contacts'] ?? 'Contacts' ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Contacts content">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:56px;">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.intro_over', $p['intro_over']) : $p['intro_over'] ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.intro_h2', $p['intro_h2']) : $p['intro_h2'] ?></h2>
      <?php $contacts_intro = $p['intro_p_html'] ?? $p['intro_p']; ?>
      <p><?= function_exists('sbt_vfe') ? sbt_vfe('C.contacts.intro_p_html', $contacts_intro, ['multiline'=>true]) : $contacts_intro ?></p>
    </div>
    <div class="contact-grid">
      <div class="contact-info reveal">
        <div class="ci-block">
          <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.address', $TEXT['address'] ?? 'Address') : ($TEXT['address'] ?? 'Address') ?></div>
          <p class="big"><?= $SITE['address'] ?></p>
          <p style="margin-top:8px;"><a href="<?= esc_url($SITE['map']) ?>"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.open_maps', $TEXT['open_maps'] ?? 'Open in Google Maps ->') : ($TEXT['open_maps'] ?? 'Open in Google Maps ->') ?></a><?= function_exists('sbt_vfe_control') ? sbt_vfe_control('SITE.map', $SITE['map'], 'Link mappa', 'url') : '' ?></p>
        </div>
        <div class="ci-block">
          <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.phone', $TEXT['phone'] ?? 'Phone') : ($TEXT['phone'] ?? 'Phone') ?></div>
          <p class="big"><a href="tel:<?= $SITE['phone1_t'] ?>"><?= $SITE['phone1'] ?></a><br><a href="tel:<?= $SITE['phone2_t'] ?>"><?= $SITE['phone2'] ?></a></p>
        </div>
        <div class="ci-block">
          <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.email', $TEXT['email'] ?? 'Email') : ($TEXT['email'] ?? 'Email') ?></div>
          <p class="big"><a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></p>
        </div>
        <div class="ci-block">
          <a class="wa" href="<?= $SITE['wa'] ?>" style="background:#25d366;"><?= $WA_SVG ?><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.chat_whatsapp', $TEXT['chat_whatsapp'] ?? 'Chat on WhatsApp') : ($TEXT['chat_whatsapp'] ?? 'Chat on WhatsApp') ?></a>
          <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('SITE.wa', $SITE['wa'], 'Link WhatsApp', 'url') : '' ?>
        </div>
      </div>

      <form class="contact-form reveal" id="contactForm">
        <div class="field"><label for="cf-name"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_name', $TEXT['form_name'] ?? 'Name') : ($TEXT['form_name'] ?? 'Name') ?></label><input id="cf-name" type="text" placeholder="<?= esc_attr($TEXT['form_name_placeholder'] ?? 'Your name') ?>" /></div>
        <div class="field"><label for="cf-email"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_email', $TEXT['form_email'] ?? 'Email') : ($TEXT['form_email'] ?? 'Email') ?></label><input id="cf-email" type="email" placeholder="<?= esc_attr($TEXT['form_email_placeholder'] ?? 'you@email.com') ?>" /></div>
        <div class="field"><label for="cf-phone"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_phone', $TEXT['form_phone'] ?? 'Phone') : ($TEXT['form_phone'] ?? 'Phone') ?></label><input id="cf-phone" type="tel" placeholder="<?= esc_attr($TEXT['form_phone_placeholder'] ?? '+39 ...') ?>" /></div>
        <div class="field"><label for="cf-msg"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_message', $TEXT['form_message'] ?? 'Message') : ($TEXT['form_message'] ?? 'Message') ?></label><textarea id="cf-msg" placeholder="<?= esc_attr($TEXT['form_message_placeholder'] ?? 'Tell us about your stay, dates and number of guests...') ?>"></textarea></div>
        <button class="btn" type="submit" style="align-self:flex-start;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_send', $TEXT['form_send'] ?? 'Send message') : ($TEXT['form_send'] ?? 'Send message') ?></button>
        <p class="form-result" style="display:none;color:var(--green);font-size:14px;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.form_result', $TEXT['form_result'] ?? 'Thank you - this is a demo form. Connect it to your booking system or mailer.', ['multiline'=>true]) : ($TEXT['form_result'] ?? 'Thank you - this is a demo form. Connect it to your booking system or mailer.') ?></p>
      </form>
    </div>
  </div>
</section>

<?php if (!empty($SITE['map_embed'])): ?>
<section style="padding-bottom:0;" data-screen-label="Contacts map">
  <iframe class="map-embed" src="<?= esc_url($SITE['map_embed']) ?>" title="Map" loading="lazy"></iframe>
  <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('SITE.map_embed', $SITE['map_embed'], 'Embed mappa', 'url') : '' ?>
</section>
<?php endif; ?>

<?php require __DIR__ . '/inc/footer.php'; ?>

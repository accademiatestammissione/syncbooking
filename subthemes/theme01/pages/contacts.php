<?php
$PAGE = 'contacts';
$PAGE_TITLE = 'Contacts – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$p = isset( $C['contacts'] ) && is_array( $C['contacts'] ) ? $C['contacts'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Contacts banner">
  <img class="sbtw-bg" src="<?php echo esc_url( $p['banner'] ?? sbt_asset_url( 'assets/images/exterior-086.jpg' ) ); ?>" alt="<?php echo esc_attr( $SITE['name'] ?? 'Contacts' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.contacts.over', $p['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.contacts.h1', $p['h1'] ?? 'Contacts' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? ( $TEXT['contacts'] ?? 'Contacts' ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Contacts content">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:56px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.contacts.intro_over', $p['intro_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.contacts.intro_h2', $p['intro_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.contacts.intro_p', $p['intro_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-contact-grid">
      <div class="sbtw-contact-info sbtw-reveal">
        <div class="sbtw-ci-block">
          <div class="sbtw-overline"><?php echo esc_html( $TEXT['address'] ?? 'Address' ); ?></div>
          <p class="sbtw-big"><?php echo wp_kses( $SITE['address'] ?? '', array( 'br' => array() ) ); ?></p>
          <?php if ( ! empty( $SITE['map'] ) ) : ?><p style="margin-top:8px;"><a href="<?php echo esc_url( $SITE['map'] ); ?>"><?php echo esc_html( $TEXT['open_maps'] ?? 'Open in Google Maps' ); ?></a></p><?php endif; ?>
        </div>
        <div class="sbtw-ci-block">
          <div class="sbtw-overline"><?php echo esc_html( $TEXT['phone'] ?? 'Phone' ); ?></div>
          <p class="sbtw-big"><?php if ( ! empty( $SITE['phone1'] ) ) : ?><a href="tel:<?php echo esc_attr( $SITE['phone1_t'] ?? '' ); ?>"><?php echo esc_html( $SITE['phone1'] ); ?></a><?php endif; ?><?php if ( ! empty( $SITE['phone2'] ) ) : ?><br/><a href="tel:<?php echo esc_attr( $SITE['phone2_t'] ?? '' ); ?>"><?php echo esc_html( $SITE['phone2'] ); ?></a><?php endif; ?></p>
          <?php if ( ! empty( $SITE['wa'] ) ) : ?><a class="sbtw-wa sbtw-wa--red" href="<?php echo esc_url( $SITE['wa'] ); ?>" style="margin-top:18px;"><svg viewBox="0 0 24 24" style="width:16px;height:16px;fill:#fff;"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.6 14.2c-.2.6-1.2 1.2-1.7 1.2-.4 0-1 .1-3.1-.8-2.6-1.1-4.3-3.8-4.4-4-.1-.2-1-1.4-1-2.6 0-1.2.6-1.8.9-2 .2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .5l-.4.6c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4.1.5-.1l.7-.9c.2-.2.4-.2.6-.1l1.9.9c.2.1.4.2.4.3.1.2.1.6 0 1Z"/></svg><?php echo esc_html( $TEXT['chat_whatsapp'] ?? 'Chat on WhatsApp' ); ?></a><?php endif; ?>
        </div>
        <div class="sbtw-ci-block">
          <div class="sbtw-overline"><?php echo esc_html( $TEXT['email'] ?? 'Email' ); ?></div>
          <?php if ( ! empty( $SITE['email'] ) ) : ?><p class="sbtw-big"><a href="mailto:<?php echo esc_attr( $SITE['email'] ); ?>"><?php echo esc_html( $SITE['email'] ); ?></a></p><?php endif; ?>
        </div>
      </div>
      <?php sbt_render_contact_form( $TEXT ); ?>
    </div>
  </div>
</section>

<section style="padding-bottom:0;" data-screen-label="Contacts map">
  <iframe class="sbtw-map-embed" src="<?php echo esc_url( $SITE['map_embed'] ?? 'https://www.google.com/maps?q=Villa%20Rosa%20Resort%20Conversano&output=embed' ); ?>" title="Map" loading="lazy"></iframe>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>

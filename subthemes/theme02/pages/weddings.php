<?php
$PAGE = 'weddings';
$PAGE_TITLE = 'Weddings – Masseria Le Cerase';
$PAGE_STYLES = array( 'assets/weddings.css' );
require __DIR__ . '/../header/header.php';
$p = isset( $C['weddings'] ) && is_array( $C['weddings'] ) ? $C['weddings'] : array();
$chk = '<svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg>';
$gallery   = ( ! empty( $p['gallery'] ) && is_array( $p['gallery'] ) ) ? $p['gallery'] : array();
$info_paras = ( ! empty( $p['info_paras'] ) && is_array( $p['info_paras'] ) ) ? $p['info_paras'] : array();
$services_l = ( ! empty( $p['service_items'] ) && is_array( $p['service_items'] ) ) ? $p['service_items'] : array();
$spaces    = ( ! empty( $p['spaces'] ) && is_array( $p['spaces'] ) ) ? $p['spaces'] : array();
$services  = ( ! empty( $p['services'] ) && is_array( $p['services'] ) ) ? $p['services'] : array();
$reviews   = ( ! empty( $p['reviews'] ) && is_array( $p['reviews'] ) ) ? $p['reviews'] : array();
$brochures = ( ! empty( $p['brochures'] ) && is_array( $p['brochures'] ) ) ? $p['brochures'] : array();
$faqs      = ( ! empty( $p['faqs'] ) && is_array( $p['faqs'] ) ) ? $p['faqs'] : array();
$badges    = ( ! empty( $p['badges'] ) && is_array( $p['badges'] ) ) ? $p['badges'] : array();
?>
<!-- ============ GALLERY ============ -->
<section class="sbtw-surface" style="padding-top:92px;background:var(--surface);" data-screen-label="Weddings gallery">
  <div class="sbtw-wrap" style="padding-top:18px;padding-bottom:18px;">
    <div class="sbtw-w-gallery">
      <?php foreach ( $gallery as $gi => $gimg ) : ?>
      <div class="sbtw-g-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $gimg ) ); ?>" alt="<?php echo esc_attr( ( $p['h1'] ?? 'Weddings' ) . ' ' . ( $gi + 1 ) ); ?>" /></div>
      <?php endforeach; ?>
      <div class="sbtw-w-tour"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.4 2.5 15.6 0 18M12 3c-2.5 2.4-2.5 15.6 0 18"/></svg><?php echo sbt_t1_text( 'C.weddings.tour_label', $p['tour_label'] ?? 'Tour 360°' ); ?></div>
      <div class="sbtw-w-galbtns">
        <button class="sbtw-w-galbtn sbtw-w-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.weddings.gallery_btn', $p['gallery_btn'] ?? 'View photos · 71' ); ?></button>
      </div>
    </div>
  </div>
</section>

<!-- ============ BODY ============ -->
<section class="sbtw-pad-s" data-screen-label="Weddings detail">
  <div class="sbtw-wrap">
    <div class="sbtw-w-layout">

      <!-- MAIN -->
      <div class="sbtw-w-main">

        <!-- INFORMAZIONI -->
        <div class="sbtw-w-sec" id="info" style="padding-top:0;">
          <span class="sbtw-w-since"><svg viewBox="0 0 24 24"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg><?php echo sbt_t1_text( 'C.weddings.since', $p['since'] ?? 'Weddings since 2011' ); ?></span>
          <h2><?php echo sbt_t1_text( 'C.weddings.info_h2', $p['info_h2'] ?? 'Emotions in the Masseria' ); ?></h2>
          <?php foreach ( $info_paras as $pi => $para ) : ?>
          <p><?php echo sbt_t1_text( 'C.weddings.info_paras.' . $pi, $para, array( 'multiline' => true, 'allow_html' => true ) ); ?></p>
          <?php endforeach; ?>

          <h3><?php echo sbt_t1_text( 'C.weddings.list_title', $p['list_title'] ?? 'The reception venue offers' ); ?></h3>
          <ul class="sbtw-w-list">
            <?php foreach ( $services_l as $li => $item ) : ?>
            <li><?php echo $chk; ?><?php echo sbt_t1_text( 'C.weddings.service_items.' . $li, $item ); ?></li>
            <?php endforeach; ?>
          </ul>

          <h3><?php echo sbt_t1_text( 'C.weddings.kitchen_title', $p['kitchen_title'] ?? 'The kitchen' ); ?></h3>
          <p><?php echo sbt_t1_text( 'C.weddings.kitchen_p', $p['kitchen_p'] ?? '', array( 'multiline' => true, 'allow_html' => true ) ); ?></p>
          <p><?php echo sbt_t1_text( 'C.weddings.kitchen_p2', $p['kitchen_p2'] ?? '', array( 'multiline' => true ) ); ?></p>
        </div>

        <!-- AMBIENTI & SERVIZI -->
        <div class="sbtw-w-sec" id="ambienti">
          <h2><?php echo sbt_t1_text( 'C.weddings.info_title', $p['info_title'] ?? 'More information' ); ?></h2>
          <div class="sbtw-w-qa">
            <h4><?php echo sbt_t1_text( 'C.weddings.amenities_title', $p['amenities_title'] ?? 'Which spaces are available?' ); ?></h4>
            <div class="sbtw-w-amen">
              <?php foreach ( $spaces as $si => $sp ) : ?>
              <span><?php echo $chk; ?><?php echo sbt_t1_text( 'C.weddings.spaces.' . $si, $sp ); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="sbtw-w-qa">
            <h4><?php echo sbt_t1_text( 'C.weddings.offered_title', $p['offered_title'] ?? 'Which services do you offer?' ); ?></h4>
            <div class="sbtw-w-amen">
              <?php foreach ( $services as $si => $sv ) : ?>
              <span><?php echo $chk; ?><?php echo sbt_t1_text( 'C.weddings.services.' . $si, $sv ); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="sbtw-w-qa">
            <h4><?php echo sbt_t1_text( 'C.weddings.lodging_title', $p['lodging_title'] ?? 'Do you offer accommodation for guests?' ); ?></h4>
            <p><?php echo sbt_t1_text( 'C.weddings.lodging_p', $p['lodging_p'] ?? '', array( 'multiline' => true ) ); ?></p>
          </div>
          <div class="sbtw-w-qa">
            <h4><?php echo sbt_t1_text( 'C.weddings.exclusive_title', $p['exclusive_title'] ?? 'Do you host more than one event per day?' ); ?></h4>
            <p><?php echo sbt_t1_text( 'C.weddings.exclusive_p', $p['exclusive_p'] ?? '', array( 'multiline' => true ) ); ?></p>
          </div>
        </div>

        <!-- RECENSIONI -->
        <div class="sbtw-w-sec" id="recensioni">
          <h2><?php echo sbt_t1_text( 'C.weddings.reviews_title', $p['reviews_title'] ?? 'Reviews' ); ?></h2>
          <p><?php echo sbt_t1_text( 'C.weddings.reviews_p', $p['reviews_p'] ?? '', array( 'multiline' => true ) ); ?></p>
          <div class="sbtw-w-reviews">
            <?php foreach ( $reviews as $ri => $rev ) :
              $album = $rev['album'] ?? '';
              $rimg  = $rev['img'] ?? ''; ?>
            <div class="sbtw-w-rev" data-album="<?php echo esc_attr( $album ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $rimg ) ); ?>" alt="<?php echo esc_attr( $rev['name'] ?? '' ); ?>" /><div class="sbtw-rv-c"><b><?php echo sbt_t1_text( 'C.weddings.reviews.' . $ri . '.name', $rev['name'] ?? '' ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.reviews.' . $ri . '.meta', $rev['meta'] ?? '' ); ?></span></div></div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- BROCHURE -->
        <div class="sbtw-w-sec" id="brochure">
          <h2><?php echo sbt_t1_text( 'C.weddings.brochure_title', $p['brochure_title'] ?? 'Brochure' ); ?></h2>
          <div class="sbtw-w-promos">
            <?php foreach ( $brochures as $bi => $br ) :
              $is_dl  = ! empty( $br['download'] );
              $b_url  = $br['url'] ?? '#';
              $is_abs = (bool) preg_match( '#^https?://#i', $b_url );
              $b_href = $is_abs ? $b_url : ( $is_dl ? sbt_asset_url( $b_url ) : sbt_t1_url( $b_url ) );
              $icon   = $is_dl
                ? '<svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:1.7;"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>'
                : '<svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:1.7;"><path d="M14 3h7v7"/><path d="M10 14L21 3"/><path d="M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5"/></svg>'; ?>
            <div class="sbtw-w-promo">
              <span class="sbtw-pr-tag"><?php echo $icon; ?>PDF</span>
              <h4><?php echo sbt_t1_text( 'C.weddings.brochures.' . $bi . '.h4', $br['h4'] ?? '' ); ?></h4>
              <div class="sbtw-pr-exp"><?php echo sbt_t1_text( 'C.weddings.brochures.' . $bi . '.exp', $br['exp'] ?? '', array( 'multiline' => true ) ); ?></div>
              <a href="<?php echo esc_url( $b_href ); ?>" target="_blank" rel="noopener"<?php echo $is_dl ? ' download' : ''; ?>><?php echo sbt_t1_text( 'C.weddings.brochures.' . $bi . '.label', $br['label'] ?? 'Download PDF →' ); ?></a>
              <?php echo sbt_t1_control( 'C.weddings.brochures.' . $bi . '.url', $b_url, 'PDF link', 'url' ); ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- MAPPA -->
        <div class="sbtw-w-sec" id="mappa">
          <h2><?php echo sbt_t1_text( 'C.weddings.map_title', $p['map_title'] ?? 'Map' ); ?></h2>
          <p><?php echo sbt_t1_text( 'C.weddings.map_p', $p['map_p'] ?? 'Via Martuccello n. 8, 70014 Conversano (Bari) — Puglia.' ); ?></p>
          <div class="sbtw-w-map">
            <iframe src="https://www.google.com/maps?q=Masseria%20Le%20Cerase%20Conversano&output=embed" title="Masseria Le Cerase map" loading="lazy"></iframe>
          </div>
        </div>

        <!-- FAQ -->
        <div class="sbtw-w-sec" id="faq">
          <h2><?php echo sbt_t1_text( 'C.weddings.faq_title', $p['faq_title'] ?? 'Frequently asked questions' ); ?></h2>
          <div class="sbtw-w-faq">
            <?php foreach ( $faqs as $fi => $faq ) : ?>
            <details<?php echo 0 === $fi ? ' open' : ''; ?>>
              <summary><?php echo sbt_t1_text( 'C.weddings.faqs.' . $fi . '.q', $faq['q'] ?? '' ); ?></summary>
              <p><?php echo sbt_t1_text( 'C.weddings.faqs.' . $fi . '.a', $faq['a'] ?? '', array( 'multiline' => true ) ); ?></p>
            </details>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- ASIDE / MENU LATERALE -->
      <aside class="sbtw-w-aside">
        <div class="sbtw-w-quote">
          <div class="sbtw-w-quote-top">
            <div class="sbtw-w-rating">
              <div class="sbtw-score"><?php echo esc_html( $p['quote_score'] ?? '5.0' ); ?></div>
              <div class="sbtw-rt-t">
                <b><?php echo sbt_t1_text( 'C.weddings.quote_rating', $p['quote_rating'] ?? 'Excellent' ); ?></b>
                <span class="sbtw-st">★★★★★</span>
                <span> · <?php echo sbt_t1_text( 'C.weddings.quote_reviews', $p['quote_reviews'] ?? '184 reviews' ); ?></span>
              </div>
            </div>
            <div class="sbtw-w-qrow"><svg viewBox="0 0 24 24"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg> <?php echo sbt_t1_text( 'C.weddings.quote_location', $p['quote_location'] ?? 'Conversano, Bari' ); ?></div>
            <div class="sbtw-w-qrow"><svg viewBox="0 0 24 24"><path d="M12 3v12M7 10l5 5 5-5"/><path d="M5 21h14"/></svg> <?php echo sbt_t1_text( 'C.weddings.quote_brochures', $p['quote_brochures'] ?? 'Brochures available' ); ?></div>
          </div>
          <div class="sbtw-w-prices">
            <div class="sbtw-w-price"><span><?php echo sbt_t1_text( 'C.weddings.price_wedding_label', $p['price_wedding_label'] ?? 'Wedding' ); ?></span><b><?php echo sbt_t1_text( 'C.weddings.quote_wedding_price', $p['quote_wedding_price'] ?? 'from 110 · 150 · 190€' ); ?></b></div>
            <div class="sbtw-w-price"><span><?php echo sbt_t1_text( 'C.weddings.price_event_label', $p['price_event_label'] ?? 'Event' ); ?></span><b><?php echo sbt_t1_text( 'C.weddings.quote_event_price', $p['quote_event_price'] ?? 'from 80 · 100 · 120€' ); ?></b></div>
          </div>
          <div class="sbtw-w-cta">
            <a class="sbtw-btn" href="#" id="quoteBtn"><?php echo sbt_t1_text( 'C.weddings.quote_button', $p['quote_button'] ?? 'Free quote' ); ?></a>
            <div class="sbtw-w-resp"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg> <?php echo sbt_t1_text( 'C.weddings.quote_response', $p['quote_response'] ?? 'Replies within 24 hours' ); ?></div>
          </div>
        </div>
        <div class="sbtw-w-badges">
          <?php
          $badge_svgs = array(
            '<svg viewBox="0 0 24 24"><path d="M12 3l2.5 5 5.5.8-4 3.9.9 5.5L12 16.5 7.1 18.2l.9-5.5-4-3.9 5.5-.8Z"/></svg>',
            '<svg viewBox="0 0 24 24"><path d="M12 21s-6-4.4-8.5-8.3C2 10 3 6 6.5 6c2 0 3 1.2 3.5 2 .5-.8 1.5-2 3.5-2 3.5 0 4.5 4 3 6.7C18 16.6 12 21 12 21Z"/></svg>',
            '<svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>',
          );
          foreach ( $badges as $bi => $badge ) : ?>
          <div class="sbtw-w-badge"><?php echo $badge_svgs[ $bi ] ?? ''; ?><?php echo sbt_t1_text( 'C.weddings.badges.' . $bi, $badge ); ?></div>
          <?php endforeach; ?>
        </div>
      </aside>

    </div>
  </div>
</section>

<!-- ============ CTA BAND ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Weddings CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.weddings.cta_over', $p['cta_over'] ?? 'Replies within 24 hours' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.weddings.cta_h2', $p['cta_h2'] ?? 'Tell us about your<br/>most important day', array( 'multiline' => true ) ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.weddings.cta_p', $p['cta_p'] ?? 'Fill in the form and our team will contact you shortly with a tailored proposal. All data will be treated confidentially.', array( 'multiline' => true ) ); ?></p>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.weddings.cta_btn', $p['cta_btn'] ?? 'Request information' ); ?></a>
  </div>
</section>
<!-- ============ MOBILE CONTACT BAR ============ -->
<div class="sbtw-w-mbar" data-screen-label="Mobile contact bar">
  <div class="sbtw-w-mbar-txt"><b><?php echo sbt_t1_text( 'C.weddings.mobile_bar_title', $p['mobile_bar_title'] ?? 'Dreaming of a wedding in the Masseria?' ); ?></b></div>
  <button class="sbtw-btn" type="button" id="quoteBtnM"><?php echo sbt_t1_text( 'C.weddings.mobile_bar_button', $p['mobile_bar_button'] ?? 'Request a Quote' ); ?></button>
</div>

<!-- ============ QUOTE MODAL ============ -->
<div class="sbtw-w-modal" id="quoteModal" aria-hidden="true">
  <div class="sbtw-w-modal-back" data-close-modal></div>
  <div class="sbtw-w-modal-card" role="dialog" aria-modal="true" aria-labelledby="quoteTitle">
    <button class="sbtw-w-modal-x" type="button" data-close-modal aria-label="Close">&times;</button>
    <div class="sbtw-overline" style="color:var(--gold);"><?php echo sbt_t1_text( 'C.weddings.quote_modal_over', $p['quote_modal_over'] ?? 'Masseria Le Cerase' ); ?></div>
    <h3 id="quoteTitle"><?php echo sbt_t1_text( 'C.weddings.quote_modal_title', $p['quote_modal_title'] ?? 'Free quote' ); ?></h3>
    <p class="sbtw-w-modal-sub"><?php echo sbt_t1_text( 'C.weddings.quote_modal_sub', $p['quote_modal_sub'] ?? 'Fill in the form: we will reply within 24 hours with a tailored proposal.', array( 'multiline' => true ) ); ?></p>
    <?php if ( function_exists( 'sbt_cf7_is_active' ) && sbt_cf7_is_active() ) : ?>
    <div class="sbtw-w-form sbtw-cf7-form">
      <?php sbt_cf7_render( 'weddings' ); ?>
      <div class="sbtw-w-resp" style="margin-top:12px;"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg> <?php echo sbt_t1_text( 'C.weddings.quote_response', $p['quote_response'] ?? 'Replies within 24 hours' ); ?></div>
    </div>
    <?php else : ?>
    <form class="sbtw-w-form" id="quoteForm" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
      <input type="hidden" name="action" value="sbt_contact_submit" />
      <input type="hidden" name="sbt_redirect" value="<?php echo esc_url( ( is_ssl() ? 'https://' : 'http://' ) . ( ! empty( $_SERVER['HTTP_HOST'] ) ? wp_unslash( $_SERVER['HTTP_HOST'] ) : wp_parse_url( home_url(), PHP_URL_HOST ) ) . strtok( ! empty( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '/', '?' ) ); ?>" />
      <?php if ( function_exists( 'wp_nonce_field' ) ) { wp_nonce_field( 'sbt_contact', 'sbt_contact_nonce' ); } ?>
      <label><?php echo sbt_t1_text( 'C.weddings.f_name', $p['f_name'] ?? 'Full Name' ); ?>
        <input type="text" name="sbt_name" required autocomplete="name" placeholder="Mario Rossi" />
      </label>
      <label><?php echo sbt_t1_text( 'C.weddings.f_email', $p['f_email'] ?? 'Email' ); ?>
        <input type="email" name="sbt_email" required autocomplete="email" placeholder="mario.rossi@email.com" />
      </label>
      <label><?php echo sbt_t1_text( 'C.weddings.f_phone', $p['f_phone'] ?? 'Phone' ); ?>
        <input type="tel" name="sbt_phone" required autocomplete="tel" placeholder="+39 333 123 4567" />
      </label>
      <label><?php echo sbt_t1_text( 'C.weddings.f_notes', $p['f_notes'] ?? 'Notes' ); ?>
        <textarea name="sbt_message" rows="4"><?php echo esc_textarea( sbt_t1_text( 'C.weddings.quote_modal_notes', $p['quote_modal_notes'] ?? 'Request for wedding information' ) ); ?></textarea>
      </label>
      <button class="sbtw-btn" type="submit" style="width:100%;justify-content:center;"><?php echo sbt_t1_text( 'C.weddings.f_submit', $p['f_submit'] ?? 'Send request' ); ?></button>
      <div class="sbtw-w-resp" style="margin-top:12px;"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg> <?php echo sbt_t1_text( 'C.weddings.quote_response', $p['quote_response'] ?? 'Replies within 24 hours' ); ?></div>
    </form>
    <div class="sbtw-w-form-ok" id="quoteOk" hidden>
      <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M7.5 12.5l3 3 6-6"/></svg>
      <h4><?php echo sbt_t1_text( 'C.weddings.quote_modal_ok_title', $p['quote_modal_ok_title'] ?? 'Request sent!' ); ?></h4>
      <p><?php echo sbt_t1_text( 'C.weddings.quote_modal_ok_p', $p['quote_modal_ok_p'] ?? 'Thank you — we will get back to you within 24 hours at the address provided.', array( 'multiline' => true ) ); ?></p>
    </div>
    <?php endif; ?>
  </div>
</div>
<script>
(function(){
  var modal=document.getElementById('quoteModal');
  var btn=document.getElementById('quoteBtn');
  var form=document.getElementById('quoteForm');
  var ok=document.getElementById('quoteOk');
  function open(e){if(e)e.preventDefault();modal.classList.add('sbtw-open');document.body.style.overflow='hidden';}
  function close(){modal.classList.remove('sbtw-open');document.body.style.overflow='';}
  if(btn)btn.addEventListener('click',open);
  var btnM=document.getElementById('quoteBtnM');
  if(btnM)btnM.addEventListener('click',open);
  [].slice.call(modal.querySelectorAll('[data-close-modal]')).forEach(function(el){el.addEventListener('click',close);});
  document.addEventListener('keydown',function(e){if(e.key==='Escape')close();});
  // the form now POSTs to the server; after a successful send the page reloads
  // with ?sbt_contact=sent — reopen the modal and show the confirmation.
  if(/[?&]sbt_contact=sent/.test(location.search)){open();if(form)form.hidden=true;if(ok)ok.hidden=false;}
})();
(function(){
  var albumBase = '<?php echo esc_url( sbt_asset_url( 'assets/images/' ) ); ?>';
  [].slice.call(document.querySelectorAll('.sbtw-w-rev[data-album]')).forEach(function(card){
    card.addEventListener('click', function(){
      var srcs = card.getAttribute('data-album').split('|').map(function(n){ return albumBase + n + '.jpg'; });
      if(window.sbtwOpenAlbum) window.sbtwOpenAlbum(srcs, 0);
    });
  });
})();
(function(){
  var all=document.querySelector('.sbtw-w-allbtn');
  if(all){all.addEventListener('click',function(){
    var first=document.querySelector('.sbtw-w-gallery img[data-lightbox]');
    if(first)first.click();
  });}
})();
</script>

<?php require __DIR__ . '/../footer/footer.php'; ?>

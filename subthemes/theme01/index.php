<?php
$PAGE = 'home';
$CONTENT_KEY = 'home';
require __DIR__ . '/inc/header.php';
?>

<!-- ============ HERO ============ -->
<section class="sbtw-hero" id="top" data-screen-label="Hero">
  <div class="sbtw-hero-video">
    <iframe src="https://player.vimeo.com/video/687646681?autoplay=1&controls=0&mute=1&muted=1&loop=1&playlist=687646681&disablekb=1&modestbranding=1&playsinline=1&rel=0&background=1" allow="autoplay; fullscreen" title="Villa Rosa"></iframe>
  </div>
  <div class="sbtw-hero-overlay"></div>
  <div class="sbtw-hero-inner">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_1', 'Villa Rosa Resort &amp; SPA · Conversano', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.home.text_2', 'Your home in the', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_3', 'heart of Puglia', array( 'multiline' => false ) ); ?></h1>
    <p class="sbtw-sub"><?php echo sbt_t1_text( 'C.home.text_4', 'An oasis of well-being nestled in a centuries-old park, steps from the Norman-Swabian Castle.', array( 'multiline' => true ) ); ?></p>
  </div>
  <div class="sbtw-scrolldown"><span><?php echo sbt_t1_text( 'C.home.text_5', 'Scroll', array( 'multiline' => false ) ); ?></span><span class="sbtw-line"></span></div>
</section>

<!-- ============ WELCOME ============ -->
<section class="sbtw-pad" id="welcome" data-screen-label="Welcome">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_6', 'Welcome', array( 'multiline' => false ) ); ?></div>
        <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.text_7', 'An eclectic 1930s villa,', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_8', 'reborn as a retreat', array( 'multiline' => false ) ); ?></h2>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.text_9', 'Villa Rosa is your oasis of well-being. Nestled in a large park with centuries-old trees, just steps from the ancient Norman-Swabian Castle that characterizes the village of Conversano — one of Puglia\'s most charming villages — lies a complex of elegant residences, including a historic villa in an eclectic style from the 1930s.', array( 'multiline' => true ) ); ?></p>
        <p class="sbtw-body-text" style="margin-top:18px;"><?php echo sbt_t1_text( 'C.home.text_10', 'Every detail is designed for comfort: the privacy of our houses — each with a dining area, fully equipped kitchen, and outdoor pergola — the splendid pool, the gym, and the elegant spa.', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_1', 'villa.php' ) ) ); ?>" style="margin-top:30px;"><?php echo sbt_t1_text( 'C.home.text_11', 'Discover the Villa', array( 'multiline' => false ) ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.home.gallery_1.0', sbt_t1_asset( 'uploads/Esterni/085.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_2.0', sbt_t1_asset( 'uploads/ota/067.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_3.0', sbt_t1_asset( 'uploads/ota/001.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_4.0', sbt_t1_asset( 'uploads/Esterni/026.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_5.0', sbt_t1_asset( 'uploads/Esterni/072.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
        <div class="sbtw-stamp"><?php echo sbt_t1_text( 'C.home.text_12', 'Since', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_13', '1930', array( 'multiline' => false ) ); ?></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY MOSAIC ============ -->
<section class="sbtw-pad-s" data-screen-label="Gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_14', 'A look inside', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.text_15', 'Spaces that tell a story', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-mosaic sbtw-reveal">
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_6.0', sbt_t1_asset( 'uploads/Esterni/085.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_7.0', sbt_t1_asset( 'uploads/Esterni/072.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_8.0', sbt_t1_asset( 'uploads/Esterni/026.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_9.0', sbt_t1_asset( 'uploads/Esterni/087.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_10.0', sbt_t1_asset( 'uploads/Esterni/081.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.home.text_16', 'Show all photos', array( 'multiline' => false ) ); ?></button>
    </div>
  </div>
</section>

<?php if ( ! sbt_is_entire_rental_mode() ) : ?>
<!-- ============ HOUSES ============ -->
<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Houses">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_17', 'The Houses', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.text_18', 'Your private retreat', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.home.text_19', 'The new luxury in holidays is more freedom: an entire house with an external pergola at your disposal. Refined design, a mix of modern and ancient, and every comfort make the homes of Villa Rosa very exclusive.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.home.text_20', 'For 2 people', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.home.gallery_11.0', sbt_t1_asset( 'uploads/Nuova%20cartella/012.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_12.0', sbt_t1_asset( 'uploads/Nuova%20cartella/020.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_13.0', sbt_t1_asset( 'uploads/Nuova%20cartella/032.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.home.text_21', 'House for 2', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_2', 'house.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_22', 'Discover', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.home.text_23', 'For 3 people', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.home.gallery_14.0', sbt_t1_asset( 'uploads/Nuova%20cartella/034.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_15.0', sbt_t1_asset( 'uploads/Nuova%20cartella/036.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_16.0', sbt_t1_asset( 'uploads/Nuova%20cartella/039.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.home.text_24', 'House for 3', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_3', 'house.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_25', 'Discover', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.home.text_26', 'For 4 people', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.home.gallery_17.0', sbt_t1_asset( 'uploads/Nuova%20cartella/047.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_18.0', sbt_t1_asset( 'uploads/Nuova%20cartella/053.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_19.0', sbt_t1_asset( 'uploads/Nuova%20cartella/067.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_20.0', sbt_t1_asset( 'uploads/Nuova%20cartella/077.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.home.text_27', 'House for 4', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_4', 'house.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_28', 'Discover', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ( sbt_is_entire_rental_mode() ) : ?>
<!-- ============ WHOLE VILLA ============ -->
<section class="sbtw-pad" id="whole-villa" data-screen-label="Whole Villa">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.home.gallery_21.0', sbt_t1_asset( 'uploads/Esterni/090.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_22.0', sbt_t1_asset( 'uploads/Esterni/085.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_23.0', sbt_t1_asset( 'uploads/Esterni/087.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_24.0', sbt_t1_asset( 'uploads/Esterni/081.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_29', 'Exclusive use', array( 'multiline' => false ) ); ?></div>
        <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.text_30', 'Book', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_31', 'the whole villa', array( 'multiline' => false ) ); ?></h2>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.text_32', 'One booking, the entire estate: all the houses, the centuries-old park, the pool and the pergolas — reserved exclusively for you and your guests. The freedom of a private home, with the soul of a 1930s villa.', array( 'multiline' => true ) ); ?></p>
        <ul class="sbtw-estate-specs">
          <li><span><?php echo sbt_t1_text( 'C.home.text_33', 'Guests', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.home.text_34', 'Up to 10', array( 'multiline' => false ) ); ?></b></li>
          <li><span><?php echo sbt_t1_text( 'C.home.text_35', 'Use', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.home.text_36', 'Entire estate, exclusive', array( 'multiline' => false ) ); ?></b></li>
        </ul>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_5', 'whole-villa.php' ) ) ); ?>" style="margin-top:30px;"><?php echo sbt_t1_text( 'C.home.text_37', 'Discover the whole villa', array( 'multiline' => false ) ); ?></a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ SERVICES ============ -->
<section class="sbtw-services sbtw-pad" id="services" data-screen-label="Services">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_38', 'Comfort &amp; Care', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.text_39', 'Services', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-svc-grid">
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_40', 'Pool', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_41', 'Enjoy our pool in the green garden, perfect for relaxing and sunbathing.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_42', 'Park', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_43', 'An oasis of tranquility, ideal for walks and moments of relaxation outdoors.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_44', 'SPA', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_45', 'Turkish bath, hot tub, sauna and massage room for a unique wellness experience.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_46', 'Wi-Fi', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_47', 'To be, if you want, always reachable across the whole property.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_48', 'Equipped Kitchen', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_49', 'Each house has a full kitchen, to prepare your meals in complete independence.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_50', 'BBQ', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_51', 'Our BBQ area in the park — the experience of grilling outdoors in style.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_52', 'Car Rental', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_53', 'A car rental service, to enjoy every part of Puglia independently.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_54', 'Gym', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_55', 'To keep perfectly fit, even on holiday.', array( 'multiline' => false ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============ QUOTE BAND ============ -->
<section class="sbtw-band" id="band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'uploads/Esterni/078.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_56', 'The Apulian way of living', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.home.text_57', 'Slow days, long tables,', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_58', 'and the scent of the sea', array( 'multiline' => false ) ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.home.text_59', 'From the whitewashed lanes of Conversano to the trulli of the Itria Valley and the turquoise coast — everything you love about Puglia begins at your doorstep.', array( 'multiline' => true ) ); ?></p>
  </div>
</section>

<!-- ============ FEATURE ROWS ============ -->
<section class="sbtw-feature sbtw-pad" data-screen-label="SPA & Experience">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col" id="spa">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.home.gallery_25.0', sbt_t1_asset( 'assets/images/jacuzzi.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_26.0', sbt_t1_asset( 'assets/images/hammam.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_27.0', sbt_t1_asset( 'assets/images/turkish-bath.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_28.0', sbt_t1_asset( 'assets/images/sauna.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_29.0', sbt_t1_asset( 'assets/images/gym.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.home.text_60', 'Villa Rosa Resort &amp; SPA', array( 'multiline' => false ) ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.home.text_61', 'SPA &amp; Wellness', array( 'multiline' => false ) ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.text_62', 'Awaken your mind and body. Our wellness center offers a hydromassage pool, Turkish bath, Finnish sauna, emotional hydroshower, relax area, gym, massages and a Yoga program.', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_6', 'spa-wellness.php' ) ) ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'C.home.text_63', 'Discover the SPA', array( 'multiline' => false ) ); ?></a>
      </div>
    </div>
    <div class="sbtw-two-col" id="experience">
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.home.text_64', 'Villa Rosa Resort &amp; SPA', array( 'multiline' => false ) ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.home.text_65', 'Apulian Experience', array( 'multiline' => false ) ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.text_66', 'We craft tailor-made experiences for each guest, customized according to individual needs — from cooking classes and wine tastings to private tours of the surrounding wonders.', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_7', 'experiences.php' ) ) ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'C.home.text_67', 'Explore experiences', array( 'multiline' => false ) ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.home.gallery_30.0', sbt_t1_asset( 'uploads/ota/039.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_31.0', sbt_t1_asset( 'uploads/ota/104.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_32.0', sbt_t1_asset( 'uploads/Esterni/087.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_33.0', sbt_t1_asset( 'uploads/Esterni/078.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_34.0', sbt_t1_asset( 'uploads/ota/005.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ HOUSE CTA BAND ============ -->
<section class="sbtw-cta-band" id="house-cta" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'uploads/Esterni/090.jpg' ) ); ?>');" data-screen-label="Houses CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_68', 'Your private retreat awaits', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.home.text_69', 'Choose your house', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_70', 'in Villa Rosa', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_8', 'houses.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_71', 'Explore the houses', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

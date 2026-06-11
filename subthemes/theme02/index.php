<?php
$PAGE = 'home';
$CONTENT_KEY = 'home';
require __DIR__ . '/inc/header.php';
?>

<!-- ============ HERO ============ -->
<section class="sbtw-hero" id="top" data-screen-label="Hero">
  <div class="sbtw-hero-video">
    <video src="assets/video/masseria.mp4" poster="<?php echo esc_url( sbt_t1_asset( 'assets/images/masseria-dusk.jpg' ) ); ?>" autoplay muted loop playsinline></video>
  </div>
  <div class="sbtw-hero-overlay"></div>
  <div class="sbtw-hero-inner">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_1', 'Masseria Le Cerase · Conversano · Puglia', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.home.text_2', 'A 17th-century', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_3', 'masseria, only yours', array( 'multiline' => false ) ); ?></h1>
    <p class="sbtw-sub"><?php echo sbt_t1_text( 'C.home.text_4', 'A fortified country house among olive groves, cherry orchards and vineyards — yours to live, for up to ten guests.', array( 'multiline' => true ) ); ?></p>
  </div>
  <div class="sbtw-scrolldown"><span><?php echo sbt_t1_text( 'C.home.text_5', 'Scroll', array( 'multiline' => false ) ); ?></span><span class="sbtw-line"></span></div>
</section>

<!-- ============ WELCOME ============ -->
<section class="sbtw-pad" id="welcome" data-screen-label="Welcome">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_6', 'Welcome', array( 'multiline' => false ) ); ?></div>
        <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.text_7', 'Centuries of stone,', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_8', 'surrounded by countryside', array( 'multiline' => false ) ); ?></h2>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.text_9', 'Masseria Le Cerase is a fortified seventeenth-century farmhouse in the countryside of Conversano, in the heart of Puglia. Built in local limestone, it stands among organic olive groves, cherry orchards and vineyards — the trees that give the masseria its name.', array( 'multiline' => true ) ); ?></p>
        <p class="sbtw-body-text" style="margin-top:18px;"><?php echo sbt_t1_text( 'C.home.text_10', 'Restored with respect for its history, the masseria welcomes a single party at a time: vaulted halls, wrought-iron beds, a pool framed by olive trees, and the deep silence of the open land. A whole estate, entirely yours, for up to ten guests.', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_1', 'masseria.php' ) ) ); ?>" style="margin-top:30px;"><?php echo sbt_t1_text( 'C.home.text_11', 'Discover the Masseria', array( 'multiline' => false ) ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.home.gallery_1.0', sbt_t1_asset( 'assets/images/aerial-pool.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_2.0', sbt_t1_asset( 'assets/images/facade-vines.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_3.0', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_4.0', sbt_t1_asset( 'assets/images/facade-flowers.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_5.0', sbt_t1_asset( 'assets/images/masseria-night.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
        <div class="sbtw-stamp"><?php echo sbt_t1_text( 'C.home.text_12', 'XVII', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_13', 'century', array( 'multiline' => false ) ); ?></div>
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
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_6.0', sbt_t1_asset( 'assets/images/salone-volte.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_7.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_8.0', sbt_t1_asset( 'assets/images/living-1.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_9.0', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <div class="sbtw-m-item"><?php echo sbt_t1_img( 'C.home.gallery_10.0', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array( 'data-lightbox' => '' ) ); ?></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo sbt_t1_text( 'C.home.text_16', 'Show all photos', array( 'multiline' => false ) ); ?></button>
    </div>
  </div>
</section>

<?php if ( ! sbt_is_entire_rental_mode() ) : ?>
<!-- ============ ROOMS ============ -->
<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Rooms">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_17', 'The Rooms', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.text_18', 'Sleeping under the vaults', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.home.text_19', 'Five double bedrooms, each carved beneath ancient stone vaults and furnished with wrought-iron beds, antique wardrobes and warm linen. Space and privacy for up to ten guests, all within the same estate.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.home.text_20', 'Double', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.home.gallery_11.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_12.0', sbt_t1_asset( 'assets/images/bedroom-2.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_13.0', sbt_t1_asset( 'assets/images/bedroom-cozy.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.home.text_21', 'Camera degli Ulivi', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_2', 'rooms.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_22', 'Discover', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.home.text_23', 'Double', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.home.gallery_14.0', sbt_t1_asset( 'assets/images/bedroom-3.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_15.0', sbt_t1_asset( 'assets/images/bedroom-iron.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_16.0', sbt_t1_asset( 'assets/images/bedroom-1.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.home.text_24', 'Camera del Ciliegio', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_3', 'rooms.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_25', 'Discover', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo sbt_t1_text( 'C.home.text_26', 'Double', array( 'multiline' => false ) ); ?></span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <?php echo sbt_t1_img( 'C.home.gallery_17.0', sbt_t1_asset( 'assets/images/bedroom-iron.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_18.0', sbt_t1_asset( 'assets/images/bedroom-2.jpg' ), '', array() ); ?>
              <?php echo sbt_t1_img( 'C.home.gallery_19.0', sbt_t1_asset( 'assets/images/bedroom-3.jpg' ), '', array() ); ?>
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3><?php echo sbt_t1_text( 'C.home.text_27', 'Camera della Vigna', array( 'multiline' => false ) ); ?></h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_4', 'rooms.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_28', 'Discover', array( 'multiline' => false ) ); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ( sbt_is_entire_rental_mode() ) : ?>
<!-- ============ WHOLE MASSERIA ============ -->
<section class="sbtw-pad-s" id="whole-masseria" style="background:var(--surface);" data-screen-label="Whole masseria">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <?php echo sbt_t1_img( 'C.home.gallery_20.0', sbt_t1_asset( 'assets/images/aerial-pool.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.home.gallery_21.0', sbt_t1_asset( 'assets/images/masseria-dusk.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.home.gallery_22.0', sbt_t1_asset( 'assets/images/great-hall.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        <?php echo sbt_t1_img( 'C.home.gallery_23.0', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_29', 'Exclusive use', array( 'multiline' => false ) ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.text_30', 'Book the whole Masseria', array( 'multiline' => false ) ); ?></h2>
      <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.text_31', 'One booking, the entire estate: all five bedrooms, the vaulted halls, the country kitchen, the pool and the gardens — reserved exclusively for your party. The freedom of a private home, with the soul of a seventeenth-century masseria.', array( 'multiline' => true ) ); ?></p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <li><span><?php echo sbt_t1_text( 'C.home.text_32', 'Guests', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.home.text_33', 'Up to 10', array( 'multiline' => false ) ); ?></b></li>
        <li><span><?php echo sbt_t1_text( 'C.home.text_34', 'Use', array( 'multiline' => false ) ); ?></span><b><?php echo sbt_t1_text( 'C.home.text_35', 'Entire estate, exclusive', array( 'multiline' => false ) ); ?></b></li>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_5', 'whole-masseria.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_36', 'Discover the whole masseria', array( 'multiline' => false ) ); ?></a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ SERVICES ============ -->
<section class="sbtw-services sbtw-pad" id="services" data-screen-label="Services">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_37', 'Comfort &amp; Care', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.home.text_38', 'The estate at your service', array( 'multiline' => false ) ); ?></h2>
    </div>
    <div class="sbtw-svc-grid">
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_39', 'Private Pool', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_40', 'A pool framed by a pergola and olive trees, reserved entirely for your party.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_41', 'Olive Groves', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_42', 'Acres of organic olive trees, cherry orchards and vineyards to wander freely.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_43', 'Vaulted Halls', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_44', 'Grand stone halls under historic vaults, for long dinners and gatherings.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_45', 'Wi-Fi', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_46', 'Connectivity across the whole estate, for whenever you need it.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_47', 'Country Kitchen', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_48', 'A fully equipped kitchen under the vaults, for meals made with local produce.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_49', 'Outdoor Dining', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_50', 'Long tables in the courtyard and garden, for slow days under the sun.', array( 'multiline' => false ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_51', 'On request', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_52', 'Private chef, transfers and car rental arranged to make every part of Puglia yours.', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg>
        <h4><?php echo sbt_t1_text( 'C.home.text_53', 'Fitness Room', array( 'multiline' => false ) ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.home.text_54', 'A private gym within the masseria, to stay active even on holiday.', array( 'multiline' => false ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============ QUOTE BAND ============ -->
<section class="sbtw-band" id="band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/aerial-garden.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_55', 'The Apulian way of living', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.home.text_56', 'Slow days, long tables,', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_57', 'and the scent of the land', array( 'multiline' => false ) ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.home.text_58', 'From the whitewashed lanes of Conversano to the trulli of the Itria Valley and the turquoise coast — everything you love about Puglia begins beyond the masseria\'s walls.', array( 'multiline' => true ) ); ?></p>
  </div>
</section>

<!-- ============ FEATURE ROWS ============ -->
<section class="sbtw-feature sbtw-pad" data-screen-label="Weddings & Experience">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col" id="weddings">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.home.gallery_24.0', sbt_t1_asset( 'assets/images/salone-volte.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_25.0', sbt_t1_asset( 'assets/images/great-hall.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_26.0', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_27.0', sbt_t1_asset( 'assets/images/pool-pergola.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_28.0', sbt_t1_asset( 'assets/images/masseria-night.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.home.text_59', 'Masseria Le Cerase', array( 'multiline' => false ) ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.home.text_60', 'Weddings &amp; Events', array( 'multiline' => false ) ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.text_61', 'An exclusive setting for the most important day. Exchange your vows in the olive garden, dine beneath the stone vaults of the Salone delle Volte, and celebrate along the lantern-lit avenue — the whole estate reserved for you and your guests.', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_6', 'weddings.php' ) ) ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'C.home.text_62', 'Discover Weddings', array( 'multiline' => false ) ); ?></a>
      </div>
    </div>
    <div class="sbtw-two-col" id="experience">
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.home.text_63', 'Masseria Le Cerase', array( 'multiline' => false ) ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.home.text_64', 'Apulian Experience', array( 'multiline' => false ) ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.text_65', 'We craft tailor-made experiences for each guest, shaped around your wishes — from cooking classes and olive-oil and wine tastings to private tours of the surrounding wonders of Puglia.', array( 'multiline' => true ) ); ?></p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_7', 'experiences.php' ) ) ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'C.home.text_66', 'Explore experiences', array( 'multiline' => false ) ); ?></a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php echo sbt_t1_img( 'C.home.gallery_29.0', sbt_t1_asset( 'assets/images/kitchen-dining.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_30.0', sbt_t1_asset( 'assets/images/lounge-dining.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_31.0', sbt_t1_asset( 'assets/images/facade-flowers.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_32.0', sbt_t1_asset( 'assets/images/aerial-garden.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
          <?php echo sbt_t1_img( 'C.home.gallery_33.0', sbt_t1_asset( 'assets/images/lounge-vault.jpg' ), '', array( 'data-lightbox' => '' ) ); ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STAY CTA BAND ============ -->
<section class="sbtw-cta-band" id="house-cta" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Stay CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.text_67', 'The whole masseria awaits', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.home.text_68', 'Your stay at', array( 'multiline' => false ) ); ?><br/><?php echo sbt_t1_text( 'C.home.text_69', 'Masseria Le Cerase', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.home.link_8', 'whole-masseria.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.text_70', 'Discover the stay', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
